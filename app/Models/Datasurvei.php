<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Datasurvei extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function respondence(){
        return $this->hasOne(Respondence::class);
    }

 
    public function scopeCari($query, $term){
        $term = "%$term%";


        $query->whereHas('respondence', function($nama) use ($term){
            $nama->where('nama', 'like', $term);
        })->orWhereHas('respondence', function($badan_usaha) use ($term){
            $badan_usaha->where('badan_usaha', 'like', $term);
        })->orWhere('total','like', $term)
        ->orWhere('tw', 'like', $term)
        ->orWhere('tahun', 'like', $term);
    }



}
