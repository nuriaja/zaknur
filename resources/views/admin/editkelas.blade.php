@extends('sb-admin/app')
@section('title','Kelas')

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
                <form method="POST" action="{{route('kelas.update', ['kela' => $kelas->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" value="{{$kelas->kelas}}" class="form-control" id="kelas" name="kelas" >
                    </div>
                    <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <select class="form-control" id="jenjang" name="jenjang">
                            <option value="10" {{$kelas->jenjang == 10 ? 'selected' : ''}} >10</option>
                            <option value="11" {{$kelas->jenjang == 11 ? 'selected' : ''}} >11</option>
                            <option value="12" {{$kelas->jenjang == 12 ? 'selected' : ''}} >12</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update" >
                        <a href="/kelas" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection