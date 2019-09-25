@extends('layouts.master')

@section('content')
<div class="container-fluid padding contact-banner bg-info">
    <br>
    <div class="contact-header">
        <div class="welcome text-center padding">
            <h1 class="display-4"> <i class="fa fa-phone"></i> Get in touch</h1>
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
<div class="container padding">
    <div class="welcome padding text-center">
        <h1 class="display-7">Send Us a Message</h1>
    </div>
    <div class="container text-center">
        <form action="/contact/submit" method="post">
            <fieldset class="form">

                <div class="form-group">
                    <label for="first_name">First Name: </label>
                    <input type="text" class="col-lg-10" name="first_name" id="first_name">
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <label for="last_name">Last Name: </label>
                    <input type="text" class="col-lg-10" name="last_name" id="last_name">
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="message">Message: </label>
                    <input type="text" class="col-lg-10" name="message" id="message">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="col-lg-10" name="email" id="email">
                </div>

                <!-- Submit -->
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <input type="submit" class="btn btn-info" value="submit">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection