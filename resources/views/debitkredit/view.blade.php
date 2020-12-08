    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Products | Product Store</title>
        <!-- Styles etc. -->
    </head>
    <body>
         @if ($message = Session::get('status'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Here's a list of available products</h1>
                <table>
                    <thead>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Debit</td>
                        <td>Kredit</td>
                        <td>Saldo</td>
                        <td>Hutang</td>
                        <td>Keterangan</td>
                    </thead>
                    <tbody>
                         <?php $i = 0; ?>
                        @foreach ($debitKredits as $debitKredit)
                            <?php $i++; ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $debitKredit->tanggal }}</td>
                                <td>{{ $debitKredit->debit }}</td>
                                <td>{{ $debitKredit->kredit }}</td>
                                <td>

                                </td>
                                <td>{{ $debitKredit->hutang }}</td>
                                <td>{{ $debitKredit->keterangan }}</td>
                                <td> 
                                <a class="btn btn-round btn-primary" href="debitKredits/edit/{{Crypt::encrypt($debitKredit->id)}}">Edit</a>                 
                              <a class="btn btn-round btn-danger" href="debitKredits/delete/{{$debitKredit->id}}" onclick="return confirm('Data akan dihapus?')">Hapus</a> 
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>