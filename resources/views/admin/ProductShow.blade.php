@extends('admin.layoutMaster.master')

@section('title')
    Vizualizar {{$product->name}}
@endsection

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h1 class="display-4 text-center">Vizualizar {{$product->name}}</h1>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">Id: {{$product->id}}</li>
                    <li class="list-group-item">Nome: {{$product->name}}</li>
                    <li class="list-group-item text-success">Preço(unidade): {{$product->unitprice}}$</li>
                    <li class="list-group-item">Descrição: {{$product->description}}</li>
                    <li class="list-group-item">Data De Cadastro: {{date('d/m/y', strtotime($product->created_at))}}</li>
                    <li class="list-group-item">Fornecedor: {{$provider->name}}</li>
                    <li class="list-group-item">Quantidade no Estoque: {{$storage->amount}} unidades</li>

                    <li class="list-group-item p-1">
                        <a href="{{route('products.index')}}" class="btn btn-info">Voltar</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</div>

@endsection