<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content=" {{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="icon" href="../assets/rick.png"/>
        <scirpt src="https://unpkg.com/vue@3.0.2"></scirpt>
    </head>
    <body>
        <div id="app"></div>
        <script src="../js/app.js"></script>
    </body>
</html>
