@extends('admin.layoutMaster.master')

@section('title')
    Vizualizar Fornecedor
@endsection

@section('content')

    <div class="container mt-5">

        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h1 class="display-4 text-center">Vizualizar {{$provider->name}}</h1>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">Id: {{$provider->id}}</li>
                        <li class="list-group-item">Nome: {{$provider->name}}</li>
                        <li class="list-group-item">Data De Cadastro: {{date('d/m/y', strtotime($provider->created_at))}}</li>
                        <li class="list-group-item">
                            Produtos Fornecidos:

                            <table class="table table-bordered table-striped table-hover">
                                @foreach($products as $product)
                                 
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td class="text-success">{{$product->unitprice}}$</td>
                                </tr>

                                @endforeach
                            </table>
                        </li>

                        <li class="list-group-item p-1">
                            <div class="btn-group">
                                <a href="{{route('providers.index')}}" class="btn btn-primary">Voltar</a>

                                <a href="{{route('providers.storages', ['provider'=>$provider->id])}}" class="btn btn-outline-primary">Fornecer Lote</a>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>

@endsection