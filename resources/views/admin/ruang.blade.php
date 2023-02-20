@extends('sb-admin/app')
@section('title','Ruang')

@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Ruang</h1>
    <a href="{{ route('ruang.create') }}" class="btn btn-success btn-sm mb-4">Tambah Data</a>
    <div class="table-responsive">
                <table class="table table-bordered  " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                                @foreach($ruang as $k)
                                <tr>
                                <td>
                                      {{$loop->iteration}}
                                </td>
                                <td>
                                      {{$k->ruang}}
                                </td>
                                <td>
                                <form action="{{route('ruang.destroy', ['ruang' => $k->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('ruang.edit', ['ruang' => $k->id])}}" class="btn btn-warning  btn-md"><i class="fas fa-edit"></i>   edit </a>
                                        <button class="btn btn-danger  btn-md"><i class="fas fa-trash"></i> hapus   </button>
                                        <a href=" " class="btn btn-primary  btn-md"><i class="fas fa-eye"></i> view    </a>
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
@endsection