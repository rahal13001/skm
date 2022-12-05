<?php

namespace App\Http\Livewire\Admin;

use App\Models\Twandyear;
use Livewire\Component;

class Twdantahun extends Component
{

    public $tw, $tahun;

    public function mount($twdantahun)
    {
        $this->id_twdantahun = $twdantahun->id;
        $this->tw = $twdantahun->tw;
        $this->tahun = $twdantahun->tahun;
    }

    public function submit(){
        $validatedData = $this->validate([
            'tw' => 'required',
            'tahun' => 'required|numeric|digits:4',
        ], [
        'tw.required' => 'Kolom Triwulan Wajib Diisi',
        'tahun.required' => 'Kolom Tahun Wajib Diisi',
        'tahun.numeric' => 'Isikan Angka Tahun misal : 2022',
        'tahun.digits' => 'Isikan 4 Digit Angka Tahun Misal : 2022',

        ]);

        
        Twandyear::whereKey($this->id_twdantahun)->update([
            'tw' => $this->tw,
            'tahun' => $this->tahun,
        ]);

        $this->dispatchBrowserEvent('swal:modal', [
            'icon' => 'success',
            'title' => 'Update Berhasil !!!',
            'text' => 'Triwulan dan Tahun Telah di Perbarui',
            'timer' => 5000,
            'timerProgressBar' => true,
        ]);


    }
    public function render()
    {
        return view('livewire.admin.twdantahun');
    }
}
