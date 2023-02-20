@extends('sb-admin/app')
@section('title','Guru')

@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Guru</h1>
    <a href="{{ route('guru.create') }}" class="btn btn-success btn-sm mb-4">Tambah Data</a>
    <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">JAM</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                            @foreach($guru as $k)
                                <tr>
                                <td>
                                     {{$loop->iteration}}
                                </td>
                                <td>
                                     {{$k->nip}}
                                </td>
                                <td>
                                     {{$k->jam}}
                                </td>
                                <td>
                                     {{$k->nama_guru}}
                                </td>
                                <td>
                                     {{$k->jenis_kelamin}}
                                </td>
                               
                                <td>
                                <form action="{{route('guru.destroy', ['guru' => $k->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('guru.edit', ['guru' => $k->id])}}" class="btn btn-warning  btn-md"><i class="fas fa-edit"></i>   edit </a>
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