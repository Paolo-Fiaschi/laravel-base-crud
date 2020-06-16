@extends('template')
@section('content')
    <div class="cagnolini">
        @foreach ($cagnolini as $cagnolino)
        <h1><a href="{{route('cagnolino', $cagnolino['id'])}}">{{$cagnolino['nome']}}</a></h1>
        @endforeach
    </div>
@endsection
