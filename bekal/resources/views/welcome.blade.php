<!DOCTYPE html>
<html lang="en">
<head>
<title>Bekal.in</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glorious Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- css files -->
<link href="glorious/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="glorious/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="glorious/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="glorious/css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
<link rel="stylesheet" href="glorious/css/team.css" type="text/css" media="screen" property="" /> <!-- Team-CSS -->
<link rel="stylesheet" href="glorious/css/smoothbox.css" type='text/css' media="all" /> <!-- Smoothbox-CSS -->
<link href="glorious/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- //online-fonts -->
</head>
<body>
    <!-- banner -->
    <div data-vide-bg="glorious/video/food">
        <div class="center-container" >
            <div class="banner wthree" style="padding-bottom: 150px;" >
                <div class="container" >
                    <div class="banner_top">
                        <div class="col-md-6 col-sm-4 col-xs-4 logo">
                            <h1><a href="{{url('admin/routes')}}"><strong>Bekal</strong>.in</a></h1>
                            <h1><small><a href="{{url('admin/routes')}}">Surabaya Homemade Food</a></small></h1>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-8 w3_menu">
                            @if (Auth::guest())
                            <div class="col-md-11 col-sm-4 col-xs-4 top-nav-text menu-front">
                                <a class="page-scroll" href="{{ route('login') }}" data-toggle="modal" data-hover="LOGIN">LOGIN</a>
                                <a style="padding-left: 25px" class="page-scroll" href="{{ route('register') }}" data-toggle="modal" data-hover="LOGIN">REGISTER</a>
                            </div>
                            @else
                            
                            @can('edit_admin')
                            <div class="col-md-10 col-sm-4 col-xs-3 top-nav-text" style="padding-right: 0;">
                                <span style="color: #eb422a; font-size: 15.4px"><strong>{{ Auth::user()->name }}</strong></span>
                                <span style="color: #fff;"><i class="fas fa-chevron-right"></i></span>
                                <a style="color: #26d797;" class="page-scroll" href="{{ url('/admin') }}" data-toggle="modal" data-hover="LOGIN">ADMIN <i class="fas fa-user-cog"></i></a>
                            </div>
                            @endcan
                            @can('view_kurir')
                            <div class="col-md-10 col-sm-4 col-xs-3 top-nav-text" style="padding-right: 0;">
                                <span style="color: #eb422a; font-size: 15.4px"><strong>{{ Auth::user()->name }}</strong></span>
                                <span style="color: #fff;"><i class="fas fa-chevron-right"></i></span>
                                <a style="color: #26d797;" class="page-scroll" href="{{ url('/kurir') }}" data-toggle="modal" data-hover="LOGIN">KURIR <i class="fas fa-motorcycle"></i></a>
                            </div>
                            @endcan
                            @can('view_admin')
                            <div class="col-md-10 col-sm-4 col-xs-3 top-nav-text" style="padding-right: 0;">
                                <span style="color: #eb422a; font-size: 15.4px"><strong>{{ Auth::user()->name }}</strong></span>
                                <span style="color: #fff;"><i class="fas fa-chevron-right"></i></span>
                                <a style="color: #26d797;" class="page-scroll" href="{{ url('/katering') }}" data-toggle="modal" data-hover="LOGIN">KATERING <i class="fas fa-utensils"></i></a>
                            @endcan
                            @can('view_ahligizi')
                            <div class="col-md-10 col-sm-4 col-xs-3 top-nav-text" style="padding-right: 0;">
                                <span style="color: #eb422a; font-size: 15.4px"><strong>{{ Auth::user()->name }}</strong></span>
                                <span style="color: #fff;"><i class="fas fa-chevron-right"></i></span>
                                <a style="color: #26d797;" class="page-scroll" href="{{ url('/ahliGizi') }}" data-toggle="modal" data-hover="LOGIN">AHLI GIZI <i class="fas fa-user-md"></i></a>
                            </div>
                            @endcan
                            @can('')
                            <div class="col-md-10 col-sm-4 col-xs-4 top-nav-text" style="padding-right: 0;">
                                <a class="page-scroll" href="{{ url('/histoKonsultasi') }}" data-toggle="modal" data-hover="LOGIN">KONSULTASI<i class="fas fa-edit"></i></a>
                            </div>
                            @endcan
                            <div class="col-md-11 col-sm-4 col-xs-4 top-nav-text">
                                <a class="page-scroll" href="{{ url('/showProfil') }}" data-toggle="modal" data-hover="LOGIN">DASHBOARD <i class="fas fa-home"></i></a>
                                <a style="padding-left: 25px" class="page-scroll" href="{{ route('logout') }}" data-toggle="modal" data-hover="LOGIN" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">LOGOUT <i class="fas fa-sign-out-alt"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>                            
                            </div>
                            @endif
                            @include('layouts.nav')
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--Slider-->   
                    <div class="col-md-7 callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="slider-info">
                                    <h3>Hai, Mom</h3>
                                    <h3>Welcome To Our Site</h3>
                                    <p><strong>Sibuk?</strong> Bekalin aja</p>
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <h3>Fresh and Fast Delivery</h3>
                                    <p>Pesan sekarang. Antar Sekarang :)</p>
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                     <h3>Healthy and Delicious Tasty</h3>
                                     <p>Bekal Sehat untuk Anak</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- //Slider -->
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>

    <!-- menu-section -->
    <div class="menu-w3l" id="menu">
        <h3 class="w3l-title">Menu</h3>
        <ul id="flexiselDemo1"> 
            <li>
                <div class="w3layouts_banner_bottom_left">
                    <img src="glorious/images/s1.jpg" alt=" " class="img-responsive" />
                    <h4>Noodles <span>RP 15.000</span></h4>
                    <p>Deskripsi</p>
                </div>
            </li>
            <li>
                <div class="w3layouts_banner_bottom_left">
                    <img src="glorious/images/s2.jpg" alt=" " class="img-responsive" />
                    <h4>Ice-Cream <span>RP 17.000</span></h4>
                    <p>Deskripsi</p>
                </div>
            </li>
            <li>
                <div class="w3layouts_banner_bottom_left">
                    <img src="glorious/images/s5.jpg" alt=" " class="img-responsive" />
                    <h4>Lemon Fruit <span>RP 14.000</span></h4>
                    <p>Deskripsi</p>
                </div>
            </li>
            <li>
                <div class="w3layouts_banner_bottom_left">
                    <img src="glorious/images/s4.jpg" alt=" " class="img-responsive" />
                    <h4>SeaFood <span>RP 18.000</span></h4>
                    <p>Deskripsi</p>
                </div>
            </li>
            <li>
                <div class="w3layouts_banner_bottom_left">
                    <img src="glorious/images/s3.jpg" alt=" " class="img-responsive" />
                    <h4>Breakfast Bun <span>RP 13.000</span></h4>
                    <p>Deskripsi</p>
                </div>
            </li>
        </ul>
    </div>

    <!-- //menu-section -->
    <!-- cuisine-names -->
    <div class="cuisine-names">
        <div class="w3ls_cuisine_names_center">
            <div class="read-form" style="margin:0 auto; position: relative; float: none; display: table;">
                @if (Auth::guest())
                <form action="{{ route('login') }}" method="get">
                    <div>
                        <input style="margin: 0 auto;" type="submit" value="Pesan Sekarang">
                    </div>
                </form>
                @else
                <form action="{{url('/menu')}}" method="get">
                    <div>
                        <input style="margin: 0 auto;" type="submit" value="Pesan Sekarang">
                    </div>
                </form>
                @endif
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //cuisine-names -->

    <!-- testimonials -->
    <div class="testimonials" id="gallery">
        <div class="container">
            <h3 class="w3l-title">Asisten Gizi</h3>
            <div class="w3_testimonials_grids">
                @foreach($konsul as $listkonsul) 
                @if(isset($listkonsul))    
                <div class="col-md-4 col-sm-4 item w3_agileits_testimonials_grid">
                    <img src="glorious/images/g4.jpeg" alt=" " class="img-responsive w3-main-img" />
                    <img class="posi-w3l img-responsive" src="{{asset('fotoupload/'. $listkonsul->users->foto)}}" alt=" " />
                    <div class="text-w3l">
                        <h4>{{$listkonsul->users->name}}</h4>
                        <p>{{$listkonsul->pertanyaan}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                </div>
                <div class="read-form">
                    <form action="{{url('/giziTimeline')}}" method="get">
                        <div class="form-left-agileits-submit">
                            <input type="submit" value="Baca Selengkapnya">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 callbacks_container form-w3l-agil3">
                    <div class="book-form">
                        <p>Ingin Bertanya?</p>
                            @if (Auth::guest())
                            <form action="{{ route('login') }}" method="get">
                                <div class="form-left-agileits-submit">
                                      <input type="submit" value="Isi Form">
                                </div>
                            </form>
                            @else
                            <form action="{{url('/gizi')}}" method="get">
                                <div class="form-left-agileits-submit">
                                      <input type="submit" value="Isi Form">
                                </div>
                            </form>
                            @endif
                        </div>
                    </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- team -->
    <div class="team" id="chefs">
        <div class="container">
            <div class="agile-heading team-heading">
                <h3 class="w3l-title">Meet Our Owner</h3>
            </div>
            <div class="agile-team-grids">
                <div class="col-sm-3 team-grid">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="glorious/images/kucing.jpg" alt="" />
                            </div>
                            <div class="back">
                                <h4>Davin Masasih</h4>
                                <p>05111540000113</p>
                                <div class="w3l-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 team-grid">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="glorious/images/kucing.jpg" alt="" />
                            </div>
                            <div class="back">
                                <h4>Rafidah Rafalia</h4>
                                <p>05111540000139</p>
                                <div class="w3l-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 team-grid">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="glorious/images/kucing.jpg" alt="" />
                            </div>
                            <div class="back">
                                <h4>Dara Tursina</h4>
                                <p>05111540007007</p>
                                <div class="w3l-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- delicious-food -->
    <!-- <div class="delicious_food" id="gallery">
        <div class="container">
            <h3 class="w3l-title">Our Delicious Food</h3>
            <div class="agile_delicious_food_grids">
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g1.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g1.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g2.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g2.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g3.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g3.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g4.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g4.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g5.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g5.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g6.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g6.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g7.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g7.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g8.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g8.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_delicious_food_grid">
                    <a class="sb" href="glorious/images/g9.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate.">
                        <div class="view view-sixth">
                            <img src="glorious/images/g9.jpg" alt=" " class="img-responsive" />
                            <div class="mask">
                                <h4>Glorious</h4>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div> -->
    <!-- //delicious-food -->
    <!-- footer -->
    <div class="footer" id="contact">
        <div class="container">
            <div class="agile-footer-grids">
                <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                    <div class="logo-2">
                        <h2><a href="index.html"><strong>Bekal</strong>.in<span>Surabaya Homemade Food</span></a></h2>
                    </div>
                    <ul>
                        <li style="color: #ff0000">Address</li>
                        <li>Gang Makam Blok G17, Sukolilo, Surabaya</li>
                        <li style="color: #ff0000">Email</li>
                        <li><a href="mailto:info@example.com">bekal@in.com</a></li>
                        <li style="color: #ff0000">Phone Number</li>
                        <li>0895422861289</li>
                    </ul>               
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                    <h3>Opening Days</h3>
                    <h3 style="font-size: 14px;">Senin - Jumat</h3>
                    <h3 style="font-size: 16px;">04.30 - 09.00</h3>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3-agile-footer-grid grid-w3-1">
                    <div class="contact-block-left">
                        <form action="{{url('/setKritiksaran')}}" method="post">
                            {{ csrf_field() }}
                            <input type="text" placeholder="Name" name="Name" required="">
                            <input type="email" class="email" placeholder="Email" name="Email" required="">             
                            <textarea placeholder="Message" name="Message" required=""></textarea>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <div class="copyright">
        <p>&copy Bekalin 2019 | Surabaya</p>
    </div>
    <!-- //copyright -->

    <!-- js-scripts -->     
        
    <!-- js -->
    <script type="text/javascript" src="glorious/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="glorious/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    <!-- responsiveslider -->
    <script src="glorious/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager:true,
                nav:false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- //responsiveslider -->
    <!-- menu -->
    <script>
        $(document).ready(function () {
            $('.mobile-nav-button').on('click', function() {
                $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
                $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
                $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
                $('.mobile-menu').toggleClass('mobile-menu--open');
                return false;
            }); 
        });
    </script>
    <!-- //menu -->
    <!-- flexSlider-for-grids-section -->
    <script defer src="glorious/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider-for-grids-section -->
    <!-- flexSlider-for-menu-section -->
    <script type="text/javascript">
        $(window).load(function(){
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems:3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 4
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="glorious/js/jquery.flexisel.js"></script>
    <!-- //flexSlider-for-menu-section -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="glorious/js/move-top.js"></script>
    <script type="text/javascript" src="glorious/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for-bottom-to-top smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //for-bottom-to-top smooth scrolling -->
    <!-- Calendar -->
    <link rel="stylesheet" href="glorious/css/jquery-ui.css" />
    <script src="glorious/js/jquery-ui.js"></script>
        <script>
            $(function() {
            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
            });
        </script>
    <!-- //Calendar -->
    <!-- video-js -->
    <script src="glorious/js/jquery.vide.min.js"></script>
    <!-- //video-js --> 
    <!-- smoothbox -->
    <script type="text/javascript" src="glorious/js/smoothbox.jquery2.js"></script>
    <!-- //smoothbox -->
    <!-- Time -->
    <script type="text/javascript" src="glorious/js/wickedpicker.js"></script>
    <script type="text/javascript">
        $('.timepicker').wickedpicker({twentyFour: false});
    </script>
    <!-- //Time -->

<!-- //js-scripts -->
</body>
</html>