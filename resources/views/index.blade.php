<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset('css/style2.css') }}" rel="stylesheet" type="text/css">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAH1PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<head>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</head>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/14.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <H1>Appetizing.Creative.Appealing</H1>
                <btn class="btn btn-lg btn-danger"> KNOW MORE</btn>

            </div>
        </div>


        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/19.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <H1>Sweet.Great.Diverse</H1>
                <btn class="btn btn-lg btn-danger"> KNOW MORE</btn>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/21.jpg')}}" alt="fourth slide">
            <div class="carousel-caption d-none d-md-block">
                <H1>Enjoyable.Fun.Lovely</H1>
                <btn class="btn btn-lg btn-danger"> KNOW MORE</btn>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/20.jpg')}}" alt="fifth slide">
            <div class="carousel-caption d-none d-md-block">
                <H1>Come And Eat with us</H1>
                <btn class="btn btn-lg btn-danger"> KNOW MORE</btn>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/16.jpg')}}" alt="sixth slide">
            <div class="carousel-caption d-none d-md-block">
                <H1>Come And Eat with us</H1>
                <btn class="btn btn-lg btn-danger"> KNOW MORE</btn>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container" id="service">
    <div class="row text-center mt-3">

        <h1 style="text-align: center">Services</h1>

    </div>
    <div class="orange-line "></div>

    <div class="row ml-4 mt-5">
        <div class="col-md-6">
            <div class="media">

                <h1><i class="fa fa-umbrella mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Strategic management</h5>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-umbrella mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Wealth Management</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-umbrella mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Strategic management</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-umbrella mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Wealth Management</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-university mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Sales and Trading </h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-book mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0 " style="color:orangered">Consultancy</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-shopping-cart mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Investment Banking </h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <h1><i class="fa fa-file mr-4" aria-hidden="true">
                    </i></h1>
                <div class="media-body">
                    <h5 class="mt-0" style="color:orangered">Goods and Commodities</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloremque, iusto maiores mollitia,
                    nemo nihil pariatur quam repudiandae rerum sed suscipit vel veritatis voluptates? Culpa harum minus
                    nesciunt repudiandae voluptatum.
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container mt-5" id="portofolio">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1>Portofolio</h1>
        </div>
        <div class="orange-line m-auto"></div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <p class="hero-text text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, debitis doloremque ex excepturi
                    facilis, hic id ipsam libero nesciunt optio qui rerum tempore ut voluptate voluptates. Consequuntur
                    neque officiis provident.
                </p>
            </div>
        </div>

    </div>
</div>
<div class="container mt-5 pb-5" id="portofolio">
    <div class="row">
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/12.jpg')}}" alt="img1" width="360px" height="300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/11.jpg')}}" alt="img2" width="360px" height="300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/20.jpg')}}" alt="img3" width="360px" height="300px">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/22.jpg')}}" alt="img4" width="360px" height="300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/23.jpg')}}" alt="img5" width="360px" height="300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="{{asset('images/24.jpg')}}" alt="img6" width="360px" height="300px">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-gray">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="pb-3">Frequently Asked Questions</h1>
                <div class="orange-line m-auto"></div>
                <div class="row mt-3">
                    <p class="hero-text m-auto">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto, blanditiis commodi
                        dolor dolores eius enim error est eum explicabo numquam officiis qui quidem, repellendus sequi
                        tempora temporibus ullam vitae?

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="row">

            <div class="col-md-6 ">
                    <div class="panel panel-default mt-5">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="accordion" href="#collapseSix"
                                   aria-expanded="false" aria-controls="collapseSix">
                                    Collapsible Group Item
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapseSix" role="tabpanel"
                             aria-labelledby="headingSix">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                                consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                                officiis omnis quasi ut, voluptatum.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <div class="panel panel-default mt-5">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="accordion" href="#collapseFive"
                                   aria-expanded="false" aria-controls="collapseFive">
                                    Collapsible Group Item
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapseFive" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                                consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                                officiis omnis quasi ut, voluptatum.
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default mt-5">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="accordion" href="#collapseOne" aria-expanded="false"
                               aria-controls="collapseOne">
                                Collapsible Group Item
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                            consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                            officiis omnis quasi ut, voluptatum.
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default mt-5">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="accordion" href="#collapseFour" aria-expanded="false"
                               aria-controls="collapseFour">
                                Collapsible Group Item
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseFour" role="tabpanel"
                         aria-labelledby="headingFour">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                            consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                            officiis omnis quasi ut, voluptatum.
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default mt-5 mb-5">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="accordion" href="#collapseTwo" aria-expanded="false"
                               aria-controls="collapseTwo">
                                Collapsible Group Item
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                            consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                            officiis omnis quasi ut, voluptatum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default mt-5 mb-5">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="accordion" href="#collapseThree"
                               aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseThree" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi beatae, commodi
                            consectetur cupiditate eius facere fugiat harum id illum iure molestiae nesciunt, odit
                            officiis omnis quasi ut, voluptatum.
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

</div>


<div class="container about mt-5 pb-5" id="about">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center">About Us</h1>
            <div class="orange-line m-auto"></div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="hero-text text-center mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aspernatur consectetur esse et fugiat
                harum maxime modi molestias natus obcaecati placeat praesentium repellat, repellendus rerum sequi
                tempore vero. Iusto.
            </p>
        </div>
    </div>


</div>
<div class="container-fluid contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center contact-text" style="font-size:28px;">
                  <span class="text-light ">
                       If you have inquiries email us at<span style="color:orangered">
                          fancy@gmail.com
                      </span>
                  </span>
                </p>
            </div>
        </div>

    </div>


</div>
<div class="container" mt-5>
    <div class="footer">
        <div class="col-md-6">
            <p>@2018 Fancy .All Rights Reserved<br>

            </p>
        </div>
        <div class="col-md-6 justify-content-right">
            <div class="text-right" style="color: orangered;font-size: 35px;">
                <p>
                    <i class="fa fa-google-plus-g"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-linkedin"></i>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>