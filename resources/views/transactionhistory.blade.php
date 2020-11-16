@extends('layout.main')

@section('title', 'Transaction History')

@section('container')
<br><br><br>
<div class="container">
    <table class="table table-dark table-hover">
        <thead>
          <tr class="text-center text-uppercase">
            <th scope="col">Transaction History</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($transactions as $trasaction)
            <tr class="text-center">
               <td> <a href="{{url('/transaction-history/'.$trasaction->id)}}" class="text-decoration-none">{{$trasaction->created_at}}</a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
        {{$transactions->links()}}
    </div>
@endsection
