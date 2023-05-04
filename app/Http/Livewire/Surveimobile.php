<?php

namespace App\Http\Livewire;

use App\Jobs\HasilsurveiJob;

use App\Models\Datasurvei;
use App\Models\Respondence;
use App\Models\Sugestion;
use App\Models\Twandyear;

use Livewire\Component;

class Surveimobile extends Component
{

    public $currentStep = 1;
    public $nama, $badan_usaha, $jk, $pekerjaan, $domisili, $email, $p1_, $p2_, $p3_, $p4_,$p5_, $p6_,$p7_, $p8_,$p9_, $saran, $tw;
    public $saran1, $saran2, $saran3, $saran4, $saran5, $saran6, $saran7, $saran8, $saran9; 
    public $successMessage = '';

    public function datadiriklik(){
           $this->currentStep = 1;
    }

    // private $apikey = 'bdfeb6d05d5431688faf8fe3a04dd962-bdb2c8b4-eb90d1c6';

    public function datadiri(){
        $validatedData = $this->validate([
            'nama' => 'required|max:255',
            'badan_usaha' => 'required|max:255',
            'pekerjaan' => 'required',
            'jk' => 'required',
            'domisili' => 'required|max:255',
            'email' => 'required|email|max:255',
           
        ], [

        'nama.required' => 'Kolom Nama Wajib Diisi',
        'badan_usaha.required' => 'Kolom Badan Usaha Wajib Diisi',
        'pekerjaan.required' => 'Kolom Pekerjaan Wajib Diisi',
        'jk.required' => 'Kolom Jenis Kelamin Wajib Diisi',
        'domisili.required' => 'Kolom Kota/Kabupaten Domisili Wajib Diisi',
        'email.required' => 'Kolom Email Wajib Diisi',
        'email.email' => 'Mohon Masukan Alamat Email Anda Dengan Benar',
        'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'

        ]);
        
        $this->currentStep = 2;
    }

    public function u1(){
        $validatedData = $this->validate([
            'p1_' => 'required',
            'p2_' => 'required',
            
            'saran1' => 'nullable|max:255',
            'saran2' => 'nullable|max:255',
            
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'
            ]);
 
        $this->currentStep = 3;
    }

    public function u2(){
        $validatedData = $this->validate([
            'p3_' => 'required',
            'p4_' => 'required',
            'p5_' => 'required',
            'saran3' => 'nullable|max:255',
            'saran4' => 'nullable|max:255',
            'saran5' => 'nullable|max:255',
            
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'
            ]);
 
        $this->currentStep = 4;
    }

    public function u3(){
        $validatedData = $this->validate([
            'p6_' => 'required',
            'p7_' => 'required',
            'p8_' => 'required',
            'saran6' => 'nullable|max:255',
            'saran7' => 'nullable|max:255',
            'saran8' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)' 
            ]);
 
        $this->currentStep = 5;
    }

    public function u4(){
        $validatedData = $this->validate([
            
            'p9_' => 'required',
            
            'saran9' => 'nullable|max:255',

        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)' 
            ]);
 
        $this->currentStep = 6;
    }

    public function saran(){
        $validatedData = $this->validate([
            'saran' => 'nullable'
        ]);
 
        $this->currentStep = 7;
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
        $survei->total = $this->p1_ + $this->p2_ + $this->p3_ + $this->p4_ + $this->p5_ + $this->p6_ + $this->p7_
        + $this->p8_ + $this->p9_;
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

        $sugestion = New Sugestion();
        $sugestion->datasurvei_id = $survei->id;
        $sugestion->saran_1 = $this->saran1;
        $sugestion->saran_2 = $this->saran2;
        $sugestion->saran_3 = $this->saran3;
        $sugestion->saran_4 = $this->saran4;
        $sugestion->saran_5 = $this->saran5;
        $sugestion->saran_6 = $this->saran6;
        $sugestion->saran_7 = $this->saran7;
        $sugestion->saran_8 = $this->saran8;
        $sugestion->saran_9 = $this->saran9;
        $sugestion->save();


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
        
        $this->saran = '';
        $this->saran1 = '';
        $this->saran2 = '';
        $this->saran3 = '';
        $this->saran4 = '';
        $this->saran5 = '';
        $this->saran6 = '';
        $this->saran7 = '';
        $this->saran8 = '';
        $this->saran9 = '';

    }


    public function render()
    {
        return view('livewire.surveimobile');
    }
}
