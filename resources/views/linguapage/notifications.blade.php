@include('user.layout.css')

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	@include('user.layout.header')
	
	@include('user.layout.sidebar')

@include('user.layout.middle-section')
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="main-wraper">
									<h3 class="main-title">All Notifications</h3>
									<div class="editing-interest">
										<div class="notification-box">
											<ul>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span><i class="fa fa-thumbs-up"></i> 30 mints ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled" title="Remove"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar2.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Sarah Hetfield commented on your photo. </p>
														<span><i class="fa fa-comment"></i> 1 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar3.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span><i class="fa fa-comment"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar4.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Motel Pitnik invited you to attend to his event Goo & Gotham Bar. </p>
														<span><i class="fa fa-address-card"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar5.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Chris Greyson liked your profile status. </p>
														<span><i class="fa fa-thumbs-up"></i> 1 day ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>You and Nicholas Grissom just became friends. Write on his wall. </p>
														<span><i class="fa fa-user"></i> 2 days ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar3.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span><i class="fa fa-comment"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar4.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Motel Pitnik invited you to attend to his event Goo & Gotham Bar. </p>
														<span><i class="fa fa-address-card"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span><i class="fa fa-thumbs-up"></i> 30 mints ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled" title="Remove"></i>
												</li>
											</ul>
										</div>
										<div class="sp sp-bars"></div>
									</div>
								</div>
							</div>
							@include('user.layout.rightbar')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	@include('user.layout.footer')
	
	
	

	
	
	
	
	@include('user.layout.askquestion')
	
	@include('user.layout.sidemessage')
	
</div>
	
@include('user.layout.javascript')

</body>	

<!-- Mirrored from wpkixx.com/html/socimo/notifications.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 16:43:58 GMT -->
</html>