@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row flex-column align-items-center">
        <div class="col-12 mt-5 mb-5">
            <h1>Change Omino</h1>
        </div>
        <div class="col-7">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('update', $omino['id'])}}" method="post">
                @csrf
                @method('POST')
                <label for="firstname">FIRST NAME:</label>
                <input type="text" name="firstname" value="{{$omino['firstname']}}">
                <label for="lastname">LAST NAME:</label>
                <input type="text" name="lastname" value="{{$omino['lastname']}}">
                <label for="address">ADDRESS:</label>
                <input type="text" name="address" value="{{$omino['address']}}">
                <label for="code">CODE:</label>
                <input type="text" name="code" value="{{$omino['code']}}">
                <label for="state">STATE:</label>
                <input type="text" name="state" value="{{$omino['state']}}">
                <label for="phoneNumber">PHONE NUMBER:</label>
                <input type="text" name="phoneNumber" value="{{$omino['phoneNumber']}}">
                <label for="role">ROLE:</label>
                <input type="text" name="role" value="{{$omino['role']}}">
                <input type="submit" value="SUBMIT" class="submit">
            </form>
        </div>
    </div>
</div>
@endsection
