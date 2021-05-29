@extends('layouts.index')
@section('content')
@include('layouts.flash')

    <h1>Profile settings</h1>

    <section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
        <h3 class="text-3xl font-semibold text-center text-gray-700">
            Change Name and E-mail
        </h3>
        <form action="{{route('setting-profile.updateProfile')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="nameUpdate" id="nameUpdate">
            <div>
                <label for="name" class="mt-2">
                    Name
                </label>
                <input type="text" id="name" name="name" placeholder="{{Auth::user()->name}}"
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
                <input type="email" id="email" name="email" placeholder="{{Auth::user()->email}}"
                class="w-full px-4 py-2 mt-2 border rounded-md">
                @error('email')
                <span class="text-red-400">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit"
            class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
                Save changes
            </button>
        </form>
    </section>

    <section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
        <h3 class="text-3xl font-semibold text-center text-gray-700">
            Change Password
        </h3>
        <form action="{{route('setting-profile.updatePassword')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="passwordUpdate" id="passwordUpdate">
            <div>
                <label for="current_password" class="mt-2">
                    Actual Password
                </label>
                <input type="password" id="current_password" name="current_password"
                class="w-full px-4 py-2 mt-2 border rounded-md">
                @error('current_password')
                <span class="text-red-400">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>    
            <div>
                <label for="password" class="mt-2">
                    New Password
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
                    Confirm new Password
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
                Save changes
            </button>
        </form>
    </section>

    <section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
        <h3 class="text-3xl font-semibold text-center text-gray-700">
            Delete Account
        </h3>

        <form action="{{route('setting-profile.destroy')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="deleteProfile" id="deleteProfile">
            <div>
                <label for="password" class="mt-2">
                    If you want to delete your account, Put ur Password
                </label>
                <input type="password" name="password" id="password"
                class="w-full px-4 py-2 mt-2 border rounded-md">
                @error('password')
                <span class="text-red-400">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit"
            class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
                DELETE
            </button>
        </form>
    </section>
    

@endsection