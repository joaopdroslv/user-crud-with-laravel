@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mt-5">
    <h2>Users</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
</div>
<hr class="mt-3 mb-5">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary">Details</a>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection