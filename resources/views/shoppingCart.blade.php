@extends('layout.main')

@section('title', 'Shopping Cart')

@section('container')
<br><br><br>
<div class="container">
    @if(Session::has('cart'))
        @foreach ($flowers as $flower)
            <div class="row" style="margin: 10px 0; border: 1px solid grey; height: 12rem;">
                <div class="col-lg-3">
                    <img src="{{asset('/storage/flower/' .$flower['item']['flower_img'])}}" class="img-fluid" alt="Responsive image" style="height: 11rem; margin-top: 7px;">
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <h5 class="mx-auto">{{$flower['item']['flower_name']}}</h5>
                </div>
                <div class="col-lg-2  d-flex align-items-center">
                    <h5 class="font-weight-bold"> Rp. {{ $flower['price'] }} </h5>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <form action="">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" min="1" value="{{ $flower['qty'] }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Update</button>
                                </div>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Total: Rp. {{ $totalPrice }}</h3>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-12">
                  <h3 class="font-weight-bold text-center">Shopping Cart Is Empty</h3>
            </div>
        </div>
    @endif
</div>
@endsection
