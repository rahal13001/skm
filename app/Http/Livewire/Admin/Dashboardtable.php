<?php

namespace App\Http\Livewire\Admin;

use App\Exports\SurveisExport;
use App\Models\Datasurvei;
use App\Models\Respondence;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboardtable extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $paginate = 10;

    public $darithn = 1900;
    public $kethn = 2030;
    public $daritw = 1;
    public $ketw = 4;
    public $resetthn;
    public $checked = [];
    public $cari = "";
    public $drnilai = "";
    public $kenilai = "";
    public $orderby = "id";
    public $asc = "ASC";
    public $selectPage= false;
    public $selectAll=false;
 


    public function drnilai(){
        $validatedData = $this->validate([
            'drnilai_' => 'max:100|numeric',
        ], [
            'max' => 'Nilai Maksimal Adalah 100', 
            'numeric' => 'Hanya Dapat Memasukan Angka', 
            ]);
    }

    public function kenilai(){
        $validatedData = $this->validate([
            'kenilai_' => 'max:100|numeric',
        ], [
            'max' => 'Nilai Maksimal Adalah 100',
            'numeric' => 'Hanya Dapat Memasukan Angka',  
            ]);
    }


    public function isChecked($datasurvei_id)
    {
        return in_array($datasurvei_id, $this->checked);
    }

    public function deleteDatas()
    {
        Datasurvei::with('respondence')->whereKey($this->checked)->delete();

        $this->checked = [];
        $this->selectAll=false;
        $this->selectPage=false;
        session()->flash('info','Data Berhasil Terhapus');
    }


    public function deleteSatuData($datasurvei_id){
        
        Datasurvei::with('respondence')->where('id', $datasurvei_id)->delete();

        $this->checked = array_diff($this->checked, [$datasurvei_id]);
        session()->flash('info','Data Berhasil Terhapus');
    }

    public function eksporexcel(){
        return (new SurveisExport($this->checked))->download('skm.xlsx');
    }

    public function render()
    { 
       
 
        return view('livewire.admin.dashboardtable', [
            'datasurveis' => $this->datasurveis
        ]);
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->datasurveis->pluck('id')->toArray();
        } else {
            $this->checked = [];
        }
        
    }

    public function updatedChecked(){
        $this->selectPage =false;
    }

    public function selectAll(){
        $this->selectAll=true;
        $this->checked = $this->dataSurveisQuery->pluck('id')->toArray();
    }

    public function selectPart(){
        $this->selectAll=false;
        $this->checked = $this->datasurveis->pluck('id')->toArray();
    }

    public function getDataSurveisProperty(){
        return $this->dataSurveisQuery->paginate($this->paginate);
    }

    public function getDataSurveisQueryProperty(){
        return Datasurvei::select(['datasurveis.*', 'respondences.nama as nama', 'respondences.badan_usaha as badan_usaha'])
        ->join('respondences', 'respondences.datasurvei_id', '=', 'datasurveis.id')
        ->cari(trim($this->cari))
        ->whereBetween('tahun', [trim($this->darithn), trim($this->kethn)])
        ->whereBetween('tw', [trim($this->daritw), trim($this->ketw)])
        ->when($this->drnilai && $this->kenilai, function($query){
            $query->whereBetween('total', [trim($this->drnilai), trim($this->kenilai)]);})
        ->orderBy($this->orderby, $this->asc);

    }

}
