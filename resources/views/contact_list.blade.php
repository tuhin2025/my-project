@extends('layout')

@section('content')

    <div class="container mt-5">

        <div class="card shadow-lg border-0">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">📩 Contact Messages</h4>
            </div>

            <div class="card-body">

                @if($contacts->count() > 0)

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle">

                            <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($contacts as $key => $contact)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ Str::limit($contact->message, 50) }}</td>
                                    <td>
                                        {{ $contact->insert_dt ? \Carbon\Carbon::parse($contact->insert_dt)->format('d M Y') : 'N/A' }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>

                @else
                    <div class="alert alert-info text-center">
                        No messages found.
                    </div>
                @endif

            </div>
        </div>

    </div>

@endsection
