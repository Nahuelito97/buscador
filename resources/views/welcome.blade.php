<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel</title>

</head>

<body>

    <div class="content">


        <div class="links">
            <li class="nav-item mt-auto">
                <a href="{{ route('clientes') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Clientes.</p>
                </a>
            </li>

        </div>

    </div>
</body>

</html>
