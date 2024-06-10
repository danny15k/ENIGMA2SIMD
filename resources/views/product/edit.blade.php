@extends('layouts.app')

@section('title', 'Data Product List')

@section('content')
<div class="container">
    <a href="/admin/product" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $product->title }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $product->description }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $product->price }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/public/image/{{ $product->image }}" alt="img-fluid">
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection