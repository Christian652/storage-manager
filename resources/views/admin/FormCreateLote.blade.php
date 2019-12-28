@extends('admin.layoutMaster.master')

@section('title')
    Fornecer Lote -{{$provider->name}}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Fornecer Lote De Produtos</h1>
                        <hr>
                        <form action="{{route('providers.saveLote')}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="product_id">Produto</label>
                                
                                <select name="product_id" id="product_id" class="form-control">
                                    @foreach($products as $product)

                                    <option value="{{$product->id}}">{{$product->name}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Quantidade A Fornecer</label>

                                <input type="number" name="amount" class="form-control">
                            </div>

                            <input type="hidden" name="provider" value="{{$provider->id}}">

                            <button class="btn btn-outline-primary">Fornecer</button>

                            <a href="{{route('providers.show', ['provider'=>$provider->id])}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection