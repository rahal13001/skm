<?php

namespace App\Http\Livewire;

use App\Jobs\HasilsurveiJob;
use App\Mail\HasilsurveiEmail;
use App\Models\Datasurvei;
use App\Models\Respondence;
use App\Models\Twandyear;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;


use function PHPSTORM_META\type;

class Survei extends Component
{

    public $currentStep = 1;
    public $nama, $badan_usaha, $jk, $pekerjaan, $domisili, $email, $p1_, $p2_, $p3_, $p4_,$p5_, $p6_,$p7_, $p8_,$p9_, $p10_, $p11_, $p12_, $p13_, $p14_,$p15_, $p16_,$p17_, $p18_,$p19_, $p20_, $saran, $tw;
    public $successMessage = '';

    public function datadiriklik(){
           $this->currentStep = 1;
    }

    // private $apikey = 'bdfeb6d05d5431688faf8fe3a04dd962-bdb2c8b4-eb90d1c6';

    public function datadiri(){
        $validatedData = $this->validate([
            'nama' => 'required',
            'badan_usaha' => 'required',
            'pekerjaan' => 'required',
            'jk' => 'required',
            'domisili' => 'required',
            'email' => 'required|email',
        ], [

        'nama.required' => 'Kolom Nama Wajib Diisi',
        'badan_usaha.required' => 'Kolom Badan Usaha Wajib Diisi',
        'pekerjaan.required' => 'Kolom Pekerjaan Wajib Diisi',
        'jk.required' => 'Kolom Jenis Kelamin Wajib Diisi',
        'domisili.required' => 'Kolom Kota/Kabupaten Domisili Wajib Diisi',
        'email.required' => 'Kolom Email Wajib Diisi',
        'email.email' => 'Mohon Masukan Alamat Email Anda Dengan Benar',

        ]);
        
        $this->currentStep = 2;
    }

    public function u1(){
        $validatedData = $this->validate([
            'p1_' => 'required',
            'p2_' => 'required',
            'p3_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 3;
    }

    public function u2(){
        $validatedData = $this->validate([
            'p4_' => 'required',
            'p5_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 4;
    }

    public function u3(){
        $validatedData = $this->validate([
            'p6_' => 'required',
            'p7_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 5;
    }

    public function u4(){
        $validatedData = $this->validate([
            'p8_' => 'required',
            'p9_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 6;
    }

    public function u5(){
        $validatedData = $this->validate([
            'p10_' => 'required',
            'p11_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 7;
    }

    public function u6(){
        $validatedData = $this->validate([
            'p12_' => 'required',
            'p13_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 8;
    }

    public function u7(){
        $validatedData = $this->validate([

            'p14_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 9;
    }

    public function u8(){
        $validatedData = $this->validate([

            'p15_' => 'required',
            'p16_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 10;
    }
    
    public function u9(){
        $validatedData = $this->validate([

            'p17_' => 'required',
            'p18_' => 'required',
            'p19_' => 'required',
            'p20_' => 'required',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            ]);
 
        $this->currentStep = 11;
    }


    public function saran(){
        $validatedData = $this->validate([
            'saran' => 'nullable'
        ]);
 
        $this->currentStep = 6;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }

    public function submit()
    {        
        $tw = Twandyear::where('id','1')->first();

        $survei = New Datasurvei();
        $survei->tw = $tw->tw;
        $survei->tahun = $tw->tahun;
        $survei->p1_ = $this->p1_;
        $survei->p2_ = $this->p2_;
        $survei->p3_ = $this->p3_;
        $survei->p4_ = $this->p4_;
        $survei->p5_ = $this->p5_;
        $survei->p6_ = $this->p6_;
        $survei->p7_ = $this->p7_;
        $survei->p8_ = $this->p8_;
        $survei->p9_ = $this->p9_;
        $survei->p10_ = $this->p10_;
        $survei->p11_ = $this->p11_;
        $survei->p12_ = $this->p12_;
        $survei->p13_ = $this->p13_;
        $survei->p14_ = $this->p14_;
        $survei->p15_ = $this->p15_;
        $survei->p16_ = $this->p16_;
        $survei->p17_ = $this->p17_;
        $survei->p18_ = $this->p18_;
        $survei->p19_ = $this->p19_;
        $survei->p20_ = $this->p20_;
        $survei->total = $this->p1_ + $this->p2_ + $this->p3_ + $this->p4_ + $this->p5_ + $this->p6_ + $this->p7_
        + $this->p8_ + $this->p9_ + $this->p8_ + $this->p9_+ $this->p10_ + $this->p11_+ $this->p12_ + $this->p13_+ $this->p14_
        + $this->p15_+ $this->p16_ + $this->p17_+ $this->p18_ + $this->p19_+ $this->p20_;
        $survei->saran = $this->saran;
        $survei->save();

        $respondence = New Respondence();
        $respondence->datasurvei_id = $survei->id;
        $respondence->nama = $this->nama;
        $respondence->badan_usaha = $this->badan_usaha;
        $respondence->jk = $this->jk;
        $respondence->domisili = $this->domisili;
        $respondence->email = $this->email;
        $respondence->pekerjaan = $this->pekerjaan;
        $respondence->save();


        $this->dispatchBrowserEvent('swal:modal', [
            'icon' => 'success',
            'title' => 'Data Berhasil Terekam',
            'text' => 'Terimakasih Telah Berpartisipasi, Cek Email Anda Untuk Melihat Hasil Survei',
            'timer' => 5000,
            'timerProgressBar' => true,
        ]);

        $this->clearForm();
        $this->currentStep = 1;

        $datasurvei = Datasurvei::with('respondence')->whereKey($survei->id)->first();
          
        // MAIL::to($datasurvei->respondence->email)->send(new HasilsurveiEmail($datasurvei));
        dispatch(new HasilsurveiJob($datasurvei));
    }

    public function clearForm()
    {
        $this->nama = '';
        $this->domisili = '';
        $this->jk = '';
        $this->email = '';
        $this->badan_usaha = '';
        $this->pekerjaan = '';
        $this->p1_ = '';
        $this->p2_ = '';
        $this->p3_ = '';
        $this->p4_ = '';
        $this->p5_ = '';
        $this->p6_ = '';
        $this->p7_ = '';
        $this->p8_ = '';
        $this->p9_ = '';
        $this->p10_ = '';
        $this->p11_ = '';
        $this->p12_ = '';
        $this->p13_ = '';
        $this->p14_ = '';
        $this->p15_ = '';
        $this->p16_ = '';
        $this->p17_ = '';
        $this->p18_ = '';
        $this->p19_ = '';
        $this->p20_ = '';
        $this->saran_ = '';

    }

    
    public function render()
    {
        return view('livewire.survei');
    }

}
