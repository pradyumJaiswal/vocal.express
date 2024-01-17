
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
	
	<div class="gap no-gap">
		<div class="top-area mate-black low-opacity">
			<div class="bg-image" style="background-image: url(images/resources/top-bg.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post-subject">
							<div class="university-tag">
								<figure><img src="{{asset('user/images/resources/user.jpg')}}" alt=""></figure>
								<div class="uni-name">
									<h4>Georg Peeter </h4>
									<span>@Georgofficial</span>
								</div>
								<ul class="sharing-options">
									<li><a title="Invite Colleagues" href="#" data-toggle="tooltip"><i class="icofont-id-card"></i></a> </li>
									<li><a title="Follow" href="#" data-toggle="tooltip"><i class="icofont-star"></i></a> </li>
									<li><a title="Share" href="#" data-toggle="tooltip"><i class="icofont-share-alt"></i></a> </li>
								</ul>
								<a data-ripple="" title="" href="#" class="invite">Invite Colleagues</a>
							</div>

							<ul class="nav nav-tabs post-detail-btn">
								 <li class="nav-item"><a class="active" href="#timeline" data-toggle="tab">Timeline</a></li>
								 <li class="nav-item"><a class="" href="#followers" data-toggle="tab">Followers</a><span>23</span></li>
								 <li class="nav-item"><a class="" href="#follow" data-toggle="tab">Follow</a><span>100</span></li>
								<li class="nav-item"><a class="" href="#about" data-toggle="tab">About</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- top Head -->
	
		
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="tab-content">
								    <div class="tab-pane fade active show" id="timeline" >
										<div class="main-wraper">
											<span class="new-title">Create New Post</span>
											<div class="new-post">
												<form method="post">
													<i class="icofont-pen-alt-1"></i>
													<input type="text" placeholder="Create New Post">
												</form>
												<ul class="upload-media">
													<li>
														<i><img src="{{asset('user/images/image.png')}}" alt=""></i>
														<span>Photo/Video</span>
													</li>
													<li>
														<i><img src="{{asset('user/images/activity.png')}}" alt=""></i>
														<span>Feeling/Activity</span>
													</li>
													<li>
														<i><img src="{{asset('user/images/live-stream.png')}}" alt=""></i>
														<span>Live Stream</span>
													</li>
												</ul>
											</div>
										</div><!-- create new post -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user1.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Jack Carter</a> Share Post</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
														<p>
															Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
														</p>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>10+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share post without image -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Maria k.</a> Premium Product</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<figure class="premium-post"><img src="{{asset('user/images/resources/book5.jpg')}}" alt=""></figure>
														<div class="premium">
															<a href="book-detail.html" class="post-title">Technicial words 2020 Book world</a>
															<p>
																Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
															</p>
															<a class="main-btn purchase-btn" title="" href="book-detail.html"><i class="icofont-cart-alt"></i> Buy Now</a>
														</div>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>10+</p>
															</div>
															<div class="new-comment" style="display: block;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- post sell book -->
										<div class="main-wraper">
											<div class="wraper-title">
												<span><i class="icofont-video-alt"></i> Videos Play List</span>
												<a href="videos.html" title="">See all Videos</a>
											</div>
											<div class="videos-caro">
												<div class="item-video" data-merge="2">
													<a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8"></a>
													<div class="posted-user">
														<img src="{{asset('user/images/resources/user4.jpg')}}" alt="">
														<span>Frank J.</span>
													</div>
													<div class="vid-info">
														<span>1 year ago</span>
														<span><i class="icofont-eye-open"></i> 3.1k</span>
													</div>
												</div>
												<div class="item-video" data-merge="2">
													<a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs"></a>
													<div class="posted-user">
														<img src="{{asset('user/images/resources/user2.jpg')}}" alt="">
														<span>Maria K.</span>
													</div>
													<div class="vid-info">
														<span>2 weeks ago</span>
														<span><i class="icofont-eye-open"></i> 1.1k</span>
													</div>
												</div>
												<div class="item-video" data-merge="2">
													<a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a> 
													<div class="posted-user">
														<img src="{{asset('user/images/resources/user1.jpg')}}" alt="">
														<span>Jack Carter</span>
													</div>
													<div class="vid-info">
														<span>4 weeks ago</span>
														<span><i class="icofont-eye-open"></i> 20k</span>
													</div>
												</div>
												<div class="item-video" data-merge="2">
													<a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg"></a>
													<div class="posted-user">
														<img src="{{asset('user/images/resources/user3.jpg')}}" alt="">
														<span>Fawad Jan</span>
													</div>
													<div class="vid-info">
														<span>1 Month ago</span>
														<span><i class="icofont-eye-open"></i> 8k</span>
													</div>
												</div>

											</div>
										</div><!-- video playlist carousel -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user3.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Turgut Alp</a> Create Post</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<figure>
															<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">
																<img src="{{asset('user/images/resources/study.jpg')}}" alt="">
															</a>	
														</figure>
														<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
														<p>
															Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
														</p>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>30+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share image with post -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user4.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Saim turan</a> added image album</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<figure>
															<div class="img-bunch">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6">
																		<figure>
																			<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">
																				<img src="{{asset('user/images/resources/album1.jpg')}}" alt="">
																			</a>
																		</figure>
																		<figure>
																			<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album2.jpg')}}"><img src="{{asset('user/images/resources/album2.jpg')}}" alt="">
																			</a>
																		</figure>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-6">
																		<figure>
																			<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album6.jpg')}}"><img src="{{asset('user/images/resources/album6.jpg')}}" alt="">
																			</a>
																		</figure>
																		<figure>
																			<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album5.jpg')}}"><img src="{{asset('user/images/resources/album5.jpg')}}" alt="">
																			</a>
																		</figure>
																		<figure>
																			<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album4.jpg')}}"><img src="{{asset('user/images/resources/album4.jpg')}}" alt="">
																			</a>
																			<div class="more-photos">
																				<span>+15</span>
																			</div>
																		</figure>
																	</div>
																</div>
															</div>	
														</figure>
														<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
														<p>
															Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
														</p>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>50+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share image album -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user5.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Andrew Jhon</a> Shared Link</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
															<em><a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" title="" target="_blank">https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538</a></em>
														<figure>
															<span>fetched-image</span>
															<img src="{{asset('user/images/resources/laptop.png')}}" alt="">
														</figure>
														<a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" class="post-title" target="_blank">Winku Social Network with Company Pages Theme</a>
														<p>
															“Winku” is a social community mobile app kit with features. user can use this app for sharing blog, posts, timeline, create Group, Create Pages, chat/Messages, Movies sharing, QA, and Much More.
														</p>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>10+</p>
															</div>
															<div class="new-comment" style="display: block;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share link -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<em><a href="https://www.youtube.com/embed/zdow47FQRfQ" title="" target="_blank">https://www.youtube.com/embed/zdow47FQRfQ</a>
														</em>
														<iframe height="285" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

														<p>
															Cookie? Biscuit? Bikkie? They all mean the same thing! Our lovely English teachers will quickly show you some pronunciation and vocabulary differences from Australia, America, and England!
														</p>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>20+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share video -->
										<div class="main-wraper">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
																<ul>
																	<li>
																		<i class="icofont-pen-alt-1"></i>Edit Post
																		<span>Edit This Post within a Hour</span>
																	</li>
																	<li>
																		<i class="icofont-ban"></i>Hide Post
																		<span>Hide This Post</span>
																	</li>
																	<li>
																		<i class="icofont-ui-delete"></i>Delete Post
																		<span>If inappropriate Post By Mistake</span>
																	</li>
																	<li>
																		<i class="icofont-flag"></i>Report
																		<span>Inappropriate content</span>
																	</li>
																</ul>
															</div>
														</div>
														<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
														<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
													</div>
													<div class="post-meta">
														<img class="gif" src="{{asset('user/images/giphy.png')}}" data-gif="{{asset('user/images//giphy-sample.gif')}}" alt="">
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
		<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																	<ins>5k</ins>	
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																	<ins>205</ins>
																	</span>	
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																  <div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																  </div>
																  <div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																  </div>
																  <div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																  </div>
																  <div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>20+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- gif image post -->	
								  		<div class="sp sp-bars"></div>  
									</div>
								  	<div class="tab-pane fade" id="followers">
										<div class="row col-xs-6 merged-10">
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-1.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy Watson</a></span>
													<ins>Bz University, Pakistan</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-2.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Muhammad Khan</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-3.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Sadia Gill</a></span>
													<ins>Wb University, USA</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-4.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Rjapal</a></span>
													<ins>Km University, India</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-5.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy watson</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-6.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Bob Frank</a></span>
													<ins>WB University, Canada</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-7.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy Watson</a></span>
													<ins>Bz University, Pakistan</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-8.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Muhammad Khan</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-9.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Sadia Gill</a></span>
													<ins>WB University, USA</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="sp sp-bars"></div>
											</div>
										</div>
									</div>
								  	<div class="tab-pane fade" id="follow">
										<div class="row merged-10 col-xs-6">
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-10.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy Watson</a></span>
													<ins>Bz University, Pakistan</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i>Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-11.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Muhammad Khan</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-12.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Sadia Gill</a></span>
													<ins>WB University, USA</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-4.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Rjapal</a></span>
													<ins>Km University, India</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-1.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy watson</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-2.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Bob Frank</a></span>
													<ins>WB University, Canada</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-5.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Amy Watson</a></span>
													<ins>Bz University, Pakistan</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-7.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Muhammad Khan</a></span>
													<ins>Oxford University, UK</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="friendz">
													<figure><img src="{{asset('user/images/resources/speak-10.jpg')}}" alt=""></figure>
													<span><a href="#" title="">Sadia Gill</a></span>
													<ins>WB University, USA</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="sp sp-bars"></div>
											</div>
										</div>
									</div>
								  	<div class="tab-pane fade " id="about">
										<div class="main-wraper">
											<h3 class="main-title">About Engin</h3>
											<div class="lang">
												<h6>Languages</h6>
												<span>English, Turkish</span>
											</div>
											
											<div class="dis-n-exp">
												<h6>Discipliens</h6>
												<span>educational leadership</span>
												<span>educational assesment</span>
												<span>educational management</span>
												<span>Social Psychology</span>
												<span>organizational Psychology</span>
												<span>Qualitative social research</span>
												<span>Qualitative Psychology</span>
											</div>
											<div class="dis-n-exp">
												<h6>Skills & Experties </h6>
												<span>educational leadership</span>
												<span>educational assesment</span>
												<span>educational management</span>
												<span>Social Psychology</span>
												<span>organizational Psychology</span>
												<span>Qualitative social research</span>
												<span>Qualitative Psychology</span>
											</div>
										</div>
										<div class="main-wraper">
											<h3 class="main-title">Professional Experience</h3>
											<div class="exp-col">
												<div class="exp-meta">
													<h5><i class="icofont-university"></i> Oxford university</h5>
													<p>Sep-2012 Sep-2013</p>
													<span>Position</span>
													<ins>Professor Associate</ins>
												</div>
												<img src="{{asset('user/images/resources/uni1.jpg')}}" alt="">
											</div>
											<div class="exp-col">
												<div class="exp-meta">
													<h5><i class="icofont-university"></i> university of cambridge</h5>
													<p>Sep-2012 Sep-2013</p>
													<span>Position</span>
													<ins>Professor Associate</ins>
												</div>
												<img src="{{asset('user/images/resources/uni3.jpg')}}" alt="">
											</div>
											<div class="exp-col">
												<div class="exp-meta">
													<h5><i class="icofont-university"></i> university of cambridge</h5>
													<p>Sep-2012 Sep-2013</p>
													<span>Position</span>
													<ins>Professor Associate</ins>
												</div>
												<img src="{{asset('user/images/resources/uni4.jpg')}}" alt="">
											</div>
										</div>
										<div class="main-wraper">
											<h3 class="main-title">Researches Image & PDF</h3>
											<div class="row merged-10">
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image1.jpg')}}" alt="">
														</a>
													</figure>
												</div>
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image2.jpg')}}" alt="">
														</a>
													</figure>
												</div>
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image3.jpg')}}" alt="">
														</a>
													</figure>
												</div>
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image4.jpg')}}" alt="">
														</a>
													</figure>
												</div>
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image5.jpg')}}" alt="">
														</a>
													</figure>
												</div>
												<div class="col-lg-4">
													<figure class="research-avatar">
														<a class="uk-inline" href="{{asset('user/images/resources/image1.jpg')}}" data-fancybox="">
															<img src="{{asset('user/images/resources/image6.jpg')}}" alt="">
														</a>
													</figure>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<i class="icofont-learn"></i>
											</figure>
											<div class="friend-name">
												<ins><a title="" href="time-line.html">Suggested</a></ins>
												<span><i class="icofont-runner-alt-1"></i> Follow similar Research People</span>
											</div>
											<ul class="suggested-caro">
												<li>
													<figure><img src="{{asset('user/images/resources/speak-1.jpg')}}" alt=""></figure>
													<span>Amy Watson</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/speak-2.jpg')}}" alt=""></figure>
													<span>Muhammad Khan</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/speak-3.jpg')}}" alt=""></figure>
													<span>Sadia Gill</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
												<li>
													<figure><img src="{{asset('user/images/resources/speak-4.jpg')}}" alt=""></figure>
													<span>Aykash verma</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
											</ul>
										</div>
									</div>
								</div><!-- suggested friends -->
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
	
	<div class="cart-product">
		<a href="product-cart.html" title="View Cart" data-toggle="tooltip"><i class="icofont-cart-alt"></i></a>
		<span>03</span>
	</div><!-- view cart button -->
	
	<div class="chat-live">
		<a class="chat-btn" href="#" title="Start Live Chat" data-toggle="tooltip"><i class="icofont-facebook-messenger"></i></a>
		<span>07</span>
	</div><!-- chat button -->
	
	@include('user.layout.sidemessage')
	
	<div class="createroom-popup">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head text-center">
					<h5 class="only-icon"><i class="icofont-video-cam"></i></h5>
				</div>
				<div class="room-meta">
					<h4>Create Your Room</h4>
					<ul>
						<li>
							<i class="icofont-hand"></i>
							<div>
								<h6>Room Activity</h6>
								<span>Jack's Room</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox3">
								<label for="checkbox3"></label>
							</div>
						</li>
						<li>
							<i class="icofont-clock-time"></i>
							<div>
								<h6>Start Time</h6>
								<span>Now</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox4">
								<label for="checkbox4"></label>
							</div>
						</li>
						<li>
							<i class="icofont-users-alt-4"></i>
							<div>
								<h6>Invite to All Friends</h6>
								<span>Allow All friends to see this room</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox5">
								<label for="checkbox5"></label>
							</div>
						</li>
					</ul>
					<span>Your room isn't visible until you invite people after you've created it.</span>
					<a href="#" title="" class="main-btn full-width">Create Room</a>
				</div>
			</div>
		</div>
	</div><!-- create new room -->
	
	<div class="modal fade" id="img-comt">
		<div class="modal-dialog">
		  <div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">×</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row merged">
					<div class="col-lg-9">
						<div class="pop-image">
							<div class="pop-item">
								<div class="action-block">
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                    </a>
                                </div>
								<figure><img src="{{asset('user/images/resources/blog-detail.jpg')}}" alt=""></figure>
								<div class="stat-tools">
									<div class="box">
									  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
										<div class="Emojis">
										  <div class="Emoji Emoji--like">
											<div class="icon icon--like"></div>
										  </div>
										  <div class="Emoji Emoji--love">
											<div class="icon icon--heart"></div>
										  </div>
										  <div class="Emoji Emoji--haha">
											<div class="icon icon--haha"></div>
										  </div>
										  <div class="Emoji Emoji--wow">
											<div class="icon icon--wow"></div>
										  </div>
										  <div class="Emoji Emoji--sad">
											<div class="icon icon--sad"></div>
										  </div>
										  <div class="Emoji Emoji--angry">
											<div class="icon icon--angry"></div>
										  </div>
										</div>
									  </div>
									</div>
									<div class="box">
										<div class="Emojis">
										  <div class="Emoji Emoji--like">
											<div class="icon icon--like"></div>
										  </div>
										  <div class="Emoji Emoji--love">
											<div class="icon icon--heart"></div>
										  </div>
										  <div class="Emoji Emoji--haha">
											<div class="icon icon--haha"></div>
										  </div>
										  <div class="Emoji Emoji--wow">
											<div class="icon icon--wow"></div>
										  </div>
										  <div class="Emoji Emoji--sad">
											<div class="icon icon--sad"></div>
										  </div>
										  <div class="Emoji Emoji--angry">
											<div class="icon icon--angry"></div>
										  </div>
										</div>
									  </div>
									<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
									<div class="emoji-state">
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
												<ul class="namelist">
													<li>Jhon Doe</li>
													<li>Amara Sin</li>
													<li>Sarah K.</li>
													<li><span>20+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
												<ul class="namelist">
													<li>Amara Sin</li>
													<li>Jhon Doe</li>
													<li><span>10+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
												<ul class="namelist">
													<li>Sarah K.</li>
													<li>Jhon Doe</li>
													<li>Amara Sin</li>
													<li><span>100+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
												<ul class="namelist">
													<li>Danial Carbal</li>
													<li>Amara Sin</li>
													<li>Sarah K.</li>
													<li><span>15+ more</span></li>
												</ul>
											</div>
										</div>
										<p>10+</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="commentbar">
							<div class="user">
								<figure><img src="{{asset('user/images/resources/user1.jpg')}}" alt=""></figure>
								<div class="user-information">
									<h4><a href="#" title="">Danile Walker</a></h4>
									<span>2 hours ago</span>
								</div>
								<a href="#" title="Follow" data-ripple="">Follow</a>
							</div>
							<div class="we-video-info">
								<ul>
									<li>
										<span title="Comments" class="liked">
											<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg></i>
											<ins>52</ins>
										</span>
									</li>
									<li>
										<span title="Comments" class="comment">
											<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
											<ins>52</ins>
										</span>
									</li>

									<li>
										<span>
											<a title="Share" href="#" class="">
												<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
											</a>
											<ins>20</ins>
										</span>	
									</li>
								</ul>
								<div class="users-thumb-list">
									<a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
										<img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="frank">
										<img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
										<img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
										<img src="{{asset('user/images/resources/userlist-2.jpg')}}" alt="">  
									</a>
									<span><strong>You</strong>, <b>Sarah</b> and <a title="" href="#">24+ more</a> liked</span>
								</div>
							</div>
							<div class="new-comment" style="display: block;">
								<form method="post">
									<input type="text" placeholder="write comment">
									<button type="submit"><i class="icofont-paper-plane"></i></button>
								</form>
								<div class="comments-area">
									<ul>
										<li>
											<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Jack Carter</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
												<span>you can view the more detail via link</span>
												<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('user/images/resources/user2.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Ching xang</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('user/images/resources/user3.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Danial Comb</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('user/images/resources/user4.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Jack Carter</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		  </div>
		</div>
    </div><!-- The Scrolling Modal image with comment -->
		
</div>
@include('user.layout.javascript')


	

</body>	

<!-- Mirrored from wpkixx.com/html/socimo/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 16:43:23 GMT -->
</html>