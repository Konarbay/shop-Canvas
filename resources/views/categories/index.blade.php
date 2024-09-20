@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Category</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
