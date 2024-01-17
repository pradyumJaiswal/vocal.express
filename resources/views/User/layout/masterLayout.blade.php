
@include('user.layout.css')

@yield('section')

<div class="theme-layout">
	
	@include('user.layout.header')
	
	@include('user.layout.sidebar')
	
	@include('user.layout.middle-section')
	
    @yield('Content')

    @include('user.layout.footer')

	
	@include('user.layout.askquestion')

  
  @include('user.layout.sidemessage')
</div>

</body>	

</html>
@include('user.layout.javascript')
