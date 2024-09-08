@extends('products.layout')
@section('content')

<br>
<div class="container">
    <div class="row">
      <div class="col align-self-start">
        <a class="btn btn-primary" href="{{ route('products.index') }}">All products</a>
      </div>
    </div>
    <br>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
       <ul>
        @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>
        @endforeach
       </ul>
    </div>
    @endif

    <div class='container p-5'>
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Enter product name"
                />
            </div>
            
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea class="form-control" name="details" id="details" rows="3" placeholder="Enter product details"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input
                    type="file"
                    class="form-control"
                    name="image"
                    id="image"
                />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
