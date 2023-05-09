@extends('template')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="card-title">Edit Data Registrasi</h3>
                        </div>
                        <div class="col-auto">
                            {{-- <button class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i><b>Tambah Data Customer</b></button> --}}
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('registrasi.update', $edit['id']) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
												<label for="exampleFormControlSelect1">Nama</label>
                                                <input value="{{$edit['nama']}}" type="text" class="form-control {{$errors->first('nama')?"is-invalid":""}}" id="nama" name="nama">

                                                @error('nama')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
											</div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
												<label for="exampleFormControlSelect1">Jenis Kelamin</label>
												<select class="form-control" name="jk" id="exampleFormControlSelect1">
                                                    <option hidden>-== Pilih Nama Mata Kuliah ==-</option>
                                                    <option value="L" <?= ($edit['jk'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
                                                    <option value="P" <?= ($edit['jk'] == 'P') ? 'selected' : '' ?>>Perempuan</option>               
												</select>

                                                @error('jk')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
											</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Agama</label>
												<select class="form-control" name="agama" id="exampleFormControlSelect1">
                                                    <option hidden>-== Pilih Agama ==-</option>
                                                    <option value="Islam" <?= ($edit['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
                                                    <option value="Kristen" <?= ($edit['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                                                    <option value="Katolik" <?= ($edit['agama'] == 'Katolik') ? 'selected' : '' ?>>Katolik</option>               
                                                    <option value="Hindu" <?= ($edit['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>               
                                                    <option value="Budha" <?= ($edit['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>               
                                                    <option value="Konghucu" <?= ($edit['agama'] == 'Konghucu') ? 'selected' : '' ?>>Konghucu</option>               
												</select>

                                                @error('jk')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Jurusan Pilihan</label>
												<select class="form-control" name="jurusan" id="exampleFormControlSelect1">
                                                    <option hidden>-== Pilih Nama Jurusan ==-</option>
                                                    <option value="PPL" <?= ($edit['jurusan'] == 'PPL') ? 'selected' : '' ?>>Pengembangan Perangkat Lunak</option>
                                                    <option value="PSJ" <?= ($edit['jurusan'] == 'PSJ') ? 'selected' : '' ?>>Pengelolaan Sistem & Jaringan</option>               
												</select>

                                                @error('jurusan')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
     
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Sekolah Asal</label>
                                                        <input value="{{$edit['asal_sekolah']}}" type="text" class="form-control {{$errors->first('asal_sekolah')?"is-invalid":""}}" id="nama" name="asal_sekolah">
                                                        <input hidden value="{{$edit['no_reg']}}" type="text" class="form-control" id="nama" name="no_reg">
                                                        @error('asal_sekolah')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Alamat</label>
                                                        <textarea class="form-control {{$errors->first('sekolah_asal')?"is-invalid":""}}" name="alamat" id="" cols="30" rows="10">
                                                            {{$edit['alamat']}}
                                                        </textarea>
                                                        @error('alamat')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        <div class="card-footer">
                            <center>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection