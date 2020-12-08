<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKaryawan;
use App\Models\Karyawan;
use Crypt;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawans = Karyawan::all();
        // $karyawans = Karyawan::with(['KategoriKaryawan'])->get();
        return view('karyawan.view', [
        	'karyawans' => $karyawans,
        ]);
        // return response()->json(['data' => $karyawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategoriKaryawans = KategoriKaryawan::all();
        return view('karyawan.create', ['kategoriKaryawans' => $kategoriKaryawans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $karyawans = new Karyawan();
        $karyawans->noktp   = $request['noktp'];
        $karyawans->namaKaryawan   = $request['namaKaryawan'];
        $karyawans->alamat   = $request['alamat'];
        $karyawans->nohp   = $request['nohp'];
        $karyawans->jenisKaryawan   = $request['jenisKaryawan'];
       
        $karyawans->save();

        return redirect('/karyawans')->with('status', 'Karyawan Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $id=Crypt::decrypt($id);
        
        $karyawans = Karyawan::where('id', $id)->first();
        $kategoriKaryawans = KategoriKaryawan::all();
        

        return View('karyawan.edit',[
        	'kategoriKaryawans' => $kategoriKaryawans,
        	'karyawans' => $karyawans
        ]);
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
        //
        $karyawans = Karyawan::find($id);
        $karyawans->noktp   = $request['noktp'];
        $karyawans->namaKaryawan   = $request['namaKaryawan'];
        $karyawans->alamat   = $request['alamat'];
        $karyawans->nohp   = $request['nohp'];
        $karyawans->jenisKaryawan   = $request['jenisKaryawan'];
        $karyawans->update();

        return redirect('/karyawans')->with('status', 'Karyawan Updatted!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawans = Karyawan::find($id);

       $karyawans->delete();

       return redirect()->to('/karyawans');
    }
}
