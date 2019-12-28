@extends('admin.layoutMaster.master')

@section('title')
    Cadastro De Fornecedores
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="lead text-center" style="font-size: 2.4em;">Cadastrar Novo Fornecedor</h1>
                        <hr>
                        <form action="{{route('providers.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name" placeholder="Digite Aqui O Nome Do Fornecedor" class="form-control form-control-lg">    
                            </div>

                            <button class="btn btn-outline-primary">Cadastrar</button>

                            <a href="{{route('providers.index')}}" class="btn btn-outline-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection