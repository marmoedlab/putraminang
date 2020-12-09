@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <form action="{{url('/karyawans/update', $karyawans->id)}}" method="POST" class="form-horizontal" id="demo-form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="card-header">
                            <h1> Enter Details to create a product</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" name="noktp" placeholder="No KTP" value="{{$karyawans->noktp}}" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namaKaryawan" value="{{$karyawans->namaKaryawan}}" placeholder="Nama Karyawan" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" value="{{$karyawans->alamat}}" placeholder="Alamat" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nohp" value="{{$karyawans->nohp}}" placeholder="Nomor Handphone" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Karyawan</label>
                                <div class="col-sm-10">
                                    <select name="jenisKaryawan" class="form-control select2bs4" required="required">
                                        <option value="">--Pilih Jenis Karyawan--</option>
                                        @foreach ($kategoriKaryawans as $kategoriKaryawan)
                                        <option @if ($karyawans->kategoriKaryawan->id === $kategoriKaryawan->id) selected @endif value="{{$kategoriKaryawan->id}}">{{$kategoriKaryawan->kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection