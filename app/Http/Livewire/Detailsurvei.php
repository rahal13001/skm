<?php

namespace App\Http\Livewire;

use App\Models\Datasurvei;
use App\Models\Respondence;
use App\Models\Sugestion;
use App\Models\Twandyear;
use Livewire\Component;

use function PHPUnit\Framework\isNull;

class Detailsurvei extends Component
{
    public $nama, $badan_usaha, $jk, $pekerjaan, $domisili, $email, $p1_, $p2_, $p3_, $p4_,$p5_, $p6_,$p7_, $p8_,$p9_, $p10_, $p11_, $p12_, $p13_, $p14_,$p15_, $p16_,$p17_, $p18_,$p19_, $p20_, $saran, $tw;
    public $currentStep = 1;
    public $saran1, $saran2, $saran3, $saran4, $saran5, $saran6, $saran7, $saran8, $saran9, $saran10, $saran11, $saran12, $saran13, $saran14,
    $saran15, $saran16, $saran17, $saran18 ,$saran19, $saran20; 
    public $edit_toggle;

    public function mount($datasurvei)
    {
        $this->id_survei = $datasurvei->id;

        $this->nama = $datasurvei->respondence->nama;
        $this->badan_usaha = $datasurvei->respondence->badan_usaha;
        $this->jk = $datasurvei->respondence->jk;
        $this->pekerjaan = $datasurvei->respondence->pekerjaan;
        $this->domisili = $datasurvei->respondence->domisili;
        $this->email = $datasurvei->respondence->email;
        $this->p1_ = $datasurvei->p1_;
        $this->p2_ = $datasurvei->p2_;
        $this->p3_ = $datasurvei->p3_;
        $this->p4_ = $datasurvei->p4_;
        $this->p5_ = $datasurvei->p5_;
        $this->p6_ = $datasurvei->p6_;
        $this->p7_ = $datasurvei->p7_;
        $this->p8_ = $datasurvei->p8_;
        $this->p9_ = $datasurvei->p9_;
        $this->p10_ = $datasurvei->p10_;
        $this->p11_ = $datasurvei->p11_;
        $this->p12_ = $datasurvei->p12_;
        $this->p13_ = $datasurvei->p13_;
        $this->p14_ = $datasurvei->p14_;
        $this->p15_ = $datasurvei->p15_;
        $this->p16_ = $datasurvei->p16_;
        $this->p17_ = $datasurvei->p17_;
        $this->p18_ = $datasurvei->p18_;
        $this->p19_ = $datasurvei->p19_;
        $this->p20_ = $datasurvei->p20_;
        $this->tw = $datasurvei->tw;
        $this->tahun = $datasurvei->tahun;
        $this->saran = $datasurvei->saran;
        if (!empty($datasurvei->sugestion->saran_1))
        {
            $this->saran1 = $datasurvei->sugestion->saran_1;
        }
        if (!empty($datasurvei->sugestion->saran_2))
        {
            $this->saran2 = $datasurvei->sugestion->saran_2;
        }
        if (!empty($datasurvei->sugestion->saran_3))
        {
            $this->saran3 = $datasurvei->sugestion->saran_3;
        }
        if (!empty($datasurvei->sugestion->saran_4))
        {
            $this->saran4 = $datasurvei->sugestion->saran_4;
        }
        if (!empty($datasurvei->sugestion->saran_5))
        {
            $this->saran5 = $datasurvei->sugestion->saran_5;
        }
        if (!empty($datasurvei->sugestion->saran_6))
        {
            $this->saran6 = $datasurvei->sugestion->saran_6;
        }
        if (!empty($datasurvei->sugestion->saran_7))
        {
            $this->saran7 = $datasurvei->sugestion->saran_7;
        }
        if (!empty($datasurvei->sugestion->saran_8))
        {
            $this->saran8 = $datasurvei->sugestion->saran_8;
        }
        if (!empty($datasurvei->sugestion->saran_9))
        {
            $this->saran9 = $datasurvei->sugestion->saran_9;
        }
        if (!empty($datasurvei->sugestion->saran_10))
        {
            $this->saran10 = $datasurvei->sugestion->saran_10;
        }
        if (!empty($datasurvei->sugestion->saran_11))
        {
            $this->saran11 = $datasurvei->sugestion->saran_11;
        }
        if (!empty($datasurvei->sugestion->saran_12))
        {
            $this->saran12 = $datasurvei->sugestion->saran_12;
        }
        if (!empty($datasurvei->sugestion->saran_13))
        {
            $this->saran13 = $datasurvei->sugestion->saran_13;
        }
        if (!empty($datasurvei->sugestion->saran_14))
        {
            $this->saran14 = $datasurvei->sugestion->saran_14;
        }
        if (!empty($datasurvei->sugestion->saran_15))
        {
            $this->saran15 = $datasurvei->sugestion->saran_15;
        }
        if (!empty($datasurvei->sugestion->saran_16))
        {
            $this->saran16 = $datasurvei->sugestion->saran_16;
        }
        if (!empty($datasurvei->sugestion->saran_17))
        {
            $this->saran17 = $datasurvei->sugestion->saran_17;
        }
        if (!empty($datasurvei->sugestion->saran_18))
        {
            $this->saran18 = $datasurvei->sugestion->saran_18;
        }
        if (!empty($datasurvei->sugestion->saran_19))
        {
            $this->saran19 = $datasurvei->sugestion->saran_19;
        }
        if (!empty($datasurvei->sugestion->saran_20))
        {
            $this->saran20 = $datasurvei->sugestion->saran_20;
        }           
    }

    public function edit_toggle(){
        return $this->edit_toggle;
    }

    public function datadiriklik(){
        $this->currentStep = 1;
    }

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

     Datasurvei::whereKey($this->id_survei)->update([
        'p1_' => $this->p1_,
        'p2_' => $this->p2_,
        'p3_' => $this->p3_,
        'p4_' => $this->p4_,
        'p5_' => $this->p5_,
        'p6_' => $this->p6_,
        'p7_' => $this->p7_,
        'p8_' => $this->p8_,
        'p9_' => $this->p9_,
        'p10_' => $this->p10_,
        'p11_' => $this->p11_,
        'p12_' => $this->p12_,
        'p13_' => $this->p13_,
        'p14_' => $this->p14_,
        'p15_' => $this->p15_,
        'p16_' => $this->p16_,
        'p17_' => $this->p17_,
        'p18_' => $this->p18_,
        'p19_' => $this->p19_,
        'p20_' => $this->p20_,  
        'tw' => $this->tw,  
        'total' => $this->p1_ + $this->p2_ + $this->p3_ + $this->p4_ + $this->p5_ + $this->p6_ + $this->p7_
        + $this->p8_ + $this->p9_ + $this->p8_ + $this->p9_+ $this->p10_ + $this->p11_+ $this->p12_ + $this->p13_+ $this->p14_
        + $this->p15_+ $this->p16_ + $this->p17_+ $this->p18_ + $this->p19_+ $this->p20_,
        'tahun' => $this->tahun,  
        'saran' => $this->saran,  
     ]);


     Respondence::where('datasurvei_id', $this->id_survei)->update([
        'nama' => $this->nama,
        'badan_usaha' => $this->badan_usaha,
        'jk' => $this->jk,
        'domisili' => $this->domisili,
        'email' => $this->email,
        'pekerjaan' => $this->pekerjaan,
        'datasurvei_id' => $this->id_survei,
     ]);
     
     Sugestion::where('datasurvei_id', $this->id_survei)->update([
        'saran_1' => $this->saran1,
        'saran_2' => $this->saran2,
        'saran_3' => $this->saran3,
        'saran_4' => $this->saran4,
        'saran_5' => $this->saran5,
        'saran_6' => $this->saran6,
        'saran_7' => $this->saran7,
        'saran_9' => $this->saran9,
        'saran_10' => $this->saran10,
        'saran_11' => $this->saran11,
        'saran_12' => $this->saran12,
        'saran_14' => $this->saran14,
        'saran_15' => $this->saran15,
        'saran_16' => $this->saran16,
        'saran_17' => $this->saran17,
        'saran_18' => $this->saran18,
        'saran_19' => $this->saran19,
        'saran_20' => $this->saran20
    ]);

     $this->successMessage = 'Data Berhasil di Edit';

     $this->currentStep = 1;
 }

    public function render()
    {        
        // $datasurvei = Datasurvei::with('respondence')->whereKey($this->datasurvei)->first();
    
        return view('livewire.detailsurvei');
    }
}
