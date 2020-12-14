@extends('layouts.master')

@section('title', 'Nama Toko')

@section('username', 'Nama User')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Here's a list of available products</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a class="btn btn-round btn-primary" href="{{asset('/jenisSatuanBarangs/add')}}">Tambah Jenis Satuan</a>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card card-primary">
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Satuan</th>
                                <th>Singkatan Satuan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($JenisSatuanBarangs as $JenisSatuanBarang)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $JenisSatuanBarang->satuan }}</td>
                                    <td>{{ $JenisSatuanBarang->singkatanSatuan }}</td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="{{asset('')}}jenisSatuanBarangs/edit/{{Crypt::encrypt($JenisSatuanBarang->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="jenisSatuanBarangs/delete/{{$JenisSatuanBarang->id}}" onclick="return confirm('Satuan Barang {{$JenisSatuanBarang->name}} akan dihapus?')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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