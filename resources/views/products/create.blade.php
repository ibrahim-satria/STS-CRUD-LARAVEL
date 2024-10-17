@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
@endsection
