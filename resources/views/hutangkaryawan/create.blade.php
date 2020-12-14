@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <form class="form-horizontal" id="demo-form" enctype="multipart/form-data" action="{{url('/hutangKaryawans/store')}}" method="POST" data-parsley-validate>
                        <div class="card-header">
                            <h1> Enter Details to create a product</h1>
                        </div>
                        <div class="card-body">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Hutang</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggalHutang" class="form-control" placeholder="Tanggal Hutang" required="required" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namaKaryawan" class="form-control" placeholder="Nama Karyawan" required="required" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jumlahHutang" class="form-control" placeholder="Jumlah" required="required" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <select name="keterangan" class="form-control select2bs4" required="required">
                                        <option value="">--Pilih Keterangan--</option>
                                        <option value="Belanja">Belanja</option>
                                        <option value="Kasbon">Kasbon</option>
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