@extends('template')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="card-title">Data Registrasi</h3>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('export') }}">
                                <button class="btn btn-primary"><b>Eksport PDF</b></button>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col" >#</th>
                                <th scope="col" >No Registrasi</th>
                                <th scope="col" >Nama</th>
                                <th scope="col" >Jenis Kelamin</th>
                                <th scope="col" >Alamat</th>
                                <th scope="col" >Agama</th>
                                <th scope="col" >Asal Sekolah</th>
                                <th scope="col" >Jurusan</th>
                                <th scope="col" >Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($index as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$item->no_reg}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jk}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->asal_sekolah}}</td>
                                <td>{{$item->jurusan}}</td>
                                <td>
                                    <a href="{{ route('registrasi.edit', $item->id) }}" style="text-decoration: none; color: white">
                                        <button type="button" class="btn btn-icon btn-round btn-secondary">
                                            <i class="fas fa-edit"></i>
                                    </a>
                                    </button> &nbsp;
                                    <a href="{{ route('registrasi.delete', $item->id) }}">
                                        <button onclick="return confirm('Yakin data ingin dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection