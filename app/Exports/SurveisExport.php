<?php

namespace App\Exports;

use App\Models\Datasurvei;


use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

// WithHeadings, WithMapping, WithStyles

class SurveisExport implements FromQuery, WithHeadings, WithStyles, ShouldAutoSize, WithMapping, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $checked;


    public function __construct($checked)
    {
        $this->checked = $checked;
    }

    public function query()
    {
      
       return Datasurvei::with('respondence')->whereKey($this->checked);

        // select(['datasurveis.*', 'respondences.nama as nama',
        // 'respondences.badan_usaha as badan_usaha', 'respondences.email as email', 'respondences.jk as jk', 'respondences.pekerjaan as pekerjaan',
        // 'respondences.domisili as domisili'])
    }

    public function map($query): array
    {
        $isi = [
            $query->respondence->nama,
            $query->respondence->badan_usaha,
            $query->respondence->jk,
            $query->respondence->pekerjaan,
            $query->respondence->domisili,
            $query->respondence->email,
            $query->p1_,
            $query->p2_,
            $query->p3_,
            $query->p4_,
            $query->p5_,
            $query->p6_,
            $query->p7_,
            $query->p8_,
            $query->p9_,
            $query->p10_,
            $query->p11_,
            $query->p12_,
            $query->p13_,
            $query->p14_,
            $query->p15_,
            $query->p16_,
            $query->p17_,
            $query->p18_,
            $query->p19_,
            $query->p20_,
            $query->total,
            $query->saran

        ];

        return $isi;
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Badan Usasha',
            'Jenis Kelamin',
            'Pekerjaan',
            'Domisili',
            'Email',
            'P1',
            'P2',
            'P3',
            'P4',
            'P5',
            'P6',
            'P7',
            'P8',
            'P9',
            'P10',
            'P11',
            'P12',
            'P13',
            'P14',
            'P15',
            'P16',
            'P17',
            'P18',
            'P19',
            'P20',
            'Total',
            'Saran',            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]]
        ];
    }

    public function columnWidths(): array
    {
        return [
            //Nama
            'A' => 25,
            //Badan Usaha
            'B' => 25,
            //Jenis Kelamin
            'C' => 12,
            //Pekerjaan
            'D' => 25,
            //Domisili
            'E' => 30,
            //Email
            'F' => 35,
            //P1
            'G' => 10,
            //P2
            'H' => 10,
             //P3
            'I' => 10,
             //P4
            'J' => 10,
             //P5
            'K' => 10,
             //P6
            'L' => 10,
            //P7
            'M' => 10,
            //P8
            'N' => 10,
            //P9
            'O' => 10,
            //P10
            'P' => 10,
            //P11
            'Q' => 10,
            //P12
            'R' => 10,
             //P13
            'S' => 10,
             //P14
            'T' => 10,
            //P15
            'U' => 10,
            //P16
            'V' => 10,
            //P17
            'W' => 10,
            //P18
            'X' => 10,
            //P19
            'Y' => 10,
            //P20
            'Z' => 10,
            //Total
            'AA' => 10,
            //Saran
            'AB' => 50
        ];
    }



}
