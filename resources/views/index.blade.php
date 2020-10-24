@extends('layout.main')

@section('title', 'Flowelto Shop')

@section('container')
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
              <a class="btn btn-primary btn-lg font-weight-bold" href="/register" role="button">SIGN UP NOW</a>
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
        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga1.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Ava</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga2.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Aneska</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk2" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga3.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Arisha</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk3" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga4.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Arabella</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk4" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>
      </div>

      <br><br>
      <div class="text-center">
        <button type="button" class="btn btn-info btn-lg text-white">VIEW ALL NEW PRODUCTS</button>
      </div>

      <br><br><br><br><br><br>
      <h4 class="text-center font-weight-bold m-4">FRESH FLOWERS</h4>

      <div class="row mx-auto mt-5">
        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga5.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Aurora</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk5" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga6.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Adila</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk6" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga7.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Angelina</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk7" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="img/bunga8.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">Aurelia</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star-half-alt text-success"></i>
            <i class="far fa-star text-success"></i> <br><br>
            <a href="#" class="btn btn-primary" data-target="#produk8" data-toggle="modal" >Details</a>
            <a href="#" class="btn btn-danger">Rp. 220.000</a>
          </div>
        </div>
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

    <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga1.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Ava</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Jepang</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga2.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Aneska</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Korea</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga3.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Arisha</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Cina</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga4.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Arabella</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Thailand</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga5.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Aurora</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Jepang</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga6.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Adila</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Korea</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga7.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Angelina</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Cina</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md-6">
                  <img src="img/bunga8.jpg" alt="">
                </div>
                <div class="col md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Aurelia</td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>Bunga Thailand</td>
                    </tr>
                    <tr>
                      <th>Stock</th>
                      <td>>25</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. 220.000</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Rp. 15.000</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>
@endsection
