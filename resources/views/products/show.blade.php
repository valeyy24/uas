@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-3">
        @else
            <p>No Image Available</p>
        @endif
        <p>{{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
@endsection
