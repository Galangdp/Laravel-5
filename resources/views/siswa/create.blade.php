@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">Input Siswa</div>
                    <div class="card-body">
                        <form action="{{route('siswa.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="label-form">Nama</label>
                                <input type="text" required name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Pilih Jurusan</label>
                                <select required name="id_kelas" class="form-control">
                                    <option value="">Pilih Nama & Jurusan</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{$k->id}}">{{$k->nama}} / {{$k->jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Alamat</label>
                                <input type="text" required name="alamat" class="form-control">
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
