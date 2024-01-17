
@extends('User.layout.masterlayout')
{{-- @section('header') --}}
@section('title','VOCAL EXPRESS')




@section('content')
	<div class="home">
		<div class="home_background" style="background-image: url({{asset('user/lingua/images//index_background.jpg')}});"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					
					<div class="col text-center">
						@if (Session::has('success'))
					<div class="alert alert-success">{{ session::get('success') }}</div>
				@endif
				
						<h1 class="home_title">Learn Languages Easily</h1>
                        <h1 class="home_title">{{ ucfirst(Auth()->user()->name) }}</h1>

						


	<div class="home_button trans_200"> <a class="btn btn-primary" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Start Learn</a></div>




			
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div class="modal fade login" id="loginModal">
	<div class="modal-dialog login animated">
		<div class="modal-content">
		   <div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			  <h4 class="modal-title">Login with</h4>
		  </div>
		  <div class="modal-body">
			  <div class="box">
				   <div class="content">
					  <div class="social">
						  <a class="circle github" href="#">
							  <i class="fa fa-github fa-fw"></i>
						  </a>
						  <a id="google_login" class="circle google" href="#">
							  <i class="fa fa-google-plus fa-fw"></i>
						  </a>
						  <a id="facebook_login" class="circle facebook" href="#">
							  <i class="fa fa-facebook fa-fw"></i>
						  </a>
					  </div>
					  <div class="division">
						  <div class="line l"></div>
							<span>or</span>
						  <div class="line r"></div>
					  </div>
					  <div class="error"></div>
					  <div class="form loginBox">
						  <form method="post" action="{{ route('login') }}" accept-charset="UTF-8">
							@csrf
						  <input id="email" class="form-control" type="text" placeholder="Email" name="email">
						  <input id="password" class="form-control" type="password" placeholder="Password" name="password">
						  <input class="btn btn-default btn-login" type="submit" >
						  </form>
					  </div>
				   </div>
			  </div>
			
			  <div class="box">

				  <div class="content registerBox" style="display:none;">
				   <div class="form">
					  <form action="{{ route('register') }}" method="post" role="form">
						@csrf
						<input id="role" class="form-control" type="text" name="role" value="3" hidden>

						<input id="name" class="form-control" type="text" placeholder="Full Name" name="name">

					  <input id="email" class="form-control" type="text" placeholder="Email" name="email" >
					  <input id="u_name" class="form-control" type="text" placeholder="User Name" name="u_name" >

					  <input id="password" class="form-control" type="password" placeholder="Password" name="password">
					  <button class="btn btn-default btn-register" type="submit"></button>
					  </form>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  <div class="modal-footer">
			  <div class="forgot login-footer">
				  <span>Looking to
					   <a href="javascript: showRegisterForm();">create an account</a>
				  ?</span>
			  </div>
			  <div class="forgot register-footer" style="display:none">
				   <span>Already have an account?</span>
				   <a href="javascript: showLoginForm();">Login</a>
			  </div>
		  </div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  openLoginModal();
  
});
</script>
	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_slider_container">
						
						<!-- Language Slider -->

						<div class="owl-carousel owl-theme language_slider">

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Ukrainian.svg')}}" alt=""></div>
									<div class="lang_name">Ukrainian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Japanese.svg')}}" alt=""></div>
									<div class="lang_name">Japanese</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Lithuanian.svg')}}" alt=""></div>
									<div class="lang_name">Lithuanian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Swedish.svg')}}" alt=""></div>
									<div class="lang_name">Swedish</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//English.svg')}}" alt=""></div>
									<div class="lang_name">English</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Italian.svg')}}" alt=""></div>
									<div class="lang_name">Italian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//Chinese.svg')}}" alt=""></div>
									<div class="lang_name">Chinese</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//French.svg')}}" alt=""></div>
									<div class="lang_name">French</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{asset('user/lingua/images//German.svg')}}" alt=""></div>
									<div class="lang_name">German</div>
								</a>
							</div>

						</div>

						<div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Popular Online Courses</h2>
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="{{asset('user/lingua/images//course_1.jpg')}}" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Vocabulary</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<div class="course_mark course_free trans_200"><a href="#">Free</a></div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="{{asset('user/lingua/images//course_2.jpg')}}" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Vocabulary</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">Spanish</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<div class="course_mark course_free trans_200"><a href="#">Free</a></div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="{{asset('user/lingua/images//course_3.jpg')}}" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="course.html">Vocabulary</a></div>
							<div class="course_info">
								<ul>
									<li><a href="instructors.html">Sarah Parker</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
							<div class="course_mark trans_200"><a href="#">$45</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Instructors -->

	<div class="instructors">
		<div class="instructors_background" style="background-image:url({{asset('user/lingua/images//instructors_background.png')}})"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">The Best Tutors in Town</h2>
				</div>
			</div>
			<div class="row instructors_row">

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{asset('user/lingua/images//instructor_1.jpg')}}" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{asset('user/lingua/images//instructor_2.jpg')}}" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{asset('user/lingua/images//instructor_3.jpg')}}" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Register -->

	<div class="register">
		<div class="container">
			<div class="row">
				
				<!-- Register Form -->

				<div class="col-lg-6">
					<div class="register_form_container">
						<div class="register_form_title">Courses For Free</div>
						<form action="{{ route('register') }}" method="post" id="register_form" class="register_form">
							@csrf
							<div class="row register_row">
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" placeholder="role" name="role" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" placeholder="Name" name="name" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="email" class="form_input" placeholder="Email" name="email" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" placeholder="UserName" name="u_name"> 
								</div>
								<div class="col-lg-6 register_col">
									<input type="password" class="form_input" name="password" placeholder="password">
								</div>
								<div class="col">
									<button type="submit" class="form_button trans_200">get it now</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Register Timer -->

				<div class="col-lg-6">
					<div class="register_timer_container">
						<div class="register_timer_title">Register Now</div>
						<div class="register_timer_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="timer_container">
							<ul class="timer_list">
								<li><div id="day" class="timer_num">00</div><div class="timer_ss">days</div></li>
								<li><div id="hour" class="timer_num">00</div><div class="timer_ss">hours</div></li>
								<li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
								<li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Upcoming Events</h2>
				</div>
			</div>
			<div class="row events_row">
				
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="{{asset('user/lingua/images//event_1.jpg')}}" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">26</div>
							<div class="event_month">aug</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Networking Day</a></div>
							<div class="event_tag ml-auto">Free</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="{{asset('user/lingua/images//event_2.jpg')}}" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">26</div>
							<div class="event_month">aug</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Networking Day</a></div>
							<div class="event_tag ml-auto">Free</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="{{asset('user/lingua/images//event_3.jpg')}}" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">26</div>
							<div class="event_month">aug</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">Networking Day</a></div>
							<div class="event_tag ml-auto">Free</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Blog Left -->
				<div class="col-lg-6">
					<div class="blog_left">
						<div class="blog_title">From Our Blog</div>
						<div class="blog_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="blog_categories">
							<div class="row categories_row">

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_1.jpg')}}" alt=""></div>
											<div class="blog_category_title">travel</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_2.jpg')}}" alt=""></div>
											<div class="blog_category_title">languages</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_3.jpg')}}" alt=""></div>
											<div class="blog_category_title">cultures</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_4.jpg')}}" alt=""></div>
											<div class="blog_category_title">fashion</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_5.jpg')}}" alt=""></div>
											<div class="blog_category_title">cooking</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.html">
										<div class="blog_category">
											<div class="blog_category_image"><img src="{{asset('user/lingua/images//blog_6.jpg')}}" alt=""></div>
											<div class="blog_category_title">hobbies</div>
										</div>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Blog Right -->

				<div class="col-lg-6">
					<div class="blog_right">
						<div class="blog_image" style="background-image:url({{asset('user/lingua/images//blog_7.jpg')}})"></div>
						<div class="blog_title_container">
							<div class="blog_right_category"><a href="#">travel</a></div>
							<div class="blog_right_title"><a href="blog_single.html">Design Better Forms</a></div>
							<div class="blog_right_text">
								<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
							</div>
							<div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('user/lingua/images//right.png')}}" alt=""></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
	<!-- Footer -->


