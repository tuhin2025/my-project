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

                    <form action="{{ route('my-portfolio.contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject <span class="text-danger">*</span></label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Write your message"
                                      required></textarea>
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
