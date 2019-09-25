@extends('layouts.master')

@section('content')
<div class="container-fluid padding contact-banner bg-info">
    <br>
    <div class="contact-header">
        <div class="welcome text-center padding">
            <h1 class="display-4">Get in touch</h1>
            <hr class="light">
        </div>
        <p class="lead text-center">This is just a simple contact page to show you how things work</p>
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="md-12 col-md-6">
                    <p class="lead text-center">
                        <a href="tel:+233249622403">
                            <i class="fa fa-phone"></i>
                            +233 249622403
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="lead text-center">
                        <a href="mailto:pbobby001@st.ug.edu.gh">
                            <i class="fa fa-envelope-open"></i>
                            Email Us
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection