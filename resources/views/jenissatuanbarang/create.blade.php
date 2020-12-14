@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <form class="form-horizontal" id="demo-form" enctype="multipart/form-data" action="{{url('/jenisSatuanBarangs/store')}}" method="POST" data-parsley-validate>
                        <div class="card-header">
                            <h1> Enter Details to create a product</h1>
                        </div>
                        <div class="card-body">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="satuan" class="form-control" placeholder="Satuan" required="required" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Singkatan Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="singkatanSatuan" class="form-control" placeholder="Singkatan Satuan" required="required" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
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