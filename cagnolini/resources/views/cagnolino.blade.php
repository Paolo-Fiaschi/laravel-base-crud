@extends('template')
@section('content')
    <div class="cagnolino">
    <img src="{{$cagnolino['img']}}" alt="">
    <h2>Nome: {{$cagnolino['nome']}}</h2>
    <h2>Tipo: {{$cagnolino['tipo']}}</h2>
    <h2>Altezza(cm): {{$cagnolino['altezza']}}</h2>
    <h2>Peso(kg): {{$cagnolino['peso']}}</h2>
    </div>
@endsection
