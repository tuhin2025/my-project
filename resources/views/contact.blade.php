@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Contact Me 📩</h1>

        <p class="mb-4 about-text">
            If you have any questions or want to work with me, feel free to send a message.
        </p>

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card shadow-sm p-4 custom-card">

                    <form action="#" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Send Message 🚀
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
