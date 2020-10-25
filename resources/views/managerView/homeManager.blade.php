@extends('layout.layoutManager')
@section('title','Welcome Home | Manager ')
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
<hr class="nwFlower">
<div class="container my-4">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga1.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga2.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga3.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga4.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga5.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('/img/bunga6.jpg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>
@endsection
