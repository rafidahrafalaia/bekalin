<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Glorious a Restaurants Category Bootstrap Responsive website Template | Home :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glorious Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
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
<!-- //online-fonts -->
</head>
<body>
<div class="testimonials">
    <div class="container">
    <div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>
    @include('layouts.nav')
        <div class="w3_testimonials_grids">

        <div class="w3_testimonials_grids">
            <div class="col-md-5 callbacks_container form-w3l-agil3">
                    <div class="book-form">
                    <p>Tambah Pengguna</p> <form class="form-horizontal" method="POST" action="{{ url('/formAddUser') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}
                        


                            <!-- //  <fieldset>
                             -->    <input id= "name" type="text" name="name" placeholder="Nama Orang Tua" value="{{ old('name') }}" required autofocus>
                                 @if ($errors->has('name'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                <input id="no_ktp" type="text" name="no_ktp" placeholder="Nomer KTP" required="" />
                                <input id="no_rek" type="text" name="no_rek" placeholder="Nomer Rekening" required="" />
                                <input id="alamat" type="text" name="alamat" placeholder="Alamat" required="" />
                                <input id="pekerjaan"  type="text" name="pekerjaan" placeholder="Pekerjaan" required="" />
                                <input id="email" type="email"  name="email" placeholder="Email" value="{{ old('email') }}" required=""/>
                                 @if ($errors->has('email'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <input id="password"  type="text" name="password" placeholder="Password" required="" />
                                @if ($errors->has('password'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                                <input id="password_confirmation"  type="text" name="password_confirmation" placeholder="password confirmation" required="" />
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                                <div class="form-left-agileits-w3layouts ">
                                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Peran :</label>
                                    <!-- <select class="form-control" name="jenis_pertanyaan">
                                        <option value="terbuka" >Terbuka</option>
                                        <option value="tertutup" >Tertutup</option>
                                    </select> -->
                                <div class="col-sm-4">
                                <input type="radio" value="Katering" id="inputMale" name="peran" checked> Katering
                                </div>
                                <div class="col-sm-4">
                                <input type="radio" value="AhliGizi" id="inputMale" name="peran" checked> Ahli Gizi
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" value="Kurir" id="inputFemale" name="peran" checked> Kurir
                                </div>
                              </div>  
                            
                                <div class="w3ls-submit">
                                    <input type="submit" value="TAMBAH">
                                </div>
                              <!-- </fieldset> -->
                    </form>
                            </div>
                        </form>
                    </div>
                </div> 
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

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
        $(window).load(function() {
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
    </script><!-- 
@section('js')
    <script>
        function changeProfile() {
            $('#image').click();
        }
        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).")
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#remove').val(0);
                }
            }
        }
        function removeImage() {
            $('#preview').attr('src', '{{url('paket/noimage.jpg')}}');
            $('#remove').val(1);
        }
    </script>
@endsection -->
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
    <script src="js/jquery.vide.min.js"></script>
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