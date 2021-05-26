@extends('layouts.index')
@section('content')
@include('layouts.flash')

<h1>RESET FORGOT PASSWORD PAGE</h1>
<form action="{{route('reset-forgot-password.store')}}" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
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
    <div>
        <label for="password_confirmation">Confirm password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
        <span class="text-red">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <button type="submit">Reset your password</button>
</form>
@endsection