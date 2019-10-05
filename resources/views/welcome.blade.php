<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <noscript>
            You need to enable JavaScript to run this app.
        </noscript>

        <div data-store="{{ $data }}"></div>
        <div data-years="{{ $years }}"></div>
        <div id="app"></div>

    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
