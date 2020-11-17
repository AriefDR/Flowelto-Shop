@extends('layout.main')

@section('title', 'About US')

@section('container')
<br><br><br>
<div class="container">
    <h3 class="text-uppercase text-center" style="letter-spacing: 3px;">About US</h3>
    <hr>
    <div class="row" style=" margin-top: 50px; margin-bottom: 80px;">
        <div class="col-lg-6">
            <img src="{{asset('/img/madame.jpg')}}" class="img-fluid" width="390">
        </div>
        <div class="col-lg-6">
            <p style="margin-top: 50px ">
                Flowelto Shop is a flower house located in West Jakarta, Kebon Jeruk. We've been serving you since 2020 and it feels amazing to be a "Messenger" to our beloved customers for the past years. Professionally curated by a local expert La Madame Florist, with more than hundreds of bouquet, flower box, flower basket and gift options to choose from, whatever may be the occasion: season’s greeting, anniversary, graduation wishes, birthday, valentines, wedding, engagement, newborn, Christmas, Eid Mubarak and many more categories that cover the entire canvas of life.

                It is perhaps the most used and successful form of communicating your feelings to those you care about. At Flowelto Shop, we realize the worth of your emotions which is what makes us the number one choice for sending out your love to dear ones. Be it a happy occasion or a sad one. Flowelto Shop is just a click away.

                A good life is a collection of happy moments. Let’s create your happy moments with us.
            </p>
        </div>
    </div>
</div>
@endsection
