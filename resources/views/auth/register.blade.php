@extends('layouts.index')
@section('content')
@include('layouts.flash')
<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h1 class="text-3xl font-semibold text-center text-gray-700">
        REGISTER PAGE
    </h1>
    <form action="{{route('register.store')}}" method="POST" class="mt-6">
        @csrf
        <div>
            <label for="name" class="mt-2">
                Name
            </label>
            <input type="text" id="name" name="name" value="{{old('name')}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('name')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
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
        <div>
            <label for="password_confirmation" class="mt-2">
                Confirm password
            </label>
            <input type="password" id="password_confirmation" name="password_confirmation"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('password_confirmation')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit"
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Create
        </button>
    </form>
</section>
@endsection