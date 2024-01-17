
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
    	<div class="gap no-gap bluesh high-opacity">
			<div style="background-image: url(images/resources/top-bg.jpg)" class="bg-image"></div>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-lg-12">
	        			<div class="post-subject">
							<h1>Account Settings</h1>
							<p> Choose your accounts options and privacy. </p>
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
                	<div class="col-lg-3 mb-4">
                		<nav class="responsive-tab">
		                    <ul class="nav nav-tabs uk-list">
								<li class="nav-item"><a class="active" href="#account" data-toggle="tab">Account</a></li>
								<li class="nav-item"><a class="" href="#notification" data-toggle="tab">Notification</a></li>
								<li class="nav-item"><a class="" href="#privacy" data-toggle="tab">Privacy</a></li>
								<li class="nav-item"><a class="" href="#billing" data-toggle="tab">Billing and Payout</a></li>
								<li class="nav-item"><a class="" href="#api" data-toggle="tab">API Clients</a></li>
								<li class="nav-item"><a class="" href="#close" data-toggle="tab">Close Account</a></li>
		                    </ul>
		                </nav>
                	</div>
                    <div class="col-lg-9">
                        <div class="main-wraper">
                            <div class="tab-content" id="components-nav">
                                <!-- settings -->
                                <div class="tab-pane active fade show" id="account">
									<div class="uk-width">
										<div class="setting-card">
											<h2>Account Settings</h2>
											<p class="mb-4">This is your public presence on Socimo. You need a account to upload your paid courses, comment on courses, purchased by users, or earning.
											</p>
											<h6>Basic Profile</h6>
											<p>Add information about yourself</p>
											<form>
												<fieldset class="row merged-10">
													<div class="mb-4 col-lg-6">
														<input class="uk-input" type="text" placeholder="First Name">
													</div>
													<div class="mb-4 col-lg-6">
														<input class="uk-input" type="text" placeholder="Last Name">
													</div>
													<div class="mb-4 col-lg-6">
														<input class="uk-input" type="text" placeholder="Your Designation">
														<em>Add a professional headline like, "Engineer" or "Architect."</em>
													</div>
													<div class="mb-4 col-lg-12">
														<textarea class="uk-textarea" rows="4" placeholder="Textarea"></textarea>
													</div>
													<h6 class="mb-4">Social Profile Links</h6>
													<div class="mb-4">
														<div class="social-links">
															<span>http://facebook.com/</span>
															<input type="text" placeholder="Facebook Profile">
															<em>Add your Facebook username (e.g. johndoe).</em>
														</div>
													</div>
													<div class="mb-4">
														<div class="social-links">
															<span>http://twitter.com/</span>
															<input type="text" placeholder="Facebook Profile">
															<em>Add your Facebook username (e.g. johndoe).</em>
														</div>
													</div>
													<div class="mb-4">
														<div class="social-links">
															<span>http://www.instagram.com/</span>
															<input type="text" placeholder="Facebook Profile">
															<em>Add your Facebook username (e.g. johndoe).</em>
														</div>
													</div>
													<div class="mb-4">
														<div class="social-links">
															<span>http://www.youtube.com/</span>
															<input type="text" placeholder="Facebook Profile">
															<em>Add your Facebook username (e.g. johndoe).</em>
														</div>
													</div>
													<div class="mb-0 col-lg-12">
														<button type="submit" class="button primary circle">Save Changes</button>
													</div>	
												</fieldset>
											</form>
										</div>
									</div>
                                </div>
                                <!-- Notification -->
                                <div class="tab-pane fade" id="notification">
									<div class="uk-width">
										<div class="setting-card">
											<h2>Notification</h2>
											<p class="mb-4">Notifications - Choose when and how to be notified.</p>
											<h6>Choose when and how to be notified</h6>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch1">
												<label class="switch" for="switch1"></label>
												<i class="icofont-substitute"></i> <span>Subscriptions</span>
												<p>Notify me about activity from the profiles I'm subscribed to</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch2">
												<label class="switch" for="switch2"></label>
												<i class="icofont-at"></i> <span>Recommended Researches </span>
												<p>Notify me of courses I might like based on what I watch</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch3">
												<label class="switch" for="switch3"></label>
												<i class="icofont-comment"></i> <span> Active Comments</span> 
												<p>Notify me about activity on my comments on others’ courses</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch4">
												<label class="switch" for="switch4"></label>
												<i class="icofont-reply"></i> <span>Reply to My comments </span>
												<p>Notify me about replies to my comments</p>
											</div>
											<h6>Email Notifications</h6>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch5">
												<label class="switch" for="switch5"></label>
												<i class="icofont-email"></i> <span>Send me Emails about akedimc activity and updates</span> 
												<p>If this setting is turned off, Socimo may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch6">
												<label class="switch" for="switch6"></label>
												<i class="icofont-foot-print"></i> <span>Promotional and helpful Recommendations</span>
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
											<button type="submit" class="button primary circle">Save Changes</button>
										</div>
									</div>
                                </div>
                                <!-- Privacy -->
                                <div class="tab-pane fade" id="privacy">
									<div class="uk-width">
										<div class="setting-card">
											<h2>Privacy</h2>
											<p class="mb-2">Modify your privacy settings here. </p>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch7">
												<label class="switch" for="switch7"></label>
												<i class="icofont-search-stock"></i> <span>Show your profile on search engine.</span> 
												<p>If this setting is turned off, Socimo may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch8">
												<label class="switch" for="switch8"></label>
												<i class="icofont-users-social"></i> <span>Show Your followers on your timeline.</span> 
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch9">
												<label class="switch" for="switch9"></label>
												<i class="icofont-read-book-alt"></i> <span>Show your courses and researches. </span>
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
											<button type="submit" class="button primary circle">Save Changes</button>
										</div>
									</div>
                                </div>
                                <!-- Billing & Payout  -->
                                <div class="tab-pane fade" id="billing">
									<div class="uk-width">
										<div class="setting-card">
											<h2>Billing & Payout</h2>
											<p class="mb-4">Want to charge for a course? Provide your payment info and opt in for our promotional programs </p>
											<div class="set-address">
												<form>
													<fieldset class="row merged-10">
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="First Name">
														</div>
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="Last Name">
														</div>
														<div class="uk-margin col-lg-12 mb-4">
															<select class="uk-select">
																<option>Select Country</option>
																<option>USA</option>
																<option>UK</option>
																<option>UAE</option>
															</select>
														</div>
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="Address Line">
														</div>
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="Address Line2">
														</div>
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="State">
														</div>
														<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
															<input class="uk-input" type="text" placeholder="City">
														</div>
														<div class="mb-4 col-lg-12">
															<textarea class="uk-textarea" rows="4" placeholder="Textarea"></textarea>
														</div>
														<div class="mb-0 col-lg-12">
															<button type="submit" class="button primary circle">Save Changes</button>
														</div>	
													</fieldset>
												</form>
												<div class="payment-methods mt-4">
													<h4>Select Payment Method</h4>
													<div class="light-bg pd-20">
														<ul class="uk-tab uk-light nav nav-tabs">
															<li class="nav-item"><a class="active" href="#visa" data-toggle="tab"><img src="{{asset('user/images/visa-master.png')}}" alt=""></a></li>
															<li class="nav-item"><a class="" href="#paypal" data-toggle="tab"><img src="{{asset('user/images/paypal.png')}}" alt=""></a></li>
															<li class="nav-item"><a class="" href="#bitcoin" data-toggle="tab"><img src="{{asset('user/images/bitcoin.png')}}" alt=""></a></li>
															<li class="nav-item"><a class="" href="#swift" data-toggle="tab"><img src="{{asset('user/images/bank.png')}}" alt=""></a></li>
														</ul>

														<div class="tab-content">
															<!-- tab 1 -->
															<div class="tab-pane active fade show" id="visa">
																<div class="credit-card billing">
																	<h6><i class="icofont-check-circled"></i> Credit Cards</h6>
																	<figure><img src="{{asset('user/images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
																	<form>
																		<div class="row merged20">
																			<div class="col-lg-12 mb-4">
																				<input class="uk-input" type="text" placeholder="Card Number">
																			</div>

																			<div class="col-lg-4 mb-4">
																				<select class="uk-select">
																					<option>Month</option>
																					<option>January</option>
																					<option>February</option>
																					<option>March</option>
																					<option>April</option>
																					<option>May</option>
																					<option>June</option>
																					<option>July</option>
																					<option>August</option>
																					<option>September</option>
																					<option>October</option>
																					<option>November</option>
																					<option>December</option>
																				</select>
																			</div>
																			<div class="col-lg-4">
																				<select class="uk-select">
																					<option>Year</option>
																					<option>2020</option>
																					<option>2021</option>
																					<option>2022</option>
																					<option>2023</option>
																					<option>2024</option>
																					<option>2025</option>
																				</select>
																			</div>
																			<div class="col-lg-4">
																				<a class="number-demo" data-toggle="tooltip" title="Aenean ac suscipit nibh. Sed tristique, mauris id venenatis faucibus, mi risus suscipit tortor, eleifend dignissim dolor enim in eros. Etiam finibus dui lectus" href="#" aria-expanded="false">
																					<i class="icofont-question-circle"></i>
																				</a>
																				<input class="uk-input" type="text" placeholder="Security Code">
																			</div>
																			<div class="mt-4">
																				<button class="button primary circle">Save Card</button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>

															<!-- tab 2 -->
															<div class="tab-pane fade" id="paypal">
																<div class="paypal-card">
																	<p>After payment via PayPal's secure checkout, we will send you a link to download your files.
																	</p>
																	<form>
																		<div class="uk-fieldset">
																			<div class="uk-margin">
																				<label>Insert Your Email</label>
																				<input class="uk-input" type="text" placeholder="Your Email">
																			</div>
																			<div class="mt-4">
																				<button class="button primary circle">Save Card</button>
																			</div>	
																		</div>	
																	</form>
																	<p>Paypal also accept the Payment Methods</p>
																	<figure><img src="{{asset('user/images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
																</div>
															</div>

															<!-- tab 3 -->
															<div class="tab-pane fade" id="bitcoin">
																<div class="paypal-card">
																	<p>After payment via bitcoin secure checkout, we will send you a link to download your files.
																	</p>
																	<form>
																		<div class="uk-fieldset">
																			<div class="uk-margin">
																				<label>Insert Your Email</label>
																				<input class="uk-input" type="text" placeholder="Your Email">
																			</div>
																			<div class="mt-4">
																				<button class="button primary circle">Save Card</button>
																			</div>	
																		</div>	
																	</form>
																	<p>Bitcoin also accept the Payment Methods</p>
																	<figure><img src="{{asset('user/images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
																</div>
															</div>
															
															<div class="tab-pane fade" id="swift">
																<h6>Your Direct Bank Account</h6>
																<span>withdrawl minimum $500.00</span>
																<p class="mt-3">
																	Get paid by credit or debit card, PayPal transfer or even via bank account in just a few clicks. All you need is your email address or mobile number. <a title="" href="#">More about PayPal</a> | <a title="" href="#">Create an account</a>
																</p>
																<form>
																	<fieldset class="row">
																		<div class="mb-4 col-lg-6">
																			<input class="uk-input" type="text" placeholder="First Name">
																		</div>
																		<div class="mb-4 col-lg-6">
																			<input class="uk-input" type="text" placeholder="Last Name">
																		</div>
																		<div class="uk-margin col-lg-12 mb-4">
																			<select class="uk-select">
																				<option>Select Country</option>
																				<option>USA</option>
																				<option>UK</option>
																				<option>UAE</option>
																			</select>
																		</div>
																		<div class="mb-4 col-lg-6">
																			<input class="uk-input" type="text" placeholder="Bank Name">
																		</div>
																		<div class="mb-4 col-lg-6">
																			<input class="uk-input" type="text" placeholder="Bank Address">
																		</div>
																		<div class="mb-4 col-lg-6">
																			<input class="uk-input" type="text" placeholder="Swift Code">
																		</div>
																		<div class="mb-0 col-lg-6">
																			<input class="uk-input" type="text" placeholder="Bank Account No.">
																		</div>
																		<div class="mb-0 col-lg-12">
																			<button type="submit" class="button primary circle">Set Payment Method</button>
																		</div>	
																	</fieldset>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
                                </div>
                                <!-- API Clients  -->
                                <div class="tab-pane fade" id="api">
									<div class="setting-card">
										<h2>API Clients</h2>
										<p class="mb-4"> The Socimo Affiliate API exposes functionalities of Socimo to help developers build client applications and integrations with Socimo. To see more details</p>
										<div class="api">
											<div class="uk-alert-danger">
												<p><i class="icofont-error"></i> You don't have any API clients yet.</p>
												<a href="#" class="button soft-primary">Request affliate Api client</a>
											</div>
										</div>
									</div>
                                </div>
                                <!-- Close Account  -->
                                <div class="tab-pane fade" id="close">
									<div class="del-account">
										<h2>Close Account</h2>
										<p class="mb-4"><b>Warning:</b> If you close your account, you will be unsubscribed from all your followers and friends, and will lose access forever.</p>
										<form method="post">
											<div class="row">
												<div class="mb-4 col-lg-6">
													<input class="uk-input" type="text" placeholder="Enter Your Password">
												</div>
												<div class="mb-0 col-lg-6">
													<a href="#" class="button danger icon-label circle"><i class="icofont-trash"></i> Delete Account</a>
												</div>
											</div>	
										</form>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @include('user.layout.footer')
	
	
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	
	
	
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
    
</div>
@include('user.layout.javascript')

</body>

</html>