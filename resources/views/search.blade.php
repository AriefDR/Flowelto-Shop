@extends('layout.main')

@section('title', 'Page Searching')

@section('container')

<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="card" style="width: 10rem;">
                    <div class="card-header">
                     Category
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($category as $ctg)
                            <a href="{{url('/category/'. $ctg->category_name)}}" class="text-decoration-none"><li class="list-group-item">{{$ctg->category_name}}</li></a>
                        @endforeach
                    </ul>
                  </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @foreach ($flowers as $flower)
                    <div class="col-lg-4" style="margin:10px 0;">
                        <div class="card-group">
                            <div class="card" style="height:36rem;">
                                <a href="{{url('/'.$flower->slug)}}">
                                <img class="card-img-top" src="{{asset('storage/flower/' . $flower->flower_img)}}" alt="Card image cap">
                                </a>
                            <div class="card-body">
                                <h5 class="card-title">{{$flower->flower_name}}</h5>
                                <p class="card-text">{{substr($flower->flower_description,0,150)}}</p>
                            </div>
                            <div class="card-footer" style="background-color: white;">
                                <div class="card-footer">
                                    <a href="{{url('/'. $flower->slug)}}" class="btn btn-primary"  >Details</a>
                                    <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
