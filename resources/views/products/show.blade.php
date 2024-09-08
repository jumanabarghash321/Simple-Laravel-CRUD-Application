@extends('products.layout')

@section('content')
<div class="container">
    <h2>Product Details</h2>
    <div class="card">
        <div class="card-header">
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Details:</strong> {{ $product->details }}</p>
            <p><strong>Image:</strong></p>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="200">

            <br><br>
            <!-- Back to products list -->
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>

            <!-- Edit and Delete Buttons -->
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
            
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
