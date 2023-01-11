@extends('sb-admin/app')
@section('','mapel')
@section('title','mapel')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shawod mb-4">            
            <div class="card-body">
                <form method='POST' enctype='multipart/form-data' action="">
                @csrf
                    <div class="form-group">
                        <label for="id_siswa">NO.</label>
                        <input type="text" class="form-control" id="id_siswa" name="id_siswa">  
                    </div>                    
                    <div class="form-group">
                        <label for="nama_projct">HARI</label>
                        <select name="id_jenis" id="jenid_id" class="input-group">
                            <option value="">Senin</option>
                            <option value="">Selasa</option>
                            <option value="">Rabu</option>
                            <option value="">Kamis</option>
                            <option value="">Jum'at</option>
                        </select>   
                    </div>
            
                    <div class="form-group">
                        <label for="deskripsi">MAPEL</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                         <a href="/Siswa" class = "btn btn-danger">Batal</a>                   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection