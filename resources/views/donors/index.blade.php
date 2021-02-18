@extends('layouts.app')


@section('content')
<!-- Modal -->

<div class="modal fade my-10" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      @if($errors->any())
      <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
             <li class="list-group-item text-danger">
                {{$error}}
             </li>

            @endforeach
        </ul>
      </div>

      @endif

    <form method="POST" action="{{ route('donors.store') }}">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Fill The form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="card my-4">

             <div class="card-body">
                     @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                <div class="col-md-6">
                <input id="name" type="text" name="phoneNumber" required autocomplete="name" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="currency" class="col-md-4 col-form-label text-md-right">Currency</label>

                <div class="col-md-6">
                    <select name="currency" id="currency">
                        <option value="BTC">BTC</option>
                        <option value="Dollars">Dollars</option>
                        <option value="Euro">Euro</option>
                    </select>
                </div>
                <div class="form-group row">
                <label for="amount" class="col-md-4 col-form-label text-md-right">Amount</label>

                <div class="col-md-6">
                <input id="name" type="number" name="amount" required autocomplete="name" autofocus>
                </div>
            </div>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Comfirm</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="container my-4 containerUp">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <button class="btn btn-dark donate-btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Donate</button>
        </div>
        <div class="col-md-8">
           <div class="centerUp"><img src="#" alt="slide" class="imageSlide"></div><hr>
           <div class="row donorsDiv">
                <div class="col-sm-6">
                <h1>Donors()</h1>

                <div class="card card-default">
                    <div class="card-body">
                        @foreach($donors as $donor)

                            <ul class="list-group">
                            <li class="list-group-item">
                                {{$donor->name}}
                            </li>
                            </ul>    
                        @endforeach
                    </div>
                </div>
                
                </div>
                <div class="col-sm-6"><h1>Amount()</h1></div>
           </div>
            
        </div>
    </div>
</div>
</div>
    
@endsection
