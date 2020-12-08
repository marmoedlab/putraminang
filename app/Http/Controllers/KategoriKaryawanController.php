<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKaryawan;
use Crypt;

class KategoriKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriKaryawans = KategoriKaryawan::all();
        return view('kategoriKaryawan.view', ['kategoriKaryawans' => $kategoriKaryawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategoriKaryawan.create');
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
        $kategoriKaryawans = new KategoriKaryawan();
        $kategoriKaryawans->kategori   = $request['kategori'];
       
        $kategoriKaryawans->save();

        return redirect('/kategoriKaryawans')->with('status', 'Kategori Added!');
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
        $kategoriKaryawans = KategoriKaryawan::where('id', $id)->first();
        

        return View('kategoriKaryawan.edit',['kategoriKaryawans' => $kategoriKaryawans]);
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
        $kategoriKaryawans = KategoriKaryawan::find($id);
        $kategoriKaryawans->kategori   = $request['kategori'];
        $kategoriKaryawans->update();

        return redirect('/kategoriKaryawans')->with('status', 'Account Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategoriKaryawans = KategoriKaryawan::find($id);

       $kategoriKaryawans->delete();

       return redirect()->to('/kategoriKaryawans');
    }
}
