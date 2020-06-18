@extends('layouts.template')
@section('content')

<div class="container-content">
    <h1>Omino - Info</h1>
    <div class="ominoInfo">
        <ul>
            <li>
                <span class="userLable">FIRST NAME:</span>
                <span class="userInfo">{{$omino['firstname']}}</span>
            </li>
            <li>
                <span class="userLable">LAST NAME:</span>
                <span class="userInfo">{{$omino['lastname']}}</span>
            </li>
            <li>
                <span class="userLable">ADDRESS:</span>
                <span class="userInfo">{{$omino['address']}}</span>
            </li>
            <li>
                <span class="userLable">CODE:</span>
                <span class="userInfo">{{$omino['code']}}</span>
            </li>
            <li>
                <span class="userLable">STATE:</span>
                <span class="userInfo">{{$omino['state']}}</span>
            </li>
            <li>
                <span class="userLable">PHONE NUMBER:</span>
                <span class="userInfo">{{$omino['phoneNumber']}}</span>
            </li>
            <li>
                <span class="userLable">ROLE:</span>
                <span class="userInfo">{{$omino['role']}}</span>
            </li>
        </ul>
    </div>
    <div>
        <button><a href="{{route('delete', $omino['id'])}}">DELETE</a></button>
        <button><a href="{{route('edit', $omino['id'])}}">CHANGE</a></button>
    </div>
</div>

@endsection
