@extends('admin.layoutMaster.master')

@section('title')
    Produtos Cadastrados
@endsection

@section('content')

<div class="container mt-4">
        
        <h1 class="display-4">Listagem De Produtos</h1>
        <hr>

        <div class="row">
            <div class="col-12">    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço(unidade)</th>
                        <th>Descrição</th>
                        <th>Data de Cadastro</th>
                        <th>Data de Atualização</th>
                        <th class="text-center">Ações</th>
                    </thead>

                    <tbody>
                        @foreach($products as $product)

                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td class="text-success">{{$product->unitprice}}$</td>
                            <td>{{$product->description}}</td>
                            <td>{{date('d/m/y', strtotime($product->created_at))}}</td>
                            <td>{{date('d/m/y', strtotime($product->updated_at))}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('products.show', ['product'=>$product->id])}}" class="text-decoration-none btn btn-info btn-sm">Vizualizar</a>
                                    
                                    <a href="{{route('products.edit', ['product'=>$product->id])}}" class="text-decoration-none btn btn-success btn-sm">Editar</a>
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