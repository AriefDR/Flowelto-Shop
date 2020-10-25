@extends('layout.layoutManager')
@section('title','Welcome Home | Input Data Flower ')
@section('judulHeader','Please Input Data Flower ')
@section('content')
<form action="{{route('flower.store')}}" method="POST" enctype="multipart/form-data">
    <label for="category">Category</label>
    <select class="custom-select {{$errors->has('category') ? 'is-invalid' : '' }}" name="category">
        <option selected value="">---</option>
        @foreach ($flowers as $flower)
            <option value="{{$flower->category_id}}">{{$flower->category->category_name}}</option>
        @endforeach
    </select>
        @if ($errors->has('category'))
            <div class="invalid-feedback">
                {{$errors->first('category')}}
            </div>
        @endif
    <div class="form-group ">
        <label for="flowerName">Flower Name</label>
        <input type="text" class="form-control {{$errors->has('flowerName') ? 'is-invalid' : '' }}" id="flowerName" placeholder="Mawar" name="flowerName">
        @if ($errors->has('flowerName'))
            <div class="invalid-feedback">
                {{$errors->first('flowerName')}}
            </div>
        @endif
    </div>
    <div class="form-group ">
        <label for="flowerPrice">Flower Price in Rp.</label>
        <input name="flowerPrice" type="number" class="form-control {{$errors->has('flowerPrice') ? 'is-invalid' : '' }}" name="flowerPrice" id="flowerPrice" placeholder="Rp. 1000000">
        @if ($errors->has('flowerPrice'))
            <div class="invalid-feedback">
                {{$errors->first('flowerPrice')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="desFlower">Flower Description</label>
        <textarea class="form-control {{$errors->has('desFlower') ? 'is-invalid' : '' }}" id="desFlower" rows="3" name="desFlower"></textarea>
        @if ($errors->has('desFlower'))
            <div class="invalid-feedback">
                {{$errors->first('desFlower')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="flowerImg">Flower Image</label>
        <input type="file" class="form-control-file {{$errors->has('flowerImg') ? 'is-invalid' : '' }}" id="flowerImg" name="flowerImg">
        @if ($errors->has('flowerImg'))
            <div class="invalid-feedback">
                {{$errors->first('flowerImg')}}
            </div>
        @endif
    </div>
      @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
