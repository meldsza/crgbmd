<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('hometitle')</title>
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <script src="https://use.fontawesome.com/7fa0c56c95.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href="/css/aos.css" rel="stylesheet">
    <link href="/css/ihover.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4e73df">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row">
               <!-- <div class="col-md">
                    <p class="text-white"><i class="fa fa-phone" area-hidden="true"></i> +91 1234567890</p>
                </div>-->
                <div class="col-md">
                    <p class="text-white"><i class="fa fa-phone" area-hidden="true"></i> +91 7022129624</p>
                </div>
                <div style="margin:10px"></div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p class="text-white"><i class="fa fa-envelope" area-hidden="true"></i>anirban@nitte.edu.in</p>
                </div>
                <div class="col-md">
                    <p class="text-white"><i class="fa fa-envelope" area-hidden="true"></i>arati1239@gmail.com</p>
                </div>
            </div>
            <div class="row offset-4">
                 <div class="col">
                    <i class="fa fa-twitter pad text-white" area-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fa fa-facebook pad text-white" area-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fa fa-instagram pad text-white" area-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fa fa-linkedin pad text-white" area-hidden="true"></i>
                </div>
            </div>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand " href="userhome">
            <img src="images/logo.png" width="210" height="90" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userhome">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userabout">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userrgd">RGD & BMD</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userservices">Our Services</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="usergallery">Gallery</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userpartners">Partners</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userresources">Resources</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userevents">Events</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="contact">contact Us</a>
                </li>
            </ul>
            <a href="{{url('/member_registration')}}"><button type="button" class="btn btn-raised btn-danger text-center">Register Member</button></a>
        </div>
    </nav>
    @yield('usercontent')
    <section id="contact" style="background-color:rgb(0,0,0,0.8)">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand " href="userhome">
                     <img src="images/logo.png" width="210" height="90" alt="">
                </a>
                <p class="text-white">
                        Bringing together the clinicians and the researchers under one platform and
                        improving clinical therapies and outcomes for the patients.
                </p>
            </div>
            <div class="col-md-4 text-center">
                    <p class="text-white">
                           <h5 class="text-white">Follow Us</h5>
                    </p>
                    <p class="text-white">
                            <i class="fa fa-twitter" aria-hidden="true" style="padding:5px"></i>
                            <i class="fa fa-facebook" aria-hidden="true"  style="padding:5px"></i>
                            <i class="fa fa-instagram" aria-hidden="true"  style="padding:5px"></i>
                    </p>
                </div>
                <div class="col-md-4">
                        <p class="text-white">
                        <a href="contact" class="text-white"><h5>Contact Us</h5></a>
                        </p>
                        <p class="text-white">
                                P.O Deralakatte, Mangalore - 575018
                        </p>
                        <p class="text-white">
                                <i class="fa fa-phone" aria-hidden="true"></i> +91 70221 29624
                        </p>
                    </div>
        </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>