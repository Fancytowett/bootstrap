<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Fancy</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav float-right">
            <li class="active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>

        </ul>
    </div>
</nav>
<div id="home">
    <div class="landing-text">
        <h1>BOOTSTRAP</h1>
        <h3>Learn basic building blocks</h3>
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <img src="{{url('images/2.jpg')}}">
            </div>
            <div class="col-sm-6">
                <h2>All about using Bootsrap </h2>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                    molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                    voluptatum?
                </p>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                    molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                    voluptatum?
                </p>
            </div>
        </div>
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <h4>Built with sass</h4>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                    molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                    voluptatum?
                </p>

            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <img src="{{url('images/2.jpg')}}" class="img-responsive">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <h4>And less</h4>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                    molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                    voluptatum?
                </p>

            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <img src="{{url('images/2.jpg')}}" class="img-responsive">

            </div>
        </div>
    </div>
</div>
<div id="fixed">
    <div class="padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h4>Here a cool thing about bootsrap </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                        molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                        voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Alias aperiam autem delectus, eius explicabo iure modi nihil nisi numquam
                        odit placeat possimus, quae qui reiciendis, rerum similique tenetur veniam. Cum.
                    </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Alias commodi consequuntur deleniti dolorem harum hic ipsam labore modi
                        molestias nam neque odio placeat quas quos rem repudiandae unde voluptate
                        voluptatum?oluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Alias aperiam autem delectus, eius explicabo iure modi nihil nisi numquam
                        odit placeat possimus, quae qui reiciendis, rerum similique tenetur veniam. Cum.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{url('images/2.jpg')}}">
                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact us</h3>
                <br>
                <h4>Our address and contact here</h4>

            </div>
            <div class="col-sm-4">
                <h3>Connect</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>

            </div>
            <div class="col-sm-4">
                <img  width="300" height="200" src="{{url('images/ice.jpg')}}" class="icon">

            </div>
        </div>
    </div>
</div>
</body>
</html>
