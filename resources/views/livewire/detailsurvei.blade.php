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
          <li class="{{ $currentStep != 6 ? '' : 'filter-active' }}" wire:click="u4">Unsur 5</li>
          <li class="{{ $currentStep != 7 ? '' : 'filter-active' }}" wire:click="u5">Unsur 6</li>
          <li class="{{ $currentStep != 8 ? '' : 'filter-active' }}" wire:click="u6">Unsur 7</li>
          <li class="{{ $currentStep != 9 ? '' : 'filter-active' }}" wire:click="u7">Unsur 8</li>
          <li class="{{ $currentStep != 10 ? '' : 'filter-active' }}" wire:click="u8">Unsur 9</li>
          <li class="{{ $currentStep != 11 ? '' : 'filter-active' }}" wire:click="u9">Saran</li>
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
                <div class="text-center col-md-8">
                  <button class="btn btn-primary" wire:click="datadiri" type="button">Selanjutnya</button>
                </div>
                <div class="col-md-4 text-end">
                  <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                </div>
              </div>
             </div>
             
                {{--U1--}}
              <div class="needs-validation" id="step2" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
                <h3 class="mb-3" >Persyaratan Pelayanan</h3>
                {{-- Pertanyaan 1 --}}
                  <div class="row mt-3">
                    <label for="p1_">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan ?</label>
                    <div class="mt-2" id="p1_">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">Tidak Sesuai</label>
                      </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio  " for="p1_1">1<br>
                          <input {{ $edit_toggle != true ? "disabled" : "" }}  class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_1" value="1" {{{ $p1_ == '1' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_2">2<br>
                          <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_2" value="2" {{{ $p1_ == '2' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_3">3<br>
                          <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_3" value="3" {{{ $p1_ == '3' ? "checked" : "" }}}></label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                          <label class="form-check-label labelradio " for="p1_4">4<br>
                          <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p1_" id="p1_4" value="4" {{{ $p1_ == '4' ? "checked" : "" }}}></label>
                        </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">Sangat Sesuai</label>
                      </div>
                    </div>
                    @error('p1_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                  </div>
                 
                    {{-- Pertanyaan 2 --}}
                    <div class="row mt-5">
                      <label for="p2_">Apakah informasi mengenai persyaratan pelayanan cukup tersedia baik di apan pengumuman, brosur atau sistem pelayanan online ?</label>
                      <div class="mt-2" id="p2_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Tersedia</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p2_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_1" value="1" {{{ $p2_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_2" value="2" {{{ $p2_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_3" value="3" {{{ $p2_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p2_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p2_" id="p2_4" value="4" {{{ $p2_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Tersedia</label>
                        </div>
                      </div>
                      @error('p2_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    {{-- Pertanyaan 3 --}}
                      <div class="row mt-5">
                        <label for="p3_">Apakah informasi tentang persyaratan pelayanan mudah dipahami ?</label>
                        <div class="mt-2" id="p3_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Mudah</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p3_1">1<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_1" value="1" {{{ $p3_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p3_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_2" value="2" {{{ $p3_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p3_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_3" value="3" {{{ $p3_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p3_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p3_" id="p3_4" value="4" {{{ $p3_ == '4' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">Sangat Mudah</label>
                              </div>
                            </div>
                            @error('p3_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>

                          <div class="mt-5 row">
                            <div class="col-md-4">
                              <button class="btn btn-danger" type="button" wire:click="back(1)">Kembali</button>

                            </div>
                            <div class="text-center col-md-4">
                              <button class="btn btn-primary" wire:click="u1" type="button">Selanjutnya</button>
                            </div>

                            <div class="col-md-4 text-end">
                              <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                            </div>
                          </div>
                          

                  </div>

                
                {{-- U2 --}}
                <div class="needs-validation" id="step3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
                  <h3 class="mb-3" >Prosedur Pelayanan</h3>
                    {{-- Pertanyaan 1 --}}
                    <div class="row mt-5">
                      <label for="p4_">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini ?</label>
                      <div class="mt-2" id="p4_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Mudah</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p4_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_1" value="1" {{{ $p4_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_2" value="2" {{{ $p4_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_3" value="3" {{{ $p4_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p4_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p4_" id="p4_4" value="4" {{{ $p4_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Mudah</label>
                        </div>
                      </div>
                      @error('p4_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                      {{-- Pertanyaan 2 --}}
                    <div class="row mt-5">
                      <label for="p5_">Apakah prosedur pengajuan permohonan sudah dijalankan sesuai SOP (Standar Operasional Prosedur) ?</label>
                      <div class="mt-2" id="p5_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Sesuai</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p5_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_1" value="1" {{{ $p5_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_2" value="2" {{{ $p5_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_3" value="3" {{{ $p5_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p5_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p5_" id="p5_4" value="4"{{{ $p5_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Sesuai</label>
                        </div>
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
                      <div class="col-md-4 text-end">
                        <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                      </div>
                    </div>
                   
                </div>

                  {{-- U3 --}}
                  <div class="needs-validation" id="step4" style="display: {{ $currentStep != 4 ? 'none' : '' }}">
                    <h3 class="mb-3" >Kemampuan Petugas</h3>
                     {{-- Pertanyaan 3 --}}
                     <div class="row mt-5">
                      <label for="p6_">Bagaimana pendapat saudara tentang kompetensi atau kemampuan petugas dalam memberikan pelayanan ?</label>
                      <div class="mt-2" id="p6_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Mampu</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p6_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_1" value="1" {{{ $p6_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_2" value="2" {{{ $p6_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_3" value="3" {{{ $p6_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p6_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p6_" id="p6_4" value="4" {{{ $p6_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Mampu</label>
                        </div>
                      </div>
                      @error('p6_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    {{-- Pertanyaan 4 --}}
                    <div class="row mt-5">
                      <label for="p7_">Apakah petugas memiliki kemampuan menjalankan prosedur kepada pelanggan ?</label>
                      <div class="mt-2" id="p7_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Mampu</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p7_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_1" value="1" {{{ $p7_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_2" value="2" {{{ $p7_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_3" value="3" {{{ $p7_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p7_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p7_" id="p7_4" value="4" {{{ $p7_ == '4i' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Mampu</label>
                        </div>
                      </div>
                      @error('p7_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-5 row">
                      <div class="col-md-4">
                        <button class="btn btn-danger" type="button" wire:click="back(3)">Kembali</button>

                      </div>
                      <div class="text-center col-md-4">
                        <button class="btn btn-primary" wire:click="u3" type="button">Selanjutnya</button>
                      </div>
                      <div class="col-md-4 text-end">
                        <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                      </div>
                    </div>

                  </div>

 
                  {{-- U4 --}}
                  <div class="needs-validation" id="step4" style="display: {{ $currentStep != 5 ? 'none' : '' }}">
                    <h3 class="mb-3" >Kecepatan Waktu Pelayanan</h3>                  

                     {{-- Mulai U4 --}}
                      <div class="row mt-5">
                        <label for="p8_">Bagaimana pendapat saudara tetang kecepatan waktu pelayanan di unit ini ?</label>
                        <div class="mt-2" id="p8_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Cepat</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p8_1">1<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_1" value="1" {{{ $p8_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p8_2">2<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_2" value="2" {{{ $p8_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p8_3">3<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_3" value="3" {{{ $p8_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p8_4">4<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p8_" id="p8_4" value="4" {{{ $p8_ == '4' ? "checked" : "" }}}></label>
                            </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Sangat Cepat</label>
                          </div>
                        </div>
                        @error('p8_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                      </div>

                      {{-- Pertanyaan 2 --}}
                      <div class="row mt-5">
                        <label for="p9_">Apakah informasi waktu operasional pelayanan dan penyeesaian pelayanan sudah sesuai dengan waktu yang sudah ditetapkan ?</label>
                        <div class="mt-2" id="p9_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Sesuai</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p9_1">1<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_1" value="1" {{{ $p9_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_2">2<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_2" value="2" {{{ $p9_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_3">3<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_3" value="3" {{{ $p9_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p9_4">4<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p9_" id="p9_4" value="4" {{{ $p9_ == '4' ? "checked" : "" }}}></label>
                            </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Sangat Sesuai</label>
                          </div>
                        </div>
                        @error('p9_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                      </div>                     
                      
                      <div class="mt-5 row">
                        <div class="col-md-4">
                          <button class="btn btn-danger" type="button" wire:click="back(3)">Kembali</button>

                        </div>
                        <div class="text-center col-md-4">
                          <button class="btn btn-primary" wire:click="u4" type="button">Selanjutnya</button>
                        </div>

                        <div class="col-md-4 text-end">
                          <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                        </div>
                      </div>

                  </div>


                  {{-- U5 --}}
                  <div class="needs-validation" id="step4" style="display: {{ $currentStep != 6 ? 'none' : '' }}">
                    <h3 class="mb-3" >Produk Layanan</h3>
                    {{-- Pertanyaan 3 --}}
                    <div class="row mt-5">
                      <label for="p10_">Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?</label>
                      <div class="mt-2" id="p10_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Sesuai</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p10_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p10_" id="p10_1" value="1" {{{ $p10_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p10_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p10_" id="p10_2" value="2" {{{ $p10_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p10_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p10_" id="p10_3" value="3" {{{ $p10_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p10_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p10_" id="p10_4" value="4" {{{ $p10_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Sesuai</label>
                        </div>
                      </div>
                      @error('p10_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    {{-- Pertanyaan 4 --}}
                    <div class="row mt-5">
                      <label for="p11_">Apakah informasi tentang daftar produk layanan dapat diketahui dan diakses dengan baik ?</label>
                      <div class="mt-2" id="p11_">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Tidak Baik</label>
                        </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio  " for="p11_1">1<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p11_" id="p11_1" value="1" {{{ $p11_ == '1' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p11_2">2<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p11_" id="p11_2" value="2" {{{ $p11_ == '2' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p11_3">3<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p11_" id="p11_3" value="3" {{{ $p11_ == '3' ? "checked" : "" }}}></label>
                          </div>
                          <div class="form-check form-check-inline text-center">
                            <label class="form-check-label labelradio " for="p11_4">4<br>
                            <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p11_" id="p11_4" value="4" {{{ $p11_ == '4' ? "checked" : "" }}}></label>
                          </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">Sangat Baik</label>
                        </div>
                      </div>
                      @error('p11_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-5 row">
                      <div class="col-md-4">
                        <button class="btn btn-danger" type="button" wire:click="back(5)">Kembali</button>

                      </div>
                      <div class="text-center col-md-4">
                        <button class="btn btn-primary" wire:click="u5" type="button">Selanjutnya</button>
                      </div>

                      <div class="col-md-4 text-end">
                        <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                      </div>
                    </div>
                  </div>
                  {{-- U5 --}}




                      {{--U6--}}
                      <div class="needs-validation" id="step5" style="display: {{ $currentStep != 7 ? 'none' : '' }}">
                        <h3 class="mb-3" >Kesopanan dan Keramahan Petugas</h3>
                      {{-- Pertanyaan 1 --}}
                      <div class="row mt-5">
                        <label for="p12_">Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan ?</label>
                        <div class="mt-2" id="p12_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Sopan dan Ramah</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p12_1">1<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p12_" id="p12_1" value="1" {{{ $p12_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p12_2">2<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p12_" id="p12_2" value="2" {{{ $p12_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p12_5">3<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p12_" id="p12_3" value="3" {{{ $p12_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p12_4">4<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p12_" id="p12_4" value="4" {{{ $p12_ == '4' ? "checked" : "" }}}></label>
                            </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Sangat Sopan dan Ramah</label>
                          </div>
                        </div>
                        @error('p12_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                      </div>

                      {{-- Pertanyaan 2 --}}
                      <div class="row mt-5">
                        <label for="p13_">Apakah petugas pelayanan memberikan penjelasan yang mudah dan tidak berbeli-belit ?</label>
                        <div class="mt-2" id="p13_">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Tidak Mudah</label>
                          </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio  " for="p13_1">1<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p13_" id="p13_1" value="1" {{{ $p13_ == '1' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p13_2">2<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p13_" id="p13_2" value="2" {{{ $p13_ == '2' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p13_3">3<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p13_" id="p13_3" value="3" {{{ $p13_ == '3' ? "checked" : "" }}}></label>
                            </div>
                            <div class="form-check form-check-inline text-center">
                              <label class="form-check-label labelradio " for="p13_4">4<br>
                              <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p13_" id="p13_4" value="4" {{{ $p13_ == '4' ? "checked" : "" }}}></label>
                            </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">Sangat Mudah</label>
                          </div>
                        </div>
                        @error('p13_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                      </div>
                        
                      <div class="mt-5 row">
                        <div class="col-md-4">
                          <button class="btn btn-danger" type="button" wire:click="back(6)">Kembali</button>

                        </div>
                        <div class="text-center col-md-4">
                          <button class="btn btn-primary" wire:click="u6" type="button">Selanjutnya</button>
                        </div>

                        <div class="col-md-4 text-end">
                          <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                        </div>
                      </div>
                    </div>


                         {{--U7--}}
                        <div class="needs-validation" id="step5" style="display: {{ $currentStep != 8 ? 'none' : '' }}">
                          <h3 class="mb-3" >Kewajaran Biaya</h3>
                         <div class="row mt-5">
                          <label for="p14_">Bagaimana pendapat saudara tentang biaya/tarif dalam pelayanan ?</label>
                          <div class="mt-2" id="p14_">
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Mahal</label>
                            </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio  " for="p14_1">1<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p14_" id="p14_1" value="1" {{{ $p14_ == '1' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p14_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p14_" id="p14_2" value="2" {{{ $p14_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p14_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p14_" id="p14_3" value="3" {{{ $p14_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p14_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p14_" id="p14_4" value="4" {{{ $p14_ == '4' ? "checked" : "" }}}></label>
                              </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Murah</label>
                            </div>
                          </div>
                          @error('p14_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>

                        <div class="mt-5 row">
                          <div class="col-md-4">
                            <button class="btn btn-danger" type="button" wire:click="back(7)">Kembali</button>
  
                          </div>
                          <div class="text-center col-md-4">
                            <button class="btn btn-primary" wire:click="u7" type="button">Selanjutnya</button>
                          </div>
                          <div class="col-md-4 text-end">
                            <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                          </div>
                        </div>

                        </div>
                        {{-- U7 --}}

                        {{-- U8 --}}
                        <div class="needs-validation" id="step5" style="display: {{ $currentStep != 9 ? 'none' : '' }}">
                          <h3 class="mb-3" >Kualitas Sarana dan Prasarana</h3>
                         {{-- Pertanyaan 4 --}}
                         <div class="row mt-5">
                          <label for="p15_">Bagaimana pendapat saudara tentang sarana dan prasarana pelayanan ?</label>
                          <div class="mt-2" id="p15_">
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Tidak Baik</label>
                            </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio  " for="p15_1">1<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p15_" id="p15_1" value="1" {{{ $p15_ == '1' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p15_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p15_" id="p15_2" value="2" {{{ $p15_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p15_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p15_" id="p15_3" value="3" {{{ $p15_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p15_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p15_" id="p15_4" value="4" {{{ $p15_ == '4' ? "checked" : "" }}}></label>
                              </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Baik</label>
                            </div>
                          </div>
                          @error('p15_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>

                        {{-- Pertanyaan 5 --}}
                         <div class="row mt-5">
                          <label for="p16_">Apakah unit layanan seperti ruang tunggu, bahan bacaan, kotak saran/pengaduan, tv. lahan parkir, mushola, ruang menyusui berfungsi dengan baik ?</label>
                          <div class="mt-2" id="p16_">
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Tidak Baik</label>
                            </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio  " for="p16_1">1<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p16_" id="p16_1" value="1" {{{ $p16_ == '1' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p16_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p16_" id="p16_2" value="2" {{{ $p16_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p16_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p16_" id="p16_3" value="3" {{{ $p16_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p16_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p16_" id="p16_4" value="4" {{{ $p16_ == '4' ? "checked" : "" }}}></label>
                              </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Baik</label>
                            </div>
                          </div>
                          @error('p16_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>

                        <div class="mt-5 row">
                          <div class="col-md-4">
                            <button class="btn btn-danger" type="button" wire:click="back(8)">Kembali</button>

                          </div>
                          <div class="text-center col-md-4">
                            <button class="btn btn-primary" wire:click="u8" type="button">Selanjutnya</button>
                          </div>
                          <div class="col-md-4 text-end">
                            <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                          </div>
                        </div>
                      </div>
                      {{-- U8 --}}

                        {{--U9--}}
                        <div class="needs-validation" id="step6" style="display: {{ $currentStep != 10 ? 'none' : '' }}">
                          <h3 class="mb-3" >Penanganan Pengaduan Pelayanan</h3>
                            {{-- Pertanyaan 1 --}}
                         <div class="row mt-5">
                          <label for="p17_">Bagaimana pendapat saudara tentang penanganan pengaduan penggunaan pelayanan ?</label>
                          <div class="mt-2" id="p17_">
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Tidak Baik</label>
                            </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio  " for="p17_1">1<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p17_" id="p17_1" value="1" {{{ $p17_ == '1' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p17_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p17_" id="p17_2" value="2" {{{ $p17_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p17_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p17_" id="p17_3" value="3" {{{ $p17_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p17_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p17_" id="p17_4" value="4" {{{ $p17_ == '4' ? "checked" : "" }}}></label>
                              </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Baik</label>
                            </div>
                            @error('p17_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>

                          {{-- Pertanyaan 1 --}}
                         <div class="row mt-5">
                            <label for="p18_">Apakah fasilitas pengaduan, saran, dan masukan yang disediakan (konsultasi email, telpon, kotak saran dan tatap muka langsung) mudah diakses ?</label>
                            <div class="mt-2" id="p18_">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">Tidak Mudah</label>
                              </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio  " for="p18_1">1<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p18_" id="p18_1" value="1" {{{ $p18_ == '1' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p18_2">2<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p18_" id="p18_2" value="2" {{{ $p18_ == '2' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p18_3">3<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p18_" id="p18_3" value="3" {{{ $p18_ == '3' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p18_4">4<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p18_" id="p18_4" value="4" {{{ $p18_ == '4' ? "checked" : "" }}}></label>
                                </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">Sangat Mudah</label>
                              </div>
                            </div>
                            @error('p18_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>

                        {{-- Pertanyaan 1 --}}
                         <div class="row mt-5">
                          <label for="p19_">Apakah petugas cepat merespon untuk setiap pengaduan dan saran/masukan ?</label>
                          <div class="mt-2" id="p19_">
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Tidak Cepat</label>
                            </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio  " for="p19_1">1<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p19_" id="p19_1" value="1" {{{ $p19_ == '1' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p19_2">2<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p19_" id="p19_2" value="2" {{{ $p19_ == '2' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p19_3">3<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p19_" id="p19_3" value="3" {{{ $p19_ == '3' ? "checked" : "" }}}></label>
                              </div>
                              <div class="form-check form-check-inline text-center">
                                <label class="form-check-label labelradio " for="p19_4">4<br>
                                <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p19_" id="p19_4" value="4" {{{ $p19_ == '4' ? "checked" : "" }}}></label>
                              </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">Sangat Cepat</label>
                            </div>
                          </div>
                          @error('p19_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>

                          {{-- Pertanyaan 2 --}}
                          <div class="row mt-5">
                            <label for="p20_">Apakah petugas dapat memberikan penyelesaian/solusi untuk setiap pengaduan yang telah dilaporkan ?</label>
                            <div class="mt-2" id="p20_">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">Tidak Dapat Memberikan Solusi</label>
                              </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio  " for="p20_1">1<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p20_" id="p20_1" value="1" {{{ $p20_ == '1' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p20_2">2<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p20_" id="p20_2" value="2" {{{ $p20_ == '2' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p20_3">3<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p20_" id="p20_3" value="3" {{{ $p20_ == '3' ? "checked" : "" }}}></label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                  <label class="form-check-label labelradio " for="p20_4">4<br>
                                  <input {{ $edit_toggle != true ? "disabled" : "" }} class="form-check-input mx-auto" type="radio" wire:model="p20_" id="p20_4" value="4" {{{ $p20_ == '4' ? "checked" : "" }}}></label>
                                </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">Sangat Dapat Memberikan Solusi</label>
                              </div>
                            </div>
                            @error('p20_') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>

                          <div class="mt-5 row">
                            <div class="col-md-4">
                              <button class="btn btn-danger" type="button" wire:click="back(9)">Kembali</button>

                            </div>
                            <div class="text-center col-md-4">
                              <button class="btn btn-primary" wire:click="u9" type="button">Selanjutnya</button>
                            </div>

                            <div class="col-md-4 text-end">
                              <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                            </div>
                          </div>
                         </div>
                        </div>
                      
                      <div class="needs-validation" id="step6" style="display: {{ $currentStep != 11 ? 'none' : '' }}">
                        <h3 class="mb-3" >Kritik dan Saran</h3>
                         {{-- Pertanyaan 3 --}}
                            <div class="row mt-5">
                              <div class="container">
                                <label for="saran">Kritik dan Saran</label>
                                <textarea {{ $edit_toggle != true ? "disabled" : "" }} wire:model="saran" id="saran" cols="30" rows="10" class="form-control" placeholder="Masukan Kritik dan Saran Anda Untuk Pelayanan Yang Lebih Baik"></textarea>
                              </div>
                            </div>

                            <div class="mt-5 row">
                              <div class="col-md-4">
                                <button class="btn btn-danger" type="button" wire:click="back(10)">Kembali</button>

                              </div>
                              <div class="text-center col-md-4">
                                <button class="btn btn-primary" wire:click="submit" type="submit" style="display:{{ $edit_toggle != true ? "none" : "" }}">Edit</button>
                              </div>

                              <div class="col-md-4 text-end">
                                <a class="btn btn-warning" type="button" href="{{ route('dashboard') }}">Kembali Ke Dashboard</a>
                              </div>
                            </div>
                     
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
