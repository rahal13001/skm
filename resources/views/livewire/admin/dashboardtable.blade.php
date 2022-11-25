
<div class="container">
    <h2 class="mb-3 text-lg font-large leading-6 text-gray-900">Data Survei Kepuasan Masyarakat</h2>
    
    <div class="row mb-2">
      {{-- Kolom Cari --}}
      <div class="col-md-3 col-sm-3 d-flex">
        
            <input class="form-control form-control-sm" type="text" placeholder="Cari Data..." wire:model.debounce.300ms="cari">
        
      </div>

          {{-- Total --}}
          <div class="col-md-3 col-sm-3 d-flex">
            <input class="form-control form-control-sm" type="number" placeholder="Nilai Minimal" wire:model.debounce.300ms="drnilai">
            <input class="form-control form-control-sm" type="number" placeholder="Nilai Maksimal" wire:model.debounce.300ms="kenilai">
          </div>

      {{-- Tahun --}}
      <div class="col-md-3 col-sm-3 d-flex">
              {{-- Total --}}
            <select wire:model="darithn" name="darithn" id="darithn" class="form-control form-control-sm rounded-md shadow-sm">  
                <option selected value="1900">Dari Tahun</option>
                @foreach ($datasurveis->sortBy('tahun') as $tahun)
                    <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                @endforeach
            </select>      
            <select wire:model="kethn" name="kethn" id="kethn" class="form-control form-control-sm rounded-md shadow-sm">
              <option selected value="3000">Ke Tahun</option>
              @foreach ($datasurveis->sortBy('tahun') as $tahun)
              <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
              @endforeach
            </select>
     
      </div>

      {{-- TW --}}
      <div class="col-md-3 col-sm-3 d-flex">
        <select wire:model="daritw" name="daritw" id="daritw" class="form-control form-control-sm rounded-md shadow-sm">
            <option selected hidden>Dari TW</option>
            <option value="1">TW 1</option>
            <option value="2">TW 2</option>
            <option value="3">TW 3</option>
            <option value="4">TW 4</option>
        </select>
        <select wire:model="ketw" name="ketw" id="ketw" class="form-control form-control-sm rounded-md shadow-sm">
          <option selected hidden>Ke TW</option>
          <option value="1">TW 1</option>
          <option value="2">TW 2</option>
          <option value="3">TW 3</option>
          <option value="4">TW 4</option>
        </select>
      </div>

   </div>

   <div class="row">

      {{-- Kolom Urutan --}}
      <div class="col-md-3 col-sm-3 d-flex">
        <select wire:model="orderby" name="orderby" id="orderby" class="form-control form-control-sm rounded-md shadow-sm">
            <option selected value="id">Urutan Default</option>
            <option value="nama">Nama</option>
            <option value="badan_usaha">Badan Usaha</option>
            <option value="tahun">Tahun</option>
            <option value="tw">TW</option>
            <option value="total">Total</option>
        </select>
        <select wire:model="asc" name="asc" id="asc" class="form-control form-control-sm rounded-md shadow-sm">
          <option value="ASC">Terkecil</option>
          <option value="DESC">Terbesar</option>
        </select>
    </div>

      {{-- Pagination --}}
      <div class="col-md-2 col-sm-2 d-flex">
          <select wire:model="paginate" name="paginate" id="paginate" class="form-control form-control-sm rounded-md shadow-sm">
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="50">50</option>
              <option value="100">100</option>
          </select>
      </div>

      <div class="col-md-3 col-sm-3 d-flex">
        <div class="d-grid btn-group" role="group">
          @if ($checked)
          <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Aksi
          </button>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" onclick="confirm('Yakin Ingin Menghapus {{ count($checked) }} Data ?')||event.stopImmediatePropagation()" wire:click="deleteDatas()">Delete ({{ count($checked) }})</a></li>            
              <li><a class="dropdown-item" href="#" onclick="confirm('Yakin Ingin Mengeksport {{ count($checked) }} Data ?')||event.stopImmediatePropagation()" wire:click="eksporexcel">Ekspor Excel ({{ count($checked) }})</a></li>            
          </ul>
          @endif
        </div>
      </div>

   </div>
  
      <div>
        @if (session()->has('info'))
          <div class = "alert alert-danger alert-dismissible fade show" role="alert">
              <div class="row">
              <div class="col-md-11 col-sm-11">
                {{ session('info') }}
              </div>
              <div class="col-md-1 col-sm-1 text-center">
                <button type="button" class="close align-right float-right" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>       
            </div>
          </div>
        @endif
      </div>
    
    <div class="table-responsive-lg">
        <table class="table table-hover">
            <thead>
                <tr>
                  <th><input type="checkbox" wire:model="selectPage"></th>
                  <th class="text-center">No</th>
                  <th>Nama</th>
                  <th>Badan Usaha</th>
                  <th class="text-center">TW</th>
                  <th class="text-center">Tahun</th>
                  <th class="text-center">Total</th>
                  <th class="text-center">Aksi</th>  
                </tr>
              </thead>
              <tbody>
                @foreach ($datasurveis as $datasurvei)
                  <tr class="@if ($this->isChecked($datasurvei->id)) table-primary @endif">
                    <td><input type="checkbox" value="{{ $datasurvei->id }}" wire:model="checked"></td>       
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $datasurvei->nama }}</td>
                    <td>{{ $datasurvei->badan_usaha}}</td>
                    <td class="text-center" >{{ $datasurvei->tw }}</td>
                    <td class="text-center" >{{ $datasurvei->tahun }}</td>
                    <td class="text-center">
                      {{ $datasurvei->total}}
                    </td>
                    <td class="text-center">
                      <a class="btn btn-outline-primary" href="{{ route('detail', $datasurvei->id) }}"><i class="bi bi-eye-fill"></i></i></a>
                      <a class="btn btn-outline-danger"
                      onclick="confirm('Apakah Yakin Ingin Menghapus Data Survei TW {{ $datasurvei->tw }} Tahun {{ $datasurvei->tahun }} Milik {{ $datasurvei->respondence->nama }}  ?')||event.stopImmediatePropagation()"
                      wire:click="deleteSatuData({{$datasurvei->id}})" ><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </td>
                @endforeach

              </tbody>
        </table>
   </div>
    <div class="row mt-4">
      <div class="col-sm-12">
        {{ count($datasurveis) }} dari {{ $datasurveis->total() }}
      </div>
      <div class="col-sm-12">
        {{ $datasurveis->links() }}
      </div>
    </div>
    
</div>

