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
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- 🔷 Content -->
<div class="container mt-4 mb-5 flex-grow-1">
    @yield('content')
</div>

<!-- 🔷 Content -->
<div class="container mt-4 mb-5 flex-grow-1">
    @yield('content1')
</div>

<!-- 🔻 Footer -->
<footer class="bg-success text-white text-center p-3 mt-auto">
    <div class="container">
        <p class="mb-1">© 2026 Tuhin | All Rights Reserved</p>
        <p class="mb-0">
            <a href="#" class="text-white me-2">Facebook</a> |
            <a href="#" class="text-white me-2">LinkedIn</a> |
            <a href="#" class="text-white">GitHub</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
