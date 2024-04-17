@extends('User.layout.masterLayout')

@section('title', 'blog')

@section('Content')
   



	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<div class="main-wraper">
									<div class="main-title">Blog Posts</div>
									<div class="blog-posts">
										<figure><img src="{{asset('user/images/resources/blog-list-1.jpg')}}" alt=""></figure>
										<div class="blog-post-meta">
											<ul>
												<li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
												<li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
											</ul>
											
											<h4>Love is always the happiness of a heart.</h4>
											<p>
												Our online class is an affordable alternative to private therapy and coaching, and teaches day Lorem ipsum dolor sit amet.
											</p>
											<span><i class="icofont-clock-time"></i> january 23, 2021</span>
											<a href="blog-detail.html" title="" class="button primary circle">read more</a>
										</div>
									</div>
									<div class="blog-posts">
										<figure><img src="{{asset('user/images/resources/blog-list-2.jpg')}}" alt=""></figure>
										<div class="blog-post-meta">
											<ul>
												<li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
												<li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
											</ul>
											
											<h4>Love is always the happiness of a heart.</h4>
											<p>
												Our online class is an affordable alternative to private therapy and coaching, and teaches day Lorem ipsum dolor sit amet.
											</p>
											<span><i class="icofont-clock-time"></i> january 23, 2021</span>
											<a href="blog-detail.html" title="" class="button primary circle">read more</a>
										</div>
									</div>
									<div class="blog-posts">
										<figure><img src="{{asset('user/images/resources/blog-list-3.jpg')}}" alt=""></figure>
										<div class="blog-post-meta">
											<ul>
												<li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
												<li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
											</ul>
											
											<h4>Compare Prices Find The Best Computer Accessory</h4>
											<p>
												Our online class is an affordable alternative to private therapy and coaching, and teaches day Lorem ipsum dolor sit amet.
											</p>
											<span><i class="icofont-clock-time"></i> january 23, 2021</span>
											<a href="blog-detail.html" title="" class="button primary circle">read more</a>
										</div>
									</div>
									<div class="blog-posts">
										<figure><img src="{{asset('user/images/resources/blog-list-4.jpg')}}" alt=""></figure>
										<div class="blog-post-meta">
											<ul>
												<li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
												<li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
											</ul>
											
											<h4>Will The Democrats Be Able To Reverse The Online Gambling Ban</h4>
											<p>
												Our online class is an affordable alternative to private therapy and coaching, and teaches day Lorem ipsum dolor sit amet.
											</p>
											<span><i class="icofont-clock-time"></i> january 23, 2021</span>
											<a href="blog-detail.html" title="" class="button primary circle">read more</a>
										</div>
									</div>
									<div class="blog-posts">
										<figure><img src="{{asset('user/images/resources/blog-list-5.jpg')}}" alt=""></figure>
										<div class="blog-post-meta">
											<ul>
												<li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
												<li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
											</ul>
											
											<h4>Love is always the happiness of a heart.</h4>
											<p>
												Our online class is an affordable alternative to private therapy and coaching, and teaches day Lorem ipsum dolor sit amet.
											</p>
											<span><i class="icofont-clock-time"></i> january 23, 2021</span>
											<a href="blog-detail.html" title="" class="button primary circle">read more</a>
										</div>
									</div>
									<div class="load mt-5 mb-4">
										<ul class="pagination">
											<li><a href="#" title=""><i class="icofont-arrow-left"></i></a></li>
											<li><a class="active" href="#" title="">1</a></li>
											<li><a href="#" title="">2</a></li>
											<li><a href="#" title="">3</a></li>
											<li><a href="#" title="">4</a></li>
											<li><a href="#" title="">5</a></li>
											<li>....</li>
											<li><a href="#" title="">10</a></li>
											<li><a href="#" title=""><i class="icofont-arrow-right"></i></a></li>
										</ul>
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
	@endsection
	