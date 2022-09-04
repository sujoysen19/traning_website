<div>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Custom CSS link -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <!-- AOS animation link -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- JQuery cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Cdn for counter -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

        <!-- File for scroll up -->
        <script src="{{url('js/jquery.scrollUp.min.js')}}"></script>


        <!-- Style for scroll up -->
        <style>
            #scrollUp {
                bottom: 20px;
                right: 20px;
                background-image: url('../img/top.png');
                height: 38px;
                width: 38px;
            }
        </style>



        <!-- Load script -->

        <script type="text/javascript">
            $(window).on('load', function() {

                setTimeout(function() {
                    $('#myModal').modal('show');
                }, 2500);
            });
        </script>



        <title>{{$title}}</title>
    </head>

    <body>


        <!-- Model is started -->

        <!-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enroll Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                            </div>
                            <div>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Course Type</option>
                                    <option>Laravel</option>
                                    <option>Quasar</option>
                                    <option>React Js</option>
                                    <option>Flutter</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn_enroll btn-lg btn-block mt-3">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> -->




        <!-- Model is ended -->



















        <!-- Main head is started -->

        <div class="main-head">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-10 col-md-10 col-lg-10">
                            <i class="fas fa-phone-alt fa-xs mr-1"></i>
                            +91-82505 85963
                            &nbsp;&nbsp;
                            <i class="far fa-envelope mr-1"></i>
                            support@gmail.com
                        </div>

                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <div class="main_head_adjust">
                                <a href="{{route('home')}}" class="nav-icon"><i class="fab fa-facebook-f fa-sm mr-3"></i></a>
                                <a href="{{route('home')}}" class="nav-icon"><i class="fab fa-twitter fa-sm mr-3"></i></a>
                                <a href="{{route('home')}}" class="nav-icon"><i class="fab fa-instagram fa-sm mr-3"></i></a>
                                <a href="{{route('home')}}" class="nav-icon"><i class="fab fa-linkedin-in fa-sm mr-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main head is ended -->


        <!-- Navbar is started -->

        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light mt-2 mb-2">
            <div class="container">
                <a class="navbar-brand nav_font" href="/"><img src="{{ asset('img/technowebs.png') }}" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link mr-2 nav_font" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link mr-2 nav_font" href="{{route('courses')}}">All Courses <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link mr-2 nav_font" href="{{route('about')}}">About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link mr-2 nav_font" href="{{route('contact')}}">Contact Us <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Navbar is ended -->



        <!-- Whatsapp is started -->

        <div class="whatsapp_float">
            <a href="https://wa.me/918250585963" target="blank">
                <img src="{{ asset('img/whatsapp.png') }}" width="50px">
            </a>
        </div>

        <!-- Whatsapp is ended -->


        <!-- Body content from all pages is started -->

        {{$content}}

        <!-- Body content from all pages is ended -->





        <!-- Footer is started here -->

        <div class="footer footer_background">

            <div class="container">

                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h4 class="mt-5"><span class="all_text">TRAINING</span> <span class="common_heading_colour">INSTITUTE</span></h4>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4 class="mt-5 common_heading_colour">Connect With Us</h4>

                        <!-- <hr color="#eb7f1c" width="25%" align="left" class="f_foot_hr_connect">
                        <hr color="black" width="25%" align="left" class="s_foot_hr_connect"> -->


                        <a href="{{route('home')}}" class="foot_link"><i class="fab fa-facebook-f social_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;Facebook<br></a>
                        <a href="{{route('home')}}" class="foot_link"><i class="fab fa-twitter social_icons"></i>&nbsp;&nbsp;&nbsp;Twitter<br></a>
                        <a href="{{route('home')}}" class="foot_link"><i class="fab fa-instagram social_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;Instagram<br></a>
                        <a href="{{route('home')}}" class="foot_link"><i class="fab fa-linkedin-in social_icons"></i>&nbsp;&nbsp;&nbsp;&nbsp;LinkedIn<br></a>


                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <h4 class="mt-5 common_heading_colour">Quick Link</h4>

                        <ul class="footer_icon_margin">
                            <a href="{{route('home')}}" class="foot_link">
                                <li>Home</li>
                            </a>
                            <a href="{{route('courses')}}" class="foot_link">
                                <li>All Courses</li>
                            </a>
                            <a href="{{route('about')}}" class="foot_link">
                                <li>About Us</li>
                            </a>
                            <a href="{{route('contact')}}" class="foot_link">
                                <li>Contact Us</li>
                            </a>
                        </ul>


                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4 class="mt-5 common_heading_colour">Find Us</h4>
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Khanik Sangha More, Fuleshwari Underpass, Siliguri, West Bengal 734004<br>
                        <i class="fas fa-phone-alt pt-3"></i>&nbsp;&nbsp;+91-82505 85963<br>
                        <i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+91-98320 35797<br>
                        <i class="far fa-envelope pt-3"></i>&nbsp;&nbsp;xyz@gmail.com<br>
                    </div>
                </div>

                <hr>
                <div class="text-center pb-4 pt-3">
                    <span class="common_heading_colour"> © Copyright 2022, All Rights Reserved </span><span class="all_text">Technowebs</span>
                </div>


            </div>

        </div>



        <!-- Footer is ended here -->




        <!-- Script for scroll up -->

        <script>
            $(document).ready(function() {
                $(function() {
                    $.scrollUp({
                        scrollImg: true
                    });
                });
            });
        </script>











        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

    </html>

</div>
