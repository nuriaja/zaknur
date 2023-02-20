@extends('sb-admin/app')
@section('title','jadwal')

@section('content')

<div class="card">
    <div class="card-header">Tambah jadwal</div>
<div class="card-body">
      <form action="{{route('jadwal.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="hari">hari</label>
        <input type="text" id="hari" name="hari" class="form-control">
        </div>
      <div class="mb-3">
        <label for="Jam">Jam</label>
        <input type="text" id="Jam" name="jam" class="form-control">
        </div>
      <div class="mb-3">
        <label for="kelas">kelas</label>
        <input type="text" id="kelas" name="kelas" class="form-control">
        </div>
      <div class="mb-3">
        <label for="ruang">ruang</label>
        <input type="text" id="ruang" name="ruang" class="form-control">
        </div>
      <div class="mb-3">
        <label for="mapel">mapel</label>
        <input type="text" id="mapel" name="mapel" class="form-control">
        </div>
      <div class="mb-3">
        <label for="guru">guru</label>
        <input type="text" id="guru" name="guru" class="form-control">
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
        <a  href="/jadwal" class="btn btn-danger">Back</a>

      </form>
</div>
</div>        

@endsection