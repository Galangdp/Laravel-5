@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header">Input Kelas</div>
                        <div class="card-body">
                            <form action="{{route('kelas.update', [$kelas->id])}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label class="label-form">Nama</label>
                                    <input type="text" required name="nama" value="{{$kelas->nama}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="label-form">Jurusan</label>
                                    <input type="text" required name="jurusan" value="{{$kelas->jurusan}}" class="form-control">
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
</div>
@endsection
