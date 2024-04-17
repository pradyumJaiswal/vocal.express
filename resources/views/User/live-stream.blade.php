
	@include('user.layout.css')

	@section('title', 'Live-Stream')

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	@include('user.layout.header')
	
	
	
	
		
	<section>
		<div class="gap no-gap">
			<div class="container-fluid no-pad">
				<div class="row no-gutters">
					<div class="col-lg-2">
						<div class="side-area">
							<ul class="side-links">
								<li><a class="active" href="#" title=""><i class="icofont-video-cam"></i> Live Stream</a></li>
								<li><a href="#" title=""><i class="icofont-calendar"></i> Manage</a></li>
								<li><a href="#" title=""><i class="icofont-camera-alt"></i> Webcam</a></li>
								<li><a href="#" title=""><i class="icofont-gears"></i> Settings</a></li>
								<li><a href="#" title=""><i class="icofont-comment"></i> Feedback</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="screen-area mt-3 pd-20">
							<div id="my_camera"></div>
							<div class="stream-controls">
								<ul>
									<li><i class="icofont-users-alt-3"></i> Participants <span>2</span></li>
									<li><i class="icofont-record"></i> Mute</li>
									<li><i class="icofont-video"></i> Stop video</li>
									<li><i class="icofont-dotcms"></i> Record Video</li>
									<li><i class="icofont-comment"></i> Chat</li>
									<li><i class="icofont-slidshare"></i> Share Screen</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="livestream-chat">
							<div class="livechat-head">
								<h5><i class="icofont-live-support"></i> Live Chat</h5>
								<div class="more">
									<div class="more-post-optns">
										<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
										<ul>
											<li>
												<i class="icofont-user-alt-3"></i> Participants
												<span>How many user are live with you</span>
											</li>
											<li>
												<i class="icofont-external-link"></i> Popout chat
												<span>Open chat in new tab</span>
											</li>
											<li>
												<i class="icofont-ban"></i> Hide Chat
												<span>Hide chat from Your side</span>
											</li>
										</ul>
									</div>
								</div>
							</div>	
							<div class="chat-content">
								<div class="date">Wednesday 25, March</div>
								<ul class="chatting-area max-height">
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p>what's liz short for? :</p>
									</li>
									<li class="me">
										<figure><img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt=""></figure>
										<p>Elizabeth lol</p>
									</li>
									<li class="me">
										<figure><img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt=""></figure>
										<p>wanna know whats my second guess was?</p>
									</li>
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p>yes</p>
									</li>
									<li class="me">
										<figure><img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt=""></figure>
										<p>Disney's the lizard king</p>
									</li>
									<li class="me">
										<figure><img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt=""></figure>
										<p>i know him 5 years ago</p>
									</li>
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p>coooooooooool dude ;</p>
									</li>
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p><img src="{{asset('user/images/smiles/heart.png')}}" alt=""></p>
									</li>
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p><img src="{{asset('user/images/smiles/smiling.png')}}" alt=""></p>
									</li>
									<li class="you">
										<figure><img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt=""></figure>
										<p>hahaahhhahah</p>
									</li>
								</ul>
							</div>
							<form method="post" class="text-bottom">
								<textarea id="emojionearea2" placeholder="wirte someting"></textarea>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	@include('user.layout.footer')


	<div class="auto-popup">
		<div class="wizard-wrapper">
			<form method="post" id="wizard">
				<!-- SECTION 1 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="{{asset('user/images/resources/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="popup-content">
							<h2>Welcome to Socimo Live Room</h2>
							<span>When do You Want To Go Live</span>
							<div class="box-data">
								<div class="starting-ask selected">
									<i>
<svg height="18px" width="18px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#f00"><path d="M 6.1015625 6.1015625 C 3.5675625 8.6345625 2 12.134 2 16 C 2 19.866 3.5675625 23.365437 6.1015625 25.898438 L 7.5195312 24.480469 C 5.3465312 22.307469 4 19.308 4 16 C 4 12.692 5.3465312 9.6925313 7.5195312 7.5195312 L 6.1015625 6.1015625 z M 25.898438 6.1015625 L 24.480469 7.5195312 C 26.653469 9.6925312 28 12.692 28 16 C 28 19.308 26.653469 22.307469 24.480469 24.480469 L 25.898438 25.898438 C 28.432437 23.365437 30 19.866 30 16 C 30 12.134 28.432437 8.6345625 25.898438 6.1015625 z M 9.6367188 9.6367188 C 8.0077188 11.265719 7 13.515 7 16 C 7 18.485 8.0077187 20.734281 9.6367188 22.363281 L 11.052734 20.947266 C 9.7847344 19.680266 9 17.93 9 16 C 9 14.07 9.7847344 12.319734 11.052734 11.052734 L 9.6367188 9.6367188 z M 22.363281 9.6367188 L 20.947266 11.052734 C 22.215266 12.319734 23 14.07 23 16 C 23 17.93 22.215266 19.680266 20.947266 20.947266 L 22.363281 22.363281 C 23.992281 20.734281 25 18.485 25 16 C 25 13.515 23.992281 11.265719 22.363281 9.6367188 z M 16 12 A 4 4 0 0 0 16 20 A 4 4 0 0 0 16 12 z"/></svg></i>
									<h6>Right Now</h6>
									<p>Get up to live stream now, Don't worry, You have a chance to review setting before live. <a href="#" title="">get help about this</a> </p>
								</div>
								<div class="starting-ask">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
									<h6>Live Later</h6>
									<p>Schedule a stream for a later time. You can even set it up ahead of time. <a href="#" title="">get help about this</a> </p>
								</div>
							</div>
						</div>
					</div>
				</article>

				<!-- SECTION 2 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="{{asset('user/images/resources/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="popup-content">
							<h2>Go live and pick the stream</h2>
							<span>Pick the type of stream for begin</span>
							<div class="box-data">
								<div class="starting-ask selected">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></i>
									<h6>Check Video Came</h6>
									<p>Chek your video came is activated or connect with your computer or not. <a href="#" title="">get help about this</a> </p>
								</div>
								<div class="starting-ask">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg></i>
									<h6>Check Audio & Mic</h6>
									<p>Chek your Audio and microphone is activated or connect with your computer or not. <a href="#" title="">get help about this</a> </p>
								</div>
							</div>
						</div>
					</div>
				</article>

				<!-- SECTION 3 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="{{asset('user/images/resources/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="popup-content">
							<h2>Go live and pick the stream</h2>
							<span>Pick the type of stream for begin</span>
							<div class="box-data">
								<input type="text" placeholder="Create a title">
								<select>
									<option>Public</option>
									<option>Private</option>
									<option>only friends</option>
								</select>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="chat-live">
									<label for="chat-live" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Allow live Chat</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="commets">
									<label for="commets" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Allow Comments</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="schedule">
									<label for="schedule" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Schedule for Later</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
							</div>
						</div>	
					</div>
				</article>
			</form>
		</div>
	</div><!-- wizard form -->	
	
	
	
	@include('user.layout.sidemessage')
	


	@include('user.layout.askquestion')

	<!-- ask question -->
	

</div>

@include('user.layout.javascript')
</body>	

</html>