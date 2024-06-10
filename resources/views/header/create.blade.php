@extends('layouts.app')

@section('title', 'Data HeaderImage')

@section('content')
<div class="container">
    <a href="/admin/header" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('header.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
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