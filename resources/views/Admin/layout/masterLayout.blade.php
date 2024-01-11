<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../Admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../Admin/assets/img/favicon.png">
    <title>
        vocal.Express
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../Admin/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../Admin/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../Admin/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../Admin/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />


    {{-- <link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" /> --}}

<link href="{{asset('user/css/login-register.css')}}" rel="stylesheet" /> 
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> 


</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
        @include('Admin.layout.sidebar')
        <main class="main-content position-relative border-radius-lg ">
        @include('Admin.layout.topbar')
        @yield('content')
        @include('Admin.layout.footer')
    </div>
       
    </main>
    @include('Admin.layout.bottom_links')
    <!--   Core JS Files   -->
    @include('Admin.layout.script')
</body>

</html>
<script src="{{asset('user/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('user/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('user/js/login-register.js')}}" type="text/javascript"></script>
