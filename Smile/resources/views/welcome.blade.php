<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <h1>Smile Sense</h1>
        @if(10 > 20)
            <p>condição true</p>
        @endif

    <p>{{ $nome }}</p>    
        
    if($nome == "Pedro")
    <p>O nome é Pedro</p>
    <p>O nome {{ $nome }} e ele tem {{ $idade }} sua profissão é {{ $profissao }}</p>
    @for ($i = 0; $i < count ($arr); $i++)
        <p>{{ $arr [i] }}<p>
    @endfor    

</body>
</html>
