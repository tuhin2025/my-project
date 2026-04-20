@extends('layout')

@section('content')

    <div class="container mt-4 border">
        <h3>Contact List</h3>

        <table class="table table-striped">
            <thead>
            <tr class="table-success">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>

            <tbody id="contactTable"></tbody>
        </table>
    </div>

@endsection


@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            loadContact();

            function loadContact() {

                $.ajax({
                    url: "/my-portfolio/contact-ajax",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {

                        let rows = "";

                        $.each(data, function (key, value) {
                            rows += `
                        <tr >
                            <td>${value.id ?? value.id}</td>
                            <td>${value.user_name}</td>
                            <td>${value.email}</td>
                            <td>${value.subject}</td>
                            <td>${value.message}</td>
                        </tr>
                    `;
                        });

                        $("#contactTable").html(rows);
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                        alert("Data loading failed!");
                    }
                });

            }

        });
    </script>

@endsection
