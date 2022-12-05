<div>
    <div class="container">
    <div class="row">
        <h3>Atur Triwulan dan Tahun Survei</h3>
        <div class="col-sm-6">
          <label for="tw">Triwulan</label>
          <select class="form-select mb-3 {{$errors->first('tw') ? "is-invalid" : "" }}" wire:model="tw">
            <option selected disabled>Pilih TW</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
 
          </select>

          @error('tw')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror

        </div>

        <div class="col-sm-6">
          <label for="tahun">Tahun</label>
          <input  type="text" wire:model="tahun" class="form-control {{$errors->first('tahun') ? "is-invalid" : "" }}" id="tahun" placeholder="Isikan Tahun...." >
          @error('tahun')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>

        <div class="text-center">
            <button class="btn btn-info mb-4" wire:click="submit">Ubah</button>
        </div>
           
      </div>

    </div>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
</div>
