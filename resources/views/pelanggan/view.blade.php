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
                        <td>Nama Pelanggan</td>
                        <td>Alamat</td>
                        <td>No Hp</td>
                    </thead>
                    <tbody>
                        @foreach ($pelanggans as $pelanggan)
                            <tr>
                                <td class="inner-table">{{ $pelanggan->noktp }}</td>
                                <td>{{ $pelanggan->namaPelanggan }}</td>
                                <td class="inner-table">{{ $pelanggan->alamat }}</td>
                                <td class="inner-table">{{ $pelanggan->nohp }}</td>
                                <td> 
                                <a class="btn btn-round btn-primary" href="/pelanggans/edit/{{Crypt::encrypt($pelanggan->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="/pelanggans/delete/{{$pelanggan->id}}" onclick="return confirm('pelanggan {{$pelanggan->namaPelanggan}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>