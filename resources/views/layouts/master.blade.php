<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                                    initial-scale=1.0, 
                                    maximum-scale=1.0, 
                                    user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script type="text/javascript" src="/js/app.js"></script>

    <title>School</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Logo </a>
        </div>
        <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdown_target" href="#">
                        About School
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="#dropdown_target">
                        <a href="#" class="dropdown-item">Who we are</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Management</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Rules</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Reports</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdown_target" href="#">
                        Schools Admission
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="#dropdown_target">
                        <a href="#" class="dropdown-item">Admission</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Conditions For Admission</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Fees</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">General Appearance</a>
                    </div>
                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Events</a></li> -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdown_target" href="#">
                        Academics
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="#dropdown_target">
                        <a href="#" class="dropdown-item">Academic Programme</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Primary Department</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">JHS Department</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Schemes of Work</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Extra Curriculum</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Grading System</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Promotions/Repetitions</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/event">News/Events</a></li>
                <li class="nav-item"><a class="nav-link" href="/gallery">School Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
        @endif

        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
    </div>

    @yield('content')

    <footer class="navbar-dark bg-info">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h1>Logo</h1>
                    <hr class="light">
                    <p>555-555-5555</p>
                    <p>email@email.com</p>
                    <p>GW-9060-2789</p>
                    <p>Accra, Ghana</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our School Hours</h5>
                    <hr class="light">
                    <p>Monday -- Friday</p>
                    <p>9am - 4:30pm</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
                    <p>City, State, 00233</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>&copy;copyright | New School Academy 2019 | All rights Reserved</h5>
                    <h5>New to New School? <a href="/about">Visit our About page</a> or read our <a href="/terms-of-service">Terms of Service</a></h5>
                    <h5>or Learn more about our<a href="/privacy-policy"> Privacy Policy</a></h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>