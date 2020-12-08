<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSatuanBarang;
use Crypt;

class JenisSatuanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $JenisSatuanBarangs = JenisSatuanBarang::all();
        return view('jenissatuanbarang.view', ['JenisSatuanBarangs' => $JenisSatuanBarangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jenissatuanbarang.create');
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
        $JenisSatuanBarangs = new JenisSatuanBarang();
        $JenisSatuanBarangs->satuan   = $request['satuan'];
        $JenisSatuanBarangs->singkatanSatuan   = $request['singkatanSatuan'];
       
        $JenisSatuanBarangs->save();

        return redirect('/jenisSatuanBarangs')->with('status', 'Satuan Barang Added!');
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
        $JenisSatuanBarangs = JenisSatuanBarang::where('id', $id)->first();
        

        return View('jenisSatuanBarang.edit',['JenisSatuanBarangs' => $JenisSatuanBarangs]);
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
        $JenisSatuanBarangs = JenisSatuanBarang::find($id);
        $JenisSatuanBarangs->satuan   = $request['satuan'];
        $JenisSatuanBarangs->singkatanSatuan   = $request['singkatanSatuan'];
        $JenisSatuanBarangs->update();

        return redirect('/jenisSatuanBarangs')->with('status', 'Satuan Barang Updated!');
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
        $JenisSatuanBarangs = JenisSatuanBarang::find($id);

       $JenisSatuanBarangs->delete();

       return redirect()->to('/jenisSatuanBarangs');
    }
}
