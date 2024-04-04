@extends('layouts.main')

@section('content')
@if ($success = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $success }}</p>
    </div>
@endif

<button class="btn btn-success mt-12"  href={{route('logout')}}>Logout</button>
@endsection