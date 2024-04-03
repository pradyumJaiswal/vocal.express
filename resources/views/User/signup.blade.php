
   
   @include('user.layout.css')

   @section('title', 'Signup')
    <style>
        .bg-image{
            background-image: url('user/images/resources/login-bg.png');
        }
    </style>
</head>
<body>
{{-- <div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader --> --}}
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="verticle-center">
			<div class="welcome-note">
				<div class="logo "><img src="{{asset('user/images/logo.png')}}" alt=""><span>Vocal Express</span></div>
				<h1>Welcome to Vocal Express</h1>
				<p>
					Vocal Express is a one and only plateform for the researcheres, students, and Acdamic people. 
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
				{{-- @if (Session::has('success'))
					<div class="alert alert-success col-lg-12">{{ session::get('success') }}</div>
				@endif --}}
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<h4><i class="icofont-lock"></i> Singup</h4>
				<form method="post" action="{{ route('register') }}" class="c-form">
				@csrf
					<div class="row merged-10">
						<div class="col-lg-12"><h4>We Provide You Awer Best Social Media Community.</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
						<!-- <input id="role" class="form-control" type="text" name="role" value="3" hidden> -->
							<input type="text" placeholder="Full Name" name="name">
							@if($errors->has('name'))
							<small class = "text-danger fs-6 fw-bold">{{ $errors->first('name') }}</small>
							@endif
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Email@" name="email">
							@if($errors->has('email'))
							<small class = "text-danger fs-6 fw-bold">{{ $errors->first('email') }}</small>
							@endif
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="User Name" name="user_name">
							@if($errors->has('u_name'))
							<small class = "text-danger fs-6 fw-bold">{{ $errors->first('user_name') }}</small>
							@endif
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" placeholder="Password" name="password">
							@if($errors->has('password'))
							<small class = "text-danger fs-6 fw-bold">{{ $errors->first('password') }}</small>
							@endif
						</div>
						<!-- <div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" placeholder="Confirm Password">
						</div> -->
						<div class="col-lg-12">
							<div class="gender">
							  <input type="radio" id="Learner" name="role" value="User" required>
							  <label for="Learner">Learner</label>
							  <input type="radio" id="Teacher" name="role" value="Teacher" required>
							  <label for="Teacher">Teacher</label>
							</div>	
						</div>
						
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
								<br><a class="account" href="{{Route('Userlogin')}}">I Have Already Account !</a>

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