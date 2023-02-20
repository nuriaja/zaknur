@extends('sb-admin/app')
@section('title','jadwal')

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
                <form method="POST" action="{{route('jadwal.update', ['jadwal' => $jadwal->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">    
                        <label for="hari">hari</label>
                        <input type="text" value="{{$jadwal->hari}}" class="form-control" id="hari" name="hari" >
                    </div>
                    <div class="form-group">
                        <label for="jam">jam</label>
                        <input type="text" value="{{$jadwal->jam}}" class="form-control" id="jam" name="jam" >
                    </div>
                    <div class="form-group">
                        <label for="kelas">kelas</label>
                        <input type="text" value="{{$jadwal->kelas}}" class="form-control" id="kelas" name="kelas" >
                    </div>
                    <div class="form-group">
                        <label for="ruang">ruang</label>
                        <input type="text" value="{{$jadwal->ruang}}" class="form-control" id="ruang" name="ruang" >
                    </div>
                    <div class="form-group">
                        <label for="mapel">mapel</label>
                        <input type="text" value="{{$jadwal->mapel}}" class="form-control" id="mapel" name="mapel" >
                    </div>
                    <div class="form-group">
                        <label for="guru">guru</label>
                        <input type="text" value="{{$jadwal->guru}}" class="form-control" id="guru" name="guru" >
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update" >
                        <a href="/jadwal" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection