@extends('layout.layoutManager')
@section('title','Welcome Home | Add Flowers ')
@section('judulHeader', 'Result Search')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p>{{session()->get('success')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<div class="row">
@foreach ($flowers as $flower)
    <div class="col-lg-4" style="margin:10px 0;">
        <div class="card-group">
            <div class="card" style="height:36rem;">
                <a href="{{url('/manager/flower/'.$flower->slug)}}">
                <img class="card-img-top" src="{{asset('storage/flower/' . $flower->flower_img)}}" alt="Card image cap">
                </a>
            <div class="card-body">
                <h5 class="card-title">{{$flower->flower_name}}</h5>
                <p class="card-text">{{substr($flower->flower_description,0,150)}}</p>
            </div>
            <div class="card-footer" style="background-color: white;">
                <a href="{{url('/manager/flower/'.$flower->slug)}}"><button type="button" class="btn btn-outline-info">Details</button></a>
                <a href="{{url('/manager/flower/'.$flower->id .'/edit')}}"><button type="button" class="btn btn-outline-warning">Edit</button></a>
                <form action="{{url('/manager/flower/'.$flower->id)}}" method="POST" style="display: inline;">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger" >Delete</button>
                </form>
              </div>
            </div>
        </div>
    </div>
@endforeach
</div>
{{$flowers->links()}}
@endsection
