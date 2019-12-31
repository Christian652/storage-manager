@extends('admin.layoutMaster.master')

@section('title')
    Home Gerenciador De Estoque
@endsection

@section('content')
    <div class="container">
        <h1>Estatisticas Do Estoque</h1>   

        <div class="row mb-3">
            <div class="col-12">
                <div class="bg-white rounded shadow p-1">
                    <p class="lead font-weight-bold">Porcentagem Vendida Do Estoque</p>

                    <div class="progress" style="height: 30px;">
                        <div class="progress-bar" style="width: {{$porcentagemDoEstoqueQueFoiVendida}}%;">{{$porcentagemDoEstoqueQueFoiVendida}}%</div>
                    </div>
                </div>
            </div>
        </div> 

        @if(isset($moreSaled[0]->name) && isset($moreSaled[1]) && isset($lowerSaled[0]->name) && isset($lowerSaled[1]))
        <div class="row">
            <div class="col-6">
                <div class="card shadow-lg bg-success text-white text-center">
                    <div class="card-body">
                        <h3>Produto Mais Vendido</h3>
                        <hr class="bg-white m-0">
                        <p class="lead m-0 p-0" style="font-size: 2em;">
                            {{$moreSaled[0]->name}} <br>
                            {{$moreSaled[1]}} Unidades Vendidas
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card shadow-lg bg-danger text-white text-center">
                    <div class="card-body">
                        <h3>Produto Menos Vendido</h3>
                        <hr class="bg-white m-0">
                        <p class="lead m-0 p-0" style="font-size: 2em;">
                            {{$lowerSaled[0]->name}} <br>
                            {{$lowerSaled[1]}} Unidades Vendidas
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        @endif

        <div class="row">
            <div class="col-4">
                <div class="card shadow bg-primary text-white text-center">
                    <div class="card-body">
                        <h3>Produtos Cadastrados</h3>
                        <hr class="bg-white m-0">
                        <p class="lead font-weight-bold m-0 p-0" style="font-size: 4em;">
                            {{$productTotal}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow bg-secondary text-white text-center">
                    <div class="card-body">
                        <h3>Fornecedores-Total</h3>
                        <hr class="bg-white m-0">
                        <p class="lead font-weight-bold m-0 p-0" style="font-size: 4em;">
                            {{$providerTotal}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow bg-third text-white text-center">
                    <div class="card-body">
                        <h3>Produtos No Estoque</h3>
                        <hr class="bg-white m-0">
                        <p class="lead font-weight-bold m-0 p-0" style="font-size: 4em;">
                            {{$storage}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection