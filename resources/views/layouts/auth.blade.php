<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/simple/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 23:07:22 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Login Page | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
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

    </head>

    <body>
       
       @yield('content')

        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>
    @include('sweetalert::alert')

<!-- Mirrored from coderthemes.com/simple/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 23:07:22 GMT -->
</html>