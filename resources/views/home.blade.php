@extends('layouts.dashboard')

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-info">
                 <div class="inner">
                     <h3>{{$loans}}</h3>

                     <p>Loan Apply</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-bag"></i>
                 </div>
                 <a href="{{route('loans')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-success">
                 <div class="inner">
                     <h3>{{$loanCat}}</h3>

                     <p>Loan Types</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-stats-bars"></i>
                 </div>
                 <a href="{{route('loan.categories')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-warning">
                 <div class="inner">
                     <h3>{{$users}}</h3>

                     <p>User Registrations</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-person-add"></i>
                 </div>
                 <a href="{{route('users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-danger">
                 <div class="inner">
                     <h3>{{$approved}}</h3>

                     <p>Loan Approved</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                 </div>
                 <a href="{{route('loans')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
     </div>
 </div>
        <!-- Content Header (Page header) -->

@endsection
