@extends('sb-admin/app')
@section('title','Mapel')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Mapel</h1>
    <a href="" class="btn btn-warning btn-sm mb-4">Edit Mapel</a>
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th scope="col">No</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jum'at</th>
                        </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                   @foreach ($senin as $s)
                                    {{$s->mapel->nama_mapel}} <br>
                                   @endforeach
                                </td>
                                <td>
                                @foreach ($selasa as $s)
                                    {{$s->mapel->nama_mapel}} <br>
                                   @endforeach
                                </td>
                                <td>
                                @foreach ($rabu as $s)
                                    {{$s->mapel->nama_mapel}} <br>
                                   @endforeach
                                </td>
                                <td>    
                                @foreach ($kamis as $s)
                                    {{$s->mapel->nama_mapel}} <br>
                                   @endforeach
                                </td>
                                <td>
                                @foreach ($jumat as $s)
                                    {{$s->mapel->nama_mapel}} <br>
                                   @endforeach
                                </td>
                                <tr>
                               
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection