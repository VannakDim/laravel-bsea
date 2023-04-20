@extends('layouts.app')
@section('title','Post page')
@section('heading')
<div class="container-fluit bg-primary hero-header">
        <div class="row g-3 align-items-center">
                <div class="col-lg-12 text-center">
                        <h1 class="text-white mb-4 animated zoomIn kh">ទំនាក់ទំនង</h1>
                        <p class="text-white"><i class="fa fa-phone-alt me-3"></i>+855 69 668 788</p>
                        <p class="text-white"><i class="fa fa-envelope me-3"></i>info@bseacambodia.org</p>
                </div>
        </div>
</div>
@stop

@section('content')

<h1>Post</h1>
@foreach($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>
@endforeach

@stop