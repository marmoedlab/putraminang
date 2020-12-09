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
                    <a class="btn btn-round btn-primary" href="{{asset('kategoriKaryawans/add')}}">Tambah Kategori</a>
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
                                <th>Kategori</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($kategoriKaryawans as $kategoriKaryawan)
                                <tr>
                                    <td>{{ $kategoriKaryawan->kategori }}</td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="{{asset('')}}kategoriKaryawans/edit/{{Crypt::encrypt($kategoriKaryawan->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="{{asset('')}}kategoriKaryawans/delete/{{$kategoriKaryawan->id}}" onclick="return confirm('Kategori Karyawan {{$kategoriKaryawan->name}} akan dihapus?')">Hapus</a>
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