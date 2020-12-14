@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <form action="{{url('/jenisSatuanBarangs/update', $JenisSatuanBarangs->id)}}" method="POST" class="form-horizontal" id="demo-form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="card-header">
                            <h1> Enter Details to create a product</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="satuan" placeholder="Satuan" value="{{$JenisSatuanBarangs->satuan}}" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Singkatan Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="singkatanSatuan" value="{{$JenisSatuanBarangs->singkatanSatuan}}" placeholder="Singkatan Satuan" required="required" class="form-control" oninvalid="this.setCustomValidity('*Wajib di isi')" oninput="this.setCustomValidity('')">
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