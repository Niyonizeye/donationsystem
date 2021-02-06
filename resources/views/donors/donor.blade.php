@extends('layouts.app')


@section('content')

<div class="container">
   <div class="row">
     <div class="col-sm-6">
       @foreach($projects as $project)
       <div class="imageDonorDiv">
          <div class="auramate my-4">
               {{ $project->name}}             

          </div>

           <img src="{{asset('img/'.$project->img_src)}}" alt="{{$project->img_alt}}" srcset="" class="imageDown">
        </div>
        @endforeach
        @foreach($projects as $project)
        <div class="text-Div text-font">
            {{$project->description}}

        </div>
       @endforeach
       <div class="readmore"><button class="btn-info rounded my-2">Readmore</button></div>
       <div class="row shareDiv ">
           <div class="col-sm-6 "> <a href="#" class="btn btn-primary rounded">Donate</a></div>
           <div class="col-sm-6 zeropadding"><button class="btn btn-success rounded">Share</button></div>
       </div>
     </div>

     <div class="col-sm-6">
       @foreach($projects as $project)
         <div class="fund"><span>Funding</span></div>
         <div class="auramateNext text-font">
         {{$project->description}}
         </div>
         <div class="percentageDiv"><div class="percentage btn-primary">{{($donors->sum('amount') * 100)/($project->target_fund)}}%</div></div>
         <div class="donarQuantity my-2">
            <span class="result">
                $ {{ $donors->sum('amount')}}
               
            </span> raised from <span class="result"> $ {{$project->target_fund}}</span>
            
         </div>
         @endforeach
         <div class="row">
            <div class="col-sm-6">
               <div class="row commentsDiv">
                     <div class="col-sm-4">
                         <div class="result">21.6K</div>
                         <div class="head-title">Donor</div>
                     </div>
                     <div class="col-sm-4">
                         <div class="result">21.6K</div>
                         <div class="head-title"> Shares</div>
                     </div>
                     <div class="col-sm-4">
                         <div class="result">21.6K</div>
                         <div class="head-title">Followers</div>
                     </div>
               </div>
            </div>
         </div>
         <div class="btn btn-info fullwidth my-2"><i class="fa fa-share-alt" aria-hidden="true">Share</i></div>
         <div class="btn btn-primary fullwidth"> <a href="/donate-form" class="btn-primary">Donate Now</a> </div>
         <div class="donateperson my-1">
             <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6"> 
                    <span class="result numberDonor bg-primary">
                            {{ $donors->count('name')}}                           
                    </span> People just donated</div>
             </div>
         </div>
         <!-- div for donor list -->
         <div class="container-fluid list-donor-Container my-2 overflow-auto">
           @foreach($donors as $donor)
               <div class="row list-donor">
                     <div class="col-sm-2 donor-profile"> 
                         <div class="donorprofile float-right">
                             <img src="./image/avatar.jpg" class="profileuser">
                         </div>
                     </div>
                     <div class="col-sm-10 donor-content my-2">
                           <div class="donor-name"><span class="resultName"> {{$donor->name}}</span></div>
                           <div class="amountgenerated"><span class="amountgenerated">${{$donor->amount}}</span>    <span class="amountgenerated">{{now()->toDateTimeString()}}->{{$donor->created_at}}</span></div>
                     </div>
               </div>
            @endforeach   
         </div>
         <div class="list-donorDownDiv">
             <div class="row seeall">
                 <div class="col-sm-6">
                     <button class="btn btn-primary">See all</button>
                 </div>
                 <div class="col-sm-6 zeropadding">
                     <button class="btn btn-primary float-end">See top donation</button>
                 </div>
             </div>
         </div>
     </div>
   
   </div>

</div>
<div class="container">
   <div class="row">
        <div class="col-sm-6">
           <div class="row my-3 commentsDiv">
                <div class="col-sm-3 fontawasonicon">FAQ</div>
                <div class="col-sm-3 fontawasonicon">Updates</div>
                <div class="col-sm-6 fontawasonicon">
                    <span>
                    {{$comment->count()}}
                                    
                    </span>
                    Comments</i>
                </div>
                <hr>
                <form action="{{ route('comment.store') }}" method="post">
                @csrf
                    <textarea name="name" id="" placeholder="Add comment here !!!" class="commentField"></textarea>
                    <button type="submit" class="btn btn-primary float-end"> Add</button>
                </form>
                @foreach($comment as $comments)
                    <div class="text-font">
                    {{$comments->name}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-6 my-4">
        <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active nav-item"><a data-toggle="tab" href="#project" class="nav-link active">Project Introduction</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#record" class="nav-link">Donation Records</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#operation" class="nav-link">Other Operations</a></li>
                </ul>

                <div class="tab-content">
                    @foreach($projects as $project)
                        <div id="project" class="tab-pane fade in active">
                            <h3> {{ $project->name}}</h3>
                            <p> {{ $project->description}}</p>
                        </div>
                    @endforeach
                    <div id="record" class="tab-pane fade">
                     <div class="headindrecord bg-primary my-4">
                        <div class="row">
                        <div class="col-sm-3">Company or Person</div>
                        <div class="col-sm-3">Full Name</div>
                        <div class="col-sm-3">Curreny Used</div>
                        <div class="col-sm-3">Amount Paid</div>
                        </div>
                     </div>
                    @foreach($donors as $donor)
                     <div class="records">
                      <div class="row">
                        <div class="col-sm-3">{{$donor->identity}}</div>
                        <div class="col-sm-3">{{$donor->name}}</div>
                        <div class="col-sm-3">{{$donor->currency}}</div>
                        <div class="col-sm-3">{{$donor->amount}}</div>
                      </div>

                     </div>
                     @endforeach
                    </div>
                    <div id="end-beneficiary" class="tab-pane fade">
                    <h3>End beneficiary</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="operation" class="tab-pane fade">
                    <h3>Operation Part</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
             </div>

        </div>
       
    </div>
    
</div>
<div class="container-fluid">

</div>
@endsection