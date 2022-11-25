@extends('layouts.layoutguest')

<link rel="stylesheet" href="{{ asset('assets/css/radio.css') }}">
@livewireStyles
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="{{ asset('parsley/parsley.css') }}">
<script src="{{ asset('parsley/parsley.min.js') }}"></script>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>


    <style>
      .labelradio {
        float: left;
        display: block;
        padding: 0 1em;
        text-align: center;
      }
/* 
      .radiocenter form,input{
        margin-left: auto;
        margin-right: auto;
      } */

    </style>



@section('body')

  @if (session('status'))
    
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session ('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

{{-- <link rel="stylesheet" href="{{ asset('assets/css/radio.css') }}"> --}}
 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="4000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/7.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>LPSPL Sorong</span></h2>
              <p class="animate__animated animate__fadeInUp">Kami hadir untuk mengelola dan memastikan keberlanjutan ekosistem pesisir dan laut di Wilayah Indonesia Timur.</p>
              <a href="#survei" class="btn-get-started animate__animated animate__fadeInUp scrollto">Bantu Kami Perbaiki Layanan</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Kami Selalu Siap Melayani</h2>
              <p class="animate__animated animate__fadeInUp">Kami akan selalu berupaya untuk berkarya dan berinovasi demi memuwujudkan pelayanan prima.</p>
              <a href="#survei" class="btn-get-started animate__animated animate__fadeInUp scrollto">Bantu Kami Perbaiki Layanan</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Menuju Zona Integritas</h2>
              <p class="animate__animated animate__fadeInUp">Secara tegas kami menolak gratifikasi dan korupsi. Kami berkomitmen untuk bekerja dengan bersih, jujur dan melayani.</p>
              <a href="#survei" class="btn-get-started animate__animated animate__fadeInUp scrollto">Bantu Kami Perbaiki Layanan</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="survei" class="about">
      <div class="container">

      {{-- @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
      @endif --}}
 

        <div class="row content">
          <div class="col-lg-12">
            <h2>Survei Kepuasan Masyarakat TW {{ $tw->tw }} Tahun {{ $tw->tahun }}</h2>
            <h4>Mari bersama membangun ekosistem pemerintahan dan pelayanan publik yang sehat demi wujudkan Indonesia bebas dari Korupsi</h4>
          </div>
    
        </div>
        {{-- form --}}
          <livewire:survei></livewire:survei>
        {{-- akhir form --}}
      </div>
    </section><!-- End About Section -->

    
  </main><!-- End #main -->
    {{-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> --}}
 
  @livewireScripts
 <script>
  // script untuk kerjaan lainnya
  //   const lainnya = document.getElementsByClassName('other');
  //   const input_lainnya = document.getElementById('input_lainnya');

  //   lainnya.addEventListener('click', function(e){

  //         if (e.target.id == "lainnya") {
  //         input_lainnya.style.display="block";
  //         }
  //         else if(e.target.id == 'input_lainnya'){
  //           input_lainnya.style.display="block";
  //         }
  //         else{
  //           input_lainnya.style.display="none";
  //           input_lainnya.value="";
  //         }

    // })


    // $function(function(){
    //   const $sections = $('.form-section');

    //   function navigateTo(index){
    //     $sections.removeClass('current').eq(index).addClass('current');
    //     $('#sebelum').toggle(index>0);
    //     const akhir = index >= $sections.length -1;
    //     $('#lanjut').toggle(!akhir);
    //     $('#kirim').toggle(akhir);
    //   }

    //   function currentIndex(){
    //     return $sections.index($sections.filter('.current'));
    //   }

    //   $('#sebelum').click(function(){
    //     navigateTo(currentIndex()-1);
    //   });

    //   $('#lanjut').click(function(){
    //     $('.form-survei').parsley().whenValidate((
    //       group: 'block-' + curIndex()
    //     )).done(function(){
    //       navigateTo(curIndex()+1);
    //     });
    //   });

    //   $sections.each(function(index, section){
    //     $(section).find(':input').attr('data-parsley-group', 'block'+index);
    //   });

    //   navigateTo(0);

    // });
  </script>
@endsection