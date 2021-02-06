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
                            <div class="col-sm-9 admin-icon">Dashbord</div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"><a href="/admin/user"> Donors</a></div>
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
               <div class="admin-project my-3"><a href="/admin/project" class="btn btn-primary">Add project</a></div>
              <div class="row">
              @foreach($projects as $project)
                  <div class="col-sm-4">
                  <form action="" method="post">
                  @csrf
                    <div class="card">
                           <img src="{{asset('img/'.$project->img_src)}}" alt="{{$project->img_alt}}" srcset="" class="img-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->name}}</h5>
                                <p class="card-text">{{ $project->description}}</p>
                                <input type="hidden" value="{{$project->id}}" name="$projectId">
                                <button type="submit" class="btn btn-primary">Update</button> <a href="/admin/{{$project->id}}/delete" class="btn btn-danger">Delete</a>
                            </div>              
                        </div>
                    </form> 
                  </div>
                @endforeach
              </div>
            </div>
        </div>
   </div>
</div>

@endsection