@extends('sb-admin/app')
@section('title','ruang')

@section('content')

<div class="card">
    <div class="card-header">Tambah Ruang</div>
<div class="card-body">
      <form action="{{route('ruang.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="Ruang">Ruang</label>
        <input type="text" id="ruang" name="ruang" class="form-control">
        </div>

        <!-- <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <select class="form-control" id="jenjang" name="jenjang">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <a  href="/ruang" class="btn btn-danger">Back</a>

      </form>
</div>
</div>        

@endsection