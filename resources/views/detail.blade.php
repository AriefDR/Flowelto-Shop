@extends('layout.main')

@section('title', 'Detail Page')

@section('container')
<br><br><br><br>
<div class="container" style="min-height:75vh">
    <div class="row">
        <div class="col-lg-6">
        <img src="{{asset('/storage/flower/'. $flower->flower_img)}}" alt="Bunga {{$flower->flower_name}}" class="img-fluid" style="width: 25rem;">
        </div>
        <div class="col-lg-6">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{session()->get('success')}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="text-justify">
                <h3>{{$flower->flower_name}}</h3>
                <h5 class="text-warning">Rp. {{$flower->flower_price}}</h5>
                <p style="font-size: 13px;">available: {{$flower->stock}}</p>
                <p>{{substr($flower->flower_description,0,250)}}</p>
            </div>
            <form action="{{url('/add-to-cart/' . $flower->id)}}" method="get">
                <div class="input-group mb-3">
                    <input type="number" style="border: 3px solid rgb(199, 193, 193);" value="1" min="1" name="valQty" class="{{$errors->any() ? 'is-invalid' : '' }}">
                    <div class="input-group-append">
                        @csrf()
                        <button type="submit" class="btn btn-info">Add <i class="fas fa-cart-plus"></i> </button>
                    </div>
                    @if ($errors->any())
                        <div class="invalid-feedback">
                            {{$errors->first()}}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
