<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Messenger</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row" id="app">
                <ul class="list-group offset-4 col-4">
                    <li class="list-group-item active">Chat Room</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <input type="text" class="form-control" placeholder="Type your message">
                </ul>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
