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
                                <th>Remarks</th>
                                <th>Insert Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($contacts as $key => $contact)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $contact->USER_NAME }}</td>
                                    <td>{{ $contact->EMAIL }}</td>
                                    <td>{{ $contact->SUBJECT }}</td>
                                    <td>{{ $contact->MESSAGE }}</td>
                                    <td>{{ $contact->remarks }}</td>
                                    <td>
                                        {{ $contact->INSERT_DT ? \Carbon\Carbon::parse($contact->INSERT_DT)->format('d-m-Y') : 'N/A' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('my-portfolio.contact.edit', $contact->ID) }}"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
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
