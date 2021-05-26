@extends('layouts.index')
@section('content')
@include('layouts.flash')

<h1>LOGIN PAGE</h1>
<form action="{{route('login.store')}}" method="GET">
    @csrf
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="{{old('email')}}">
        @error('email')
        <span class="text-red">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        @error('password')
        <span class="text-red">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <button type="submit">Connect</button>
</form>
<a href="{{route('forgot-password.index')}}">Forgot password ? Click here</a>

@endsection