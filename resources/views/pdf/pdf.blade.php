<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SKM TW 4 Tahun 2022</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pdf.css') }}">
</head>
<body>
    <div class="row">
        <img src="{{ asset('img/KOP.jpg') }}" alt="" srcset="" class="kop">
    </div>
    <div>
        <h2 class="judul"><b> Hasil Survei Kepuasan Masyarakat Triwulan {{ $datasurvei->tw }} Tahun {{ $datasurvei->tahun }}</b></h2>
    </div>
    <div>
            <table class="datadiri">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->nama }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->jk }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->pekerjaan }}</td>
                </tr>
                <tr>
                    <td>Badan Usaha</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->badan_usaha }}</td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->domisili }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $datasurvei->respondence->email }}</td>
                </tr>
            </table>
    </div>
    <div class="opening">
        <h2><b>Penilaian Kepuasan</b></h2>
    </div>
    <div class="u1">
        <p><b>Unsur 1 : Persyaratan Pelayanan</b><br>
            <br> 1.1. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan ?
            <br> <b>
                @if ($datasurvei->p1_ == 1)
                    Tidak Sesuai
                @elseif ($datasurvei->p1_==2)
                    Cukup Sesuai
                @elseif($datasurvei->p1_==3)
                    Sesuai
                @else
                    Sangat Sesuai
                @endif
            , Skor : {{ $datasurvei->p1_ }} </b><br>
            <br>
            1.2. Apakah informasi mengenai persyaratan pelayanan cukup tersedia baik di papan pengumuman, brosur atau sistem pelayanan online ?
            <br> <b>
                @if ($datasurvei->p2_ == 1)
                    Tidak Tersedia
                @elseif ($datasurvei->p2_==2)
                    Cukup Tersedia
                @elseif($datasurvei->p2_==3)
                    Tersedia
                @else
                    Sangat Tersedia
                @endif
                , Skor : {{ $datasurvei->p2_ }} </b> <br>
                <br>
            1.3. Apakah informasi tentang persyaratan pelayanan mudah dipahami ?
            <br> <b>
            @if ($datasurvei->p3_ == 1)
                Tidak Mudah
            @elseif ($datasurvei->p3_==2)
                Cukup Mudah
            @elseif($datasurvei->p3_==3)
                Mudah
            @else
                Sangat Mudah
            @endif
            , Skor : {{ $datasurvei->p3_ }} </b> <br>
        </p>
    </div>
    
    <div class="u2">
        <p><br><br>
            <b>Unsur 2 : Prosedur Pelayanan</b><br>
            <br>Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini ?<br>
            <b> 
                @if ($datasurvei->p4_ == 1)
                    Tidak Puas
                @elseif ($datasurvei->p4_==2)
                    Cukup Puas
                @elseif($datasurvei->p4_==3)
                    Puas
                @else
                    Sangat Puas
                @endif
                , Skor : {{ $datasurvei->p4_ }}
                </b><br><br>
            Apakah prosedur pengajuan permohonan sudah dijalankan sesuai SOP (Standar Operasional Prosedur) ?
            <br><b>
                @if ($datasurvei->p5_ == 1)
                Tidak Sesuai
            @elseif ($datasurvei->p5_==2)
                Cukup Sesuai
            @elseif($datasurvei->p5_==3)
                Sesuai
            @else
                Sangat Sesuai
            @endif
            , Skor : {{ $datasurvei->p5_ }}
            </b>
        </p>
    </div>
    <div class="page-break"></div>
    <div class="u3dan8">
        <p>
            <b>Unsur 3 : Kemampuan Petugas</b><br>
            <br>Bagaimana pendapat saudara tentang kompetensi atau kemampuan petugas dalam memberikan pelayanan ?
            <br>
            <b> 
                @if ($datasurvei->p6_ == 1)
                    Tidak Mampu
                @elseif ($datasurvei->p6_==2)
                    Cukup Mampu
                @elseif($datasurvei->p6_==3)
                    Mampu
                @else
                    Sangat Mampu
                @endif
                , Skor : {{ $datasurvei->p6_ }}
            </b><br><br>
            Apakah petugas memiliki kemampuan menjalankan prosedur kepada pelanggan ?
            <br><b>
                @if ($datasurvei->p7_ == 1)
                    Tidak Mampu
                @elseif ($datasurvei->p7_==2)
                    Cukup Mampu
                @elseif($datasurvei->p7_==3)
                    Mampu
                @else
                    Sangat Mampu
                @endif
                , Skor : {{ $datasurvei->p7_ }}
            </b>
        </p>
    </div>
    <div class="u4">
        <p>
            <b>Unsur 4 : Kecepatan Waktu Pelayanan</b><br>
            <br> Bagaimana pendapat saudara tetang kecepatan waktu pelayanan di unit ini ?
            <br>
            <b>
                @if ($datasurvei->p8_ == 1)
                    Tidak Mampu
                @elseif ($datasurvei->p8_==2)
                    Cukup Mampu
                @elseif($datasurvei->p8_==3)
                    Mampu
                @else
                    Sangat Mampu
                @endif
                , Skor : {{ $datasurvei->p8_ }}
            </b><br><br>
            Apakah informasi waktu operasional pelayanan dan penyeesaian pelayanan sudah sesuai dengan waktu yang sudah ditetapkan ?
            <br><b>
            @if ($datasurvei->p9_ == 1)
                Tidak Sesuai
            @elseif ($datasurvei->p9_==2)
                Cukup Sesuai
            @elseif($datasurvei->p9_==3)
                Sesuai
            @else
                Sangat Sesuai
            @endif
            , Skor : {{ $datasurvei->p9_ }}
            </b>
        </p>
    </div>
    <div class="u5">
        <p>
            <b>Unsur 5 : Produk Layanan</b><br>
            <br> Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?
            <br>
            <b>
            @if ($datasurvei->p10_ == 1)
                Tidak Sesuai
            @elseif ($datasurvei->p10_==2)
                Cukup Sesuai
            @elseif($datasurvei->p10_==3)
                Sesuai
            @else
                Sangat Sesuai
            @endif
            , Skor : {{ $datasurvei->p10_ }}
            </b><br><br>
            Apakah informasi tentang daftar produk layanan dapat diketahui dan diakses dengan baik ?
            <br><b>
                @if ($datasurvei->p11_ == 1)
                Tidak Baik
            @elseif ($datasurvei->p11_==2)
                Cukup Baik
            @elseif($datasurvei->p11_==3)
                Baik
            @else
                Sangat Baik
            @endif
            , Skor : {{ $datasurvei->p11_ }}
            </b>
        </p>
    </div>
    <div class="u6">
        <p>
            <b>Unsur 6 : Kesopanan dan Keramahan Petugas</b><br>
            <br> Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan ?
            <br>
            <b>
            @if ($datasurvei->p12_ == 1)
                Tidak Ramah dan Sopan
            @elseif ($datasurvei->p12_==2)
                Cukup Ramah dan Sopan
            @elseif($datasurvei->p12_==3)
                Ramah dan Sopan
            @else
                Sangat Ramah dan Sopan
            @endif
            , Skor : {{ $datasurvei->p12_ }}
            </b><br><br>
            Apakah petugas pelayanan memberikan penjelasan yang mudah dan tidak berbeli-belit ?
            <br><b>
            @if ($datasurvei->p13_ == 1)
                Tidak Mudah
            @elseif ($datasurvei->p13_==2)
                Cukup Mudah
            @elseif($datasurvei->p13_==3)
                Mudah
            @else
                Sangat Mudah
            @endif
            , Skor : {{ $datasurvei->p13_ }}
            </b>
        </p>
    </div>

    <div class="u7">
        <p>
            <b>Unsur 7 : Kewajaran Biaya</b><br>
            <br> Bagaimana pendapat saudara tentang biaya/tarif dalam pelayanan
            (Diluar PNBP) ?
            <br>
            <b>
            @if ($datasurvei->p14_ == 1)
                Tidak Murah
            @elseif ($datasurvei->p14_==2)
                Cukup Murah
            @elseif($datasurvei->p14_==3)
                Murah
            @else
                Sangat Murah
            @endif
            , Skor : {{ $datasurvei->p14_ }}
            </b>
        </p>
    </div>

    <div class="page-break"></div>
    <div class="u3dan8">
        <p>
            <b>Unsur 8 : Kualitas Sarana Dan Prasarana</b><br>
            <br> Bagaimana pendapat saudara tentang sarana dan prasarana pelayanan ?
            <br>
            <b>
            @if ($datasurvei->p15_ == 1)
                Tidak Baik
            @elseif ($datasurvei->p15_==2)
                Cukup Baik
            @elseif($datasurvei->p15_==3)
                Baik
            @else
                Sangat Baik
            @endif
            , Skor : {{ $datasurvei->p15_ }}
            </b><br><br>
            Apakah unit layanan seperti ruang tunggu, bahan bacaan, kotak saran/pengaduan, tv. lahan parkir, mushola, ruang menyusui berfungsi dengan baik ?
            <br><b>
            @if ($datasurvei->p16_ == 1)
                Tidak Baik
            @elseif ($datasurvei->p16_==2)
                Cukup Baik
            @elseif($datasurvei->p16_==3)
                Baik
            @else
                Sangat Baik
            @endif
            , Skor : {{ $datasurvei->p16_ }}
            </b>
        </p>
    </div>

    <div class="u9">
        <p>
            <b>Unsur 9 : Penanganan Pengaduan Pelayanan</b><br><br>
            Bagaimana pendapat saudara tentang penanganan pengaduan penggunaan pelayanan ?
            <br><b>
            @if ($datasurvei->p17_ == 1)
                Tidak Baik
            @elseif ($datasurvei->p17_==2)
                Cukup Baik
            @elseif($datasurvei->p17_==3)
                Baik
            @else
                Sangat Baik
            @endif
            , Skor : {{ $datasurvei->p17_ }}
            </b><br><br>
           Apakah fasilitas pengaduan, saran, dan masukan yang disediakan (konsultasi email, telpon, kotak saran dan tatap muka langsung) mudah diakses ?
            <br><b>
                @if ($datasurvei->p18_ == 1)
                Tidak Mudah
            @elseif ($datasurvei->p18_==2)
                Cukup Mudah
            @elseif($datasurvei->p18_==3)
                Mudah
            @else
                Sangat Mudah
            @endif
            , Skor : {{ $datasurvei->p18_ }}
            </b><br><br>
            Apakah petugas cepat merespon untuk setiap pengaduan dan saran/masukan ?
            <br><b>
                @if ($datasurvei->p19_ == 1)
                Tidak Cepat
            @elseif ($datasurvei->p19_==2)
                Cukup Cepat
            @elseif($datasurvei->p19_==3)
                Cepat
            @else
                Sangat Cepat
            @endif
            , Skor : {{ $datasurvei->p19_ }}
            </b><br><br>
            Apakah petugas dapat memberikan penyelesaian/solusi untuk setiap pengaduan yang telah dilaporkan ?
            <br><b>
                @if ($datasurvei->p20_ == 1)
                Tidak Dapat Memberi Solusi
            @elseif ($datasurvei->p20_==2)
                Cukup Dapat Memberi Solusi
            @elseif($datasurvei->p20_==3)
                Dapat Memberi Solusi
            @else
                Sangat Dapat Memberi Solusi
            @endif
            , Skor : {{ $datasurvei->p20_ }}
            </b><br><br>
        </p>
    </div>

    <div class="saran">
        <p>
            <b>Kritik dan Saran</b><br><br>
            {{ $datasurvei->saran }}
        </p>
    </div>
    <div class="page-break"></div>
   
    <div class="qr">
        <div class="rekomendasi">
            <h4>Rekomendasi Perbaikan Pelayanan</h4>
          
                <ol type="1">
                    @if (!empty($datasurvei->sugestion->saran_1))
                        <li>
                            {{ $datasurvei->sugestion->saran_1 }}
                        </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_2))
                        <li>
                            {{ $datasurvei->sugestion->saran_2 }}
                        </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_3))
                        <li>
                            {{ $datasurvei->sugestion->saran_3 }}
                        </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_4))
                        <li>
                            {{ $datasurvei->sugestion->saran_4 }}
                        </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_5))
                    <li>
                        {{ $datasurvei->sugestion->saran_5 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_6))
                    <li>
                        {{ $datasurvei->sugestion->saran_6 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_7))
                    <li>
                        {{ $datasurvei->sugestion->saran_7 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_8))
                    <li>
                        {{ $datasurvei->sugestion->saran_8 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_8))
                    <li>
                        {{ $datasurvei->sugestion->saran_8 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_9))
                    <li>
                        {{ $datasurvei->sugestion->saran_9 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_10))
                    <li>
                        {{ $datasurvei->sugestion->saran_10 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_11))
                    <li>
                        {{ $datasurvei->sugestion->saran_11 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_12))
                    <li>
                        {{ $datasurvei->sugestion->saran_12 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_13))
                    <li>
                        {{ $datasurvei->sugestion->saran_13 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_14))
                    <li>
                        {{ $datasurvei->sugestion->saran_14 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_15))
                    <li>
                        {{ $datasurvei->sugestion->saran_15 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_16))
                    <li>
                        {{ $datasurvei->sugestion->saran_16 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_17))
                    <li>
                        {{ $datasurvei->sugestion->saran_17 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_18))
                    <li>
                        {{ $datasurvei->sugestion->saran_18 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_19))
                    <li>
                        {{ $datasurvei->sugestion->saran_19 }}
                    </li>
                    @endif
                    @if (!empty($datasurvei->sugestion->saran_20))
                    <li>
                        {{ $datasurvei->sugestion->saran_20 }}
                    </li>
                    @endif
    
                </ol>
            
        </div>
    <table>
        <tr>
            <td><h3>Total Skor : {{ $datasurvei->total }}</h3></td>
        </tr>
        <tr>
            <td><img src="data:image/png;base64, {!! $q_report !!}"></td>
        </tr>
    </table>
    </div>
</body>
</html>