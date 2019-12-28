@extends('admin.layoutMaster.master')

@section('title')
    Editar Dados Do Estoque
@endsection

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Editar Estoque de {{$product->name}}</h1>
                        <hr>
                        <form action="{{route('storages.update', ['storage'=>$storage->id])}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="produto">Produto</label>

                                <select name="product_id" id="produto" class="form-control">
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    
                                    @foreach($products as $product)

                                    <option value="{{$product->id}}">{{$product->name}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="number" name="amount" class="form-control" value="{{$storage->amount}}">
                            </div>

                            <button class="btn btn-outline-primary">Salvar</button>

                            <a href="{{route('storages.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection