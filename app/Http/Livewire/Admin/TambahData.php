<?php

namespace App\Http\Livewire\Admin;

use App\Models\Datasurvei;
use App\Models\Respondence;
use App\Models\Sugestion;
use App\Models\Twandyear;
use Livewire\Component;

class TambahData extends Component
{
    
    public $currentStep = 1;
    public $nama, $badan_usaha, $jk, $pekerjaan, $domisili, $email, $p1_, $p2_, $p3_,
    $p4_,$p5_, $p6_,$p7_, $p8_,$p9_, $p10_, $p11_, $p12_, $p13_, $p14_,$p15_,
    $p16_,$p17_, $p18_,$p19_, $p20_, $saran, $tw, $tahun;
    public $successMessage = '';
    public $saran1, $saran2, $saran3, $saran4, $saran5, $saran6, $saran7, $saran8, $saran9, $saran10, $saran11, $saran12, $saran13, $saran14,
    $saran15, $saran16, $saran17, $saran18 ,$saran19, $saran20; 

    public function datadiriklik(){
           $this->currentStep = 1;
    }

    public function datadiri(){
        $validatedData = $this->validate([
            'nama' => 'required',
            'badan_usaha' => 'required',
            'pekerjaan' => 'required',
            'jk' => 'required',
            'domisili' => 'required',
            'email' => 'required|email',
            'tw' => 'required',
            'tahun' => 'required|numeric|digits:4',
        ], [

        'nama.required' => 'Kolom Nama Wajib Diisi',
        'badan_usaha.required' => 'Kolom Badan Usaha Wajib Diisi',
        'pekerjaan.required' => 'Kolom Pekerjaan Wajib Diisi',
        'jk.required' => 'Kolom Jenis Kelamin Wajib Diisi',
        'domisili.required' => 'Kolom Kota/Kabupaten Domisili Wajib Diisi',
        'email.required' => 'Kolom Email Wajib Diisi',
        'email.email' => 'Mohon Masukan Alamat Email Anda Dengan Benar',
        'tw.required' => 'Kolom Triwulan Wajib Diisi',
        'tahun.required' => 'Kolom Tahun Wajib Diisi',
        'tahun.numeric' => 'Isikan Angka Tahun misal : 2022',
        'tahun.digits' => 'Isikan 4 Digit Angka Tahun Misal : 2022',

        ]);
        
        $this->currentStep = 2;
    }

    public function u1(){
        $validatedData = $this->validate([
            'p1_' => 'required',
            'p2_' => 'required',
            'p3_' => 'required',
            'saran1' => 'nullable|max:255',
            'saran2' => 'nullable|max:255',
            'saran3' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini', 
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'
            ]);
 
        $this->currentStep = 3;
    }

    public function u2(){
        $validatedData = $this->validate([
            'p4_' => 'required',
            'p5_' => 'required',
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
            'saran6' => 'nullable|max:255',
            'saran7' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)' 
            ]);
 
        $this->currentStep = 5;
    }

    public function u4(){
        $validatedData = $this->validate([
            'p8_' => 'required',
            'p9_' => 'required',
            'saran8' => 'nullable|max:255',
            'saran9' => 'nullable|max:255',

        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)' 
            ]);
 
        $this->currentStep = 6;
    }

    public function u5(){
        $validatedData = $this->validate([
            'p10_' => 'required',
            'p11_' => 'required',
            'saran10' => 'nullable|max:255',
            'saran11' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'  
            ]);
 
        $this->currentStep = 7;
    }

    public function u6(){
        $validatedData = $this->validate([
            'p12_' => 'required',
            'p13_' => 'required',
            'saran12' => 'nullable|max:255',
            'saran13' => 'nullable|max:255',

        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'  
            ]);
 
        $this->currentStep = 8;
    }

    public function u7(){
        $validatedData = $this->validate([

            'p14_' => 'required',
            'saran14' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'   
            ]);
 
        $this->currentStep = 9;
    }

    public function u8(){
        $validatedData = $this->validate([

            'p15_' => 'required',
            'p16_' => 'required',
            'saran15' => 'nullable|max:255',
            'saran16' => 'nullable|max:255',

        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'   
            ]);
 
        $this->currentStep = 10;
    }
    
    public function u9(){
        $validatedData = $this->validate([

            'p17_' => 'required',
            'p18_' => 'required',
            'p19_' => 'required',
            'p20_' => 'required',
            'saran17' => 'nullable|max:255',
            'saran18' => 'nullable|max:255',
            'saran19' => 'nullable|max:255',
            'saran20' => 'nullable|max:255',
        ], [
            'required' => 'Harap Jawab Pertanyaan Ini',
            'max' => 'Jumlah Karakter Maksimal Adalah 255 Karaker (Termasuk Spasi)'   
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
        $sugestion->saran_10 = $this->saran10;
        $sugestion->saran_11 = $this->saran11;
        $sugestion->saran_11 = $this->saran10;
        $sugestion->saran_12 = $this->saran12;
        $sugestion->saran_13 = $this->saran13;
        $sugestion->saran_14 = $this->saran14;
        $sugestion->saran_15 = $this->saran15;
        $sugestion->saran_16 = $this->saran16;
        $sugestion->saran_17 = $this->saran17;
        $sugestion->saran_18 = $this->saran18;
        $sugestion->saran_19 = $this->saran19;
        $sugestion->saran_20 = $this->saran20;
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
        $this->saran1 = '';
        $this->saran2 = '';
        $this->saran3 = '';
        $this->saran4 = '';
        $this->saran5 = '';
        $this->saran6 = '';
        $this->saran7 = '';
        $this->saran8 = '';
        $this->saran9 = '';
        $this->saran10 = '';
        $this->saran11 = '';
        $this->saran10 = '';
        $this->saran12 = '';
        $this->saran13 = '';
        $this->saran14 = '';
        $this->saran15 = '';
        $this->saran16 = '';
        $this->saran17 = '';
        $this->saran18 = '';
        $this->saran19 = '';
        $this->saran20 = '';

    }

    
    public function render()
    {
        return view('livewire.admin.tambah-data');
    }
}
