@extends('layouts.app')


@section('content')
<script>
    function myFunction() {
    var x = document.getElementsByName("amount");

    for(i = 0; i < x.length; i++) { 
                if(x[i].checked) 
                document.getElementById("demo").value=x[i].value
                document.getElementById("skrill").value=x[i].value
            } 
    }
    function payment() {
    var y = document.getElementsByName("pay-type");

    for(i = 0; i < y.length; i++) { 
                if(y[i].checked) 
              var formId = y[i].value;
              
            } 
    }
    function skrillsubmit() {
  document.getElementById("myForm").submit();
}

// function for submit a form
function submitformfunction() {
       document.getElementById("myForm").submit();
       document.getElementById("form1").submit();
}
</script> 
 
<div class="container-fluid">
    <div class="container">
        <div class="row">
        @foreach($projects as $project)
            <div class="col-sm-4">
                <div class="imageDonorDiv">
                    <div class="auramate my-4">
                          {{$project->name}}
                     </div>
                    <div class="img">
                    <img src="{{asset('img/'.$project->img_src)}}" alt="{{$project->img_alt}}" srcset="" class="img-thumbnail">
                    </div>
                   <div class="text-Div text-font">
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
            @endforeach
            
            <div class="col-sm-8">
                <div class="card  my-4 sticky-top" style="position:sticky">
                    <form action="{{ route('donors.store') }}" name="myForm" id="myForm" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div>
                                       <select name="identity" class="inputformdonor" required>
                                          <option selected disabled value="">Choose your Identity</option>
                                           <option value="indivual">Individual</option>
                                           <option value="indivual">Family</option>
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
                                            
                                            </select>
                                        </div>
                                                                           
                                    </div>
                                </div>    
                            </div>
                    
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                       <div >
                                         <select id="country" name="country">
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                         </select>
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
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                    <label for="myRadio10">
                                    <span class="btn btn-secondary rounded mr-2">

                                    <input type="radio" name="amount" value="10" id="myRadio10"  onclick="myFunction()" class="ml-2">$10 
                                    </span></label>
                                    <label for="myRadio20">
                                    <span class="btn btn-secondary rounded mr-2">

                                    <input type="radio" name="amount" value="20" id="myRadio20"  onclick="myFunction()" class="ml-2">$20 
                                    </span></label>
                                    <label for="myRadio30">
                                    <span class="btn btn-secondary rounded mr-2">

                                    <input type="radio" name="amount" value="30" id="myRadio30"  onclick="myFunction()" class="ml-2">$30 
                                    </span></label>
                                    <label for="myRadio50">
                                    <span class="btn btn-secondary rounded mr-2">

                                    <input type="radio" name="amount" value="50" id="myRadio50"  onclick="myFunction()" class="ml-2">$50 
                                    </span></label>
                                    <label for="myRadio100">
                                    <span class="btn btn-secondary rounded mr-2">

                                    <input type="radio" name="amount" value="100" id="myRadio100"  onclick="myFunction()" class="ml-2">$100 
                                    </span></label>
                                    </span>
                                    
                                    <input type="text" id="demo" name="amount" class="form-control amount-selected" value="" placeholder="Other amount" aria-label="Dollar amount (with dot and two decimal places)" style="padding:25px;font-size:18px">
                                </div> 
                                <div class="bg-light container-fluid">
                            </div>        
                        </div>   
                    </form>           
                            <!-- form control payl -->
                            <center><h4>Choose Paymnent Method Here</h4></center> 
                            <div class="container my-4">
                                <div class="d-flex justify-content-between">
                                    <div class="card_payment">
                                    <a data-toggle="tab" href="#momo"> <img src="../image/momo.jpg" class="PayImage" id="payImage" alt="..."></a>
                                    </div>
                                    <div class="card_payment">
                                    <a data-toggle="tab" href="#paypal"><img src="../image/paypal.jpg" class="PayImage" id="payImage" alt="..."></a>
                                    </div>
                                    <div class="card_payment">
                                    <input type="radio" class="btn-check" name="payment_type" id="danger-outlined" autocomplete="off">
                                    <label class="btn btn-outline" for="danger-outlined"><a data-toggle="tab" href="#stripe"> <img src="../image/master.png" class="PayImage" id="payImage" alt="..."></a>  </label>
                                    
                                    </div>
                                    <div class="card_payment">
                                    <a data-toggle="tab" href="#stripe"> <img src="../image/visa.png" class="PayImage" id="payImage" alt="..."></a> 
                                    </div>
                                    <div class="card_payment">
                                        <form  method="post">
                                            @csrf  

                                            <label for="visaId">
                                            <!-- <input type="radio" value="visa" name="pay-type" onclick="payment()" id="visaId"> -->
                                            <!-- <input type="hidden" name="amount" id="visaId"> -->
                                            <a data-toggle="tab" href="#stripe"> <img src="../image/visa.png" class="PayImage" id="payImage" alt="..."></a>
                                            </label>   
                                        </form> 
                                    </div>
                                    <div class="card_payment"> 
                                    <form id="form1" name="form1" action="{{url('form')}}" method="post">
                                        @csrf  

                                        <label for="skrillId">
                                        <input type="radio" name="pay-type" required value="skrill" id="skrillId"  onclick="payment()" class="ml-2">
                                        <input type="hidden" name="amount" id="skrill">
                                        <img src="../image/skril.jpeg" class="PayImage" id="payImage" alt="...">
                                        </label>   
                                    </form>                           
                                        

                                    </div>                        
                                    <div class="card_payment">
                                        <a data-toggle="tab" href="#offline"><img src="../image/offlinepay.jpg" class="PayImage" id="payImage" alt="..."></a>
                                    </div>  
                                </div> 
                                <div class="tab-content my-4">
                                    <div id="momo" class="tab-pane fade">
                                        <div class="container">
                                            Dial *182*8*1*043159#
                                        </div>
                                    </div>
                                    <div id="paypal" class="tab-pane fade in active">
                                        <h3>PayPal Payment</h3>
                                        <p>Some content.</p>
                                    </div>
                                    <div id="stripe" class="tab-pane fade">
                                      <h3>Stripe payment method</h3>
                                    </div>
                                    <div id="skrill1" class="tab-pane fade">
                                      <h3>Skrill</h3>
                                    </div>
                                </div>
                            </div>
                           <!-- payment form -->

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
                                            <p id="didate"></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="submit"   onclick="submitformfunction()" id="submitBtn" class="btn btn-primary">Yes i'm agree</button>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
          </div>
    </div>



@endsection