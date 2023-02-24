@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Database Siswa</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="/home" class="btn btn-primary mb-2">Home</a>
                        <a href="/siswa/create" class="btn btn-succes mb-2">Add data</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $row)
                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->kelas->jurusan}}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Yakin Menghapus?')">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('siswa.edit', [$row->id])}}" class="btn btn-warning">Edit</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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
