@push("linguaCss")
<link rel="stylesheet" type="text/css" href="{{asset('lingua/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('lingua/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lingua/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lingua/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lingua/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lingua/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lingua/styles/responsive.css')}}">
@endpush

@yield('linguaContent')

@push("linguaCss")

<script src="{{asset('lingua/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('lingua/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('lingua/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('lingua/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('lingua/plugins/easing/easing.js')}}"></script>
<script src="{{asset('lingua/js/custom.js')}}"></script>

@endpush
