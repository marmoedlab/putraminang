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
                        @foreach ($kategoriProduks as $kategoriProduk)
                            <tr>
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
        </div>
    </body>
    </html>