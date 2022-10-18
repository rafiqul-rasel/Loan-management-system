@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Apply loan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('store.loan')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Loan Type</label>
                <select id="loan-type" name="loan_type" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    @foreach($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="loan_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">National Id</label>
                    <input type="text" name="national_id" class="form-control" id="exampleInputEmail1" placeholder="Enter National Id Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">father's name</label>
                    <input type="text" name="fathers_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Father's name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea name="address" rows="8" class="form-control" id="exampleInputEmail1" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Photo</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">granter1 photo</label>
                    <input type="file" name="granter1_photo" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">granter2 photo</label>
                    <input type="file" name="granter2_photo" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">electricity Bills Photo</label>
                    <input type="file" name="electricity_photo" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">office Id Photo</label>
                    <input type="file" name="office_id_photo" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">bank Statement</label>
                    <input type="file" name="bank_statement" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tax Statement</label>
                    <input type="file" name="tax_statement" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Loan Amount</label>
                    <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Loan Attachment</label>
                    <input type="file" name="document" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Member Secret</label>
                    <input type="text" name="user_secret" value="{{\Illuminate\Support\Facades\Auth::user()->secret}}" readonly class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Member Secret">
                </div>
                <div id="newRow"></div>
                <div id="add-member" class="form-group">
                    <button id="addRow"  type="button" class="btn btn-info">Add Member</button>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>
        </form>
    </div>
@endsection
@section('footer')
   <script type="text/javascript">
       $(document).ready(function(){
           $('#add-member').hide()
           $('#loan-type').on('change', function() {
               console.log($(this).find(":selected").val())
               if($(this).find(":selected").val()==3){
                   $('#add-member').show();
                   $('#newRow').show();
               }else{
                   $('#newRow').empty();
                   $('#add-member').hide();
                   $('#newRow').hide();
               }
           });

           $("#addRow").click(function () {
               var html = '';
               html += '<div id="inputFormRow">';
               html += '<div class="input-group mb-3">';
               html += '<input type="text" name="secrets[]" class="form-control m-input" placeholder="Enter Secret" autocomplete="off">';
               html += '<div class="input-group-append">';
               html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
               html += '</div>';
               html += '</div>';

               $('#newRow').append(html);
           });

           // remove row
           $(document).on('click', '#removeRow', function () {
               $(this).closest('#inputFormRow').remove();
           });
       });
   </script>
@endsection
