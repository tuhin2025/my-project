@extends('layout')

@section('content')
    <div class="container mt-4">

        <h1>About Me 👨‍💻</h1>

        <p>
            Hello! I'm Tuhin, a passionate software developer.
            I love PHP, Laravel, and building web applications.
        </p>

        <!-- Button -->
        <button class="btn btn-primary">
            Click Me
        </button>

    </div>

    @include('skill')
@endsection
