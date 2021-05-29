@extends('layouts.index')
@section('content')
@include('layouts.flash')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">

    <h1 class="text-3xl font-semibold text-center text-gray-700">
        LOGIN PAGE
    </h1>
    <form action="{{route('login.store')}}" method="GET" class="mt-6">
        @csrf
        <div>
            <label for="email" class="mt-2">
                E-mail
            </label>
            <input type="email" id="email" name="email" value="{{old('email')}}" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('email')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="password" class="mt-2">
                Password
            </label>
            <input type="password" id="password" name="password"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('password')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" 
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Connect
        </button>
    </form>
    <p class="text-center mt-2">
        Forgot password ?
        <a href="{{route('forgot-password.index')}}" 
        class="font-medium text-gray-800 dark:text-gray-200 hover:underline">
            Click here
        </a>
    </p>

</section>
@endsection