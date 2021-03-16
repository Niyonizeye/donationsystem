@extends('layouts.app')


@section('content')
<!-- Modal -->
<div class="container-fluid containerUp" style="padding:0;margin:0">
    <div class="img">
        <img src="/image/muhahebanner33.jpg" class="imageBanner img-fluid" alt="" srcset="">
        <a href="/donor" class="rounded btn-primary donateLink">Donate</a>
    </div>
</div>
<div class="container-fluid hoursDiv bg-dark">
       <div class="row hourdiv zeropadding">
            <div class="col-sm-4 my-2 zeropadding">
              <div class="text-event"><h3 class="text-white text-center">UP Comming Event</h3></div>
               <div class="container zeropadding">
                    <div class="row days">
                        <div class="col-sm-3 zeropadding">
                        <div class="card">
                                <div class="card-body text-center p-0" id="days">
                                  00
                                </div>
                                <div class="card-footer text-center p-0">Days</div>
                        </div>
                        </div>
                        <div class="col-sm-3 zeropadding">
                            <div class="card">
                                    <div class="card-body text-center p-0" id="hours">
                                    00
                                    </div>
                                    <div class="card-footer text-center p-0">Hours</div>
                            </div>
                        </div>
                        <div class="col-sm-3 zeropadding"> 
                            <div class="card">
                                    <div class="card-body text-center p-0" id="minutes">
                                    00
                                    </div>
                                    <div class="card-footer text-center p-0">Minutes</div>
                            </div>
                        </div>
                        <div class="col-sm-3 zeropadding">
                            <div class="card">
                                    <div class="card-body text-center p-0" id="seconds">
                                    00
                                    </div>
                                    <div class="card-footer text-center p-0">Seconds</div>
                            </div>
                        </div>
                    </div>
               </div>
                
            </div>
            <div class="col-sm-8 my-4 zeropadding">
                <div class="container bg-dark rounded divUp my-4 zeropadding">
                    We need You! become Volunteer Just Call At (.... Phone number ) To MAke Donation
                    <a href="/donor" class="btn btn-primary rounded ml-4 text-center zeropadding">Donate Now</a>
                </div>
            
            </div>
       </div>
</div>
<div class="container my-2"> 
   <div class="row">
       <div class="col-sm-6 img"><img src="/image/slide2.jpg" class="img-thumbnail" alt="" srcset=""></div>
       <div class="col-sm-6">
           <span class="heading">Who We are?? organisation you can trust</span>
            <div class="mainParagraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam exercitationem
                debitis repellendus natus dolores tempore, ratione, possimus earum provident totam 
                accusantium iste quas temporibus eaque beatae doloribus corrupti nobis saepe molestias
                dolore. Totam ipsa error atque placeat velit voluptatum similique impedit eaque beatae 
                tenetur obcaecati eos dolores, 
            </div>
            <div class="readmore my-4"><button class="rounded readmore">Readmore</button></div>
            <div class="container float-left my-2 zeropadding">
                <div class="row donationDiv1">
                    <div class="col-sm-6">
                        <div class="result float-left">
                            <span>
                                  {{ $donors->count()}}
                            </span>
                        </div>
                        <div class="donation_heading">Donation</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="result float-left">
                        <span> $
                            {{ $donors->sum('amount')}}
                        </span></div>
                        <div class="donation_heading">Donation Total</div>
                    </div>
                </div>
            </div>
             <div class="container-fluid">
               <a href="/donor" class="btn btn-primary rounded"> Donate</a>
            </div>
        </div>     
   </div>
</div>
<div class="container featured_project my-4">
      <div class="row donationDiv2">
         <div class="col-sm-6"><h1>Featured Project</h1></div>
         <div class="col-sm-6"><a href="/project" class="btn btn-primary rounded float-right">Viewmore</a></div>
      </div>
</div>

<div class="container projects my-4">
     <div class="row">
     <div class="col-sm-6">
        <div class="sticky-top">
            <div class="container my-4 projectDiv">
              @foreach($projects as $project)
               <div class="row">
                   <div class="heading"><h4>{{$project->name}}</h4></div>
                    <div class="funding"><span>Funding</span></div>
                    <img src="{{asset('img/'.$project->img_src)}}"  alt="{{$project->img_alt}}" class="slideImage" alt="...">
                    <div class="">
                        <div class="contentTextProject">   
                            <div class="comment more">
                            <span class="beforeContext">{!! htmlspecialchars_decode(Str::limit($project->description, 300)) !!} </span>

                                @if(strlen($project->description) > 300)

                                <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                <span class="read-more-content" >
                                {!! htmlspecialchars_decode($project->description) !!} 
                                <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                @else
                                {!! htmlspecialchars_decode($project->description) !!} 
                                @endif
                            </div>                      
                         </div>
                    </div>
                    
                    <div class="text-donation rounded">Crypto-donation Total <span class="float-right result-text">${{ $donors->sum('amount')}}</span></div>
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
                @endforeach
                </div>
            </div>
            <!-- end -->
          <div class="col-sm-6">
          <div class="sticky-top">
          <div class="container my-4 projectDiv">
              @foreach($projects as $project)
               <div class="row">
                   <div class="heading"><h4>{{$project->name}}</h4></div>
                    <div class="funding"><span>Funding</span></div>
                    <img src="/image/secondimage.jpg" class="slideImage" alt="...">
                    <div class="">
                        <div class="contentTextProject">
                            <div class="comment more">

                                <span class="beforeContext">{!! htmlspecialchars_decode(Str::limit($project->description, 300)) !!} </span>

                                @if(strlen($project->description) > 300)

                                <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                <span class="read-more-content" >
                                {!! htmlspecialchars_decode($project->description) !!} 
                                <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                @else
                                {!! htmlspecialchars_decode($project->description) !!} 
                                @endif
                                
                            </div>                          
                        </div>
                    </div>
                    
                    <div class="text-donation rounded">Crypto-donation Total <span class="float-right result-text">${{ $donors->sum('amount')}}</span></div>
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
                @endforeach
                
            </div>
          </div>
          <!-- end -->
     </div>
</div>

<div class="container my-4">
   <div class="row"> 
       <div class="col-sm-4">
           <div class="titlePart"><h1>Save the Life</h1></div>
           <div class="contentPart my-2">
           Help People for their needs all over the world on this planet! If opportunity doesn&#39;t knock, let build a
door together. We have two beliefs: the future can be better than the presents and I have the power to
make it so
           </div>
           <button class="btn btn-primary rounded float-left donateWidth">Donate</button>
       </div>
       <div class="col-sm-8 videoDiv"> 
       <video src="/video/movie.ogg" controls></video>
       </div>
   </div>

</div>

<div class="container bg-primary rounded getinvolvedDiv">

      <div class="row">
           <div class="col-sm-6"> 
                  <div class="getinvolved">Get involved</div>
                  <div class="listDiv">
                       <ul>
                           <li>Are you passionate about social impact?</li>
                           <li>want to propose project</li>
                           <li>Have some feedback for us</li>
                       </ul>
                  </div>
            </div>
           <div class="col-sm-6">
               <button class="getTouch">Get in touch</button>
           </div>
      </div>

</div>

<div class="container">
      <div class="row">
           <div class="col-sm-6 slideDiv">
           <!-- slide image -->
           <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/image/slide1.jpg" class="slideImage" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/image/secondimage.jpg" class="slideImage" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/image/slide2.jpg" class="slideImage" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
           <!-- end of slide image -->
           </div>
           <div class="col-sm-6">
           <div class="my-2"><h2>Donate Today</h2> </div>
              <div>
              changing lives,Taking action.For every £1 you donate could change a life.
              
              
              Thankfully, we all have the power to do something and make a difference. 
              <p>Here at Muhahe donations, we're empowering a person for individuals, group ,organizations, and communities to step up in the face of the COVID-19 outbreak and help those who need it most.</p>
              <h5>Rwandan startup Muhahe multi functions an e-commerce platform</h5>
              </div>
              <div class="my-4"> <a href="/donor" class="btn btn-primary rounded float-left donateWidth">Donate</a></div>
           </div>
      </div>
</div>
</div>
@endsection
