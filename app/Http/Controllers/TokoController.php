<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use Crypt;
use Validator;


class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tokos = Toko::all();
        return view('toko.view', ['tokos' => $tokos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('toko.create');
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
        $validator = Validator::make($request->all(),[
            'image_file' => 'required|image|max:3000'
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $request->file('image_file')->move(public_path('images'), $request->file('image_file')->getClientOriginalName());

        $tokos = new Toko();
        $tokos->nama = $request['nama'];
        $tokos->nohp = $request['nohp'];
        $tokos->alamat = $request['alamat'];
        $tokos->logo       = $request->file('image_file')->getClientOriginalName();

        $tokos->save();

        return redirect('/tokos')->with('status', 'Account Added!');
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
        $tokos = Toko::where('id', $id)->first();
        

        return View('toko.edit',[
            'tokos' => $tokos
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
        if(!empty($request->file('image_file'))){
            
            $validator = Validator::make($request->all(),[
                'image_file' => 'required|image',
            ]);

            if($validator->fails()){
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }
        
        $tokos = Toko::find($id);


        if(!empty($request->file('image_file'))){
            $request->file('image_file')->move(public_path('images'), $request->file('image_file')->getClientOriginalName());
            $tokos->logo = $request->file('image_file')->getClientOriginalName();
        }      


        $tokos->nama = $request['nama'];
        $tokos->nohp = $request['nohp'];
        $tokos->alamat = $request['alamat'];

        $tokos->update();

        return redirect('/tokos')->with('status', 'Account Updatted!');
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
        $toko = Toko::find($id);

       $toko->delete();

       return redirect()->to('/tokos'); 
    }
}
