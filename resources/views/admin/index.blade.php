@extends('admin.layoutMaster.master')

@section('title')
    Home Gerenciador De Estoque
@endsection

@section('content')
    <div class="container">
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