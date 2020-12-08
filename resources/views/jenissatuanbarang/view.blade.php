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
                        <td>Satuan</td>
                        <td>Singkatan Satuan</td>
                    </thead>
                    <tbody>
                         <?php $i = 0; ?>
                        @foreach ($JenisSatuanBarangs as $JenisSatuanBarang)
                            <?php $i++; ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $JenisSatuanBarang->satuan }}</td>
                                <td>{{ $JenisSatuanBarang->singkatanSatuan }}</td>
                                <td> 
                                <a class="btn btn-round btn-primary" href="jenisSatuanBarangs/edit/{{Crypt::encrypt($JenisSatuanBarang->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="jenisSatuanBarangs/delete/{{$JenisSatuanBarang->id}}" onclick="return confirm('Satuan Barang {{$JenisSatuanBarang->name}} akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>