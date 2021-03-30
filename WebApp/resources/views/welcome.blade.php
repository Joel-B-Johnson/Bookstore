<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href=".../public/favicon.ico"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../sass/app.scss" />
        <title>Rickzon</title>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="../js/app.js"></script>
    </body>
</html>
