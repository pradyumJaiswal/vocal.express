
	@include('user.layout.css')
    

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	<div class="error-page">
		<div class="logo top-left"><img src="{{asset('user/images/logo.png')}}" alt=""><span>Vocal Express</span></div>
		<div id="container-inside">
		  <div id="circle-small"></div>
		  <div id="circle-medium"></div>
		  <div id="circle-large"></div>
		  <div id="circle-xlarge"></div>
		  <div id="circle-xxlarge"></div>
	  	</div>
		<div class="error-data">
			<figure><img src="{{asset('user/images/resources/error.png')}}" alt=""></figure>
			<h1>Page Not Found</h1>
			<a class="main-btn" href="User/Userhome" title="">Go Back to Home</a>
		</div>
	</div>	
</div>
	
@include('user.layout.javascript')
    
	

</body>	

</html>