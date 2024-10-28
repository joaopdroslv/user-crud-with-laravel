@extends('layout')

@section('content')

<h2 class="mt-5 d-flex align-items-center">
    <i class="material-icons me-2">add_circle</i>
    Create User
</h2>
<hr class="mt-3 mb-5">

@if (session()->has('success'))
    <div class="alert alert-success mb-5">{{ session()->get('success') }}</div>
@elseif (session()->has('error'))
    <div class="alert alert-danger mb-5">{{ session()->get('error') }}</div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" name="first_name" class="form-control" placeholder="">
            <label for="first_name">First Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" name="last_name" id="" class="form-control" placeholder="">
            <label for="last_name">Last Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="email" name="email" class="form-control" placeholder="">
            <label for="email">E-mail</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="password" name="password" class="form-control" placeholder="">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="w-50 mt-5">
        <a type="button" class="btn btn-primary w-25" href="{{ route('users.index') }}">Go Back</a>
        <input type="submit" class="btn btn-success w-25" value="Create">
    </div>
</form>

@endsection