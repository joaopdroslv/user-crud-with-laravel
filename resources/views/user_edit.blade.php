@extends('layout')

@section('content')

<h2 class="mt-5">Edit User</h2>
<hr class="mt-3 mb-5">

@if (session()->has('success'))
    <div class="alert alert-success mb-5">{{ session()->get('success') }}</div>
@elseif (session()->has('error'))
    <div class="alert alert-danger mb-5">{{ session()->get('error') }}</div>
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
            <label for="first_name">First Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" name="Last Name" id="" class="form-control" value="{{$user->last_name}}">
            <label for="Last Name">Last Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" name="email" class="form-control" value="{{$user->email}}">
            <label for="email">E-mail</label>
        </div>
    </div>
    <div class="w-50 mt-5">
        <a type="button" class="btn btn-primary w-25" href="{{ route('users.index') }}">Go Back</a>
        <input type="submit" class="btn btn-success w-25" value="Confirm">
    </div>
</form>

@endsection