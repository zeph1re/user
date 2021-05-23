<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-15">
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a href="{{url('dashboard')}}" class="navbar-brand">BATTLESPORT</a>
                        </div>

                        <div class="navbar-collapse collapse" id="mobile_menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown">Training <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('calendar')}}">Training Calendar</a></li>
                                        <li><a href="{{url('myactivities')}}">My activites</a></li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-toggle" data-toggle="dropdown">Explore <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('sportlocation')}}">Sport Location</a></li>
                                        <li><a href="{{url('clubs')}}">Clubs</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('schedule')}}">Schedule</a></li>
                                <li><a href="{{url('event')}}">Event</a></li>
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
                                <li><a href="{{url('profile')}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li><a href="{{url('logout')}}"><span class=" glyphicon glyphicon-log-in"></span> Logout <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="column left" style="background-color:#aaa;">
                <h2>Column 1</h2>
                <p>Some text..</p>
            </div>
            <div class="column middle" style="background-color:#bbb;">
                <h2>Column 2</h2>
                <p>Some text..</p>
            </div>
            <div class="column right" style="background-color:#ccc;">
                <h2>Column 3</h2>
                <p>Some text..</p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>