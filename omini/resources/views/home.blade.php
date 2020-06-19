@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-4">
                <h1>Omini</h1>
            </div>
            <div class="col">
                @if (session('success'))
                <h3 class="succesfull">{{session('success')}}</h3>
                @endif
                <div>
                    <ol>
                        <div class="userTitle">
                            <h2>User</h2>
                            <button class="newUser"><a href="{{route('create')}}">CREATE NEW USER</a></button>
                        </div>
                        @foreach ($omini as $omino)
                           <li class="userList">
                                <a href="{{route('showOmino', $omino['id'])}}" class="user">
                                    {{$omino['firstname']}} {{$omino['lastname']}}
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
