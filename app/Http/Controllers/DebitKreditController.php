<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DebitKredit;
use App\Models\Pelanggan;
use Crypt;
use Illuminate\Support\Facades\DB;

class DebitKreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $debitKredits = DebitKredit::all();
        $debitKredits = DB::select("SELECT id, tanggal, if(`pilih`= 'debit', jumlah,0) as debit, if(`pilih`= 'kredit', jumlah,0) as kredit, if(`pilih`= 'hutang', jumlah,0) as hutang, keterangan FROM `debit_kredits`");
        
        return view('debitkredit.view', ['debitKredits' => $debitKredits]);
        // return response()->json(['data' => $debitKredits]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pelanggans = Pelanggan::all();
        return view('debitkredit.create', ['pelanggans' => $pelanggans]);
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
        $debitKredits = new DebitKredit();
        $pilih = $request['pilih'];
        // if($pilih == "Debit") {
        //     $debitKredits->tanggal   = $request['tanggal'];
        //     $debitKredits->debit   = $request['jumlah'];
        //     $debitKredits->kredit   = 0;
        //     $debitKredits->hutang   = 0;
        //     $debitKredits->keterangan   = $request['keterangan'];
        // }elseif($pilih == "Kredit") {
        //     $debitKredits->tanggal   = $request['tanggal'];
        //     $debitKredits->debit   = 0;
        //     $debitKredits->kredit   = $request['jumlah'];
        //     $debitKredits->hutang   = 0;
        //     $debitKredits->keterangan   = $request['keterangan'];
        // }else {
        //     $debitKredits->tanggal   = $request['tanggal'];
        //     $debitKredits->debit   = 0;
        //     $debitKredits->kredit   = 0;
        //     $debitKredits->hutang   = $request['jumlah'];
        //     $debitKredits->keterangan   = $request['keterangan'];
        // }
        

        if($pilih == "Debit") {
            $cekIdPelanggan = DebitKredit::where('idPelanggan', $request['idPelanggan'])->first();
            $cekSaldo = DebitKredit::where('saldo', $request['idPelanggan'])->first();

            if(empty($cekIdPelanggan)){
                return redirect('/debitKredits')->with('status', 'Saldo Anda Masih Kosong Tidak bisa melakukan Debit');

            }
            else{
                return redirect('/debitKredits')->with('status', 'Data Added!');
            }
        }
        $debitKredits->tanggal   = $request['tanggal'];
        $debitKredits->pilih   = $request['pilih'];
        $debitKredits->jumlah   = $request['jumlah'];
        $debitKredits->keterangan   = $request['keterangan'];
        $debitKredits->idPelanggan   = $request['idPelanggan'];
       
        $debitKredits->save();

        return redirect('/debitKredits')->with('status', 'Data Added!');
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
        $debitKredits = DebitKredit::where('id', $id)->first();
        

        return View('debitkredit.edit',['debitKredits' => $debitKredits]);
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
        $debitKredits = DebitKredit::find($id);

       $debitKredits->delete();

       return redirect()->to('/debitKredits');
    }
}
