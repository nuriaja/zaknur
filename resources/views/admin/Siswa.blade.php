@extends('sb-admin/app')
@section('title','Siswa')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Siswa</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-success btn-sm mb-4">Tambah Data</a>
    <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $k)
                                <tr>
                                <td>
                                      {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$k->nisn}}
                                </td>
                                <td>
                                    {{$k->nama_siswa}}
                                </td>
                                <td>
                                     {{$k->jenis_kelamin}}
                                </td>
                                <td>
                                <form action="{{route('siswa.destroy', ['siswa' => $k->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('siswa.edit', ['siswa' => $k->id])}}" class="btn btn-warning  btn-md"><i class="fas fa-edit"></i>   edit </a>
                                        <button class="btn btn-danger  btn-md"><i class="fas fa-trash"></i> hapus   </button>
                                        <a href=" jadwal " class="btn btn-primary  btn-md"><i class="fas fa-eye"></i> view    </a>
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
@endsection