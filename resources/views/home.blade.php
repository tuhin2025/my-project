@extends('layout')

@section('content')
    <div class="container">
        <h1 class="head">About Me 👨‍💻</h1>

        <p class="about-text">
            Hello! I'm Tuhin, a passionate software developer.
            I love PHP, Laravel, and building web applications.
        </p>
    </div>
@endsection



@section('content1')
            <div class="container">
                <h1 class="mb-4">My Skills 🚀</h1>

                <p class="mb-4 about-text">
                    Here are my technical skills and technologies I work with:
                </p>

                <!-- Skills List -->
                <div class="row">

                    <div class="card shadow-sm p-3">
                        <div class="card shadow-none">
                            <h5>💻 Backend</h5>
                            <ul>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>MySQL</li>
                                <li class="l">SQL, PL/SQL</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm p-3">
                            <h5>🎨 Frontend</h5>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>Bootstrap 5</li>
                                <li>JavaScript (Basic)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm p-3">
                            <h5>🛠 Tools</h5>
                            <ul>
                                <li>Git & GitHub</li>
                                <li>VS Code</li>
                                <li>XAMPP</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm p-3">
                            <h5>🌐 Others</h5>
                            <ul>
                                <li>REST API (Basic)</li>
                                <li>Laravel Blade</li>
                                <li>Problem Solving</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
@endsection
