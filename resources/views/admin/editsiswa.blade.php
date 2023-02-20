@extends('sb-admin/app')
@section('title','siswa')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                {{-- @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form method="POST" action="{{route('siswa.update', ['siswa' => $siswa->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nisn">nisn</label>
                        <input type="text" value="{{$siswa->nisn}}" class="form-control" id="nisn" name="nisn" >
                    </div>
                    <div class="form-group">
                        <label for="nama_siswa">nama siswa</label>
                        <input type="text" value="{{$siswa->nama_siswa}}" class="form-control" id="nama_siswa" name="nama_siswa" >
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis kelamin</label>
                        <input type="text" value="{{$siswa->jenis_kelamin}}" class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit"  href="/siswa" class="btn btn-success" value="Update" >
                        <a href="/siswa" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection