@include('user.layout.css')
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout gray-bg">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
				<div class="forget-password">
					<figure class="logo"><img src="{{asset('User/images/logo.png')}}" alt=""><span>Vocal Express</span></figure>
					<div class="pass-form">
						<h4>Request a Password Reset</h4>
						<form method="post">
							<label><i class="icofont-envelope"></i></label>
							<input type="text" placeholder="Email Address">
							<button class="main-btn" type="submit">Reset Password</button>
						</form>
						<span>Go Back To <a href="{{Route('Userlogin')}}" title="">Log In</a></span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<figure class="bottom-mockup"><img alt="" src="{{asset('User/images/footer.png')}}"></figure>
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; Copyright All rights reserved by Socimo 2020</span>
				</div>
			</div>
		</div>
	</div>
	
</div>
	
</body>	

</html>
@include('user.layout.javascript')