

@if(!empty(auth()->user()) && auth()->user()->role==3)
                               <!-- side slide message & popup -->
<div class="chat-box">
    <div class="chat-head">
        <h4>New Messages</h4>
        <span class="clozed"><i class="icofont-close-circled"></i></span>
        <form Method="post">
            <input type="text" placeholder="To..">
        </form>
    </div>
    <div class="user-tabs">
        <ul class="nav nav-tabs">
        <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">All Friends</a></li>

        <li class="nav-item"><a class="" href="#link2" data-toggle="tab">Active</a><em>3</em></li>
        <li class="nav-item"><a class="" href="#link3" data-toggle="tab">Groups</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active fade show " id="link1" >
            <div class="friend">
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user1.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Oliver</span>
                    <i class=""><img src="{{asset('user/images//resources/user1.jpg')}}" alt=""></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user2.jpg')}}" alt="">
                        <span class="status away"></span>
                    </figure>
                    <span>Amelia</span>
                    <i class="icofont-check-circled"></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user3.jpg')}}" alt="">
                        <span class="status offline"></span>
                    </figure>
                    <span>George</span>
                    <i class=""><img src="{{asset('user/images//resources/user3.jpg')}}" alt=""></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user4.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Jacob</span>
                    <i class="icofont-check-circled"></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user5.jpg')}}" alt="">
                        <span class="status away"></span>
                    </figure>
                    <span>Poppy</span>
                    <i class="icofont-check-circled"></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user6.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Sophia</span>
                    <i class=""><img src="{{asset('user/images//resources/user6.jpg')}}" alt=""></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user7.jpg')}}" alt="">
                        <span class="status away"></span>
                    </figure>
                    <span>Leo king</span>
                    <i class=""><img src="{{asset('user/images//resources/user7.jpg')}}" alt=""></i>
                </a>
            </div>
        </div>
        <div class="tab-pane fade" id="link2" >
            <div class="friend">
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user1.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Samu Jane</span>
                    <i class=""><img src="{{asset('user/images//resources/user1.jpg')}}" alt=""></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user6.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Tina Mark</span>
                    <i class=""><img src="{{asset('user/images//resources/user6.jpg')}}" alt=""></i>
                </a>
                <a href="#" title="">
                    <figure>
                        <img src="{{asset('user/images//resources/user7.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Ak William</span>
                    <i class=""><img src="{{asset('user/images//resources/user7.jpg')}}" alt=""></i>
                </a>
            </div>
        </div>
        <div class="tab-pane fade" id="link3">
            <div class="friend">
                <a href="#" title="">
                    <figure class="group-chat">
                        <img src="{{asset('user/images//resources/user5.jpg')}}" alt="">
                        <img class="two" src="{{asset('user/images//resources/user3.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>Boys World</span>
                    <i class="icofont-check-circled"></i>
                </a>
                <a href="#" title="">
                    <figure class="group-chat">
                        <img src="{{asset('user/images//resources/user2.jpg')}}" alt="">
                        <img class="two" src="{{asset('user/images//resources/user3.jpg')}}" alt="">
                        <span class="status online"></span>
                    </figure>
                    <span>KK university Fellows</span>
                    <i class="icofont-check-circled"></i>
                </a>
                <a href="#" title="">
                    <figure class="group-chat">
                        <img src="{{asset('user/images//resources/user3.jpg')}}" alt="">
                        <img class="two" src="{{asset('user/images//resources/user2.jpg')}}" alt="">
                        <span class="status away"></span>
                    </figure>
                    <span>Education World</span>
                    <i class="icofont-check-circled"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="chat-card">
        <div class="chat-card-head">
            <img src="{{asset('user/images//resources/user13.jpg')}}" alt="">
            <h6>George Floyd</h6>
            <div class="frnd-opt">
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
                                <i class="icofont-ban"></i>Hide Chat
                                <span>Hide This Post</span>
                            </li>
                            <li>
                                <i class="icofont-ui-delete"></i>Delete Chat
                                <span>If inappropriate Post By Mistake</span>
                            </li>
                            <li>
                                <i class="icofont-flag"></i>Report
                                <span>Inappropriate Chat</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class="close-mesage"><i class="icofont-close"></i></span>
            </div>
        </div>
        <div class="chat-list">
            <ul>
                <li class="me">
                    <div class="chat-thumb"><img src="{{asset('user/images//resources/chatlist1.jpg')}}" alt=""></div>
                    <div class="notification-event">
                        <div class="chat-message-item">
                            <figure><img src="{{asset('user/images//resources/album5.jpg')}}" alt=""></figure>
                            <div class="caption">4.5kb <i class="icofont-download" title="Download"></i></div>
                        </div>
                        <span class="notification-date">
                            <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
                            <i><img src="{{asset('user/images//d-tick.png')}}" alt=""></i>
                        </span>
                    </div>
                </li>
                <li class="me">
                    <div class="chat-thumb"><img src="{{asset('user/images//resources/chatlist1.jpg')}}" alt=""></div>
                    <div class="notification-event">
                        <span class="chat-message-item">
                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                        </span>
                        <span class="notification-date">
                            <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
                            <i><img src="{{asset('user/images//d-tick.png')}}" alt=""></i>
                        </span>
                    </div>
                </li>
                <li class="you">
                    <div class="chat-thumb"><img src="{{asset('user/images//resources/chatlist2.jpg')}}" alt=""></div>
                    <div class="notification-event">
                        <span class="chat-message-item">
                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                        </span>
                        <span class="notification-date">
                            <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
                            <i><img src="{{asset('user/images//d-tick.png')}}" alt=""></i>
                        </span>
                    </div>
                </li>
                <li class="me">
                    <div class="chat-thumb"><img src="{{asset('user/images//resources/chatlist1.jpg')}}" alt=""></div>
                    <div class="notification-event">
                        <span class="chat-message-item">
                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                        </span>
                        <span class="notification-date">
                            <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
                            <i><img src="{{asset('user/images//d-tick.png')}}" alt=""></i>
                        </span>
                    </div>
                </li>
                
            </ul>
            <form class="text-box">
                <textarea placeholder="Write Mesage..."></textarea>
                <div class="add-smiles">
                    <span><img src="{{asset('user/images//smiles/happy-3.png')}}" alt=""></span>
                </div>
                <div class="smiles-bunch">
                    <i><img src="{{asset('user/images//smiles/thumb.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/angry-1.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/angry.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/bored-1.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/confused-1.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/wink.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/weep.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/tongue-out.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/suspicious.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/crying-1.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/crying.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/embarrassed.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/emoticons.png')}}" alt=""></i>
                    <i><img src="{{asset('user/images//smiles/happy-2.png')}}" alt=""></i>
                </div>
                <button type="submit"><i class="icofont-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div><!-- chat box -->


{{-- send message popup  --}}
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
</div>
{{-- send message popup end  --}}

<div class="cart-product">
    <a href="{{ route('product-cart') }}" title="View Cart" data-toggle="tooltip"><i class="icofont-cart-alt"></i></a>
    <span>03</span>
</div><!-- view cart button -->

<div class="chat-live">
    <a class="chat-btn" href="#" title="Start Live Chat" data-toggle="tooltip"><i class="icofont-facebook-messenger"></i></a>
    <span>07</span>
</div><!-- chat button -->
@endif