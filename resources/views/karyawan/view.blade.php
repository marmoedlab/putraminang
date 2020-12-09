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
                    <a class="btn btn-round btn-primary" href="{{asset('karyawans/add')}}">Tambah Karyawan</a>
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
                                <td>No KTP</td>
                                <td>Nama Karyawan</td>
                                <td>Alamat</td>
                                <td>No Hp</td>
                                <td>Jenis Karyawan</td>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($karyawans as $karyawan)
                                <tr>
                                    <td>{{ $karyawan->noktp }}</td>
                                    <td>{{ $karyawan->namaKaryawan }}</td>
                                    <td>{{ $karyawan->alamat }}</td>
                                    <td>{{ $karyawan->kategoriKaryawan->kategori}}</td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="{{asset('')}}karyawans/edit/{{Crypt::encrypt($karyawan->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="{{asset('')}}/karyawans/delete/{{$karyawan->id}}" onclick="return confirm('Karyawan {{$karyawan->namaKaryawan}} akan dihapus?')">Hapus</a>
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