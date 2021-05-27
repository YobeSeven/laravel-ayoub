@extends('layouts.index')
@section('content')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <form action="{{route('mail.store')}}" method="POST">
        @csrf
        <div>
            <label for="mail" class="mt-2">
                E-mail
            </label>
            <input type="email" id="mail" name="mail" value="{{old('mail')}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('mail')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="subject" class="mt-2">
                subject
            </label>
            <input type="text" id="subject" name="subject" value="{{old('subject')}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('subject')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="message" class="mt-2">
                Message
            </label>
            <textarea name="message" id="message" cols="30" rows="10"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            </textarea>
            @error('message')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit"
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Send
        </button>
    </form>
</section>


@endsection