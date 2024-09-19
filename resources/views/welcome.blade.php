@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página principal del proyecto Nómina">
    <meta name="keywords" content="nómina, gestión, empresa">
    <meta name="author" content="Tu Nombre o Empresa">
    <link rel="stylesheet" href="css/style.css">
    <title>Página Principal - Proyecto Nómina</title>
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Estilo del contenedor principal */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilo del párrafo dentro del contenedor */
        .container p {
            font-size: 1.2rem;
            color: #2c3e50;
            margin: 0;
            text-align: center; /* Opcional: centrar el texto en el contenedor */
        }
    </style>

    <main>
        <div class="container">
            <p>Bienvenido a la página principal de nuestro proyecto de nómina.</p>
        </div>
    </main>

</body>
</html>
@endsection