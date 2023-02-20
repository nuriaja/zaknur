<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas',[
           "kelas" => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Tambahkelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'jenjang' => 'required',
            'kelas' => 'required'
        ]);

        Kelas::create($validate);
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $senin = Mapel::where('hari_id', 1)->get();
        $selasa = Mapel::where('hari_id' , 2)->get();
        $rabu = Mapel::where('hari_id' , 3)->get();
        $kamis = Mapel::where('hari_id' , 4)->get();
        $jumat = Mapel::where('hari_id' , 5)->get();
        return view('admin.mapel', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('admin.editkelas',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "jenjang" =>'required',
            "kelas" =>'required'
        ]);
        Kelas::find($id)->update($validate);
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->back();

    
    }
}
