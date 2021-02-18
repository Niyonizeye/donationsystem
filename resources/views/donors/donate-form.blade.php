@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
        @foreach($projects as $project)
            <div class="col-sm-4">
                <div class="imageDonorDiv">
                    <div class="auramate my-4">
                          {{$project->name}}
                     </div>
                    <div class="projectImage">
                    <img src="{{asset('img/'.$project->img_src)}}" alt="{{$project->img_alt}}" srcset="" class="imageDown">
                    </div>
                   <div class="text-Div text-font">
                   <div class="text one"> 
                    {{$project->description}}
                    </div>
            
                   </div>
                </div>
            </div>
            @endforeach
            <div class="col-sm-8">
                <form action="{{ route('donors.store') }}" method="post">
                @csrf
                    <div class="card my-4">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div>
                                       <select name="identity" class="inputformdonor" required>
                                          <option selected disabled value="">Choose your Identity</option>
                                           <option value="indivual">Individual</option>
                                           <option value="company">company</option>
                                       </select>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div>
                                           <input id="validationCustomUsername" type="email" placeholder="Email" class="inputformdonor" name="email" required >

                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                            
                            <div class="form-group">
                               <div class="row">
                                    <div class="col-sm-6">
                                       <div>
                                            <input class="inputformdonor" type="text" placeholder="Full Name" name="name" value="" required>
                                           
                                        </div> 
                                    
                                    </div>
                                    <div class="col-sm-6">

                                        <div>
                                            <select name="showname" id="showname"  class="inputformdonor" required>
                                               <option selected disabled value="">Make Choose here</option>
                                                <option value="name">Show Name</option>
                                                <option value="acronumous">acronymours</option>
                                                <option value="---">----</option>
                                            </select>
                                        </div>
                                                                           
                                    </div>
                                </div>    
                            </div>
                    
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                       <div >
                                          <input id="PhoneNumber" type="text" placeholder="Phone Number" name="phoneNumber" class="inputformdonor" value="" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div>
                                            <select name="currency" id="currency"  placeholder="Choose currency" class="inputformdonor" required>
                                                <option selected disabled value="">Choose currency type</option>
                                                <option value="Dollars">US$</option>
                                                <option value="BTC">BTC</option>
                                                <option value="RWF">Rwf</option>
                                            </select>
                                       </div>                                      
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <span class="text-font">Choose package or Enter amount to Pay</span>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group mb-3">
                                            <input type="text" name="amount" class="inputformdonor" required placeholder="Enter Amount or choose package">
            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary" type="button" name="amount" value="10">$ 10</button>
                                            <button class="btn btn-outline-secondary" type="button" name="amount" value="50">$ 50</button>
                                            <button class="btn btn-outline-secondary" type="button" name="amount" value="100">$ 100</button>
                                            <button class="btn btn-outline-secondary" type="button" name="amount" value="500">$ 500</button>
                                        </div>                                                                          
                                   </div>
                                </div>                                    
                            </div> 
                            <div class="form-group">
                                <span class="text-font">Choose Affordable means of payment</span><hr>
                            </div>

                            <div class="form-group">
                               <div class="row ">
                                   <div class="col-sm-3 my-4">
                                       <div class="card_payment">
                                       <a data-toggle="tab" href="#momo"> <img src="./image/momo.jpg" class="img-thumbnail" id="payImage" alt="..."></a>
                                       </div>
                                       <a data-toggle="tab" href="#momo"><button type="button" class="btn btn-outline-primary my-2 btn-pay">Mobile Pay</button></a>
                                    </div>
                                   <div class="col-sm-3 my-4 rounded">
                                       <div class="card_payment">
                                       <a data-toggle="tab" href="#paypal"><img src="./image/paypal.jpg" class="img-thumbnail" id="payImage" alt="..."></a>
                                        </div>
                                        <a data-toggle="tab" href="#paypal"><button type="button" class="btn btn-outline-primary my-2 btn-pay">Pay Pal</button></a>
                                    </div>
                                   <div class="col-sm-3 my-4">
                                        <div class="card_payment">
                                         <a data-toggle="tab" href="#stripe"> <img src="./image/stripe.jpg" class="img-thumbnail" id="payImage" alt="..."></a> 
                                            </div>
                                        <a data-toggle="tab" href="#stripe"><button type="button" class="btn btn-outline-primary my-2 btn-pay">Stripe</button></a>                                     
                                    </div>
                                   <div class="col-sm-3 my-4">
                                        <div class="card_payment">
                                        <a data-toggle="tab" href="#offline"><img src="./image/offlinepay.jpg" class="img-thumbnail" id="payImage" alt="..."></a>
                                            </div>
                                        <a data-toggle="tab" href="#offline"> <button type="button" class="btn btn-outline-primary my-2 btn-pay">offline Pay</button></a>
                                        
                                        </div>
                                    </div>

                                    <!-- dynamic tabs for payment -->
                                    <div class="tab-content">
                                        <div id="momo" class="tab-pane fade">
                                            <h3>Mobile Money Payment</h3>
                                            <div class="container">
                                                comming soon
                                            </div>
                                        </div>
                                        <div id="paypal" class="tab-pane fade in active">
                                            <h3>PayPal Payment</h3>
                                            <p>Some content.</p>
                                        </div>
                                        <div id="stripe" class="tab-pane fade">
                                            <h3>Stripe payment method</h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div >
                                                           <input id="PhoneNumber" type="text" placeholder="Card Number" class="inputformdonor" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div >
                                                           <input id="PhoneNumber" type="text" placeholder="CVV" class="inputformdonor" value="">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div >
                                                           <input id="PhoneNumber" type="text" placeholder="Month" class="inputformdonor">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div >
                                                           <input id="PhoneNumber" type="text" placeholder="Year" class="inputformdonor">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="offline" class="tab-pane fade">
                                            <h3>Offline Payment Method</h3>
                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-outline-secondary float-end mr-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Commitment</button>
                                
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="font-size:1rem">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Terms and condition</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum eveniet 
                                    impedit consequatur. Commodi eaque, dolor voluptatum explicabo ullam consequuntur
                                    cum nostrum architecto sunt! Obcaecati qui, vero, nihil dolorem error optio id quod
                                    facere alias laudantium rem doloribus, fugiat voluptate inventore sit officiis voluptatum 
                                    possimus officia dicta earum debitis expedita commodi?
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                        <label class="form-check-label" for="invalidCheck3">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                   <button type="submit"  class="btn btn-primary">Yes i'm agree</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    
                    </div>                      

                </form>
            </div>
        </div>
    </div>
</div>


@endsection