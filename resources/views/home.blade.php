@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">{{ __('messages.dashboard') }}</div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{ __('messages.loggedin') }}
        </div>
    </div>
    <div class="card">
        <div class="card-header">Doctor Reviews</div>
        <div class="card-body">
        </div>
    </div>


    <div class="card">
        <div class="card-header">Hospitals/Institutions pictures (Slides)</div>
        <div class="row justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!--  <div class="carousel-inner container-fluid"> -->
                <div class="carousel-inner container">
                    <div class="carousel-item active">
                        <img src=" {{asset('images/slider1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src=" {{asset('images/slider2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src=" {{asset('images/slider3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-header">Company Introduction Vedios</div>
        <div class="card-body">
            <!-- <div class="ratio ratio-16x9">
                <iframe src="{{asset('vedios/sample.mp4')}}" title="samplevedios" allowfullscreen></iframe>
            </div> -->
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/RvreULjnzFo" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Service Introduction</div>
        <div class="card-body">
        </div>
    </div>
    <div class="card">
        <div class="card-header">Turkey Promo Vedios</div>
        <div class="card-body">
        </div>
    </div>
</div>
@endsection