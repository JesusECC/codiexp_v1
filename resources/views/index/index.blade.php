@extends('layouts.codiexp')
@section('contenido')
<section id="intro" class="wrapper style1">
    <!-- <div class="title">The Details</div> -->
    <div class="container">
        
        <div id="demo" class="carousel slide " data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <style>
            div.
            </style>
            <!-- The slideshow -->
            <div class="carousel-inner center">
                <div class="carousel-item active">
                    <img src="{{ asset('images/codiexp.jpg')}}" alt="banner codiexp" width="700" height="800">
                </div>
                <!--<div class="carousel-item">
                    <img src="{{ asset('images/imagen.jpg')}}" alt="banner" width="700" height="700">
                </div>
                <div class="carousel-item">
                    <img src="ny.jpg" alt="New York" width="1100" height="500">
                </div> -->
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div> 
</section>
@endsection