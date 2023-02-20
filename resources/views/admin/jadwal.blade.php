@extends('sb-admin/app')
@section('title','Jadwal')

@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Jadwal</h1>
    <a href="{{ route('jadwal.create') }}" class="btn btn-success btn-sm mb-4">Tambah Jadwal</a>
    <div class="table-responsive">
         <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-bordered  " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Ruang</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                            @foreach($jadwal as $k)
                                <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$k->hari}}
                                </td>
                                <td>
                                    {{$k->jam}}
                                </td>
                                <td>
                                    {{$k->kelas}}
                                </td>
                                <td>
                                    {{$k->ruang}}
                                </td>
                                <td>
                                    {{$k->mapel}}
                                </td>
                                <td>
                                    {{$k->guru}}

                                </td>
                               
                                <td>
                                <form action="{{route('jadwal.destroy', ['jadwal' => $k->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('jadwal.edit', ['jadwal' => $k->id])}}" class="btn btn-warning  btn-md"><i class="fas fa-edit"></i>   edit </a>
                                        <button class="btn btn-danger  btn-md"><i class="fas fa-trash"></i> hapus   </button>
                                        <!-- <a href=" " class="btn btn-primary  btn-md"><i class="fas fa-eye"></i> view    </a> -->
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection