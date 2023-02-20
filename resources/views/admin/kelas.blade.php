@extends('sb-admin/app')
@section('title','Kelas')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelas</h1>
    <a href="kelas/create" class="btn btn-success btn-sm mb-4">Tambah Data</a>
    <div class="table-responsive">
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $k)
                                <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$k->jenjang}}
                                </td>
                                <td>
                                    {{$k->kelas}}
                                </td>
                                <td>
                                <form action="{{route('kelas.destroy', ['kela' => $k->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('kelas.edit', ['kela' => $k->id])}}" class="btn btn-warning  btn-md"><i class="fas fa-edit"></i>   edit </a>
                                        <button type="submit" class="btn btn-danger  btn-md"><i class="fas fa-trash"></i> hapus   </button>
                                        <a href="{{route('kelas.show', $k->id)}}" class="btn btn-primary  btn-md"><i class="fas fa-eye"></i> view    </a>
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