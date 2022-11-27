<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Detailsurvei;
use App\Models\Datasurvei;
use Illuminate\Http\Request;

class DatasurveisController extends Controller
{
    public function detail(Datasurvei $datasurvei){
    //    
        return view('admin.detail', compact('datasurvei'));
    }
}
