<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Detailsurvei;
use App\Models\Datasurvei;
use Illuminate\Http\Request;

class DatasurveisController extends Controller
{
    public function detail(Datasurvei $datasurvei){
    //    $datasurvei = Datasurvei::with('respondence')->where('id', $datasurvei->id)->first();
        return view('admin.detail', compact('datasurvei'));
    }
}
