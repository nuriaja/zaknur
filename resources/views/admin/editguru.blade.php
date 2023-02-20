@extends('sb-admin/app')
@section('title','guru')

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
                <form method="POST" action="{{route('guru.update', ['guru' => $guru->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">nip</label>
                        <input type="text" value="{{$guru->nip}}" class="form-control" id="nip" name="nip" >
                    </div>
                    <div class="mb-3">
                        <label for="Jam">Jam</label>
                        <input type="text" value="{{$guru->jam}}" class="form-control" id="jam" name="jam" >
                    </div>
                    <div class="form-group">
                        <label for="nama_guru">nama guru</label>
                        <input type="text" value="{{$guru->nama_guru}}" class="form-control" id="nama_guru" name="nama_guru" >
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis kelamin</label>
                        <input type="text" value="{{$guru->jenis_kelamin}}" class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit" href="/guru" class="btn btn-success" value="Update" >
                        <a href="/guru" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection