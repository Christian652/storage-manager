@extends('admin.layoutMaster.master')

@section('title')
    Editar Dados De {{$product->name}}
@endsection

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Editar {{$product->name}}</h1>
                        <hr>
                        <form action="{{route('products.update', ['product'=>$product->id])}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group form-row">
                                <div class="col-8">
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control">
                                </div>

                                <div class="col-4">
                                    <input type="text" name="unitprice" value="{{$product->unitprice}}" class="form-control">
                                </div>    
                            </div>

                            <div class="form-group">
                                <textarea name="description" rows="4" style="resize: none;" class="form-control">
                                    {{$product->description}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <select name="provider_id" class="form-control">
                                    <option value="{{$provider->id}}">{{$provider->name}}</option>

                                    @foreach($providers as $aprovider)

                                    <option value="{{$aprovider->id}}">{{$aprovider->name}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-outline-primary">Salvar</button>

                            <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection