<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>SKM LPSPL Sorong</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="{{ asset('img/logoweb.png') }}">

    
    <!-- FontAwesome JS-->
    <script defer src="/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="/assets/css/portal.css">
    
    <!-- FontAwesome JS-->
    <script defer src="/assets/plugins/fontawesome/js/all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    @yield('style')

</head> 
<body class="app">   
  @include('sweetalert::alert')

            @yield('body')
        


   <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/lay/vendor/jquery/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('/lay/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}

      <!-- Core plugin JavaScript-->
    <script src="{{ asset('/lay/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

     <!-- Common -->
    <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
 
    <!-- Page Specific JS -->
    <script src="{{ asset('/assets/js/app.js') }}"></script> 

    {{-- Lama --}}
      {{-- <script src="{{ asset('/assets/js/lib/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('/assets/lama/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('/assets/lama/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/lama/js/scripts.js') }}"></script>

    

    {{-- @stack('prepend-script') --}}
    
      {{-- Data Table --}}
      {{-- <script type="text/javascript" src="{{ asset('DataTables-1.11.3/js/dataTables.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('DataTables-1.11.3/js/jquery.dataTables.min.js') }}"></script>
      <script>
        $("#datatable").DataTable();
      </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script>
        $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
      @stack('addon-script')
      <script src="{{ asset('js/app.js') }}"></script>
      @stack('script')
     @yield('chart') --}}
</body>
</html>
