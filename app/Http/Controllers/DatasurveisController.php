<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Detailsurvei;
use App\Models\Datasurvei;
use App\Models\Twandyear;
// use Barryvdh\DomPDF\Facade as PDF;
use \PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DatasurveisController extends Controller
{
    public function detail(Datasurvei $datasurvei){
    //    
        return view('admin.detail', compact('datasurvei'));
    }

    public function pdf($id){
        $datasurvei = Datasurvei::with('respondence')->whereKey($id)->first();
        $q_report = base64_encode(QrCode::size(100)->generate('http://skm.timurbersinar.com/pdf/'.$datasurvei->id.'/'.$datasurvei->respondence->nama));

        $pdf = PDF::loadView('pdf.pdf', compact('datasurvei', 'q_report'))->setPaper('a4');
        return $pdf->stream($datasurvei->nama.'_'.$datasurvei->badan_usaha.'.pdf');
    }

    public function pdfuser($dataid){
        $datasurvei = Datasurvei::with('respondence')->whereKey($dataid)->first();
        $q_report = base64_encode(QrCode::size(100)->generate('http://skm.timurbersinar.com/pdf/'.$datasurvei->id.'/'.$datasurvei->respondence->nama));

        $pdf = PDF::loadView('pdf.pdf', compact('datasurvei', 'q_report'))->setPaper('a4');
        return $pdf->stream($datasurvei->nama.'_'.$datasurvei->badan_usaha.'.pdf');
    }

    public function twdantahun(){
        $twdantahun = Twandyear::first();
        return view('admin.twdantahun', compact('twdantahun'));
    }
}
