@extends('layouts.main')

@section('title')

@section('konten')
    <h1>About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="images/{{ $image }}" alt="{{ $name }}" width="200">
@endsection