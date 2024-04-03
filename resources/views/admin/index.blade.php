@extends('layouts.main')

@section('content')
@if ($success = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $success }}</p>
    </div>
@endsection