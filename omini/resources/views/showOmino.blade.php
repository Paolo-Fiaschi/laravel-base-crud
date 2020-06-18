@extends('layouts.template')
@section('content')

<div class="container-content">
    <h1>Omino - Info</h1>
    <div class="ominoInfo">
        <ul>
            <li>
                <span class="userLable">FIRST NAME:</span>
                <span class="userInfo">{{$omino['first name']}}</span>
            </li>
            <li>
                <span class="userLable">LAST NAME:</span>
                <span class="userInfo">{{$omino['last name']}}</span>
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
                <span class="userInfo">{{$omino['phone number']}}</span>
            </li>
            <li>
                <span class="userLable">ROLE:</span>
                <span class="userInfo">{{$omino['role']}}</span>
            </li>
        </ul>
    </div>
    <div>
        <button><a href="{{route('delete', $omino['id'])}}">DELETE</a></button>
        <button type="submit">CHANGE</button>
    </div>
</div>

@endsection
