<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio del sitio</title>
</head>
<body>
    @extends('layouts.app')
    @section('sidebar')
    @parent
        <p>Esto se añade a la barra lateral.</p>
    {{-- variables --}}
    <p>Bienvenido al sitio, {{nombre}}</p>
    @endsection
    @section('content')
    <p>Este contenido se mostrara en la pagina principal.</p>
    {{-- Estructuras de control --}}
    {{-- if --}}
    @if ($edad >=18)
    <p>eres mayor de edad</p>
    @else
    <p>no eres mayor de edad</p>
    @endif
    {{-- foreach --}}
    <h2>lista de frutas preferidas</h2>
    <ul>
        @foreach ( $frutas as $fruta)
            <li>{{$fruta}}</li>
        @endforeach
    </ul>

    <p>la fecha de hoy es: @formatearfecha(now())</p>

    @endsection
</body>
</html>
