

	@include('user.layout.css')
   
</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="bg-image"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="{{asset('user/images/resources/login-1.png')}}" alt=""></figure>
				<h4>Ask questions with seniors Researchers</h4>
				<p>
					Ask questions and get the experienced answer by researchers and others fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('user/images/resources/login-2.png')}}" alt=""></figure>
				<h4>Find New Researchers or Friends</h4>
				<p>
					Join Socimo and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('user/images/resources/login-3.png')}}" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with Socimo.
				</p>
			</li>
			
		</ul>
	</div>
	<div class="auth-login">
		<div class="logo"><img src="{{asset('user/images/logo.png')}}" alt=""><span>VOICE</span></div>
		<div class="mockup left-bottom"><img src="{{asset('user/images/mockup.png')}}" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4><i class="icofont-key-hole"></i> Login</h4>
				<form method="post" class="c-form">
					<input type="text" placeholder="User Name @">
					<input type="password" placeholder="xxxxxxxxxx">
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i> Login</button>
				</form>
				<a href="{{Route('usersignup')}}">Have An Account ?</a>
			</div>
		</div>
		<div class="mockup right"><img src="{{asset('user/images/star-shape.png')}}" alt=""></div>
	</div>
	
</div>
@include('user.layout.javascript')

</body>	

</html>