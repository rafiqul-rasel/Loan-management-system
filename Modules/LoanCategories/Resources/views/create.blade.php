@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Loan Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('loan.categories.store')}}">
           @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Loan Category</label>
                    <input type="text" name="loancategory" class="form-control" id="exampleInputEmail1" placeholder="Enter Author Name">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">add Loan Category</button>
            </div>
        </form>
    </div>
@endsection
@section('footer')

@endsection
