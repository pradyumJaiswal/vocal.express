{{-- @include('User.layout.header')
@include('User.layout.footer') --}}

<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('user/lingua/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/lingua/styles/contact_responsive.css')}}">

<link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" />

<link href="{{asset('user/css/login-register.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    
    <div class="super_container">
        @include('User.layout.topbar')

        @yield('content') 
    </div>
   
    @include('User.layout.footer')


</body>
</html>