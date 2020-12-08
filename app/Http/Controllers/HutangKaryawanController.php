<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HutangKaryawan;
use Crypt;

class HutangKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hutangKaryawans = HutangKaryawan::all();
        return view('hutangkaryawan.view', ['hutangKaryawans' => $hutangKaryawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hutangkaryawan.create');
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
        $hutangKaryawans = new HutangKaryawan();
        $hutangKaryawans->tanggalHutang   = $request['tanggalHutang'];
        $hutangKaryawans->namaKaryawan   = $request['namaKaryawan'];
        $hutangKaryawans->jumlahHutang   = $request['jumlahHutang'];
        $hutangKaryawans->keterangan   = $request['keterangan'];
       
        $hutangKaryawans->save();

        return redirect('/hutangKaryawans')->with('status', 'Hutang Karyawan Added!');
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
        $hutangKaryawans = HutangKaryawan::where('id', $id)->first();
        

        return View('hutangKaryawan.edit',['hutangKaryawans' => $hutangKaryawans]);
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
        $hutangKaryawans = HutangKaryawan::find($id);
        $hutangKaryawans->tanggalHutang   = $request['tanggalHutang'];
        $hutangKaryawans->namaKaryawan   = $request['namaKaryawan'];
        $hutangKaryawans->jumlahHutang   = $request['jumlahHutang'];
        $hutangKaryawans->keterangan   = $request['keterangan'];
        $hutangKaryawans->update();

        return redirect('/hutangKaryawans')->with('status', 'Hutang Karyawan Updated!');
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
        $hutangKaryawans = HutangKaryawan::find($id);

       $hutangKaryawans->delete();

       return redirect()->to('/hutangKaryawans');
    }
}
