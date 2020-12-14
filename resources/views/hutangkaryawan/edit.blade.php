@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <form action="{{url('/hutangKaryawans/update', $hutangKaryawans->id)}}" method="POST" class="form-horizontal" id="demo-form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="card-header">
                            <h1> Enter Details to create a product</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Hutang</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggalHutang" placeholder="Tanggal Hutang" value="{{$hutangKaryawans->tanggalHutang}}" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namaKaryawan" value="{{$hutangKaryawans->namaKaryawan}}" placeholder="Nama Karyawan" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jumlahHutang" value="{{$hutangKaryawans->jumlahHutang}}" placeholder="Jumlah" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <select name="keterangan" class="form-control select2bs4" required="required">
                                        <option value="">--Pilih Jenis Karyawan--</option>
                                        <option @if ($hutangKaryawans->keterangan === "Belanja") selected @endif value="Belanja">Belanja</option>
                                        <option @if ($hutangKaryawans->keterangan === "Kasbon") selected @endif value="Kasbon">Kasbon</option>
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