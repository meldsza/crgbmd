<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('hometitle')</title>
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://use.fontawesome.com/7fa0c56c95.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4e73df">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row">
                <div class="col-md">
                    <p class="text-white"><i class="fa fa-phone" area-hidden="true"></i> +91 1234567890</p>
                </div>
                <div class="col-md">
                    <p class="text-white"><i class="fa fa-phone" area-hidden="true"></i> +91 9876543210</p>
                </div>

                <div class="col-sm">
                    <p class="text-white"><i class="fa fa-envelope" area-hidden="true"></i> help@abc.com</p>
                </div>
                <div class="col-sm">
                    <p class="text-white"><i class="fa fa-envelope" area-hidden="true"></i> help@abc.com</p>
                </div>

                <div class="col-sm ">
                    <i class="fa fa-twitter pad text-white" area-hidden="true"></i>
                </div>
                <div class="col-sm">
                    <i class="fa fa-facebook pad text-white" area-hidden="true"></i>
                </div>
                <div class="col-sm">
                    <i class="fa fa-instagram pad text-white" area-hidden="true"></i>
                </div>
                <div class="col-sm">
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
                    <a class="nav-link font-weight-bold" href="userpartners">Partners</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userresources">Resources</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="userevents">Events</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    @yield('usercontent')
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
</body>
</html>