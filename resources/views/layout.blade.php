<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

<!-- 🔷 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Tuhin Portfolio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/contact-list">View Message</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/contact-page">View Message Ajax</a></li>
                <li class="nav-item"><a class="nav-link" href="/my-portfolio/contact">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- 🔷 Content -->
@yield('content')
@yield('scripts')

<div></div>
<!-- 🔻 Footer -->
<footer class="bg-success text-white text-center p-3 mt-auto">
    <div class="container">
        <p class="mb-1">© 2026 Tuhin | All Rights Reserved</p>
        <p class="mb-0">
            <a href="#" class="text-white me-2">Facebook</a> |
            <a href="#" class="text-white me-2">LinkedIn</a> |
            <a href="#" class="text-white me-2">LinkedIn</a> |

        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif


</body>
</html>
