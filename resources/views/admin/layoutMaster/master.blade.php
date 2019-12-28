<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-xs navbar-dark bg-primary py-3">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>    

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav nav">
                <li class="nav-item">
                    <a href="{{route('providers.index')}}" class="nav-link">Fornecedores</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('storages.index')}}" class="nav-link">Estoques</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">Produtos</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
</body>
</html>
