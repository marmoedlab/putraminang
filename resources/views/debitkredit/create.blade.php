<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Product | Product Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .form-input{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <form method="POST" action="/debitKredits/store">
                    @csrf
                    <h1> Enter Details to create a product</h1>
                    <div class="form-input">
                        <label>Nama Pelanggan</label>
                        <select name="idPelanggan">
                        @foreach ($pelanggans as $pelanggan)
                            <option value="{{$pelanggan->id}}">{{$pelanggan->namaPelanggan}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-input">
                        <label>Pilih</label>
                        <select name="pilih">
                            <option>Debit</option>
                            <option>Kredit</option>
                            <option>Hutang</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal">
                    </div>
                    <div class="form-input">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah">
                    </div>
                    <div class="form-input">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan">
                    </div>

                    

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
