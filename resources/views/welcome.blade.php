@extends('layouts.app')


@section('content')
<!-- Modal -->
<div class="container-fluid containerUp" style="padding:0;margin:0">
    <div>
        <img src="/image/banner4.jpg" class="imageBanner img-fluid" alt="" srcset="">
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
       <div class="col-sm-6 imageDiv"><img src="/image/firstimage.jpg" class="img-fluid" alt="" srcset=""></div>
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
            <div class="container my-4 projectDiv">
               <div class="row">
                    <div class="col-sm-6 my-4 imagediv"><img src="/image/image2.png" alt="" srcset="" class="imageDown"></div>
                    <div class="col-sm-6">
                            <div class="funding"><span>Funding</span></div>
                        <div class="heading"><h4>Crypto against Covid</h4></div>
                        <div class="contentTextProject">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio porro sequi placeat eveniet,
                            repellendus recusandae fugit doloribus praesentium nisi unde tenetur corporis enim veritatis
                            ea temporibus ullam aliquam quaerat minima. Ullam officia beatae nemo, animi architecto debitis
                            dolores exercitationem ratione quis error voluptate.
                            </div>
                    </div>
                    <div class="text-donation rounded">Crypto-donation Total <span class="float-right result-text">$123456</span></div>
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
            <!-- end -->
          <div class="col-sm-6">
            <div class="container my-4 projectDiv">
               <div class="row">
                   <div class="col-sm-6 my-4"><img src="/image/image2.png" alt="" srcset="" class="imageDown"></div>
                   <div class="col-sm-6">
                        <div class="funding"><span>Funding</span></div>
                        <div class="heading"><h4>Crypto against Covid</h4></div>
                        <div class="contentTextProject">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio porro sequi placeat eveniet,
                         repellendus recusandae fugit doloribus praesentium nisi unde tenetur corporis enim veritatis
                         ea temporibus ullam aliquam quaerat minima. Ullam officia beatae nemo, animi architecto debitis
                         dolores exercitationem ratione quis error voluptate.
                         </div>
                   </div>
                   <div class="text-donation rounded">Crypto-donation Total <span class="float-right result-text">$123456</span></div>
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
          <!-- end -->
     </div>
</div>

<div class="container my-4">
   <div class="row"> 
       <div class="col-sm-4">
           <div class="titlePart"><h1>Heading Title</h1></div>
           <div class="contentPart my-2">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos omnis velit
           itaque voluptas aperiam nam. Natus esse voluptate, rem est fugit, quam minima repellendus,
           mollitia sed deleniti possimus et molestias laboriosam praesentium quasi eligendi 
           alias labore voluptatum nihil nobis suscipit amet. Maiores fugiat iusto omnis voluptatem deserunt, obcaecati quo.
           </div>
           <button class="btn btn-primary rounded float-left donateWidth">Buy Now</button>
       </div>
       <div class="col-sm-8 videoDiv"> 
       <video src="/video/movie.ogg" controls></video>
       </div>
   </div>

</div>

<div class="container bg-warning rounded getinvolvedDiv">

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
               <button class="getTouch bg-warning">Get in touch</button>
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
                    <img src="/image/image3.jpg" class="slideImage" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="" class="slideImage" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/image/image2.png" class="slideImage" alt="...">
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
              <div class="text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eum autem non vel cupiditate ratione accusamus cum libero laudantium adipisci placeat dicta omnis, mollitia optio blanditiis officia tenetur, ex pariatur! Doloribus dicta libero eius iste qui itaque voluptates, accusamus ullam facere quam, odit earum assumenda reprehenderit odio vero vel minus.
              </div>
              <div class="my-4"> <a href="#" class="btn btn-primary rounded float-left donateWidth">Donate</a></div>
           </div>
      </div>
</div>
</div>
@endsection
