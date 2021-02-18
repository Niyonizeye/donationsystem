@extends('layouts.app')


@section('content')
<div class="container projects my-4">
     <div class="row ">
       @foreach($projects as $project)
          <div class="col-sm-6">
              <div class="container my-4 projectDiv ">
                    <div class="row">
                         <div class="col-sm-6 my-4 imagediv">
                              <img src="/image/image2.png" alt="" srcset="" class="imageDown">
                         </div>
                         <div class="col-sm-6">
                              <div class="funding"><span>Funding</span></div>
                              <div class="heading"><h4>{{ $project->name}}</h4></div>
                              <div class="contentTextProject">
                              {{$project->description}}
                              </div>
                         </div>
                         <div class="text-donation rounded">
                           Crypto-donation Total <span class="float-right result-text">$123456</span>
                         </div>
                    </div>
                    <div class="conatiner-fluid DonationDown">
                         <div class="row donationDiv1">
                              <div class="col-sm-4 text-center"><div><span class="result">456</span></div><div>Donations</div></div>
                              <div class="col-sm-4 text-center"><div><span class="result">456</span></div><div>End beneficiaries</div></div>
                              <div class="col-sm-4 text-center">
                              <div class="text-center"><a href="/donor" class="btn btn-primary rounded"> Donate</a></div>
                              </div>
                         </div>
                    
                    </div>
               </div>
          </div>
          @endforeach
     </div>
</div>
@endsection