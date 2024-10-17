@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
