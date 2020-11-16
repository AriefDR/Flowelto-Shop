@extends('layout.main')

@section('title', 'Checkout Page')

@section('container')

<br><br><br>
    <div class="container">
        <h4 class="text-center" style="letter-spacing: 2px;">CHECKOUT</h4>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$errors->first()}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                <form action="{{route('post.checkout')}}" method="POST">
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="username" value="{{Auth::user()->username}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="typePayments" class="col-sm-2 col-form-label">Payment</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="typePayments">
                            <option>---</option>
                            @foreach ($typePayments as $tp)
                                <option value="{{$tp->id}}">{{$tp->type_payment_name}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Destination Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="destination_address" rows="4"></textarea>
                        </div>
                      </div>
                      @csrf()
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mt-3" style="width: 120px">Buy Now</button>
                      </div>
                  </form>
            </div>
          </div>
    </div>
@endsection
