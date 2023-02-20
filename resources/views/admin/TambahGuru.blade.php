@extends('sb-admin/app')
@section('title','guru')

@section('content')

<div class="card">
    <div class="card-header">Tambah Guru</div>
<div class="card-body">
      <form action="{{route('guru.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="NIP">NIP</label>
        <input type="text" id="NIP" name="nip" class="form-control">
        </div>
      <div class="mb-3">
        <label for="Jam">Jam</label>
        <input type="text" id="Jam" name="jam" class="form-control">
        </div>
      <div class="mb-3">
        <label for="Nama Guru">Nama Guru</label>
        <input type="text" id="Nama Guru" name="nama_guru" class="form-control">
        </div>
        <div class="form-group">
                        <label for="jenis_kelamin">Jenis kelamin</label>
                        <select class="form-control" id="jenis kelamin" name="jenis_kelamin">
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
        <a  href="/guru" class="btn btn-danger">Back</a>

      </form>
</div>
</div>        

@endsection