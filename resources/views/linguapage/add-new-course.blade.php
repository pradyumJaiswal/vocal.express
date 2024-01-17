@include('user.layout.css')

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	@include('user.layout.header')
	 
	@include('user.layout.sidebar')

	<!-- nav sidebar -->
	
	@include('user.layout.middle-section')

	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<aside class="sidebar">
							<div class="widget">
								<h4 class="widget-title">Recent Media</h4>
								<div class="recent-media">
									<figure>
										<img src="{{asset('user/images/resources/course-6.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>Vu.Js Free Tutorial</span>
									</figure>
									<figure>
										<img src="{{asset('user/images/resources/course-1.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>Css3 2020 Tutorial</span>
									</figure>
								</div>
							</div><!-- recent media -->
							<div class="widget">
								<h4 class="widget-title">Post Analytics</h4>
								<ul class="widget-analytics">
									<li>Reads <span>56</span></li>
									<li>Recommendations <span>3</span></li>
									<li>Shares <span>22</span></li>
									<li>References <span>17</span></li>
								</ul>
							</div><!-- post analytics -->
							
							<div class="widget">
								<h4 class="widget-title">Add Credits</h4>
								<div class="set-card">
									<img src="{{asset('user/images/paypal.png')}}" alt="">
									<p>
										Add credits to your account
									</p>
									<a class="main-btn" href="#" title="">Set Card</a>
									<div class="added-complete">
										<h6>Added: <span>25 Mar 2020</span></h6>
									</div>
								</div>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Add New Course or Book</h4>
							<h6 class="mb-4">Add new course and book for sale in the <b>Socimo</b> Market Place</h6>
							<div class="add-credits">
								<form>
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Course Title">
										</div>
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Course Subtitle">
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Language</option>
												<option>English</option>
												<option>French</option>
												<option>Spanish</option>
											</select>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Course Category</option>
												<option>IT & Software</option>
												<option>Business</option>
												<option>Finance</option>
												<option>Meidcal</option>
											</select>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Course Subcategory</option>
												<option>React</option>
												<option>HTML5</option>
												<option>Css3</option>
												<option>Node.js</option>
											</select>
										</div>
										<div class="mb-4 col-lg-12">
											<textarea placeholder="Textarea" rows="4" class="uk-textarea"></textarea>
										</div>
										<div class="mb-4 uk-margin col-lg-4">
											<select class="uk-select">
												<option>Currency</option>
												<option>USD</option>
												<option>PKR</option>
												<option>INR</option>
												<option>Euro</option>
											</select>
										</div>
										<div class="mb-4 col-lg-4 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Price">
										</div>	
									</fieldset>
								</form>
								<div class="mt-2 col-lg-12">
									<form method="post" class="dropzone" action="https://wpkixx.com/upload-target">
										<div class="fallback">
											<input name="file" type="file" multiple />
										</div>
									</form>
								</div>	
								<div class="mt-3 col-lg-12">
									<button type="submit" class="button primary circle">Publish</button>
								</div>
								<p>
									<b>Special Note:</b>
									"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	@include('user.layout.footer')
	
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	
	

	
	@include('user.layout.askquestion')
	
	
	
	@include('user.layout.sidemessage')
	
	<!-- chat box -->
	
</div>
	
	@include('user.layout.javascript')
	

</body>	

<!-- Mirrored from wpkixx.com/html/socimo/add-new-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 16:43:36 GMT -->
</html>