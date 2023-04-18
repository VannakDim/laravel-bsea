@extends('layouts.app')
@section('title','BSEA Cambodia')
@section('heading')
        <div class="container-fluit bg-primary hero-header">
                <div class="row g-3 align-items-center">
                        <div class="col-lg-12 text-center">
                                <h1 class="text-white mb-4 animated zoomIn kh">សមាគមន៍កាបូប ស្បែកជើង និងអេឡិចត្រូនិចកម្ពុជា</h1>
                                <h1 class="text-white mb-4 animated zoomIn ch">柬 埔 寨 箱 包 、鞋 业 和 电 子 商 会</h1>
                                <h1 class="text-white mb-4 animated zoomIn en">Cambodia’s Bag, Shoe and Electronic Association</h1>
                        </div>
                </div>
        </div>
@stop

@section('content')
<div class="container">
        <h1>Home page</h1>
        <p>You are in home page</p>
</div>
@stop

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