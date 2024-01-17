
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
									<h4 class="main-title">Courses</h4>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-5.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/user1.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Sarah K</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $29</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Wordpress Advanced</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 20 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-2.png')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/user2.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Tania Saed</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $29</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">HTML5 Advanced Lectures</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-3.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>tranding</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/user3.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Fahad Jhon</span>
															<a href="#" title="">Javascript</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $19</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Basic Java Tutorial</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 32 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 26Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-4.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/userlist-1.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Andrew</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $39</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Css3 full video Lectures</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-6.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/user4.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Bob-Frank</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $49</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">VuJs first learning</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('user/images/resources/course-1.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>tranding</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('user/images/resources/user5.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Ahmad</span>
															<a href="#" title="">Javascript</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $19</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Basic Java Tutorial</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 32 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 26Hrs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- courses posts -->
								<div class="load mt-0 mb-5">
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
								</div><!-- pagination -->
								<div class="main-wraper">
									<h4 class="main-title">Categories <a title="" href="#" class="view-all">view all</a></h4>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('user/images/brand1.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>6 courses<span> 5 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('user/images/brand5.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>5 courses<span> 3 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('user/images/brand3.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>2 courses<span> 3 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('user/images/brand4.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>4 courses<span> 9 bundles</span></p>
												</div>
											</div>
										</div>
									</div>
								</div><!-- categories -->
								<div class="main-wraper">
									<h4 class="main-title">Recommended Books <a class="view-all" href="#" title="">view all</a></h4>
									
									<div class="books-caro">
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book1.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Html5 Brick Breaker</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book3.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Python Tricks</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book5.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Technology Wants</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book2.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">The Aesthetic Ideology</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book4.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Holy Bible Old</a>
										</div>
									</div>
								</div><!-- books carousel -->
							</div>
							@include('user.layout.rightbar')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('user.layout.footer')
<!-- bottombar -->
	
	
@include('user.layout.askquestion')


	

	
	@include('user.layout.sidemessage')
</div>
	
</body>	

</html>

@include('user.layout.javascript')