@extends('admin.layoutMaster.master')

@section('title')
    Cadastrar Produtos
@endsection

@section('content')

<div class="container mt-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Cadastrar Novo Produto de - {{$provider->name}}</h1>
                        <hr>
                        <form action="{{route('products.store')}}" method="post">
                            @csrf

                            <div class="form-group form-row">
                                <div class="col-8">
                                    <input type="text" name="name" placeholder="Digite Aqui O Nome Do Produto" class="form-control">
                                </div>

                                <div class="col-4">
                                    <input type="text" name="unitprice" placeholder="Digite Aqui O Preço Unitario" class="form-control">
                                </div>    
                            </div>

                            <div class="form-group">
                                <textarea name="description" rows="4" style="resize: none;" class="form-control" placeholder="Descrição"></textarea>
                            </div>

                            <input type="hidden" name="provider_id" value="{{$provider->id}}">

                            <button class="btn btn-outline-primary">Cadastrar</button>

                            <a href="{{route('providers.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection