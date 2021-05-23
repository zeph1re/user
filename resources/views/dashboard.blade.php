<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
</head>

<body>
    <!-- Header-->
    <header>
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-15">
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a href="{{url('dashboard')}}" class="navbar-brand">
                                BATTLESPORT </a>
                        </div>

                        <div class="navbar-collapse collapse" id="mobile_menu">
                            <ul class="nav navbar-nav">

                                <li class="active"><a href="#">Dashboard</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Training Calendar</a></li>
                                        <li><a href="#">My activites</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Explore <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sport Location</a></li>
                                        <li><a href="#">Clubs</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Schedule</a></li>
                                <li><a href="#">Event</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li>
                                    <form action="" class="navbar-form">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Halaman Dashboard-->
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="text-align:center">
                <h2>Profile</h2>
                <img src="{{URL::asset('img/orang1.png')}}" alt="profile" style="width:150px">
                <h6>Nama</h6>
            </div>

            <div class="col-md-6" style="text-align:justify;">
                <h2>All Post</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
            </div>

            <div class="col-md-3" style="text-align: justify;">
                <div class="card">
                    <h2>Find Friend, Club, or Event</h2>
                    <form action="" class="navbar-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </form>

                    <p>Find some Friend if u want to play together</p>
                </div>
            </div>
        </div>
    </div>

</body>


</html>