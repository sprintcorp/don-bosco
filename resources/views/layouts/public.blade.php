<!DOCTYPE html>
<html data-style-switcher-options="{'colorPrimary': '#0088cc', 'colorSecondary': '#0169fe', 'colorTertiary': '#005AEF', 'colorQuaternary': '#383f48'}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <title>Bosco Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet"> 
    
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="{{ asset('code.jquery.com/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ asset('code.jquery.com/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
              <ul class="main-menu sf-menu">
                            <li class="{{Route::currentRouteName()=='/' ? 'active' : ''}}"><a href="/">Home</a></li>
                            <li class="{{Route::currentRouteName()=='event-page.index' ? 'active' : ''}}"><a href="{{ route('event-page.index') }}">Events</a>
                                
                            </li>
                            <li class="{{Route::currentRouteName()=='gallery-page.index' ? 'active' : ''}}"><a href="{{ route('gallery-page.index') }}">Gallery</a>
                               
                            </li>
                            <li class="{{Route::currentRouteName()=='news-page.index' ? 'active' : ''}}"><a href="{{ route('news-page.index') }}">News</a>
                                
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="gallery.html">Our Gallery</a></li>
                                </ul>
                            </li> --}}
                            <li class="{{Route::currentRouteName()=='contact.create' ? 'active' : ''}}"><a href="{{ route('contact.create') }}">Contact us</a></li>
                </ul> <!-- /.main-menu -->
            <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <!--<li><a href="#"><i class="fa fa-rss"></i></a></li>-->
            </ul> <!-- /.social_icons -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    <h4 style="color:white"><i class="fa fa-phone"></i> +234-8061220623, +234-7083721510</h4>
                    <p style="color:white"><i class="fa fa-envelope"></i> <a style="color:white" href="mailto:dbssavio@gmail.com">dbssavio@gmail.com</a></p>
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="/" title="Universe" rel="home">
                            <img src="{{ asset('images/WhatsApp_Image_2020-06-26_at_6.26.29_PM-removebg.png') }}" width="100" height="100" alt="Universe">
                        </a>
                        <h4 style="color:white"><b>Don Bosco Secondary School, Obosi</b></h4>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <ul class="small-links">
                        {{-- <li><a href="#">About Us</a></li>
                        <li><a href="">Contact</a></li> --}}
                        {{-- <li><a href="#">Apply Now</a></li> --}}
                    </ul>
                    {{-- <div class="search-form">
                        <form name="search_form" method="get" action="#" class="search_form">
                            <input type="text" name="s" placeholder="Search the site..." title="Search the site..." class="field_search">
                        </form>
                    </div> --}}
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="{{ route('event-page.index') }}">Events</a>
                                
                            </li>
                            <li><a href="{{ route('gallery-page.index') }}">Gallery</a>
                               
                            </li>
                            <li><a href="http://sraams.com/donbosco">Check Result</a>
                               
                            </li>
                            <li><a href="">ID Card</a>
                               
                            </li>
                            <li><a href="{{ route('news-page.index') }}">News</a>
                                
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="gallery.html">Our Gallery</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('contact.create') }}">Contact us</a></li>
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <!--<li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>-->
                            <!--<li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>-->
                            <!--<li><a href="#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>-->
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
    
    
    @yield('content')

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <p style="color:white"><i class="fa fa-envelope"></i>:<a style="color:white" href="mailto:dbssavio@gmail.com">dbssavio@gmail.com</a></br>
                        <i class="fa fa-phone"></i>: +2348061220623, +2347083721510</br> P.O. BOX: 314 ONITSHA, ANAMBRA STATE.</p>
                    </div>
                </div>
                {{-- <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Favourites</h4>
                        <ul class="list-links">
                            <li><a href="#">A to Z Index</a></li>
                            <li><a href="#">Admissions</a></li>
                            <li><a href="#">Bookstore</a></li>
                            <li><a href="#">Catalog / Classes</a></li>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Financial Aid</a></li>
                            <li><a href="#">Graduation</a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Resources For</h4>
                        <ul class="list-links">
                            <li><a href="#">Future Students</a></li>
                            <li><a href="#">Current Students</a></li>
                            <li><a href="#">Faculty/Staff</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">Postdocs</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Study</h4>
                        <ul class="list-links">
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Scholarships</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">International student enquiries</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <!--<li><a href="#" class="fa fa-google-plus"></a></li>-->
                            <!--<li><a href="#" class="fa fa-youtube"></a></li>-->
                            <!--<li><a href="#" class="fa fa-linkedin"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram"></a></li>-->
                            <!--<li><a href="#" class="fa fa-apple"></a></li>-->
                            <!--<li><a href="#" class="fa fa-rss"></a></li>-->
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text" style="color:white">&copy; Copyright 2020 - {{ date('Y') }} <a href="mailto:zattitechnologies@gmail.com" style="color:white">Zatti Technologies</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('event-page.index') }}">Events</a></li>
                            <li><a href="{{ route('news-page.index') }}">News</a></li>
                            <li><a href="{{ route('gallery-page.index') }}">Gallery</a></li>
                            <li><a href="{{ route('contact.create') }}">Contact</a></li>
                        </ul>
                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
@include('sweetalert::alert')
<!-- Mirrored from templates.esmet.me/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 00:18:47 GMT -->
</html>