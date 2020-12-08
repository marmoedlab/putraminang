<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Crypt;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $kategoriProduks = KategoriProduk::all();
        return view('kategoriProduk.view', ['kategoriProduks' => $kategoriProduks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategoriProduk.create');

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
        $kategoriProduks = new KategoriProduk();
        $kategoriProduks->kategori   = $request['kategori'];
       
        $kategoriProduks->save();

        return redirect('/kategoriProduks')->with('status', 'Kategori Added!');
        
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
        $kategoriProduks = KategoriProduk::where('id', $id)->first();
        

        return View('kategoriProduk.edit',['kategoriProduks' => $kategoriProduks]);
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
        $kategoriProduks = KategoriProduk::find($id);
        $kategoriProduks->kategori   = $request['kategori'];
        $kategoriProduks->update();

        return redirect('/kategoriProduks')->with('status', 'Kategori Produk Added!');
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
        $kategoriProduks = KategoriProduk::find($id);

       $kategoriProduks->delete();

       return redirect()->to('/kategoriProduks');
    }
}
