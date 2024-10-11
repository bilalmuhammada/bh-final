@extends('layout.master')
@section('content')
<section>
    <!-- <div class="container slider-area"> -->
    <div class="cont-w slider-area desktop-view">

        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/hero_image_7.jpeg') }}" alt="Los Angeles333" width="100%" height="257">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hero_image_7.jpeg') }}" alt="Chicago" width="100%" height="257">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
