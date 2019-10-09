<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://use.fontawesome.com/7fa0c56c95.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <title> @yield('title')</title>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper" style="background-color: #4e73df;">
            <div class="sidebar-heading">
                <h4>CRGBMD | IN</h4>
            </div>
            <hr>
            <div class="list-group list-group-flush" style="background-color: #4e73df;">
                <a href="/dashboard" class="list-group-item list-group-item-action text-white"><i
                        class="fa fa-tachometer text-white" aria-hidden="true"></i><strong>Dashboard</strong></a>
                <a href="/members" class="list-group-item list-group-item-action text-white"><i class="fa fa-user text-white"
                        aria-hidden="true"></i>Manage Users</a>
                <a href="/addevents" class="list-group-item list-group-item-action text-white"><i
                        class="fa fa-calendar text-white" aria-hidden="true"></i> Add Events</a>
                <a href="/adminnews" class="list-group-item list-group-item-action text-white"><i
                        class="fa fa-newspaper-o text-white" aria-hidden="true"></i>Add News</a>
                <a class="list-group-item list-group-item-action dropdown-toggle text-white" href="#" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-users text-white" aria-hidden="true"></i>Manage Team
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/addteam">Add Committee Member</a>
                    <a class="dropdown-item" href="/team">Committee Members</a>
                    <a class="dropdown-item" href="/managenews">Manage News</a>
                    <a class="dropdown-item" href="/manageevents">Manage Events</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>
    
    @yield('content2');
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
    <script>$(document).ready(function () { $('body').bootstrapMaterialDesign(); });</script>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script>
    $(document).ready(function(){
    $("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.card").printArea( options );
        });
    });
</script>
</body>
</html>            