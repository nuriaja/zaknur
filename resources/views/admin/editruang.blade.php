@extends('sb-admin/app')
@section('title','ruang')

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
                <form method="POST" action="{{route('ruang.update', ['ruang' => $ruang->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">ruang</label>
                        <input type="text" value="{{$ruang->ruang}}" class="form-control" id="ruang" name="ruang" >
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update" >
                        <a href="/ruang" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection