@extends('admin.layoutMaster.master')

@section('title')
    Historico De Vendas de {{$product->name}}
@endsection()

@section('content')

    <div class="container mt-3">
        <h1 class="display-4" style="font-size: 2em;">Historico De Vendas De {{$product->name}}</h1>

        <div class="row">
            <div class="col-12">
                <div class="card-columns">

                    @foreach($historics as $historic)
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <span class="text-primary">{{$historic->id}}</span> <br>
                            Em:
                            {{date('d/m/y h-m-s', strtotime($historic->created_at))}} <br>
                            Foram Retiradas {{$historic->amount}} Unidades de <br>
                            <span class="text-secondary" style="font-weight: bold">{{$product->name}}</span> Do Estoque
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{route('storages.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

@endsection