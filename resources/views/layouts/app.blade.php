<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/simple/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 23:02:49 GMT -->
<head>
        <meta charset="utf-8" />
        <title>{{ env('APP_NAME') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                                     

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                   Bosco Admin  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('admin-account.index') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                           

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    {{-- <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li> --}}
                </ul>
            </div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
                @include('layouts.navigation.sidebar')

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
                @yield('content')            
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <script src="{{ asset('assets/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector:'textarea.description',
                {{-- width: 900,
                height: 300 --}}
            });
        </script>

        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Buttons examples -->
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
        <script type="text/javascript">



    $("#uploadFile").change(function(){

        $('#image_preview').html("");

        var total_file=document.getElementById("uploadFile").files.length;

        for(var i=0;i<total_file;i++)

        {

            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

        }

    });



    $('form').ajaxForm(function()

    {

        alert("Uploaded SuccessFully");

    });



</script>
    </body>
    @include('sweetalert::alert')


</html>