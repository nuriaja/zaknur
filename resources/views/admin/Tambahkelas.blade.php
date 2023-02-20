@extends('sb-admin/app')
@section('title','Kelas')

@section('content')

<div class="card">
    <div class="card-header">Tambah Kelas</div>
<div class="card-body">
      <form action="{{route('kelas.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" class="form-control">
        </div>
        <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <select class="form-control" id="jenjang" name="jenjang">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a  href="/kelas" class="btn btn-danger">Back</a>

      </form>
</div>
</div>        

@endsection