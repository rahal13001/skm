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
    public $nama, $badan_usaha, $jk, $pekerjaan, $domisili, $email, $p1_, $p2_, $p3_, $p4_,$p5_, $p6_,$p7_, $p8_,$p9_, $saran, $tw, $id_survei, $tahun;
    public $currentStep = 1;
    public $saran1, $saran2, $saran3, $saran4, $saran5, $saran6, $saran7, $saran8, $saran9; 
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
        'tw' => $this->tw,  
        'total' => $this->p1_ + $this->p2_ + $this->p3_ + $this->p4_ + $this->p5_ + $this->p6_ + $this->p7_
        + $this->p8_ + $this->p9_,
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
   
    ]);

    //  $this->successMessage = 'Data Berhasil di Edit';

     $this->currentStep = 1;
 }

    public function render()
    {        
        // $datasurvei = Datasurvei::with('respondence')->whereKey($this->datasurvei)->first();
    
        return view('livewire.detailsurvei');
    }
}
