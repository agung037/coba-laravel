@extends('layouts.main')

@section('container')

    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" srcset="" width="200">
    
@endsection
