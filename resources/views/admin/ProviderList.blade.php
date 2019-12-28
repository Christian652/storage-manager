@extends('admin.layoutMaster.master')

@section('title')
    Listagem De Fornecedores
@endsection()

@section('content')
    <div class="container mt-4">
        
        <h1 class="display-4">Listagem De Fornecedores</h1>
        <hr>

        <div class="row">
            <div class="col-12">    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data de Cadastro</th>
                        <th>Data de Atualização</th>
                        <th class="text-center">Ações</th>
                    </thead>

                    <tbody>
                        @foreach($providers as $provider)

                        <tr>
                            <td>{{$provider->id}}</td>
                            <td>{{$provider->name}}</td>
                            <td>{{date('d/m/y', strtotime($provider->created_at))}}</td>
                            <td>{{date('d/m/y', strtotime($provider->updated_at))}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('providers.show', ['provider'=>$provider->id])}}" class="text-decoration-none btn btn-info btn-sm">Vizualizar</a>
                                    <a href="#" class="text-decoration-none ">
                                        <form action="{{route('providers.destroy', ['provider'=>$provider->id])}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button class="btn btn-danger btn-sm">Deletar</button>
                                        </form>
                                    </a>
                                    <a href="{{route('providers.edit', ['provider'=>$provider->id])}}" class="text-decoration-none btn btn-success btn-sm">Editar</a>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>           
                </table>

                <a href="{{route('providers.create')}}" class="btn btn-outline-primary mt-3">Cadastrar Fornecedor</a>
            </div>
        </div>
    </div>
@endsection
    
