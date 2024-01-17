@extends('User.layout.masterLayout')

@section('title', 'Notification')

@section('Content')
    
	
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
@endsection
	