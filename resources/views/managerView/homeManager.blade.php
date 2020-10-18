@extends('layout.layoutManager')
@section('title','Welcome Home | Manager ')
@section('css')
    @parent
<link rel="stylesheet" href="{{asset('/css/homeManager.css')}}">
@endsection
@section('judulHeader','Welcome To Dahboard Manager')
@section('content')
<div class="row justify-content-md-center">
    <div class="col-sm-4">
        <div class="card-counter primary">
            <i class="fas fa-users"></i>
            <span class="count-numbers">50k</span>
            <span class="count-name">Users</span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-counter info">
            <i class="fas fa-store"></i>
            <span class="count-numbers">5k</span>
            <span class="count-name">Flowers</span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-counter success">
            <i class="fas fa-shopping-cart"></i>
            <span class="count-numbers">120k</span>
            <span class="count-name">Transactions</span>
        </div>
    </div>
</div>
<hr class="customhr">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
    <div class="carousel-item col-md-4 active">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga1.jpg')}}" alt="Bunga 1">
        <div class="card-body">
            <h4 class="card-title">Bunga 1</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga2.jpg')}}" alt="Bunga 2">
        <div class="card-body">
            <h4 class="card-title">Bunga 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga3.jpg')}}" alt="Bunga 3">
        <div class="card-body">
            <h4 class="card-title">Bunga 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga4.jpg')}}" alt="Bunga 4">
        <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga5.jpg')}}" alt="Bunga 5">
        <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga6.jpg')}}" alt="Bunga 6">
        <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="carousel-item col-md-4">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('/img/bunga7.jpg')}}" alt="Bunga 7">
        <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>

@endsection
@section('js')
    @parent
<script src="{{asset('/js/homeManager.js')}}"></script>
@endsection
