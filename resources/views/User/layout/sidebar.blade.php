@if(!empty(auth()->user()) && auth()->user()->role=='Teacher')
<nav class="sidebar">
    <ul class="menu-slide">
        <li class="active menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Home
            </a>
            <ul class="submenu">
              
                <li><a href="{{ route('message') }}" title="">Chat/Messages</a></li>
                <li><a href="{{ route('notifications') }}" title="">Notificatioins</a></li>
                <li><a href="{{ route('searchresult') }}" title="">Search Result</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i> Features
            </a>
            <ul class="submenu">
                <li><a href="{{ route('videos') }}" title="">Videos</a></li>
                <li><a href="live-stream.html" title="">Live Stream</a></li>
                <li><a href="event-page.html" title="">Events Page</a></li>
                <li><a href="event-detail.html" title="">Event Detail</a></li>
                <li><a href="Q-A.html" title="">QA</a></li>
                <li><a href="Q-detail.html" title="">QA Detail</a></li>
                <li><a href="help-faq.html" title="">Support Help</a></li>
                <li><a href="help-faq-detail.html" title="">Support Detail</a></li>
            </ul>
        </li>
        
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                 <i class="">
                     <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i> Market Place
            </a>
            <ul class="submenu">
                <li><a href="books.html" title="">Books</a></li>
                <li><a href="book-detail.html" title="">Books Detail</a></li>
                <li><a href="courses.html" title="">Course</a></li>
                <li><a href="course-detail.html" title="">course Detail</a></li>
                <li><a href="add-new-course.html" title="">Add New Course</a></li>
                <li><a href="product-cart.html" title="">Cart Page</a></li>
                <li><a href="product-checkout.html" title="">Checkout</a></li>
                <li><a href="add-credits.html" title="">Add Credit</a></li>
                <li><a href="pay-out.html" title="">Payouts</a></li>
                <li><a href="price-plan.html" title="">Pricing Plans</a></li>
                <li><a href="invoice.html" title="">Invoice</a></li>
                <li><a href="thank-you.html" title="">Thank you Page</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                 <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </i> Blogs
            </a>
            <ul class="submenu">
                <li><a href="blog.html" title="">Blog</a></li>
                <li><a href="blog-detail.html" title="">Blog Detail</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></i> Featured Pages
            </a>
            <ul class="submenu">
                <li><a href="404.html" title="">Error 404</a></li>
                <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                <li><a href="send-feedback.html" title="">Send Feedback</a></li>
                <li><a href="badges.html" title="">Badges</a></li>
                <li><a href="thank-you.html" title="">Thank You</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class="">
                <svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i> Authentications
            </a>
            <ul class="submenu">
                <li><a href="{{ route('Userlogin') }}" title="">Sign In</a></li>
                <li><a href="{{ route('Usersignup') }}" title="">Sign Up</a></li>
                <li><a href="forgot-password.html" title="">Forgot Password</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="about-university.html" title="">
                <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i> University Profile
            </a>
        </li>
        <li class="">
            <a class="" href="messages.html" title="">
                <i class="">
                   <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg" id="ab2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;"/></svg></i> Live Chat
            </a>
        </li>
        <li class="">
            <a class="" href="privacy-n-policy.html" title=""><i class="">
                   <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i> Privacy Polices
            </a>
        </li>
        <li class="">
            <a class="" href="{{route('settings')}}" title=""><i class="">

                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></i> Web Settings
            </a>
        </li>
        <li class="menu-item-has-children">
            <a class="#" href="#" title="">
                <i class="">
                <svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i> Development Tools
            </a>
            <ul class="submenu">
                <li><a href="widgets.html" title="">Widgets Collection</a></li>
                <li><a href="development-component.html" title="">Web Component</a></li>
                <li><a href="development-elements.html" title="">Web Elements</a></li>
                <li><a href="loader-spiners.html" title="">Loader Spiners</a></li>
            </ul>
        </li>
        
    </ul>
</nav><!-- nav sidebar -->

<section>
    <div class="white-bg">
        <div class="container-fluid">
            <div class="menu-caro">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="sidemenu">
                            <i>
                              <svg id="side-menu" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="page-caro">
                            <div class="link-item">
                                <a class="active" href="#" title="">
                                    <i class="">
                                        <svg class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                    </i>
                                    <p>Newsfeed</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('videos') }}" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                    </i>
                                    <p>Videos</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('cources') }}" title="">
                                    <i class="">
                                        <svg class="feather feather-airplay" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="12 15 17 21 7 21 12 15"/></svg></i>
                                    <p>Courses</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/books" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></i>
                                    <p>Books</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('blog') }}" title="">
                                    <i class=""><svg class="feather feather-layout" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><rect ry="2" rx="2" height="18" width="18" y="3" x="3"/><line y2="9" x2="21" y1="9" x1="3"/><line y2="9" x2="9" y1="21" x1="9"/></svg></i>
                                    <p>Blog</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('groups') }}" title="">
                                    <i class="">
                                        <svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    </i>
                                    <p>Groups</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="user-inf">
                            <div class="folowerz">Followers: 204</div>
								<ul class="stars">
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
								</ul>
                            </div>	
                        </div>
                    </div>
                </div>	
            </div>
        </div>	
	</div>
</section>
@elseif(!empty(auth()->user()) && auth()->user()->role=='User')
<nav class="sidebar">
    <ul class="menu-slide">
        <li class="active menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Home
            </a>
            <ul class="submenu">
              
                <li><a href="{{ route('message') }}" title="">Chat/Messages</a></li>
                <li><a href="{{ route('notifications') }}" title="">Notificatioins</a></li>
                <li><a href="{{ route('searchresult') }}" title="">Search Result</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i> Features
            </a>
            <ul class="submenu">
                <li><a href="{{ route('videos') }}" title="">Videos</a></li>
                <li><a href="live-stream.html" title="">Live Stream</a></li>
                <li><a href="event-page.html" title="">Events Page</a></li>
                <li><a href="event-detail.html" title="">Event Detail</a></li>
                <li><a href="Q-A.html" title="">QA</a></li>
                <li><a href="Q-detail.html" title="">QA Detail</a></li>
                <li><a href="help-faq.html" title="">Support Help</a></li>
                <li><a href="help-faq-detail.html" title="">Support Detail</a></li>
            </ul>
        </li>
        
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                 <i class="">
            <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i> Market Place
            </a>
            <ul class="submenu">
                <li><a href="books.html" title="">Books</a></li>
                <li><a href="book-detail.html" title="">Books Detail</a></li>
                <li><a href="courses.html" title="">Course</a></li>
                <li><a href="course-detail.html" title="">course Detail</a></li>
                <li><a href="add-new-course.html" title="">Add New Course</a></li>
                <li><a href="product-cart.html" title="">Cart Page</a></li>
                <li><a href="product-checkout.html" title="">Checkout</a></li>
                <li><a href="add-credits.html" title="">Add Credit</a></li>
                <li><a href="pay-out.html" title="">Payouts</a></li>
                <li><a href="price-plan.html" title="">Pricing Plans</a></li>
                <li><a href="invoice.html" title="">Invoice</a></li>
                <li><a href="thank-you.html" title="">Thank you Page</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                 <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </i> Blogs
            </a>
            <ul class="submenu">
                <li><a href="blog.html" title="">Blog</a></li>
                <li><a href="blog-detail.html" title="">Blog Detail</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></i> Featured Pages
            </a>
            <ul class="submenu">
                <li><a href="404.html" title="">Error 404</a></li>
                <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                <li><a href="send-feedback.html" title="">Send Feedback</a></li>
                <li><a href="badges.html" title="">Badges</a></li>
                <li><a href="thank-you.html" title="">Thank You</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class="">
                <svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i> Authentications
            </a>
            <ul class="submenu">
                <li><a href="{{ route('Userlogin') }}" title="">Sign In</a></li>
                <li><a href="{{ route('Usersignup') }}" title="">Sign Up</a></li>
                <li><a href="forgot-password.html" title="">Forgot Password</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="about-university.html" title="">
                <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i> University Profile
            </a>
        </li>
        <li class="">
            <a class="" href="messages.html" title="">
                <i class="">
                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg" id="ab2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;"/></svg></i> Live Chat
            </a>
        </li>
        <li class="">
            <a class="" href="privacy-n-policy.html" title=""><i class="">
                <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i> Privacy Polices
            </a>
        </li>
        <li class="">
            <a class="" href="{{route('settings')}}" title=""><i class="">

            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></i> Web Settings
            </a>
        </li>
        <li class="menu-item-has-children">
            <a class="#" href="#" title="">
                <i class="">
                <svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i> Development Tools
            </a>
            <ul class="submenu">
                <li><a href="widgets.html" title="">Widgets Collection</a></li>
                <li><a href="development-component.html" title="">Web Component</a></li>
                <li><a href="development-elements.html" title="">Web Elements</a></li>
                <li><a href="loader-spiners.html" title="">Loader Spiners</a></li>
            </ul>
        </li>
        
    </ul>
</nav><!-- nav sidebar -->

<section>
    <div class="white-bg">
        <div class="container-fluid">
            <div class="menu-caro">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="sidemenu">
                            <i>
                            <svg id="side-menu" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="page-caro">
                            <div class="link-item">
                                <a class="active" href="#" title="">
                                    <i class="">
                                        <svg class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                    </i>
                                    <p>Newsfeed</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('videos') }}" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                    </i>
                                    <p>Videos</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('cources') }}" title="">
                                    <i class="">
                                        <svg class="feather feather-airplay" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="12 15 17 21 7 21 12 15"/></svg></i>
                                    <p>Courses</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('books') }}" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></i>
                                    <p>Books</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('blog') }}" title="">
                                    <i class=""><svg class="feather feather-layout" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><rect ry="2" rx="2" height="18" width="18" y="3" x="3"/><line y2="9" x2="21" y1="9" x1="3"/><line y2="9" x2="9" y1="21" x1="9"/></svg></i>
                                    <p>Blog</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="{{ route('groups') }}" title="">
                                    <i class="">
                                        <svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    </i>
                                    <p>Groups</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="user-inf">
                            <div class="folowerz">Followers: 204</div>
                            <ul class="stars">
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                        </div>	
                    </div>
                </div>
            </div>	
        </div>
    </div>
	</div>	
</section>
@else 

<section>
    <div class="white-bg">
        <div class="container-fluid">
            <div class="menu-caro">
                <div class="row">
                    <div class="col-lg-2">
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="page-caro">
                            <div class="link-item">
                                <a class="active" href="/User/livestream" title="">
                                    <i class="">
                                        <svg class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                    </i>
                                    <p>Newsfeed</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/User/livestream" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                    </i>
                                    <p>Videos</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/User/livestream" title="">
                                    <i class="">
                                        <svg class="feather feather-airplay" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="12 15 17 21 7 21 12 15"/></svg></i>
                                    <p>Courses</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/User/livestream" title="">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></i>
                                    <p>Books</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/User/livestream" title="">
                                    <i class=""><svg class="feather feather-layout" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><rect ry="2" rx="2" height="18" width="18" y="3" x="3"/><line y2="9" x2="21" y1="9" x1="3"/><line y2="9" x2="9" y1="21" x1="9"/></svg></i>
                                    <p>Blog</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="/User/livestream" title="">
                                    <i class="">
                                        <svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    </i>
                                    <p>Groups</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="user-inf">
                            <div class="folowerz">Rating</div>
								<ul class="stars">
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
									<li><i class="icofont-star"></i></li>
								</ul>
                            </div>	
                        </div>
                    </div>
                </div>	
            </div>
        </div>
	</div>	
</section>
@endif