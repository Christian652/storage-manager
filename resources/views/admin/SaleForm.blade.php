@extends('admin.layoutMaster.master')

@section('title')
    Retirada De {{$storage->product->first()->name}}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Retirada De {{$storage->product->first()->name}}</h1>
                        <hr>
                        <form action="{{route('storages.sale', ['storage'=>$storage])}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="amount">Quantidade A Retirar</label>
                                <input type="number" id="amount" name="amount" class="form-control form-control-lg">    
                            </div>

                            <button class="btn btn-outline-primary">Remover Do Estoque</button>

                            <a href="{{route('storages.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection