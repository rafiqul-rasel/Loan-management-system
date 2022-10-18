
@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4"> Loans </h2>

        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Loan Name</th>
                <th>Loan Type</th>
                <th>Amount</th>
                <th>Loan Holder</th>
                <th>Loan Status</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@section('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function () {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('loans') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'loan-type', name: 'loan-type'},
                    {data: 'amount', name: 'amount'},
                    {data: 'loan-holder', name: 'loan-holder'},
                    {data: 'loan-status', name: 'loan-status',},
                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]
            });

        });
    </script>
@endsection

