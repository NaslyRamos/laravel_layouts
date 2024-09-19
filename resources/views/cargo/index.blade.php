@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Cargo</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Cargo</th>
                    <th>Nombre Del Cargo</th>
                    <th>Opciones</th>
    
                </tr>
            </thead>
            <tbody>
                @foreach ($cargo as $cargo)
    
                    <tr>
                        <td>{{ $cargo->idCargo}} </td>
                        <td>{{ $cargo->descripcionCargo}} </td>
    
                        <td>
                            <a href="">Actualizar</a>
                            <a href="">Eliminar</a>
                        </td>
    
    
                    </tr>
    
                @endforeach
            </tbody>
    
        </table>
    </div>
</body>
</html>



@endsection