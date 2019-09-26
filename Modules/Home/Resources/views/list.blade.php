@extends('home::layouts.master')

@section('content')
   @if(session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}

    </div>
    @endif
    <div class="container-fluid" style="padding-bottom: 15px;">
        <h1>List Home</h1>
        <div class="container-fluid row">
            <br>
            <a href="{{ route('admin.home.create') }}" class="btn btn-primary btn-link active" style="margin-left: 10px;">Create New</a>
            <br>
            <a href="{{ route('admin.home.list') }}" class="btn tbn-secondary btn-link active">Home</a>
        </div>
        <br>
        <hr>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach($homes as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->description }}</td>
                    <td>
                        <a href="{{ route('admin.home.edit', ['id' => $row->id]) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('admin.home.destroy', ['id' => $row->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
