@extends('layout.main')

@section('title', 'Detail Transaction History ')

@section('container')
<br><br><br>
<div class="container">
    <h3 class="text-center">Transaction At {{$date->created_at}}</h3> <br>
    @foreach ($transactions as $transaction)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Flower Image</th>
                <th scope="col">Flower Name</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($transaction->cart->items as $item)
                <tr>
                    <td><img src="{{asset('/storage/flower/'. $item['img'])}}" alt="" width="150"></td>
                    <td>{{$item['item']['flower_name']}}</td>
                    <td>Rp. {{$item['price']}}</td>
                    <td>{{$item['qty']}}</td>
                </tr>
                @endforeach
                <tr>
                    <th></th>
                    <th scope="col" colspan="2">Total Price</th>
                    <th scope="col ">Rp. {{$transaction->cart->totalPrice}}</th>
                </tr>
            </tbody>
        </table>
      @endforeach
</div>
@endsection


