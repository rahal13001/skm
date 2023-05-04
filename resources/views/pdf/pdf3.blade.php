<!DOCTYPE html>
<html>
  <head>
    <title>Survey Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/pdftes.css') }}">




  </head>
  <body>

      <!-- Page content here -->

  
    <img src={{ asset('img/KOP.jpg') }} alt="Header Image" class="kop">
    <header>
      <h1 style="text-align : center">Hasil Survei Kepuasan Masyarakat Triwulan {{ $datasurvei->tw }} Tahun {{ $datasurvei->tahun }}</h1>
    </header>
    <main>
     
      <div class="header">
      

        <table>
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



      <section class="question">
        <p> <strong>Unsur 1 : Persyaratan Pelayanan</strong> </p> 
            <ol start="1">
              <li>Bagaimana penilaian Bapak/Ibu tentang kesesuaian persyaratan pelayanan yang harus dipenuhi dengan persyaratan pelayanan yang diinformasikan ?</li>
              
                <div class="answer">
                  @if ($datasurvei->p1_ == 1)
                    Tidak Sesuai
                  @elseif ($datasurvei->p1_==2)
                      Cukup Sesuai
                  @elseif($datasurvei->p1_==3)
                      Sesuai
                  @else
                      Sangat Sesuai
                  @endif
                    , Skor : {{ $datasurvei->p1_ }} <br>
                    @if (!empty($datasurvei->sugestion->saran_1))
                        
                    <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_1 }}
                        
                    @endif
                   
                </div>
                <li>Bagaimana penilaian Bapak/Ibu mengenai kemudahan prosedur yang dijalani untuk mendapatkan layanan ?</li>
          
                <div class="answer">
                  @if ($datasurvei->p2_ == 1)
                  Tidak Mudah
                  @elseif ($datasurvei->p2_==2)
                      Cukup Mudah
                  @elseif($datasurvei->p2_==3)
                      Mudah
                  @else
                      Sangat Mudah
                  @endif
                  , Skor : {{ $datasurvei->p2_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_2))
                        
                    <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_2 }}
                        
                    @endif
                </div>
             
            </ol>
      </section>

      <section class="question">
        <p> <strong>Unsur 2 : Kesesuaian Pelayanan</strong> </p> 
            <ol start="1">
              <li>Bagaimana penilaian Bapak/Ibu mengenai kesesuaian jangka waktu penyelesaian pelayanan dengan yang diinformasikan ?</li>
              
                <div class="answer">
                  @if ($datasurvei->p3_ == 1)
                      Tidak Sesuai
                  @elseif ($datasurvei->p3_==2)
                      Cukup Sesuai
                  @elseif($datasurvei->p3_==3)
                      Sesuai
                  @else
                      Sangat Sesuai
                  @endif
                  , Skor : {{ $datasurvei->p3_ }}  <br>
                  @if (!empty($datasurvei->sugestion->saran_3))
                        
                    <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_3 }}
                        
                    @endif 
                </div>
                <li>Bagaimana penilaian Bapak/Ibu mengenai kesesuaian biaya pelayanan yang dibayarkan dengan yang diinformasikan ?</li>
                <div class="answer">
                  @if ($datasurvei->p4_ == 1)
                  Tidak Sesuai
                  @elseif ($datasurvei->p4_==2)
                      Cukup Sesuai
                  @elseif($datasurvei->p4_==3)
                      Sesuai
                  @else
                      Sangat Sesuai
                  @endif
                  , Skor : {{ $datasurvei->p4_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_4))
                        
                  <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_4 }}
                      
                  @endif 
                </div>

                <li>Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang ada pada publikasi dengan pelayanan yang diberikan ?</li>
                <div class="answer">
                  @if ($datasurvei->p5_ == 1)
                      Tidak Sesuai
                  @elseif ($datasurvei->p5_==2)
                      Cukup Sesuai
                  @elseif($datasurvei->p5_==3)
                      Sesuai
                  @else
                      Sangat Sesuai
                  @endif
                  , Skor : {{ $datasurvei->p5_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_5))
                        
                  <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_5 }}
                      
                  @endif 
                </div>
             
            </ol>
      </section>

      <section class="question">
        <p> <strong>Unsur 3 : Aplikasi Sistem Pelayanan</strong> </p> 
            <ol start="1">
              <li>Bagaimana kecepatan respon (membuka halaman, konten, pencarian informasi, unduh/unggah) dari aplikasi sistem pelayanan yang diberikan ?</li>
              
                <div class="answer">
                  @if ($datasurvei->p6_ == 1)
                    Tidak Cepat
                  @elseif ($datasurvei->p6_==2)
                      Cukup Cepat
                  @elseif($datasurvei->p6_==3)
                      Cepat
                  @else
                      Sangat Cepat
                  @endif
                  , Skor : {{ $datasurvei->p6_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_6))
                        
                  <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_6 }}
                      
                  @endif 
                  
                </div>
                <li>Bagaimana kemudahan dalam penggunaan fitur pada aplikasi sistem layanan ?</li>
                <div class="answer">
                  @if ($datasurvei->p7_ == 1)
                    Tidak Mudah
                  @elseif ($datasurvei->p7_==2)
                      Cukup Mudah
                  @elseif($datasurvei->p7_==3)
                      Mudah
                  @else
                      Sangat Mudah
                  @endif
                  , Skor : {{ $datasurvei->p7_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_7))
                        
                  <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_7 }}
                      
                  @endif  
                </div>

                <li>Bagaimana penilaian Bapak/Ibu tentang kualitas isi/konten dari aplikasi sistem layanan ?</li>
                <div class="answer">
                  @if ($datasurvei->p8_ == 1)
                  Tidak Baik
                  @elseif ($datasurvei->p8_==2)
                      Cukup Baik
                  @elseif($datasurvei->p8_==3)
                      Baik
                  @else
                      Sangat Baik
                  @endif
                  , Skor : {{ $datasurvei->p8_ }} <br>
                  @if (!empty($datasurvei->sugestion->saran_8))
                        
                  <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_8 }}
                      
                  @endif  
                </div>
            </ol>
      </section>

      <section class="question">
        <p> <strong>Unsur 4 : Layanan Konsultasi dan Pengaduan</strong> </p> 
            <ol start="1">
              <li>Bagaimana penilaian Bapak/Ibu mengenai layanan konsultasi dan pengaduan yang tersedia (sarana pengaduan/kemudahan mengadu/tindak lanjut) ?</li>
              
                <div class="answer">
                  @if ($datasurvei->p9_ == 1)
                    Tidak Baik
                @elseif ($datasurvei->p9_==2)
                    Cukup Baik
                @elseif($datasurvei->p9_==3)
                    Baik
                @else
                    Sangat Baik
                @endif
                , Skor : {{ $datasurvei->p9_ }} <br>
                @if (!empty($datasurvei->sugestion->saran_9))
                        
                <b>Rekomendasi Perbaikan :</b>   {{ $datasurvei->sugestion->saran_9 }}
                    
                @endif 
                </div>
                
            </ol>
      </section>
  
   
      <section class="critics">
        <p> <strong>Kritik Saran</strong> </p>
        <p>{{ $datasurvei->saran }}</p>
      </section>
    </main>
    <footer>
      <p>Hasil Survei Elektronik</p><br>
      <img src="data:image/png;base64, {!! $q_report !!}">


    </footer>
  </body>
</html>
