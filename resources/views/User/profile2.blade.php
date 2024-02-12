@extends('User.layout.masterLayout')

@section('title', 'User Profile')

@section('Content')
<section>
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-contents" class="row merged20">
                        <div class="col-lg-3">
                            <aside class="sidebar static left">
                                <div class="widget">
                                    <span><i class="icofont-globe"></i> Sponsored</span>
                                    <ul class="sponsors-ad">
                                        <li>
                                            <figure><img alt="" src="images/resources/sponsor.jpg"></figure>
                                            <div class="sponsor-meta">
                                                <h5><a title="" href="#">IQ Options Broker</a></h5>
                                                <a target="_blank" title="" href="#">www.iqvie.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img alt="" src="images/resources/sponsor2.jpg"></figure>
                                            <div class="sponsor-meta">
                                                <h5><a title="" href="#">BM Fashion Designer</a></h5>
                                                <a target="_blank" title="" href="#">www.abcd.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Your Groups</h4>
                                    <ul class="ak-groups">
                                        <li>
                                            <figure><img alt="" src="images/resources/your-group1.jpg"></figure>
                                            <div class="your-grp">
                                                <h5><a title="" href="group-detail.html">Good Group</a></h5>
                                                <a title="" href="#"><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
                                                <a class="promote" title="" href="group-feed.html">view feed</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img alt="" src="images/resources/your-group2.jpg"></figure>
                                            <div class="your-grp">
                                                <h5><a title="" href="group-detail.html">E-course Group</a></h5>
                                                <a title="" href="#"><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
                                                <a class="promote" title="" href="group-feed.html">view feed</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Suggested Group</h4>
                                    <div class="sug-caro">
                                        <div class="friend-box">
                                            <figure>
                                                <img alt="" src="images/resources/sidebar-info.jpg">
                                                <span>Members: 505K</span>
                                            </figure>
                                            <div class="frnd-meta">
                                                <img alt="" src="images/resources/frnd-figure2.jpg">
                                                <div class="frnd-name">
                                                    <a title="" href="#">Social Research</a>
                                                    <span>@biolabest</span>

                                                </div>
                                                <a class="main-btn2" href="#" title="">Join Community</a>
                                            </div>
                                        </div>
                                        <div class="friend-box">
                                            <figure>
                                                <img alt="" src="images/resources/sidebar-info2.jpg">
                                                <span>Members: 505K</span>
                                            </figure>
                                            <div class="frnd-meta">
                                                <img alt="" src="images/resources/frnd-figure3.jpg">
                                                <div class="frnd-name">
                                                    <a title="" href="#">Bio Labest Group</a>
                                                    <span>@biolabest</span>

                                                </div>
                                                <a class="main-btn2" href="#" title="">Join Community</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Ask Research Question?</h4>
                                    <div class="ask-question">
                                        <i class="icofont-question-circle"></i>
                                        <h6>Ask questions in Q&A to get help from experts in your field.</h6>
                                        <a class="ask-qst" href="#" title="">Ask a question</a>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
                                    <div class="rec-events bg-purple">
                                        <i class="icofont-gift"></i>
                                        <h6><a title="" href="#">BZ University good night event in columbia</a></h6>
                                        <img alt="" src="images/clock.png">
                                    </div>
                                    <div class="rec-events bg-blue">
                                        <i class="icofont-microphone"></i>
                                        <h6><a title="" href="#">The 3rd International Conference 2020</a></h6>
                                        <img alt="" src="images/clock.png">
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Group Terms</h4>
                                    <div class="grop-rules">
                                        <p>
                                            Hi! To ensure that this is a great place for everyone to have a wondefull time, we have some rules. Breaking them will result in a ban from the group.
                                        </p>
                                        <ol>
                                            <li><i class="icofont-dotted-right"></i> Be positive! Respect and help other viewers</li>
                                            <li><i class="icofont-dotted-right"></i> No insults, aggravations or any other bad languag</li>
                                            <li><i class="icofont-dotted-right"></i> No self promotions</li>
                                            <li><i class="icofont-dotted-right"></i> Avoid political or religious discussions</li>
                                            <li><i class="icofont-dotted-right"></i> No comment spamming</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Featured Universities <a class="see-all" href="#" title="">See All</a></h4>
                                    <ul class="featured-comp">
                                        <li>
                                        <a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="images/resources/company1.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="images/resources/company2.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="EBM inc" data-toggle="tooltip"><img src="images/resources/company3.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="Boogle inc" data-toggle="tooltip"><img src="images/resources/company4.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="images/resources/company5.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="images/resources/company6.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="EBM inc" data-toggle="tooltip"><img src="images/resources/company7.png" alt=""></a>
                                        </li>
                                        <li>
                                        <a href="#" title="Boogle inc" data-toggle="tooltip"><img src="images/resources/company8.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div><!-- feature universites logos -->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="group-feed">
                                <div class="group-avatar">
                                    @if(empty($user->cover_path))
                                    <img src="{{asset('storage/covers/cover.jpeg')}}" alt="">
                                    @else
		{{-- <div class="bg-image" style="background-image: url(http://127.0.0.1:8000/storage/{{ $user->cover_path }})"></div> --}}
                                    <img src="{{ asset('storage/'.$user->cover_path)}}" alt="">
                                    @endif

                                    {{-- @if ($post->reactions->contains('user_id', auth()->id())) --}}
                                    @if($isCurrentUserFollower)
                                    <a href="{{ route('user.follow', ['user' => $user->id]) }}" title=""><i class="icofont-check-circled"></i>UnFollow</a>
                                    @else
                                    <a href="{{ route('user.follow', ['user' => $user->id]) }}" title=""><i class="icofont-check-circled"></i>Follow</a>
                                    @endif

                                    <figure class="group-dp">
                                        @if(empty($user->avatar_path))
                                        <img src="{{asset('storage/avatars/defaultAvatar.jpg')}}" alt="">
                                        @else
                                        <img src="{{ asset('storage/'.$user->avatar_path)}}" alt="">
                                        @endif
                                    </figure>
                                </div>
                                <div class="grp-info about">
                                    <h4>{{ $user->name }}<span>{{ $user->user_name }}</span></h4>
                                    <ul class="joined-info">
                                        <li><span>Joined:</span>{{ $user->created_at }}</li>
                                        <li><span>Follow:</span> {{ $followingCount }}</li>
                                        <li><span>Followers:</span>{{ $followerCount }}</li>
                                        <li><span>Posts:</span>{{ $currentUserPosts }}</li>
                                    </ul>
                                    <ul class="nav nav-tabs about-btn">
                                        <li class="nav-item"><a class="active" href="#posts" data-toggle="tab">Posts</a></li>
                                        <li class="nav-item"><a class="" href="#pictures" data-toggle="tab">Pictures</a></li>
                                        <li class="nav-item"><a class="" href="#videos" data-toggle="tab">Videos</a></li>
                                        <li class="nav-item"><a class="" href="#friends" data-toggle="tab">Friends</a></li>
                                        <li class="nav-item"><a class="" href="#about" data-toggle="tab">About</a></li>
                                    </ul>
                                    <ul class="more-grp-info">
                                        <li>
                                            <form class="c-form" method="post">
                                                <input type="text" placeholder="Search...">
                                                <i class="icofont-search-1"></i>
                                            </form>
                                        </li>
                                        <li>
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
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
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-wraper">
                                    <div class="grp-about">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6">
                                                <h4>About Me!</h4>
                                                <p>Hi! My name is Georg Peeter but some people may know me as peeter! I have a Twitch channel where I stream, play and review all the newest games.</p>
                                                <ul class="badges">
                                                    <li><img src="images/badges/badge2.png" alt=""></li>
                                                    <li><img src="images/badges/badge3.png" alt=""></li>
                                                    <li><img src="images/badges/badge4.png" alt=""></li>
                                                    <li><img src="images/badges/badge5.png" alt=""></li>
                                                    <li><img src="images/badges/badge7.png" alt=""></li>
                                                    <li><img src="images/badges/badge8.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="share-article">
                                                    <span>Share Profile</span>
                                                    <a href="#" title="" class="facebook"><i class="icofont-facebook"></i></a>
                                                    <a href="#" title="" class="pinterest"><i class="icofont-pinterest"></i></a>
                                                    <a href="#" title="" class="instagram"><i class="icofont-instagram"></i></a>
                                                    <a href="#" title="" class="twitter"><i class="icofont-twitter"></i></a>
                                                    <a href="#" title="" class="google"><i class="icofont-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content">
                                            <div class="tab-pane active fade show " id="posts" >
                                                <div class="row merged20">
                                                    <div class="col-lg-8">
                                                        <div class="main-wraper">
                                                            <span class="new-title">Create New Post</span>
                                                            <div class="new-post">
                                                                <form method="post">
                                                                    <i class="icofont-pen-alt-1"></i>
                                                                    <input type="text" placeholder="Create New Post">
                                                                </form>
                                                                <ul class="upload-media">
                                                                    <li>
                                                                        <a href="#" title="">
                                                                            <i><img src="images/image.png" alt=""></i>
                                                                            <span>Photo/Video</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="">
                                                                            <i><img src="images/activity.png" alt=""></i>
                                                                            <span>Feeling/Activity</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="live-stream.html" title="">
                                                                            <i><img src="images/live-stream.png" alt=""></i>
                                                                            <span>Live Stream</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- create new post -->

                                                        @push('customCss')
    <link rel="stylesheet" href="{{asset('user/customCss/carasolePost.css')}}">
@endpush
@foreach ($postDetails as $post)
							    <div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                 <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												@if(empty($post->user->avatar_path))
												<img src="{{asset('storage/avatars/defaultAvatar.jpg')}}" alt="User Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
												@else
												<img alt="" src="{{ asset('storage/'.$post->user->avatar_path) }}" >
												@endif
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
														<ins>
															<a title="verified" href="{{ url('User/Profile/'.$post->user->id.'/profile') }}">{{ $post->user->name }}</a> Podcast</ins>
														<span><i class="icofont-globe"></i>{{ $post->created_at }}</span>
													</div>
													<div class="post-meta">
														<figure>
															{{-- <a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">
                                                        @foreach ($post->attachments as $postAttachment)
																<img src="{{asset('storage/'.$postAttachment->path)}}" alt="">
													    @endforeach
															</a>	 --}}

															<div class="videos-caro">
																@foreach ($post->attachments as $postAttachment)
																<div class="" >
																	<img src="{{asset('storage/'.$postAttachment->path)}}" alt="">
																</div>
																@endforeach
															</div>
															{{-- <ul class="chat-rooms">
																@foreach ($post->attachments as $postAttachment)
																<a data-toggle="modal" data-target="#img-comt" href="{{asset('storage/'.$postAttachment->path)}}">
																		<img src="{{asset('storage/'.$postAttachment->path)}}" alt="">
																</a>
																@endforeach
															</ul> --}}
														</figure>
														<a href="post-detail.html" class="post-title"> {{ $post->body }}</a>
														<p>
                                                            {{-- {{ $post->body }}
                                                            {{ $post->user->name }} --}}


													    </p>
														<div class="aud-vid">
															{{-- <audio id="plyr-audio-player" class="audio-player" controls>
																<source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mp3" />
																<source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg" type="audio/ogg" />
															</audio> --}}
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
																	<ins>{{$post->reactions_count}}</ins>
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
															<div class="Like">
                                                                <form method="post" action="/User/post/{{ $post->id }}/reaction">
                                                                    @csrf
                                                                        <input name="reaction" value ="like" type="text" hidden/>
                                                                        {{-- <button> --}}
                                                                        <a class="Like__link">
                                                                            @if ($post->reactions->contains('user_id', auth()->id()))
                                                                            <i class="icofont-dislike"></i><input type="submit" value="Unlike" class="Like__link customeLikeinput">
                                                                            @else
                                                                            <i class="icofont-like"></i><input type="submit" value="Like" class="Like__link customeinput">
                                                                            @endif
                                                                        </a>
                                                                    {{-- </button> --}}
                                                                </form>
															{{-- <a class="Like__link">
															  <i class="icofont-like"></i> Like
															</a> --}}
																<div class="Emojis">

																<div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																</div>
																</div>
															</div>
															</div>
															<div class="box">
																<div class="Emojis">

																<div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																</div>

															</div>
															</div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> {{$post->comments_count}} Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">

																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}} "> {{$post->reactions_count}} Likes</span>
																		 <ul class="namelist">
                                                                            @foreach ($post->reactions as $reactedUser)
                                                                            {{-- <img alt="" src="{{ asset('storage/'.$reactedUser->user->avatar_path) }}"> --}}
                                                                            <li>{{ $reactedUser->user->name }}</li>
                                                                            @endforeach
																			{{-- <li>{{$post->reactions_count}}</li> --}}
																			{{-- <li>Jhon Doe</li>
																			<li><span>10+ more</span></li> --}}
																		 </ul>
																	</div>
																</div>

																<p>{{$post->reactions_count}}</p>
															</div>

															<div class="new-comment" style="display: none;">
																<form method="post" action="/User/post/{{ $post->id }}/comment">
                                                                    @csrf
																	<input type="text" name="comment" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>

																<div class="comments-area">
																	<ul>
                                                                        @foreach ($post->comments as $commentedUser)
																		<li>
																			<figure>
                                                                                @if(empty($commentedUser->user->avatar_path))
                                                                                <img src="{{asset('storage/avatars/defaultAvatar.jpg')}}" alt="">
                                                                                @else
                                                                                <img alt="" src="{{ asset('storage/'.$commentedUser->user->avatar_path) }}">
                                                                                @endif
                                                                            </figure>
																			<div class="commenter">
																				<h5><a title="" href="Profile/{{ $commentedUser->user->id }}/profile">{{ $commentedUser->user->name }}</a></h5>
																				<span>{{ $commentedUser->created_at }}</span>
																				<p>
																					{{ $commentedUser->comment }}
																				</p>
																				{{-- <span>you can view the more detail via link</span> --}}
																				{{-- <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a> --}}
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
                                                                        @endforeach

																		{{-- <li>
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
																		</li> --}}
																	</ul>
																</div>
															</div>
														</div>
													</div>
										</div>
									</div>
								</div><!-- share video post -->
@endforeach

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <aside class="sidebar static left">
                                                            <div class="advertisment-box">
                                                                <h4 class=""><i class="icofont-info-circle"></i> advertisment</h4>
                                                                <figure>
                                                                    <a href="#" title="Advertisment"><img src="images/resources/ad-widget2.gif" alt=""></a>
                                                                </figure>
                                                            </div>
                                                            <div class="widget">
                                                                <h4 class="widget-title">Follow People <a title="" href="#" class="see-all">See All</a></h4>
                                                                <ul class="invitepage">
                                                                    <li>
                                                                        <figure>
                                                                            <img alt="" src="images/resources/friend-avatar.jpg">
                                                                            <a href="#">Jack carter</a>
                                                                        </figure>
                                                                        <button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <figure>
                                                                            <img alt="" src="images/resources/friend-avatar2.jpg">
                                                                            <a href="#">Emma watson</a>
                                                                        </figure>
                                                                        <button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <figure>
                                                                            <img alt="" src="images/resources/friend-avatar3.jpg">
                                                                            <a href="#">Andrew</a>
                                                                        </figure>
                                                                        <button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <figure>
                                                                            <img alt="" src="images/resources/friend-avatar4.jpg">
                                                                            <a href="#">Moona Singh</a>
                                                                        </figure>
                                                                        <button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <figure>
                                                                            <img alt="" src="images/resources/friend-avatar5.jpg">
                                                                            <a href="#">Harry pooter</a>
                                                                        </figure>
                                                                        <button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="widget">
                                                                <h4 class="widget-title">Recent Media</h4>
                                                                <div class="recent-media">
                                                                    <figure>
                                                                        <img src="images/resources/user-video7.jpg" alt="">
                                                                        <a class="play-btn" data-fancybox="" href="https://www.youtube.com/embed/vP-l9L3Ku5Y"><i class="icofont-play"></i></a>
                                                                        <span>Pool Party 2020</span>
                                                                    </figure>
                                                                    <figure>
                                                                        <img src="images/resources/user-video10.jpg" alt="">
                                                                        <a class="play-btn" data-fancybox="" href="https://www.youtube.com/embed/vP-l9L3Ku5Y"><i class="icofont-play"></i></a>
                                                                        <span>Spring Break Pool</span>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="widget stick-widget">
                                                                <h4 class="widget-title">You May Like Groups</h4>
                                                                <ul class="suggestd">
                                                                    <li>
                                                                        <a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-1.jpg" alt=""></a>
                                                                        <a class="sug-title" href="#" title="">Physics Shop</a>
                                                                        <button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-2.jpg" alt=""></a>
                                                                        <a class="sug-title" href="#" title="">Sun Rise</a>
                                                                        <button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-3.jpg" alt=""></a>
                                                                        <a class="sug-title" href="#" title="">Big Botny</a>
                                                                        <button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-4.jpg" alt=""></a>
                                                                        <a class="sug-title" href="#" title="">King Work</a>
                                                                        <button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                    <li>
                                                                        <a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-5.jpg" alt=""></a>
                                                                        <a class="sug-title" href="#" title="">18teen Guys</a>
                                                                        <button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- Suggested groups -->
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pictures" >
                                                <h5 class="tab-title">Pictures <span>87</span></h5>
                                                <ul class="pix-filter">
                                                    <li><a class="active" href="#" title="">All Photos</a></li>
                                                    <li><a href="#" title="">Profile Pictures</a></li>
                                                    <li><a href="#" title="">Albums</a></li>
                                                    <li><a href="#" title="">from Mobile</a></li>
                                                </ul>
                                                <div class="row merged-10">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic1.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic2.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic3.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic4.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic5.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic6.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic7.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic8.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic9.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic10.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic11.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic12.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic13.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic14.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic15.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic5.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic12.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic4.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic6.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="uzr-pictures">
                                                            <a href="#" data-target="#img-comt" data-toggle="modal">
                                                                <img alt="" src="images/resources/user-pic7.jpg">
                                                            </a>
                                                            <ul class="hover-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <div class="sp sp-bars"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="videos">
                                                <h5 class="tab-title">Videos <span>55</span></h5>
                                                <ul class="pix-filter">
                                                    <li><a title="" href="#" class="active">All Videos</a></li>
                                                    <li><a title="" href="#">Most views</a></li>
                                                    <li><a title="" href="#">Newest</a></li>
                                                    <li><a title="" href="#">Mobile videos</a></li>
                                                </ul>
                                                <div class="row merged-10">
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video1.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Miami Beach Party</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video2.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Spring Break Party</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video3.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Pool Party 2020</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video4.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>baby girls Entry at beach</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video5.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Spring Party 2021</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video6.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Biggest Part of the Pool Party</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video7.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Party games in the water</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video8.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Water party with GF</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video9.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Super hot party in summer</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video10.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Summer Party in Bikini</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>
                                                                <img alt="" src="images/resources/user-video11.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Miami Bikini English</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <div class="user-video">
                                                            <figure>

                                                                <img alt="" src="images/resources/user-video12.jpg">
                                                                <a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
                                                            </figure>
                                                            <span>Super Summer 2021</span>
                                                            <ul class="vid-action">
                                                                <li><a href="#" title=""><i class="icofont-like"></i> 3</a></li>
                                                                <li><a href="#" title=""><i class="icofont-chat"></i> 5</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="sp sp-bars"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="friends">
                                                <h5 class="tab-title">Friends <span>102</span></h5>
                                                <ul class="pix-filter">
                                                    <li><a title="" href="#" class="active">All Friends</a></li>
                                                    <li><a title="" href="#">Family Friends</a></li>
                                                    <li><a title="" href="#">Close Friends</a></li>
                                                    <li><a title="" href="#">Mutual Friends</a></li>
                                                </ul>
                                                <div class="row merged-10 col-xs-6">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-10.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Amy Watson</a></span>
                                                            <ins>Bz University, Pakistan</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i>Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-11.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Muhammad Khan</a></span>
                                                            <ins>Oxford University, UK</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-12.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Sadia Gill</a></span>
                                                            <ins>WB University, USA</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-4.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Rjapal</a></span>
                                                            <ins>Km University, India</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-1.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Amy watson</a></span>
                                                            <ins>Oxford University, UK</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-2.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Bob Frank</a></span>
                                                            <ins>WB University, Canada</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-5.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Amy Watson</a></span>
                                                            <ins>Bz University, Pakistan</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-7.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Muhammad Khan</a></span>
                                                            <ins>Oxford University, UK</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-10.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Sadia Gill</a></span>
                                                            <ins>WB University, USA</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-2.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Bob Frank</a></span>
                                                            <ins>WB University, Canada</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="friendz">
                                                            <figure><img src="images/resources/speak-11.jpg" alt=""></figure>
                                                            <span><a href="#" title="">Muhammad Khan</a></span>
                                                            <ins>Oxford University, UK</ins>
                                                            <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Unfollow</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="sp sp-bars"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="about">
                                                <div class="row merged20">
                                                    <div class="col-lg-8">
                                                        <div class="main-wraper">
                                                            <h5 class="main-title">Personal</h5>
                                                            <div class="info-block-list">
                                                                <ul>
                                                                    <li>Date of Birth: <span>Dec, 17 1980</span></li>
                                                                    <li>Location: <span>Los Angeles, California</span></li>
                                                                    <li>Web: <span>www.sample.com</span></li>
                                                                    <li>Email: <span><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="582b393528343d696a6b1821372d2a35393134763b3735">[email&#160;protected]</a></span></li>
                                                                    <li>Location: <span>Los Angeles, California</span></li>
                                                                    <li>Occupation: <span>Doctor</span></li>
                                                                    <li>Location: <span>Los Angeles, California</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="main-wraper">
                                                            <h5 class="main-title">Interests</h5>
                                                            <div class="info-block-list">
                                                              <div class="info-block">
                                                                <h6>Favourite TV Shows</h6>
                                                                <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy, The Last Windbender, Game of Wars.</p>
                                                              </div>
                                                              <div class="info-block">
                                                                <h6>Favourite Music Bands / Artists</h6>
                                                                <p>Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</p>
                                                              </div>
                                                              <div class="info-block">
                                                                <h6>Favourite Movies</h6>
                                                                <p>The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</p>
                                                              </div>
                                                              <div class="info-block">
                                                                <h6>Favourite Books</h6>
                                                                <p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
                                                              </div>
                                                              <div class="info-block">
                                                                <h6>Favourite Games</h6>
                                                                <p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.</p>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <aside class="sidebar">
                                                            <div class="widget">
                                                                <h4 class="widget-title">Complete Your Profile</h4>
                                                                <span>Complete your profile by filling profile info fields, completing quests & unlocking badges</span>
                                                                <div data-progress="tip" class="progress__outer" data-value="0.67">
                                                                    <div class="progress__inner">82%</div>
                                                                </div>
                                                                <ul class="prof-complete">
                                                                    <li><i class="icofont-plus-square"></i> <a href="#" title="">Upload Your Picture</a><em>10%</em></li>
                                                                    <li><i class="icofont-plus-square"></i> <a href="#" title="">Your University?</a><em>20%</em></li>
                                                                    <li><i class="icofont-plus-square"></i> <a href="#" title="">Invite to 10+ members</a><em>20%</em></li>
                                                                </ul>
                                                            </div><!-- complete profile widget -->
                                                            <div class="widget">
                                                                <h4 class="widget-title">User stats</h4>
                                                                <ul class="user-stat">
                                                                    <li><i class="icofont-lollipop"></i><span>Last Post <em>2 hours ago</em></span></li>
                                                                    <li><i class="icofont-spotify"></i><span>Last comment <em>6 hours ago</em></span></li>
                                                                    <li><i class="icofont-like"></i><span>Most Liked Post<em>540 Likes</em></span></li>
                                                                    <li><i class="icofont-user-alt-4"></i><span>Last Friend Added <em>2 days ago</em></span></li>
                                                                </ul>
                                                            </div><!-- complete profile widget -->
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection













