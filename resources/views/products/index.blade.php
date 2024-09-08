@extends('products.layout')

@section('content')

<br>
<div class="container">
    
    
    
    <!-- Display success message -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>  
                    <th>Details</th> 
                    <th width="300px">Actions</th> 
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ asset('images/' . $product->image) }}" width="350" alt="{{ $product->name }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->details }}</td>
                        <td>
                            <!-- View button -->
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

                            <!-- Edit button -->
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Render pagination links -->
        {!! $products->links() !!}
    </div>
</div>

@endsection

