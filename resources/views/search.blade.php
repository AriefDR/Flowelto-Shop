@extends('layout.main')

@section('title', 'Page Searching')

@section('container')

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Choose category : </li>
                    @foreach ($category as $ctg)
                    <li class="breadcrumb-item"><a href="{{url('/category/'. $ctg->slug)}}"
                            class="text-decoration-none"> {{$ctg->category_name}}</a></li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        @foreach ($flowers as $flower)
        <div class="col-lg-3" style="margin:10px 0;">
            <div class="card-group" style="height: 26rem;">
                <div class="card">
                    <a href="{{url('/'.$flower->slug)}}">
                        <div class="text-center">
                            <img class="card-img-top" src="{{asset('storage/flower/' . $flower->flower_img)}}"
                                alt="Card image cap" height="250">
                        </div>
                    </a>
                    <div class="mt-5">
                        <h5 class="font-weight-bold text-center" style="height: 60px; padding:5px; color:black">
                            {{$flower->flower_name}}</h5>
                        <p class="text-center">Rp.{{$flower->flower_price}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> <br>
    {{$flowers->withQueryString()->links()}}
</div>
@endsection
