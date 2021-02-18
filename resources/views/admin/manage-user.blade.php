@extends('layouts.app')


@section('content')

<div class="container-fluid">
   <div class="row">
        <div class="col-sm-2">
            <div class="admin-panel my-4">
               <div class="container">
                    <div class="admin-list">
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"><a href="/admin"></a></div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"> <a href="/admin/user"> Donors</a></div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"><a href="/admin/add">Project</a></div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon">Logout</div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 my-4"> 
            <div class="container-fluid">
               <div class="admin-project my-3"><h1>List of all Donors with full information</h1></div>
              <div class="row">
              @foreach($donors as $donor)
                  <div class="col-sm-4">
                  <div class="card">
                        <div class="card-body">
                           <div class="row">
                                <div class="col-sm-8">
                                    <h5 class="card-title">Full Name: {{ $donor->name}}</h5>
                                    <p class="card-text">Phone Number: {{ $donor->phoneNumber}}</p>
                                    <p class="card-text">currency used:{{ $donor->currency}}</p>
                                    <p class="card-text">Amount Paid:  {{ $donor->amount}}</p>
                                </div>
                                <div class="col-sm-4"><a href="#" class="btn btn-dark">Block</a></div>
                            </div>
                        </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
        </div>
   </div>
</div>

@endsection