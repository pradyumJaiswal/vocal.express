@extends('User.layout.masterLayout')

@section('title', 'Search Result')
@section('Content')
	
	<section>
		<div class="top-area bluesh high-opacity">
			<div class="bg-image" style="background-image:{{asset('url(user/images/resources/top-bg.jpg)')}}"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post-subject">
							<div class="university-tag">
								<div class="Search-result">
									<h4>Search Result for <strong>"Computer"</strong></h4>
								</div>
							</div>
							
							<ul class="nav nav-tabs post-detail-btn">
                            	<li class="nav-item"><a class="active" href="#allposts" data-toggle="tab">All Posts</a></li>
                                <li class="nav-item"><a class="" href="#depart" data-toggle="tab">Departments</a></li>
                                <li class="nav-item"><a class="" href="#members" data-toggle="tab">Members</a></li>
								<li class="nav-item"><a class="" href="#photos" data-toggle="tab">Photos</a></li>
								<li class="nav-item"><a class="" href="#videos" data-toggle="tab">Videos</a></li>
								<li class="nav-item"><a class="" href="#groups" data-toggle="tab">Groups</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="tab-content">
								    <div class="tab-pane fade active show" id="allposts" >
										<div class="main-wraper">
											<h4 class="main-title">Photos <a href="#" title="">view all</a></h4>
											<div class="row merged-10 remove-ext20">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/light.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/light.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/dark.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/dark.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image2.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image2.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image3.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image3.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image4.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image4.jpg')}}" alt="">
														</a>
													</div>	
												</div>
											</div>	
										</div><!-- photos -->
										<div class="main-wraper">
											<h4 class="main-title">Videos <a href="#" title="">view all</a></h4>
											<div class="row merged-10 remove-ext20">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video1.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video2.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video3.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video4.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video5.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video6.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
											</div>
										</div><!-- videos -->
										<div class="main-wraper">
											<h4 class="main-title">Members <span>(254)</span> <a href="#" title="">view all</a></h4>
											<div class="row col-xs-6 merged-10">
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-1.jpg')}}"></figure>
														<span><a href="#" title="">Amy Watson</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-2.jpg')}}"></figure>
														<span><a href="#" title="">Muhammad A.</a></span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-3.jpg')}}"></figure>
														<span><a href="#" title="">Sara Jean</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-4.jpg')}}"></figure>
														<span><a href="#" title="">William Jhon</a></span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
											</div>
										</div><!-- members -->
										<div class="main-wraper">
											<h4 class="main-title">Departments <a href="#" title="">view all</a></h4>
											<div class="dept-info">
												<ul>
													<li>
														<h6><a href="#" title="">Department of Electrical and Electronics Engineering</a></h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6><a href="#" title="">Department of Food Engineering</a></h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6><a href="#" title="">Faculty of Nursing</a></h6>
														<span>Members <i>38</i></span>
													</li>
												</ul>
											</div>
										</div><!-- departments -->
										
								    </div>
								  	<div class="tab-pane fade" id="depart">
								  		<div class="main-wraper">
											<h4 class="main-title">Departments</h4>
											<div class="dept-info">
												<ul>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								  	<div class="tab-pane fade" id="members">
										
										<div class="main-wraper">
											<h4 class="main-title">Members (254)</h4>
											<div class="row remove-ext20 col-xs-6 merged-10">
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-1.jpg')}}"></figure>
														<span><a href="#" title="">Amy Watson</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-2.jpg')}}"></figure>
														<span><a href="#" title="">Muhammad A.</a></span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-3.jpg')}}"></figure>
														<span><a href="#" title="">Sara Jean</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-4.jpg')}}"></figure>
														<span><a href="#" title="">William Jhon</a></span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-1.jpg')}}"></figure>
														<span><a href="#" title="">Amy Watson</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-2.jpg')}}"></figure>
														<span><a href="#" title="">Muhammad A.</a></span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-3.jpg')}}"></figure>
														<span><a href="#" title="">Sara Jean</a></span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('user/images/resources/speak-4.jpg')}}"></figure>
														<span><a href="#" title="">William Jhon</a></span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="photos">
										<div class="main-wraper">
											<h4 class="main-title">Photos <a href="#" title="">view all</a></h4>
											<div class="row merged-10 remove-ext20">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/light.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/light.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/dark.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/dark.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image2.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image2.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image3.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image3.jpg')}}" alt="">
														</a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="images-post">
														<a class="uk-inline" href="{{asset('user/images/elements/image4.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/elements/image4.jpg')}}" alt="">
														</a>
													</div>	
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="videos">
										<div class="main-wraper">
											<h4 class="main-title">Videos <a href="#" title="">view all</a></h4>
											<div class="row merged-10 remove-ext20">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video1.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video2.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video3.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video4.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video5.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video6.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video6.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video8.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video9.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video10.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video11.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="video-posts">
														<img src="{{asset('user/images/resources/post-video6.jpg')}}" alt="">
														<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
													</div>	
												</div>
											</div>
											
										</div>
									</div>
									<div class="tab-pane fade" id="groups">
										<div class="main-wraper">
											<h4 class="main-title">Groups</h4>
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
										</div>
									</div>
								</div>
								<div class="main-wraper">
									<h4 class="main-title">Related Searches</h4>
									<ul class="related-searches">
										<li><a title="" href="#">jack carter jr.</a></li>
										<li><a title="" href="#">jack carter Pool</a></li>
										<li><a title="" href="#">jack carter fdny </a></li>
										<li><a title="" href="#">jack carter chevrolet cadillac </a></li>
										<li><a title="" href="#">jack jack </a></li>
									</ul>
								</div>
							</div>
							@include('user.layout.rightbar')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
	
	
	<div class="share-wraper">
		<div class="share-options">
			<span class="close-btn"><i class="icofont-close-circled"></i></span>
			<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
			<form method="post">
				<textarea placeholder="Write Something"></textarea>
			</form>
			<ul>
				<li><a title="" href="#">Your Timeline</a></li>
				<li class="friends"><a title="" href="#">To Friends</a></li>
				<li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
			</ul>
			<div style="display: block;" class="social-media">
				<ul>
					<li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
					<li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
					<li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
					<li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
					<li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
					<li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
					<li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
				</ul>
			</div>
			<div style="display: none;" class="friends-to">
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('user/images/resources/user1.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Jack Carter</a></h5>
						<span>family member</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('user/images/resources/user2.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Xang Ching</a></h5>
						<span>Close Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('user/images/resources/user3.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Emma Watson</a></h5>
						<span>Matul Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
			</div>
			<button type="submit" class="main-btn">Publish</button>
		</div>
	</div><!-- share post -->
	
