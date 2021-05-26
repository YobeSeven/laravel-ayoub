@extends('layouts.index')
@section('content')
@include('layouts.flash')

<h1>FORGOT PASSWORD PAGE</h1>
<form action="{{route('forgot-password.store')}}" method="POST">
    @csrf
    <div>
        <label for="">E-mail</label>
        <input type="email" name="email" id="email" value="{{old('email')}}">
        @error('email')
        <span class="text-red">
            <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>
    <button type="submit">Send me an e-mail</button>
</form>
@endsection