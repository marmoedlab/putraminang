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
                <form method="POST" action="{{url('/pelanggans/update', $pelanggans->id)}}">
                    @csrf
                    <h1> Enter Details to create a product</h1>

                    <div class="form-input">
                        <label>No KTP</label>
                        <input type="text" name="noktp" value="{{$pelanggans->noktp}}">
                    </div>

                    <div class="form-input">
                        <label>Nama Pelanggan</label>
                        <input type="text" name="namaPelanggan" value="{{$pelanggans->namaPelanggan}}">
                    </div>

                    <div class="form-input">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="{{$pelanggans->alamat}}">
                    </div>

                    <div class="form-input">
                        <label>No Hp</label>
                        <input type="text" name="nohp" value="{{$pelanggans->nohp}}">
                    </div>

                   

                    

                    

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>