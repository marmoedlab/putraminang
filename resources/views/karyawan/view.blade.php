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
                        <td>No KTP</td>
                        <td>Nama Karyawan</td>
                        <td>Alamat</td>
                        <td>No Hp</td>
                        <td>Jenis Karyawan</td>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td class="inner-table">{{ $karyawan->noktp }}</td>
                                <td>{{ $karyawan->namaKaryawan }}</td>
                                <td class="inner-table">{{ $karyawan->alamat }}</td>
                                <td class="inner-table">{{ $karyawan->nohp }}</td>
                                <td class="inner-table">{{ $karyawan->kategoriKaryawan->kategori   }}</td>
                                <td> 
                                <a class="btn btn-round btn-primary" href="/karyawans/edit/{{Crypt::encrypt($karyawan->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="/karyawans/delete/{{$karyawan->id}}" onclick="return confirm('Karyawan {{$karyawan->namaKaryawan}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>