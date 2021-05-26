@extends('layouts.index')
@section('content')
<h2 class="">Ur Subject : {{ $mail->subject }}</h2>

<h2 class="">Ur message : {{ $mail->message }}</h2>
@endsection 