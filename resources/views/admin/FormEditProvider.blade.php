@extends('admin.layoutMaster.master')

@section('title')
    Editar Dados Do Fornecedor
@endsection

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Editar Fornecedor</h1>
                        <hr>
                        <form action="{{route('providers.update', ['provider'=>$provider->id])}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name" value="{{$provider->name}}" class="form-control form-control-lg">    
                            </div>

                            <button class="btn btn-outline-primary">Salvar</button>

                            <a href="{{route('providers.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection