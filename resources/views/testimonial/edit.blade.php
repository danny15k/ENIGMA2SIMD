@extends('layouts.app')

@section('title', 'Data Testimonial')

@section('content')
<div class="container">
    <a href="/admin/testimonial" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $testimonial->name }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Comment</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $testimonial->comment }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/public/image/{{ $testimonial->image }}" alt="img-fluid">
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