@extends('layouts.app')

@section('title', 'Data HeaderImage')

@section('content')
<div class="container">
    <a href="/admin/header/create" class="btn btn-primary mb-3">Add Data</a>
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
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($headers as $header)
                    <tr>
                    <td>{{ $i++ }}</td>            
                    <td>{{ $header->title }}</td>                     
                    <td>
                        <img src="/image/{{ $header->image }}" alt="img-fluid" width="90">
                    </td>                                     
                    <td>
                        <a href="{{ route('header.edit', $header->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('header.destroy', $header->id) }}" method="POST">
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