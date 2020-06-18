@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Omini</h1>
            </div>
            <div class="col">
                <button><a href="{{route('create')}}">CREATE NEW USER</a></button>
                <ol>
                    @foreach ($omini as $omino)
                       <li class="userList">
                            <span>User:</span>
                            <a href="{{route('showOmino', $omino['id'])}}" class="user">
                                {{$omino['firstname']}} {{$omino['lastname']}}
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
