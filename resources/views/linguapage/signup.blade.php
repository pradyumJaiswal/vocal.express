
   
   @include('user.layout.css')
    <style>
        .bg-image{
            background-image: url('user/images/resources/login-bg.png');
        }
    </style>
</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="verticle-center">
			<div class="welcome-note">
				<div class="logo "><img src="{{asset('user/images/logo.png')}}" alt=""><span>Voice</span></div>
				<h1>Welcome to Voice</h1>
				<p>
					Voice is a one and only plateform for the researcheres, students, and Acdamic people. 
					Every one can join this plateform free and share his ideas and research with seniors and
					juniours comments and openions. 
				</p>
			</div>
			<div class="bg-image"></div>
		</div>
	</div>
	<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Singup</h4>
				<form method="post" class="c-form">
					<div class="row merged-10">
						<div class="col-lg-12"><h4>We Provide You Awer Best Social Media Community.</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Full Name">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Email@">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" placeholder="Password">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" placeholder="Confirm Password">
						</div>
						<div class="col-lg-12">
							<div class="gender">
							  <input type="radio" id="male" name="gender" value="male">
							  <label for="male">Male</label>
							  <input type="radio" id="female" name="gender" value="female">
							  <label for="female">Female</label>
							</div>	
						</div>
						
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
								<br><a class="account" href="{{Route('userlogin')}}">I Have Already Account !</a>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	@include('user.layout.footer')
</div>
@include('user.layout.javascript')
	

</body>	

</html>