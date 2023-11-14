@extends('layouts.backend.main')
@section('content')
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">Hello, {{ Auth::user()->role }}</h5>
        </div>
    </div>
@endsection