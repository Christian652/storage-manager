@extends('admin.layoutMaster.master')

@section('title')
    Historico De Fornecimento -{{$provider->name}}
@endsection()

@section('content')

    <div class="container mt-3">
        <h1 class="display-4 text-center">Historico De Lotes Fornecidos Por {{$provider->name}}</h1>

        <div class="row">
            <div class="col-12">
                <div class="card-columns">

                    @foreach($historics as $historic)
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <span class="text-primary">{{$historic->id}}</span> <br>
                            Em:
                            {{date('d/m/y h-m-s', strtotime($historic->created_at))}} <br>
                            Foram Fornecidas {{$historic->amount}} Unidades de <br>
                            {{$historic->product()->first()->name}}
                            
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection