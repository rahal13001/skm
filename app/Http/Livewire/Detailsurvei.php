<?php

namespace App\Http\Livewire;

use App\Models\Datasurvei;
use Livewire\Component;

class Detailsurvei extends Component
{
    protected $datasurvei;


    // public function __get($datasurvei)
    // {
    //     $this->datasurvei = $datasurvei;
    //     dd($this->datasurvei);
    // } 

    public function render()
    {
        
        $datasurvei = Datasurvei::with('respondence')->whereKey($this->datasurvei)->get();
        return view('livewire.detailsurvei', compact('datasurvei'));
    }
}
