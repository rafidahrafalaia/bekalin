<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Bekal.in</title>

    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap core CSS -->
    <link href="/dash/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="/dash/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/dash/lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="/dash/css/style.css" rel="stylesheet">
    <link href="/dash/css/style-responsive.css" rel="stylesheet">
    <script src="/dash/lib/chart-master/Chart.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="{{ url('/') }}" class="logo"><b>BEKAL<span>.IN</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <!-- di sini -->
              <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li>
                        <a class="logout" href="{{ route('logout') }}">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="{{asset('fotoupload/'. Auth::user()->foto)}}" class="img-circle" width="80"></a></p>
                    <h5 class="centered">{{ Auth::user()->name }}</h5>
                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{url('pemesanan')}}">
                            <i class="fa fa-tasks"></i>
                            <span>List Pesanan</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{url('pesananselesai')}}">
                            <i class="fa fa-tasks"></i>
                            <span>Pesanan Selesai</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{url('performakurir')}}">
                            <i class="fa fa-tasks"></i>
                            <span>Performa Kurir</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{url('pengguna')}}">
                            <i class="fa fa-tasks"></i>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{url('getKritiksaran')}}">
                            <i class="fa fa-tasks"></i>
                            <span>Kritik dan Saran</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Menu</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{url('admin')}}">Lihat Menu</a></li>
                            <li><a href="{{url('add')}}">Tambah Menu</a></li>
                            <li><a href="{{url('edit')}}">Edit Menu</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <!-- <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; <strong>Bekal.in</strong> 2019
                </p>
                <div class="credits">
                </div>
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer> -->
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/dash/lib/jquery/jquery.min.js"></script>

    <script src="/dash/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/dash/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/dash/lib/jquery.scrollTo.min.js"></script>
    <script src="/dash/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/dash/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="/dash/lib/common-scripts.js"></script>
    <script type="text/javascript" src="/dash/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/dash/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="/dash/lib/sparkline-chart.js"></script>
    <script src="/dash/lib/zabuto_calendar.js"></script>
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                        type: "text",
                        label: "Special event",
                        badge: "00"
                    },
                    {
                        type: "block",
                        label: "Regular event",
                    }
                ]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>

</html>
