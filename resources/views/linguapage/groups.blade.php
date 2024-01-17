
    
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
							<div class="col-lg-9">
								<div class="main-wraper">
									<h4 class="main-title"><i class=""><svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i> Groups</h4>
									<div class="row col-xs-6">
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img alt="" src="{{asset('user/images/resources/group1.jpg')}}"></figure>
												<a title="" href="#">Sports Punch</a>
												<span>125M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group2.jpg')}}" alt=""></figure>
												<a href="#" title="">Asian Girls</a>
												<span>12k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group3.jpg')}}" alt=""></figure>
												<a href="#" title="">Graphic Design</a>
												<span>125M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group4.jpg')}}" alt=""></figure>
												<a href="#" title="">Family Lovers</a>
												<span>1M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group5.jpg')}}" alt=""></figure>
												<a href="#" title="">School Mates</a>
												<span>22M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group6.jpg')}}" alt=""></figure>
												<a href="#" title="">Panama Beach</a>
												<span>5M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group7.jpg')}}" alt=""></figure>
												<a href="#" title="">Online Teching</a>
												<span>52k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group8.jpg')}}" alt=""></figure>
												<a href="#" title="">Child Cares</a>
												<span>1M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group9.jpg')}}" alt=""></figure>
												<a href="#" title="">Fun Art</a>
												<span>35k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group10.jpg')}}" alt=""></figure>
												<a href="#" title="">Kids Players</a>
												<span>10M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('user/images/resources/group11.jpg')}}" alt=""></figure>
												<a href="#" title="">Goldi Friends</a>
												<span>14M Members</span>
												<button>join group</button>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="load mb-4">
											<ul class="pagination">
												<li><a title="" href="#"><i class="icofont-arrow-left"></i></a></li>
												<li><a title="" href="#" class="active">1</a></li>
												<li><a title="" href="#">2</a></li>
												<li><a title="" href="#">3</a></li>
												<li><a title="" href="#">4</a></li>
												<li><a title="" href="#">5</a></li>
												<li>....</li>
												<li><a title="" href="#">10</a></li>
												<li><a title="" href="#"><i class="icofont-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-wraper">
									<h4 class="main-title">Recommended</h4>
									<div class="rec-grp-caro">
										<div class="row remove-ext-30">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background2.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar2.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background3.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar3.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background4.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar4.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row remove-ext-30">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background4.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar4.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background2.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar2.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('user/images/resources/group-background3.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('user/images/resources/group-avatar3.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
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

<!-- Mirrored from wpkixx.com/html/socimo/groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 16:43:54 GMT -->
</html>