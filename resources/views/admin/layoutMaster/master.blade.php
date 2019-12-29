<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-xs navbar-dark bg-primary py-3">
        <button class="navbar-toggler sidebar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>    

        <div class="d-block mx-auto">
            <h1 class="display-4 text-center text-light" style="font-size: 3em;">Gerenciador De Estoque</h1>
        </div>
    </nav>

    <div class="d-flex">
        <aside class="sidebar">
            <ul class="list-unstyled text-white">
                <li>
                    <a href="{{route('providers.index')}}" class="lead">Fornecedores</a>
                </li>

                <li>
                    <a href="{{route('storages.index')}}" class="lead">Estoques</a>
                </li>

                <li>
                    <a href="{{route('products.index')}}" class="lead">Produtos</a>
                </li>

                <li>
                    <a href="{{route('index')}}" class="lead">Inicio</a>
                </li>
            </ul>
        </aside>

        <div class="content w-100">
            <div class="list-group-item">
            @yield('content')
            </div>
        </div>
    </div>

    

    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/js/sidebar.js')}}"></script>
</body>
</html>
