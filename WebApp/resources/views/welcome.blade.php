<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../sass/app.scss" />
        <title>Rickzon</title>
        <link rel="icon" href="../../public/favicon.ico"/>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="../js/app.js"></script>
    </body>
</html>
