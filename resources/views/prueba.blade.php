<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba tecnica</title>

</head>

<body class="">
    <h1>Nombre: {{ $aplicante['nombre'] }}</h1>
    <h1>Nivel: {{ $aplicante['nivel'] }}</h1>
    <h1>Puntos: {{ $aplicante['puntos'] }}</h1>
    @if ($aplicante['aprobado'])
        <h2>APROBADO</h1>
        @else
            <h2>REPROBADO</h1>
    @endif
</body>

</html>
<style>
    .invisible {
        display: none;
    }
</style>
