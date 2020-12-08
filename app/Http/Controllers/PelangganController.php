<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Crypt;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelanggans = Pelanggan::all();
        return view('pelanggan.view', ['pelanggans' => $pelanggans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pelanggan.create');

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
        $pelanggans = new Pelanggan();
        $pelanggans->noktp   = $request['noktp'];
        $pelanggans->namaPelanggan   = $request['namaPelanggan'];
        $pelanggans->alamat   = $request['alamat'];
        $pelanggans->nohp   = $request['nohp'];
       
        $pelanggans->save();

        return redirect('/pelanggans')->with('status', 'Pelanggan Added!');
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
        $pelanggans = Pelanggan::where('id', $id)->first();
        

        return View('pelanggan.edit',['pelanggans' => $pelanggans]);
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
        $pelanggans = Pelanggan::find($id);
        $pelanggans->noktp   = $request['noktp'];
        $pelanggans->namaPelanggan   = $request['namaPelanggan'];
        $pelanggans->alamat   = $request['alamat'];
        $pelanggans->nohp   = $request['nohp'];
        $pelanggans->update();

        return redirect('/pelanggans')->with('status', 'Pelanggan Updatted!');
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
        $pelanggans = Pelanggan::find($id);

       $pelanggans->delete();

       return redirect()->to('/pelanggans');
    }
}
