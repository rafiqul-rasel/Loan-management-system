@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Your Secret</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('loan.categories.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Secret</label>
                    <div class="row">
                        <div class="col-10">
                            <input type="text"  disabled value="{{$secret_id}}" name="secret" class="form-control" id="exampleInputEmail1" placeholder="Secret">
                        </div>
                        <div class="col-2">
                            <a href="{{route('secgen')}}" type="button" class="btn btn-primary">Generate</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
@endsection
@section('footer')

@endsection
