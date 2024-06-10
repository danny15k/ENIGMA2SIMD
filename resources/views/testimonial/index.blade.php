@extends('layouts.app')

@section('title', 'Data Testimonial')

@section('content')
<div class="container">
    <a href="/admin/testimonial/create" class="btn btn-primary mb-3">Add Data</a>
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
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($testimonials as $testimonial)
                    <tr>
                    <td>{{ $i++ }}</td>            
                    <td>{{ $testimonial->name }}</td>                     
                    <td>{{ $testimonial->comment }}</td>                     
                    <td>
                        <img src="/image/{{ $testimonial->image }}" alt="img-fluid" width="90">
                    </td>                                     
                    <td>
                        <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
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