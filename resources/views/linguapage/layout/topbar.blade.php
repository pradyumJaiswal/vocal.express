<header class="header">
			
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="top_bar_phone"><span class="top_bar_title">phone:</span>+91 7867656567</div>
                            <div class="top_bar_right ml-auto">

                                <!-- Language -->
                                <div class="top_bar_lang">
                                    <span class="top_bar_title">site language:</span>
                                    <ul class="lang_list">
                                        <li class="hassubs">
                                            <a href="#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <!-- <li><a href="#">Japanese</a></li>
                                                <li><a href="#">Lithuanian</a></li>
                                                <li><a href="#">Swedish</a></li>
                                                <li><a href="#">Italian</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Social -->
                                <div class="top_bar_social">
                                    <span class="top_bar_title social_title">follow us</span>
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
        </div>				
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="#">
                                <div class="logo_text">vocal.Express</div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="active"><a href="/User/vocal.express">Home</a></li>
                                <li><a href="/User/Course">Courses</a></li>
                                <li><a href="/User/Teacher">Instructors</a></li>
                                <li><a href="/User/Moment">Moments</a></li>
                                <li><a href="/User/Connect">Connect</a></li>
                                <li><a href="/User/Library">Library</a></li>
                            </ul>
                        </nav>
                        <div class="header_content_right ml-auto text-right">
                            <div class="header_search">
                                <div class="search_form_container">
                                    <form action="#" id="search_form" class="search_form trans_400">
                                        <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                        <div class="search_button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Hamburger -->
{{-- 
                            <div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </div> --}}
                      
                            
                           
                        
                    
                    <ul class="lang_list">
                        <li class="hassubs">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <ul>
                                @if(!empty(auth()->user()) && auth()->user()->role==2)
                                <li><a href="/Userlogout"></a></li>
                                @elseif(!empty(auth()->user()) && auth()->user()->role==3)
                                <li><a href="/Userlogout">Log Out</a></li>
                                @else 
                                <li><a href="#">Log in</a></li>
                                @endif
                                <li><a href="/User/Profile">Profile</a></li>
                                <li><a href="/Userlogout">Setting</a></li>     
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>



</header>

<!-- Menu -->


