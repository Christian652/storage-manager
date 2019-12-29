@extends('admin.layoutMaster.master')

@section('title')
    Listagem De Sessões de Estoque
@endsection()

@section('content')
    <div class="container mt-4">
        
        <h1 class="display-4">Produtos No Estoque</h1>
        <hr>

        <div class="row">
            <div class="col-12">    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Data de Cadastro</th>
                        <th>Data de Atualização</th>
                        <th class="text-center">Ações</th>
                    </thead>

                    <tbody>
                        @foreach($storages as $storage)

                        <tr>
                            <td>{{$storage->id}}</td>
                            <td>{{$storage->product()->first()->name}}</td>
                            <td>{{$storage->amount}}</td>
                            <td>{{date('d/m/y', strtotime($storage->created_at))}}</td>
                            <td>{{date('d/m/y', strtotime($storage->updated_at))}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('storages.saleForm', ['storage'=>$storage->id])}}" class="text-decoration-none btn btn-outline-primary btn-sm">Vender</a>

                                    <a href="{{route('storages.historic', ['storage'=>$storage->id])}}" class="text-decoration-none btn btn-primary btn-sm">Historico De Vendas</a>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>           
                </table>
            </div>
        </div>
    </div>
@endsection
    
