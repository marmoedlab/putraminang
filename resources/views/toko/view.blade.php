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
                    <a class="btn btn-round btn-primary" href="{{asset('/tokos/add')}}">Tambah Toko</a>
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($tokos as $toko)
                                <tr>
                                    <td>{{ $toko->nama }}</td>
                                    <td>{{ $toko->nohp }}</td>
                                    <td>{{ $toko->alamat }}</td>
                                    <td><img src="/images/{{$toko->logo}}" height="50px"></td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="{{asset('')}}tokos/edit/{{Crypt::encrypt($toko->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="{{asset('')}}tokos/delete/{{$toko->id}}" onclick="return confirm('Toko {{$toko->name}} akan dihapus?')">Hapus</a>
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