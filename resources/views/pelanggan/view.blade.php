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
                    <a class="btn btn-round btn-primary" href="{{asset('/pelanggans/add')}}">Tambah Pelanggan</a>
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
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead>
                                <th>No KTP</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $pelanggan->noktp }}</td>
                                    <td>{{ $pelanggan->namaPelanggan }}</td>
                                    <td>{{ $pelanggan->alamat }}</td>
                                    <td>{{ $pelanggan->nohp }}</td>
                                    <td><a class="btn btn-round btn-primary" href="/pelanggans/edit/{{Crypt::encrypt($pelanggan->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="/pelanggans/delete/{{$pelanggan->id}}" onclick="return confirm('pelanggan {{$pelanggan->namaPelanggan}} akan dihapus?')">Hapus</a>
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
