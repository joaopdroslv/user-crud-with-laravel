@extends('layout')

@section('content')

<h2 class="mt-5">Homepage</h2>
<hr class="mt-3 mb-5">
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consequuntur sit repellat officia quaerat fugiat
    obcaecati sequi dignissimos illo minima quis ullam eos debitis nesciunt, temporibus perspiciatis rerum deserunt
    dicta.
    Maxime quisquam illum tempore totam doloremque sequi commodi, similique quibusdam quas quam distinctio recusandae
    illo voluptates explicabo assumenda libero qui! Culpa cum expedita laudantium mollitia ut, quisquam iure cupiditate
    eos.
</p>
<a href="{{ route('users.index') }}" class="btn btn-primary mt-4 w-100">See Users</a>

@endsection