<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Home Page</h1>
        <p>This is the home page content.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>
    </div>
@endsection
