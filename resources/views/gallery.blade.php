@extends('layouts.master')

@section('content')
<!-- Banner -->
<div class="container-fluid padding contact-banner bg-info">
    <br>
    <div class="contact-header">
        <div class="welcome text-center padding">
            <h1 class="display-4"> <span class="fa fa-image"></span> School Gallery</h1>
            <hr class="light">
        </div>
        <p class="lead text-center">This is just a simple gallery page to show you how things work</p>
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="." class="welcome text-center">
                        <h3> <span class="fa fa-film"></span> 2019 Graduation</h3>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="." class="welcome text-center">
                        <h3> <span class="fa fa-money"></span> Donations</h3>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="." class="welcome text-center">
                        <h3> <span class="fa fa-handshake-o"></span> Unveiling of Canteen</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<hr class="hr-light">
<!-- Gallery -->
<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/1.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/2.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/3.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/4.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/5.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/6.png') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/7.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/8.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ url('../assets/img/9.jpg') }}" height="200px" class="img-responsive" alt="img">
        </div>
    </div>
</div>
@endsection