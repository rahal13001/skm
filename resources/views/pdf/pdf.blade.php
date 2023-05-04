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
            <br> 1.1. Bagaimana penilaian Bapak/Ibu tentang kesesuaian persyaratan pelayanan yang harus dipenuhi dengan persyaratan pelayanan yang diinformasikan ?
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
            1.2. Bagaimana penilaian Bapak/Ibu mengenai kemudahan prosedur yang dijalani untuk mendapatkan layanan ?
            <br> <b>
                @if ($datasurvei->p2_ == 1)
                    Tidak Mudah
                @elseif ($datasurvei->p2_==2)
                    Cukup Mudah
                @elseif($datasurvei->p2_==3)
                    Mudah
                @else
                    Sangat Mudah
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
            <b>Unsur 2 : Kesesuaian Pelayanan</b><br>
            2.1 Bagaimana penilaian Bapak/Ibu mengenai kesesuaian jangka waktu penyelesaian pelayanan dengan yang diinformasikan ?
            <br> <b>
            @if ($datasurvei->p3_ == 1)
                Tidak Sesuai
            @elseif ($datasurvei->p3_==2)
                Cukup Sesuai
            @elseif($datasurvei->p3_==3)
                Sesuai
            @else
                Sangat Sesuai
            @endif
            , Skor : {{ $datasurvei->p3_ }} </b> <br>

            <br>2.2. Bagaimana penilaian Bapak/Ibu mengenai kesesuaian biaya pelayanan yang dibayarkan dengan yang diinformasikan ?<br>
            <b> 
                @if ($datasurvei->p4_ == 1)
                    Tidak Sesuai
                @elseif ($datasurvei->p4_==2)
                    Cukup Sesuai
                @elseif($datasurvei->p4_==3)
                    Sesuai
                @else
                    Sangat Sesuai
                @endif
                , Skor : {{ $datasurvei->p4_ }}
                </b><br><br>
            2.3. Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang ada pada publikasi dengan pelayanan yang diberikan ?
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
            <b>Unsur 3 : Aplikasi Sistem Pelayanan</b><br>
            <br>3.1. Bagaimana kecepatan respon (membuka halaman, konten, pencarian informasi, unduh/unggah) dari aplikasi sistem pelayanan yang diberikan ?
            <br>
            <b> 
                @if ($datasurvei->p6_ == 1)
                    Tidak Cepat
                @elseif ($datasurvei->p6_==2)
                    Cukup Cepat
                @elseif($datasurvei->p6_==3)
                    Cepat
                @else
                    Sangat Cepat
                @endif
                , Skor : {{ $datasurvei->p6_ }}
            </b><br><br>
            3.2. Bagaimana kemudahan dalam penggunaan fitur pada aplikasi sistem layanan ?
            <br><b>
                @if ($datasurvei->p7_ == 1)
                    Tidak Mudah
                @elseif ($datasurvei->p7_==2)
                    Cukup Mudah
                @elseif($datasurvei->p7_==3)
                    Mudah
                @else
                    Sangat Mudah
                @endif
                , Skor : {{ $datasurvei->p7_ }}
            </b><br><br>
            3.3. Bagaimana penilaian Bapak/Ibu tentang kualitas isi/konten dari aplikasi sistem layanan ?
            <br><b>
                @if ($datasurvei->p7_ == 1)
                    Tidak Baik
                @elseif ($datasurvei->p7_==2)
                    Cukup Baik
                @elseif($datasurvei->p7_==3)
                    Baik
                @else
                    Sangat Baik
                @endif
                , Skor : {{ $datasurvei->p7_ }}
        </p>
    </div>
    <div class="u4">
        <p>
            <b>Unsur 4 : Layanan Konsultasi dan Pengaduan</b><br>
            <br> 4.1. Bagaimana penilaian Bapak/Ibu mengenai layanan konsultasi dan pengaduan yang tersedia (sarana pengaduan/kemudahan mengadu/tindak lanjut) ?
            <br>
            <b>
                @if ($datasurvei->p8_ == 1)
                    Tidak Baik
                @elseif ($datasurvei->p8_==2)
                    Cukup Baik
                @elseif($datasurvei->p8_==3)
                    Baik
                @else
                    Sangat Baik
                @endif
                , Skor : {{ $datasurvei->p8_ }}
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