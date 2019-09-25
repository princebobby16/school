@extends('layouts.master')

@section('content')
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active"><img src="{{ url('../assets/img/6.png') }}" alt="image1">
            <div class="carousel-caption">
                <h1 class="display-2">School</h1>
                <h3>Complete School Layout</h3>
                <!-- <button type="button" class="btn btn-outline-light btn-lg">Get Started</button> -->
                <a href="." class="btn btn-outline-light btn-lg">Get Started</a>
                <a href="." class="btn btn-primary btn-lg">Learn More</a>
            </div>
        </div>
        <div class="carousel-item"><img src="{{ url('../assets/img/4.jpg') }}" alt="image2"></div>
        <div class="carousel-item"><img src="{{ url('../assets/img/5.jpg') }}" alt="image3"></div>
    </div>

    <!-- <a href="#slides" class="left carousel-control" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previously</span>
    </a>
    <a href="#slides" class="right carousel-control" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron bg-info">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <div class="display-4">How to enrol your child to a class</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="." class="btn btn-outline-secondary btn-lg">Learn More</a>
        </div>
    </div>
</div>

<!-- Welcome section -->

<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Learn with ease</h1>
            <hr>
        </div>
        <div class="col-12">
            <p class="lead">Many enjoy looking at creation
                but few realise that they are catching
                a glimpse into the mind and heart of our grand creator.
                David Learned about Jehovah through his inspired word.
                But he also saw and drew closer to him through creation
            </p>
        </div>
    </div>
</div>

<!-- Three column section -->

<!-- <div class="container-fluid padding">
    <div class="row text-center padding">
        
    </div>
</div> -->


<!-- Two column section -->

<hr class="my-4">
<div class="container-fluid padding">
    <div class="row padding">
        <div class="md-12 col-lg-6">
            <h2>If you bring your child here...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, reiciendis facilis quis suscipit amet nisi possimus, aliquid nam quas, architecto eum vel minus delectus. Quo ducimus ipsa vel magni provident!</p>
            <a href="." class="btn btn-primary">Learn More</a>
            <br>
            <br>
        </div>
        <div class="col-lg-6">
            <img height="80%" width="500px" src="{{ url('../assets/img/5.jpg') }}" class="img-fluid img-responsive" alt="image4">
        </div>
    </div>
</div>

<!-- Overview -->

<div>
    <br>
    <img width="100%" src="{{ url('../assets/img/8.jpg') }}" alt="image5" class="img-responsive img-fluid">
</div>

<!-- Events -->

<div class="container-fluid">
    <div class="container padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <br>
                <br>
                <h1 class="display-4">Latest News</h1>
                <hr class="my-4">
                <br>
                <br>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ url('../assets/img/1.jpg') }}" height="200px" class="img-responsive" alt="img">
                <div class="card-body">
                    <h5 class="text-center card-title">Many people doubt themselves because when they thought about</h5>
                    <p class="card-text">Beauty of the
                        structure plus its affordability
                        are one strong features of J
                        Prompt Hostel. It has a per semester
                        payment arrangement, also all
                        utilities are factored into the price.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/gallery/jp" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ url('../assets/img/4.jpg') }}" height="200px" class="img-responsive" alt="img">
                <div class="card-body">
                    <h5 class="text-center card-title">When you run around with losers you will end up a loser</h5>
                    <p class="card-text">Beauty of the
                        structure plus its affordability
                        are one strong features of J
                        Prompt Hostel. It has a per semester
                        payment arrangement, also all
                        utilities are factored into the price.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/gallery/jp" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ url('../assets/img/7.jpg') }}" height="200px" class="img-responsive" alt="img">
                <div class="card-body">
                    <h5 class="text-center card-title">You will pick up their wage, habits and most importantly...</h5>
                    <p class="card-text">Beauty of the
                        structure plus its affordability
                        are one strong features of J
                        Prompt Hostel. It has a per semester
                        payment arrangement, also all
                        utilities are factored into the price.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/gallery/jp" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Connect -->

<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <hr class="my-4">
            <h2>Connect with us...</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</div>

@endsection