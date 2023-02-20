@extends('sb-admin/app')
@section('title','siswa')

@section('content')

<div class="card">
    <div class="card-header">Tambah Siswa</div>
<div class="card-body">
      <form action="{{route('siswa.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="nisn">Nisn</label>
        <input type="text" id="nisn" name="nisn" class="form-control">
        </div>
      <div class="mb-3">
        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" id="nama_siswa" name="nama_siswa" class="form-control">
        </div>
        <div class="form-group">
                        <label for="jenis kelamin">Jenis kelamin</label>
                        <select class="form-control" id="jenis kelamin" name="jenis kelamin">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
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
        <a  href="/siswa" class="btn btn-danger">Back</a>

      </form>
</div>
</div>        

@endsection