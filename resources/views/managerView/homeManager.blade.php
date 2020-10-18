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
@endsection
@section('js')
    @parent
<script src="{{asset('/js/homeManager.js')}}"></script>
@endsection
