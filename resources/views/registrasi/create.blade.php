@extends('user')
@section('konten')
<div class="container mt-5">
  <div class="text-center pb-2">
    <h1 class="mb-4">Register</h1>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-5">
        <form action="{{ route('registrasi.simpan') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="control-group {{ $errors->first('nama') ? "is-invalid":""}}">
            <input
              type="text"
              class="form-control"
              name="nama"
              placeholder="Nama Lengkap"
            />

            @error('nama')
            <small class="text-danger {{ $errors->first('nama') ? "is-invalid":""}}">
                {{ $message }}
            </small>
            @enderror
            <p class="mt-2"></p>
          </div>
          <div class="control-group">
            <input
              type="text"
              class="form-control {{ $errors->first('asal_sekolah') ? "is-invalid":""}}"
              name="asal_sekolah"
              placeholder="Asal Sekolah"
            />

            @error('asal_sekolah')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
            <p class="mt-2"></p>
          </div>
          <div class="control-group">
              <select class="form-control {{ $errors->first('jk') ? "is-invalid":""}}" name="jk">
                  <option selected="">Jenis Kelamin</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>

                @error('jk')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
                <p class="mt-2"></p>
          </div>
          <div class="control-group">
              <select class="form-control {{ $errors->first('agama') ? "is-invalid":""}}" name="agama">
                  <option selected="">Agama</option>
                  <option>Islam</option>
                  <option>Kristen</option>
                  <option>Katolik</option>
                  <option>Hindu</option>
                  <option>Budha</option>
                  <option>Konghucu</option>
                </select>

                @error('agama')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
                <p class="mt-2"></p>
          </div>
          <div class="control-group">
              <select class="form-control {{ $errors->first('jurusan') ? "is-invalid":""}}" name="jurusan">
                  <option selected="">Jurusan Yang Dipilih</option>
                  <option value="PPL">Pengembangan Perangkat Lunak</option>
                  <option value="PSJ">Pengelolaan Sistem & Jaringan</option>
                </select>

                @error('jurusan')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
                <p class="mt-2"></p>
          </div>
          <div class="control-group">
            <textarea
              class="form-control {{ $errors->first('alamat') ? "is-invalid":""}}"
              rows="6"
              name="alamat"
              placeholder="Alamat"
            ></textarea>

            @error('alamat')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
            <p class="mt-2"></p>
          </div>
          <div>
            <button class="btn btn-primary py-2 px-4"type="submit">Submit</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection