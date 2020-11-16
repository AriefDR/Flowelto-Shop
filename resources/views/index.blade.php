@extends('layout.main')

@section('title', 'Flowelto Shop')

@section('container')
<br><br>
@if(session()->has('success'))
    <script>
        alert('{{session()->get('success')}}');
    </script>
@endif
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/megan-markham-zebbovVjMvM-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Make Life Happy With <br> <span class="font-weight-bold">Flowelto Shop</span></h1>
              <hr class="my-4">
              <p class="lead">Toko Bunga Berkualitas Dengan Harga Terjangkau</p>
              <a class="btn btn-primary btn-lg font-weight-bold" href="/about" role="button">LEARN MORE</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/dio-ezar-qP7mJKfeSUM-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Mengapa Harus Berbelanja Di <br> <span class="font-weight-bold">Flowelto Shop?</span></h1>
              <hr class="my-4">
              <p class="lead">Karena Kami Selalu Merawat Dan Memastikan Bunga Tetap Indah Sebelum Sampai Ke Tempat Anda</p>
              <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">SEE OUR FEATURED FLOWERS</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/joao-luccas-oliveira-EymZnrzrgiU-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Dapatkan Penawaran Menarik Bagi Pengguna Baru <br> <span class="font-weight-bold">Up To 50%</span></h1>
              <hr class="my-4">
            <a class="btn btn-primary btn-lg font-weight-bold" href="{{url('/register')}}" role="button">SIGN UP NOW</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br>
    <h4 class="text-center font-weight-bold m-4">NEW PRODUCTS</h4>

    <div class="container">
    <div class="row mx-auto">
        @for($i=(count($flowers)); $i>(count($flowers)-3); $i--)
        <div class="col-lg-4">
            <div class="card" style="height:33rem;" >
                <a href="{{url('/'. $flowers[$i-1]->slug)}}">
                <img src="{{asset('/storage/flower/'.$flowers[$i-1]->flower_img)}}" class="card-img-top" alt="Gambar Bunga">
                </a>
                <div class="card-body bg-white">
                    <h5 class="card-title">{{$flowers[$i-1]->flower_name}}</h5>
                    <p class="card-text">{{substr($flowers[$i-1]->flower_description,0,100)}}</p>
                </div>
            </div>
        </div>
        @endfor
      </div>

      <br><br>
      <div class="text-center">
        <button type="button" class="btn btn-info btn-lg text-white">VIEW ALL NEW PRODUCTS</button>
      </div>
      <br><br><br><br><br><br>
    <h4 class="text-center font-weight-bold m-4">{{$category[0]->category_name}}</h4>
      <div class="row mx-auto mt-5">
        @php
            $i = 1;
        @endphp
        @foreach ($flowers as $flct)
        @if($flct->category_id == $category[0]->id)
        <div class="col-lg-6">
            <div class="card " style="height: 33rem; max-width: 20rem;">
                <a href="{{url('/'.$flct->slug)}}">
                <img src="{{asset('/storage/flower/'.$flct->flower_img)}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body bg-white">
                <h5 class="card-title">{{$flct->flower_name}}</h5>
                  <p class="card-text">{{substr($flct->flower_description,0,100)}}.</p>
                </div>
                <div class="card-footer">

                </div>
              </div>
        </div>
        @php
            $i++;
            if($i == 4) break;
        @endphp
        @endif
        @endforeach
      </div>
      <br><br>
      <div class="text-center">
        <button type="button" class="btn btn-info btn-lg text-white">VIEW ALL FRESH FLOWERS</button>
      </div>
    </div>

    <br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <br><br><br>
          <h3>FLOWELTO SHOP</h3> <br><br>
          <p>Flowelto Shop is a flower house located in West Jakarta, Kebon Jeruk. We've been serving you since 2020 and it feels amazing to be a "Messenger" to our beloved customers for the past years. Professionally curated by a local expert La Madame Florist, with more than hundreds of bouquet, flower box, flower basket and gift options to choose from, whatever may be the occasion: season’s greeting, anniversary, graduation wishes, birthday, valentines, wedding, engagement, newborn, Christmas, Eid Mubarak and many more categories that cover the entire canvas of life.</p>
          <p>It is perhaps the most used and successful form of communicating your feelings to those you care about. At Flowelto Shop, we realize the worth of your emotions which is what makes us the number one choice for sending out your love to dear ones. Be it a happy occasion or a sad one. Flowelto Shop is just a click away.</p>
          <p>A good life is a collection of happy moments. Let’s create your happy moments with us.</p>
        </div>
        <div class="col-sm-6">
            <img src="/img/madame.jpg" alt="">
        </div>
      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4671523621087!2d106.77874291425805!3d-6.2019379624807485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Anggrek%20Campus!5e0!3m2!1sen!2sid!4v1602315875031!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <div class="col-sm-4">
          <br><br>
          <h3 class="ml-5">WHERE TO FIND US :</h3> <br><br>
          <p class="font-weight-bold ml-5">Binus University</p>
          <p class="ml-5">Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
        </div>
      </div>
    </div>
    <br><br>
@endsection
