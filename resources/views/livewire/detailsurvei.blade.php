    <div class="container">
        <h4 class="mt-1">Data Diri</h4>
        <div class="row">
            <div class="col-md-2">Nama</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->nama }}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Jenis Kelamin</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->jk }}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Badan Usaha</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->badan_usaha }}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Pekerjaan</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->pekerjaan }}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Domisili</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->domisili }}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Email</div>
            <div class="col-md-1">:</div>
            <div class="col-md-9">{{ $datasurvei->respondence->email }}</div>
        </div>
    
        {{-- <h4 class="mt-4">Inputan Survei</h4>
        <h6>U1</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p1_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah informasi mengenai persyaratan pelayanan cukup tersedia baik di apan pengumuman, brosur atau sistem pelayanan online ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p2_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah informasi tentang persyaratan pelayanan mudah dipahami ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p3_ }}</div>
        </div>
    
        <h6 class="mt-4">U2</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p4_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah prosedur pengajuan permohonan sudah dijalankan sesuai SOP (Standar Operasional Prosedur) ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p5_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang kompetensi atau kemampuan petugas dalam memberikan pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p6_ }}</div>
        </div>
    
        <h6 class="mt-4">U3</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang kompetensi atau kemampuan petugas dalam memberikan pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p6_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah petugas memiliki kemampuan menjalankan prosedur kepada pelanggan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p7_ }}</div>
        </div>
    
        <h6 class="mt-4">U4</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tetang kecepatan waktu pelayanan di unit ini ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p8_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah informasi waktu operasional pelayanan dan penyeesaian pelayanan sudah sesuai dengan waktu yang sudah ditetapkan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p9_ }}</div>
        </div>
    
        <h6 class="mt-4">U5</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p10_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah informasi tentang daftar produk layanan dapat diketahui dan diakses dengan baik ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p11_ }}</div>
        </div>
    
        <h6 class="mt-4">U6</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p12_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah petugas pelayanan memberikan penjelasan yang mudah dan tidak berbeli-belit ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p13_ }}</div>
        </div>
    
        <h6 class="mt-4">U7</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang biaya/tarif dalam pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p14_ }}</div>
        </div>
    
        <h6 class="mt-4">U8</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang sarana dan prasarana pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p15_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah unit layanan seperti ruang tunggu, bahan bacaan, kotak saran/pengaduan, tv. lahan parkir, mushola, ruang menyusui berfungsi dengan baik ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p16_ }}</div>
        </div>
    
        <h6 class="mt-4">U9</h6>
        <div class="row">
            <div class="col-md-12">Bagaimana pendapat saudara tentang penanganan pengaduan penggunaan pelayanan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p17_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah fasilitas pengaduan, saran, dan masukan yang disediakan (konsultasi email, telpon, kotak saran dan tatap muka langsung) mudah diakses ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p18_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah petugas cepat merespon untuk setiap pengaduan dan saran/masukan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p19_ }}</div>
        </div>
        <div class="row">
            <div class="col-md-12">Apakah petugas dapat memberikan penyelesaian/solusi untuk setiap pengaduan yang telah dilaporkan ?</div>
            <div class="col-md-12">Skor : {{ $datasurvei->p20_ }}</div>
        </div> --}}

        
    </div>