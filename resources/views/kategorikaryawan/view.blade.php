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
                        <td>Kategori</td>
                    </thead>
                    <tbody>
                        @foreach ($kategoriKaryawans as $kategoriKaryawan)
                            <tr>
                                <td>{{ $kategoriKaryawan->kategori }}</td>
                                <td> 
                                <a class="btn btn-round btn-primary" href="kategoriKaryawans/edit/{{Crypt::encrypt($kategoriKaryawan->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="kategoriKaryawans/delete/{{$kategoriKaryawan->id}}" onclick="return confirm('Kategori Karyawan {{$kategoriKaryawan->name}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>