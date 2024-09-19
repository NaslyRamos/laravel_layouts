<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    <title>@yield('title','Mi app')</title>
</head>
<body>
    <header>
        <h1>Payroll</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                
                <li class="has-submenu">
                    <a>Departamento</a>
                    <ul class="submenu">
                        <li><a href="{{ url('departamento/index') }}">Leer</a></li>
                        <li><a href="{{ url('departamento/create') }}">Crear</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Cargo</a>
                    <ul class="submenu">
                        <li><a href="{{ url('cargo/index') }}">Leer</a></li>
                        <li><a href="{{ url('cargo/create') }}">Crear</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Nivel de Riesgos</a>
                    <ul class="submenu">
                        <li><a href="{{ url('nivel_riesgo/index') }}">Leer</a></li>
                        <li><a href="{{ url('nivel_riesgo/create') }}">Crear</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Tipo de Contratos</a>
                    <ul class="submenu">
                        <li><a href="{{ url('tipo_contrato/index') }}">Leer</a></li>
                        <li><a href="{{ url('tipo_contrato.create') }}">Crear</a></li>
                    </ul>                    
                </li>

            </ul>
        </nav>
    </header>
    <main>
         @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Payroll. Todos Los Derechos Reservados.</p>
    </footer>
    
</body>
</html>