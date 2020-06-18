@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row flex-column">
        <h1>New Omino</h1>
        <div class="col-6">
            <form action="{{route('store')}}" method="post">
                @csrf
                @method('POST')
                <label for="firstname">FIRST NAME:</label>
                <input type="text" name="firstname">
                <label for="lastname">LAST NAME:</label>
                <input type="text" name="lastname">
                <label for="address">ADDRESS:</label>
                <input type="text" name="address">
                <label for="code">CODE:</label>
                <input type="text" name="code">
                <label for="state">STATE:</label>
                <input type="text" name="state">
                <label for="phoneNumber">PHONE NUMBER:</label>
                <input type="text" name="phoneNumber">
                <label for="role">ROLE:</label>
                <input type="text" name="role">
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    </div>
</div>
@endsection
