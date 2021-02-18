@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="container">
    <form action="{{ route('project.store') }}" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">        
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name" class="col-form-label text-md-right">Title</label>

                    <div>
                        <input id="name" type="text" class=" inputformdonor form-control @error('name') is-invalid @enderror border-form" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-form-label text-md-right">ImageUrl</label>

                    <div>
                        <input id="img_alt" type="text" class="form-control @error('name') is-invalid @enderror border-form" name="img_alt" value="" required autocomplete="name" autofocus>
                            <span class="invalid-feedback" role="alert">
                                <!-- <strong></strong> -->
                            </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-form-label text-md-right">image</label>

                    <div>
                        <input id="img_src" type="file" class="form-control @error('name') is-invalid @enderror border-form" name="img_src" value="" required autocomplete="name" autofocus>
                            <span class="invalid-feedback" role="alert">
                                <!-- <strong></strong> -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
               
                    <div class="card my-4">
                        <div class="card-body">  
                        <div class="input-group mb-3">
                                <select class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:1.2rem;font-weight:bolder">
                                <ul class="dropdown-menu">
                                    <option value="" class="dropdown-item">Rwf</option>  
                                    <option value="" class="dropdown-item">Euro</option>
                                    <option value="" class="dropdown-item">Pound</option>
                                    <option value="" class="dropdown-item">Bitcoin</option>   
                                    <option value="" class="dropdown-item">Dollars</option>                                   
                                </ul>
                                <input type="text" name="target_fund" placeholder="Enter the Amount you need" class="form-control" aria-label="Text input with dropdown button">
                                </select>
                            </div>                       
                            <div class="form-group">
                                    <label for="description" class="col-form-label text-md-right text-font">Description of project</label>

                                    <div>
                                       <textarea class="form-control" name="description" aria-label="With textarea" cols="60" rows="10"  placeholder="Enter the Description of your project Minimum Word :300 and maximum is 1500" style="font-size:1.2rem"></textarea>
                                    </div>
                            </div>                            
                           
                           
                            <button class="btn btn-success float-right" type="submit">Add project</button>                           

                        </div>
                    
                    </div>

                        
               
            </div>
           </div>
        
    </div>
    </form>
</div>

@endsection