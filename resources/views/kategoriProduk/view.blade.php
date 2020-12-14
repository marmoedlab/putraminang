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
                    <a class="btn btn-round btn-primary" href="{{asset('/kategoriProduks/add')}}">Tambah Kategori Produk</a>
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
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($kategoriProduks as $kategoriProduk)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $kategoriProduk->kategori }}</td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="kategoriProduks/edit/{{Crypt::encrypt($kategoriProduk->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="kategoriProduks/delete/{{$kategoriProduk->id}}" onclick="return confirm('Kategori Produk {{$kategoriProduk->name}} akan dihapus?')">Hapus</a>
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