
@include('user.layout.css')

@yield('section')
<div class="page-loader" id="page-loader">

	<div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

  </div><!-- page loader -->
<div class="theme-layout">
    @if(!empty(auth()->user()) && auth()->user()->role=='User')
        @include('user.layout.header')

        @include('user.layout.sidebar')

        @include('user.layout.middle-section')
    @endif
    @yield('Content')

    @include('user.layout.footer')


	@include('user.layout.askquestion')


  @include('user.layout.sidemessage')
</div>

</body>

</html>
@include('user.layout.javascript')
