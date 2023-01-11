@extends('sb-admin/app')
@section('title','Kelas')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelas</h1>
    <a href="create" class="btn btn-success btn-sm mb-4">Tambah Data</a>
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Ruang</th>
                                <th scope="col">Action</th>
                        </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    RPL 1
                                </td>
                                <td>
                                    D 202
                                </td>
                                <td>
                                <form action="" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i>    </a>
                                        <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i>    </button>
                                        <a href="/mapel" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i>    </a>
                                    </form> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection