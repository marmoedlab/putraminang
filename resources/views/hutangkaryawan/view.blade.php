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
                    <a class="btn btn-round btn-primary" href="{{asset('/hutangKaryawans/add')}}">Tambah Hutang Karyawan</a>
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
                                <th>Tanggal Hutang</th>
                                <th>Nama Karyawan</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($hutangKaryawans as $hutangKaryawan)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $hutangKaryawan->tanggalHutang }}</td>
                                    <td>{{ $hutangKaryawan->namaKaryawan }}</td>
                                    <td>{{ $hutangKaryawan->jumlahHutang }}</td>
                                    <td>{{ $hutangKaryawan->keterangan }}</td>
                                    <td>
                                        <a class="btn btn-round btn-primary" href="{{asset('')}}hutangKaryawans/edit/{{Crypt::encrypt($hutangKaryawan->id)}}">Edit</a>                 
                                        <a class="btn btn-round btn-danger" href="{{asset('')}}hutangKaryawans/delete/{{$hutangKaryawan->id}}" onclick="return confirm('Hutang Karyawan {{$hutangKaryawan->name}} akan dihapus?')">Hapus</a>
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