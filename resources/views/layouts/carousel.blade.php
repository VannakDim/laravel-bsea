@extends('layouts.app')

@section('carousel')      
    <div class="col-lg">
        <!-- <div class="col-lg-12 text-center text-lg-art"> -->
        <!-- <img width="100%" class="img-fluid animated zoomIn" src="img/hero.png" alt=""> -->
        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/img/carousel/c01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c03.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c04.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel/c05.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </div>
@stop