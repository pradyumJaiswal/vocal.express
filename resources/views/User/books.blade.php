@extends('User.layout.masterLayout')

@section('title', 'Books')

@section('Content')
    
	
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<div class="main-wraper">
									<h4 class="main-title">Books</h4>
									<ul class="category">
										<li><a href="#" title="">Suggestions</a></li>
										<li><a href="#" title="">Newest</a></li>
										<li><a href="#" title="">My Books</a></li>
									</ul>
									<div class="row col-xs-6">
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book1.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Html5 Brick Breaker</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book2.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">The Golden Shower</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book3.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Python Tricks</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book4.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Holy bible</a>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book6.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">VU.js experts</a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book7.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Gulp Basics</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book5.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Technology Wants</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book8.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">PHP for Bigners</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book9.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">Css3 for Bigners</a>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="book-post">
												<figure><a href="book-detail.html" title=""><img src="{{asset('user/images/resources/book10.jpg')}}" alt=""></a></figure>
												<a href="book-detail.html" title="">VU.js2 Bingers</a>
											</div>
										</div>
									</div>
								</div>
								<div class="load mb-5 mt-1">
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
								<div class="main-wraper">
									<h4 class="main-title">Categories <a class="view-all" href="#" title="">view all</a></h4>
									
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
