    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Products | Product Store</title>
        <!-- Styles etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Here's a list of available products</h1>
                <table>
                    <thead>
                        <td>No</td>
                        <td>Tanggal Hutang</td>
                        <td>Nama Karyawan</td>
                        <td>Jumlah</td>
                        <td>Keterangan</td>
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
                                <a class="btn btn-round btn-primary" href="hutangKaryawans/edit/{{Crypt::encrypt($hutangKaryawan->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="hutangKaryawans/delete/{{$hutangKaryawan->id}}" onclick="return confirm('Hutang Karyawan {{$hutangKaryawan->name}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>