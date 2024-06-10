@extends('layouts.app')

@section('title', 'Data Product List')

@section('content')
<div class="container">
    <a href="/admin/product/create" class="btn btn-primary mb-3">Add Data</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Success</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($products as $product)
                    <tr>
                    <td>{{ $i++ }}</td>            
                    <td>{{ $product->title }}</td>                     
                    <td>{{ $product->description }}</td>                     
                    <td>{{ $product->price }}</td>                     
                    <td>
                        <img src="/image/{{ $product->image }}" alt="img-fluid" width="90">
                    </td>                                     
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>      
                </tr>                               
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
    
@endsection