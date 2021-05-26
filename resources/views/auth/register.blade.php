@extends('layouts.index')
@section('content')
@include('layouts.flash')
    <h1>REGISTER PAGE</h1>
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
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
        <button type="submit">Create</button>
    </form>
@endsection