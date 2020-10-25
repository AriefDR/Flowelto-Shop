@extends('layout.layoutManager')
@section('title','Welcome Home | Add Flowers ')
@section('judulHeader')
<a class="text-decoration-none" href="{{route('flower.create')}}">Add Flower</a>
@endsection
@section('content')
<div class="row">
    @foreach ($flowers as $flower)
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$flower->flower_name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href=""><button type="button" class="btn btn-outline-warning">Edit</button></a>
                <a href=""><button type="button" class="btn btn-outline-danger">Danger</button></a>
            </div>
        </div>
    </div>
   @endforeach
</div>
@endsection
