@extends('layouts.app')

@section('title', 'Data Testimonial')

@section('content')
<div class="container">
    <a href="/admin/testimonial" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Comment</label>
                    <input type="text" class="form-control" name="comment" placeholder="Comment">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
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