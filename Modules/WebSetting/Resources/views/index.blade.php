@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Website Settings</h3>
                    </div>


                    <form action="{{route("saveSettings")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website  Name</label>
                                <input type="text" value="{{settings()->get('websitename', '')}}" class="form-control" id="exampleInputEmail1" name="websitename" placeholder="Enter Website Name">
                            </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg">Save Settings</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
