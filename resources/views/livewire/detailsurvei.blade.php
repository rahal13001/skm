<section id="portfolio" class="portfolio mt-3">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li class="{{ $currentStep != 1 ? '' : 'filter-active' }}" wire:click="datadiriklik">Data Diri</li>
          <li class="{{ $currentStep != 2 ? '' : 'filter-active' }}" wire:click="datadiri">Unsur 1</li>
          <li class="{{ $currentStep != 3 ? '' : 'filter-active' }}" wire:click="u1">Unsur 2</li>
          <li class="{{ $currentStep != 4 ? '' : 'filter-active' }}" wire:click="u2">Unsur 3</li>
          <li class="{{ $currentStep != 5 ? '' : 'filter-active' }}" wire:click="u3">Unsur 4</li>
          <li class="{{ $currentStep != 11 ? '' : 'filter-active' }}" wire:click="u4">Saran</li>
        </ul>
      </div>
    </div>


    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif

<div class="row content">
    <div class="container">
      <div class="row">
        <div class="col-sm-11"></div>
        <div class="col-sm-1">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="edit_toggle" wire:model = 'edit_toggle'>
            <label class="form-check-label" for="edit_toggle"><b>Edit</b></label>
          </div>
        </div>
      </div>
   
      <div class="testimonial" id="testimonial">

      

              {{--data diri --}}
                <div class="needs-validation" id="step1" style="display: {{ $currentStep != 1 ? 'none' : '' }}">

                  <h3 class="mb-3" >Data Diri</h3>

             
                  {{-- row tahun dan tw --}}
                  <div class="row mt-3">
                    <div class="col-sm-6">
                      <label for="tw">Triwulan</label>
                      <select class="form-select mb-3 {{$errors->first('tw') ? "is-invalid" : "" }}" wire:model="tw">
                        <option selected disabled>Pilih TW</option>
                        <option value="1" {{ $edit_toggle != true ? "disabled" : "" }}>1</option>
                        <option value="2" {{ $edit_toggle != true ? "disabled" : "" }}>2</option>
                        <option value="3" {{ $edit_toggle != true ? "disabled" : "" }}>3</option>
                        <option value="4" {{ $edit_toggle != true ? "disabled" : "" }}>4</option>
             
                      </select>

                      @error('tw')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror

                    </div>

                    <div class="col-sm-6">
                      <label for="tahun">Tahun</label>
                      <input {{ $edit_toggle != true ? "disabled" : "" }} type="text" wire:model="tahun" class="form-control {{$errors->first('tahun') ? "is-invalid" : "" }}" id="tahun" placeholder="Isikan Tahun...." >
                      @error('tahun')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>


                  {{-- row 1 --}}
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="nama">Nama</label>
                      <input {{ $edit_toggle != true ? "disabled" : "" }} type="text" wire:model="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : "" }}" id="nama" placeholder="Isikan Nama Anda...." >
                      @error('nama')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="col-sm-6">
                      <label for="badan_usaha">Nama Badan Usaha</label>
                      <input {{ $edit_toggle != true ? "disabled" : "" }} type="text" wire:model="badan_usaha" class="form-control {{$errors->first('badan_usaha') ? "is-invalid" : "" }}" id="badan_usaha" placeholder="Isikan Nama Badan Usaha Anda...." required>
                      
                      @error('badan_usaha')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror

                    </div>
                  </div>
                  {{-- row 2 --}}
                  <div class="row mt-3">
                    <div class="col-sm-4">
                      <label for="jk">Jenis Kelamin</label>
                      <select class="form-select mb-3 {{$errors->first('jk') ? "is-invalid" : "" }}" wire:model="jk">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ $edit_toggle != true ? "disabled" : "" }}>Laki-laki</option>
                        <option value="Perempuan" {{ $edit_toggle != true ? "disabled" : "" }}>Perempuan</option>                
                      </select>

                      @error('jk')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror

                    </div>


                    <div class="col-sm-4">
                      <label for="domisili">Kota/Kabupaten Domisili</label>
                      <input {{ $edit_toggle != true ? "disabled" : "" }} type="text" wire:model="domisili" class="form-control {{$errors->first('domisili') ? "is-invalid" : "" }}" id="domisili" placeholder="Masukan Domisili Usaha..." required>
                      @error('domisili')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    
                    </div>

                    <div class="col-sm-4">
                      <label for="domisili">Masukan Alamat Email</label>
                      <input {{ $edit_toggle != true ? "disabled" : "" }} type="email" wire:model="email" class="form-control {{$errors->first('email') ? "is-invalid" : "" }}" id="email" placeholder="Masukan Alamat Email '@' ..." required>
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    
                    </div>


                  </div>            
                            
                  {{-- row 3 --}}
                  <div class="row mt-3">
                    <div class="container">
                     <label for="pekerjaan">Pekerjaan Utama</label>
                     <input {{ $edit_toggle != true ? "disabled" : "" }} type="pekerjaan" wire:model="pekerjaan" class="form-control {{$errors->first('pekerjaan') ? "is-invalid" : "" }}" id="pekerjaan" placeholder="Masukan Alamat Email '@' ..." required>
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                
              <div class="mt-5 row">
                <div class="text-center col-md-">
                  <button class="btn btn-primary" wire:click="datadiri" type="button">Selanjutnya</button>
                </div>
                
              </div>
             </div>
             
               {{--U1--}}
              <div class="needs-validation" id="step2" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
                <h3 class="mb-3" >Persyaratan Pelayanan</h3>
                {{-- Pertanyaan 1 --}}
                  <div class="row mt-3">
                    <label for="p1_">1.1. Bagaimana penilaian Bapak/Ibu tentang kesesuaian persyaratan pelayanan yang harus dipenuhi dengan persyaratan pelayanan yang diinformasikan ?</label>
                    <div class="mt-2" id="p1_">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">Tidak Sesuai</label>
                      </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio  " for="p1_1">1<br>
                          <input class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_1" value="1" {{{ $p1_ == '1' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_2">2<br>
                          <input class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_2" value="2" {{{ $p1_ == '2' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_3">3<br>
                          <input class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_3" value="3" {{{ $p1_ == '3' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_4">4<br>
                          <input class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_4" value="4" {{{ $p1_ == '4' ? "checked" : "" }}}></label>
                        </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">Sangat Sesuai</label>
                      </div>
                      @if ($p1_ == 1 || $p1_ == 2)
                      <div class="mt-2">
                        <label for="domisili">Rekomendasi Perbaikan</label>
                        <input type="saran1" wire:model="saran1" class="form-control {{$errors->first('saran1') ? "is-invalid" : "" }}" id="saran1" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                      </div>
                      @endif
                    </div>
                    @error('p1_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                  </div>
                  {{-- <input disabled value="{{ $respondence->id }}" wire:model="respondence" hidden> --}}
                    {{-- Pertanyaan 2 --}}
                    <div class="row mt-5">
                      <label for="p2_">1.2. Bagaimana penilaian Bapak/Ibu mengenai kemudahan prosedur yang dijalani untuk mendapatkan layanan ?</label>
                      <div class="mt-2" id="p2_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Mudah</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p2_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_1" value="1" {{{ $p2_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_2" value="2" {{{ $p2_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_3" value="3" {{{ $p2_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_4" value="4" {{{ $p2_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Mudah</label>
                        </div>
                        @if ($p2_ == 1 || $p2_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran2" wire:model="saran2" class="form-control {{$errors->first('saran2') ? "is-invalid" : "" }}" id="saran2" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p2_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                   

                          <div class="mt-5 row">
                            <div class="col-md-4">
                              <button class="btn btn-danger" type="button" wire:click="back(1)">Kembali</button>

                            </div>
                            <div class="text-center col-md-4">
                              <button class="btn btn-primary" wire:click="u1" type="button">Selanjutnya</button>
                            </div>
                          </div>
                          

                  </div>

                
                {{-- U2 --}}
                <div class="needs-validation" id="step3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
                  <h3 class="mb-3" >Kesesuaian Pelayanan</h3>
                     {{-- Pertanyaan 1 --}}
                     <div class="row mt-5">
                      <label for="p3_">2.1 Bagaimana penilaian Bapak/Ibu mengenai kesesuaian jangka waktu penyelesaian pelayanan dengan yang diinformasikan ?</label>
                      <div class="mt-2" id="p3_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Sesuai </label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p3_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_1" value="1" {{{ $p3_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p3_2">2<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_2" value="2" {{{ $p3_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p3_3">3<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_3" value="3" {{{ $p3_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p3_4">4<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_4" value="4" {{{ $p3_ == '4' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Sesuai </label>
                            </div>
                            @if ($p3_ == 1 || $p3_ == 2)
                            <div class="mt-2">
                              <label for="domisili">Rekomendasi Perbaikan</label>
                              <input type="saran3" wire:model="saran3" class="form-control {{$errors->first('saran3') ? "is-invalid" : "" }}" id="saran3" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                            </div>
                            @endif
                          </div>
                          @error('p3_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>

                    {{-- Pertanyaan 2 --}}
                    <div class="row mt-5">
                      <label for="p4_">2.2. Bagaimana penilaian Bapak/Ibu mengenai kesesuaian biaya pelayanan yang dibayarkan dengan yang diinformasikan ?</label>
                      <div class="mt-2" id="p4_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Sesuai</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p4_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_1" value="1" {{{ $p4_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_2" value="2" {{{ $p4_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_3" value="3" {{{ $p4_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_4" value="4" {{{ $p4_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Sesuai</label>
                        </div>
                        @if ($p4_ == 1 || $p4_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran4" wire:model="saran4" class="form-control {{$errors->first('saran4') ? "is-invalid" : "" }}" id="saran4" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p4_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                      {{-- Pertanyaan 3 --}}
                    <div class="row mt-5">
                      <label for="p5_">2.3. Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang ada pada publikasi dengan pelayanan yang diberikan ?</label>
                      <div class="mt-2" id="p5_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Sesuai</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p5_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_1" value="1" {{{ $p5_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_2" value="2" {{{ $p5_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_3" value="3" {{{ $p5_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_4" value="4"{{{ $p5_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Sesuai</label>
                        </div>
                        @if ($p5_ == 1 || $p5_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran5" wire:model="saran5" class="form-control {{$errors->first('saran5') ? "is-invalid" : "" }}" id="saran5" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p5_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>
                                     
                    <div class="mt-5 row">
                      <div class="col-md-4">
                        <button class="btn btn-danger" type="button" wire:click="back(2)">Kembali</button>

                      </div>
                      <div class="text-center col-md-4">
                        <button class="btn btn-primary" wire:click="u2" type="button">Selanjutnya</button>
                      </div>
                    </div>
                   
                </div>

                  {{-- U3 --}}
                  <div class="needs-validation" id="step4" style="display: {{ $currentStep != 4 ? 'none' : '' }}">
                    <h3 class="mb-3" >Aplikasi Sistem Pelayanan</h3>
                     {{-- Pertanyaan 3 --}}
                     <div class="row mt-5">
                      <label for="p6_">3.1. Bagaimana kecepatan respon (membuka halaman, konten, pencarian informasi, unduh/unggah) dari aplikasi sistem pelayanan yang diberikan ?</label>
                      <div class="mt-2" id="p6_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Cepat</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p6_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_1" value="1" {{{ $p6_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_2" value="2" {{{ $p6_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_3" value="3" {{{ $p6_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_4" value="4" {{{ $p6_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Cepat</label>
                        </div>
                        @if ($p6_ == 1 || $p6_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran6" wire:model="saran6" class="form-control {{$errors->first('saran6') ? "is-invalid" : "" }}" id="saran6" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p6_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    {{-- Pertanyaan 4 --}}
                    <div class="row mt-5">
                      <label for="p7_">3.2. Bagaimana kemudahan dalam penggunaan fitur pada aplikasi sistem layanan ?</label>
                      <div class="mt-2" id="p7_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Mudah</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p7_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_1" value="1" {{{ $p7_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_2" value="2" {{{ $p7_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_3" value="3" {{{ $p7_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_4" value="4" {{{ $p7_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Mudah</label>
                        </div>
                        @if ($p7_ == 1 || $p7_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran7" wire:model="saran7" class="form-control {{$errors->first('saran7') ? "is-invalid" : "" }}" id="saran3" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p7_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    <div class="row mt-5">
                      <label for="p8_">3.3. Bagaimana penilaian Bapak/Ibu tentang kualitas isi/konten dari aplikasi sistem layanan ?</label>
                      <div class="mt-2" id="p8_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Baik</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p8_1">1<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_1" value="1" {{{ $p8_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p8_2">2<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_2" value="2" {{{ $p8_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p8_3">3<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_3" value="3" {{{ $p8_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p8_4">4<br>
                            <input class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_4" value="4" {{{ $p8_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Baik</label>
                        </div>
                        @if ($p8_ == 1 || $p8_ == 2)
                        <div class="mt-2">
                          <label for="domisili">Rekomendasi Perbaikan</label>
                          <input type="saran8" wire:model="saran8" class="form-control {{$errors->first('saran8') ? "is-invalid" : "" }}" id="saran8" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                        </div>
                        @endif
                      </div>
                      @error('p8_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>
                   
                   
                   
                    <div class="mt-5 row">
                      <div class="col-md-4">
                        <button class="btn btn-danger" type="button" wire:click="back(3)">Kembali</button>

                      </div>
                      <div class="text-center col-md-4">
                        <button class="btn btn-primary" wire:click="u3" type="button">Selanjutnya</button>
                      </div>
                    </div>

                  </div>

 
                  {{-- U4 --}}
                  <div class="needs-validation" id="step4" style="display: {{ $currentStep != 5 ? 'none' : '' }}">
                    <h3 class="mb-3" >Layanan Konsultasi dan Pengaduan</h3>                  

                     {{-- Mulai U4 --}}
                    

                      {{-- Pertanyaan 2 --}}
                      <div class="row mt-5">
                        <label for="p9_">4.1. Bagaimana penilaian Bapak/Ibu mengenai layanan konsultasi dan pengaduan yang tersedia (sarana pengaduan/kemudahan mengadu/tindak lanjut) ?</label>
                        <div class="mt-2" id="p9_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Baik</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p9_1">1<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_1" value="1" {{{ $p9_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_2">2<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_2" value="2" {{{ $p9_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_3">3<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_3" value="3" {{{ $p9_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_4">4<br>
                              <input class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_4" value="4" {{{ $p9_ == '4' ? "checked" : "" }}}></label>
                            </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Sangat Baik</label>
                          </div>
                          @if ($p9_ == 1 || $p9_ == 2)
                          <div class="mt-2">
                            <label for="domisili">Rekomendasi Perbaikan</label>
                            <input type="saran9" wire:model="saran9" class="form-control {{$errors->first('saran9') ? "is-invalid" : "" }}" id="saran9" placeholder="Mohon Berikan Kami Rekomendasi Untuk Perbaikan Layanan">
                          </div>
                          @endif
                        </div>
                        @error('p9_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                      </div>                     
                      
                      <div class="mt-5 row">
                        <div class="col-md-4">
                          <button class="btn btn-danger" type="button" wire:click="back(4)">Kembali</button>

                        </div>
                        <div class="text-center col-md-4">
                          <button class="btn btn-primary" wire:click="u4" type="button">Selanjutnya</button>
                        </div>
                      </div>

                  </div>

                  <div class="needs-validation" id="step5" style="display: {{ $currentStep != 6 ? 'none' : '' }}">
                    <h3 class="mb-3" >Kritik dan Saran</h3>
                     {{-- Pertanyaan 3 --}}
                        <div class="row mt-5">
                          <label for="saran">Kritik dan Saran</label>
                          <textarea wire:model="saran" id="saran" cols="30" rows="10" class="form-control" placeholder="Masukan Kritik dan Saran Anda Untuk Pelayanan Yang Lebih Baik"></textarea>
                        </div>
                  </div>
                           
                              <div class="mt-5 row">
                                  <div class="text-center col-md-4" style="display:{{ $edit_toggle != true ? "none" : "" }}" >
                                    <button class="btn btn-success" wire:click="submit" type="submit" style="display:{{ $edit_toggle != true ? "none" : "" }}">Edit</button>
                                  </div>

                                  <div class="col-md-4 text-end">
                                    <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                                  </div>
                                  <div class="col-md-4 text-end">
                                    <a class="btn btn-info" type="button" href="{{ route('pdf', [$id_survei, $nama]) }}">Ekspor PDF</a>
                                  </div>
                              </div>
                      
                            

                            {{-- <div class="mt-5 row">
         
                              <div class="text-center col-md-4">
                                <button class="btn btn-primary" wire:click="submit" type="submit" style="display:{{ $edit_toggle != true ? "none" : "" }}">Edit</button>
                              </div>

                              <div class="col-md-4 text-end">
                                <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                              </div>
                              <div class="col-md-4 text-end">
                                <a class="btn btn-info" type="button" href="{{ route('pdf', [$id_survei, $nama]) }}">Ekspor PDF</a>
                              </div>
                            </div> --}}
                     
                      </div>
          </div>
      
      </div>
    </div>
  </div>

  {{-- <script>
    const edit_togle = document.getElementById('edit_togle');
    const targetdis = document.querySelector('.testimonial');

    edit_togle.addEventListener('click', function(e){
      


      
    });
    
  </script> --}}
