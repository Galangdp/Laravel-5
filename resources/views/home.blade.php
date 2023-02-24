@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card mb-4">
                <div class="card-header">Database Kelas</div>
                <div class="card-body">
                    <div class="table-responsive">
                    <a href="/siswa" class="btn btn-primary mb-2">Data Base Siswa</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $row)
                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->jurusan}}</td>
                                    <td>
                                        <form action="{{route('kelas.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Yakin Menghapus?')">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('kelas.edit', [$row->id])}}" class="btn btn-warning">Edit</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            <div class="card">
                    <div class="card-header">Input Kelas</div>
                    <div class="card-body">
                        <form action="{{route('kelas.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="label-form">Nama</label>
                                <input type="text" required name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Jurusan</label>
                                <input type="text" required name="jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Mashok</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
