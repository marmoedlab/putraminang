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
                        <td>Nama</td>
                        <td>NoHp</td>
                        <td>Alamat</td>
                        <td>Logo</td>
                    </thead>
                    <tbody>
                        @foreach ($tokos as $toko)
                            <tr>
                                <td>{{ $toko->nama }}</td>
                                <td class="inner-table">{{ $toko->nohp }}</td>
                                <td class="inner-table">{{ $toko->alamat }}</td>
                                <td>
                                <td class="inner-table">
                                  <img src="/images/{{$toko->logo}}" height="50px"></td>

                                <td> 
                                <a class="btn btn-round btn-primary" href="/tokos/edit/{{Crypt::encrypt($toko->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="/tokos/delete/{{$toko->id}}" onclick="return confirm('Toko {{$toko->name}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>