@extends('layouts.index')
@section('content')

<h2 style="color: red">Subject : {{ $mail->name }}</h2>
<h2>Email : {{ $mail->email }}</h2>
@endsection 