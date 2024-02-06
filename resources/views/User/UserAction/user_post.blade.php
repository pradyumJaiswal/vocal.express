			                 @foreach ($UserDetails as $user)
							    <div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                 <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												@if(empty($user->user->avatar_path))
												<img src="{{asset('storage/avatars/defaultAvatar.jpg')}}" alt="User Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
												@else
												<img alt="" src="{{ asset('storage/'.$user->user->avatar_path) }}" >
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
															<a title="verified" href="time-line.html">{{ $user->user->name }}</a> Podcast</ins>
														<span><i class="icofont-globe"></i>{{ $user->created_at }}</span>
													</div>
													<div class="post-meta">
														<figure>
															{{-- <a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">	
                                                        @foreach ($user->attachments as $postAttachment)
																<img src="{{asset('storage/'.$postAttachment->path)}}" alt="">
													    @endforeach
															</a>	 --}}
															<ul class="chat-rooms">
																
																@foreach ($user->attachments as $postAttachment)
																<a data-toggle="modal" data-target="#img-comt" href="{{asset('storage/'.$postAttachment->path)}}">
																	
																		<img class="premium-post" src="{{asset('storage/'.$postAttachment->path)}}" alt="">
																	
																
																</a>
																
																@endforeach
																
																
															</ul>
														</figure>
														<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
														<p> 
														{{ $user->body }}
														{{ $user->user->name }}
														
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
																	<ins>5k</ins>	
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
															<div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																<div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																</div>
																<div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																</div>
																<div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																</div>
																<div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																</div>
																<div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																</div>
																<div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																</div>
																</div>
															</div>
															</div>
															<div class="box">
																<div class="Emojis">
																<div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																</div>
																<div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																</div>
																<div class="Emoji Emoji--haha">
																	<div class="icon icon--haha"></div>
																</div>
																<div class="Emoji Emoji--wow">
																	<div class="icon icon--wow"></div>
																</div>
																<div class="Emoji Emoji--sad">
																	<div class="icon icon--sad"></div>
																</div>
																<div class="Emoji Emoji--angry">
																	<div class="icon icon--angry"></div>
																</div>
																</div>
															</div>
															<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
																	<div class="popover_content">
																		<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																		<ul class="namelist">
																			<li>Danial Carbal</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>15+ more</span></li>
																		</ul>
																	</div>
																</div>
																<p>10+</p>
															</div>
															<div class="new-comment" style="display: none;">
																<form method="post">
																	<input type="text" placeholder="write comment">
																	<button type="submit"><i class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a></h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who we really are and then live with that decision, great post!
																				</p>
																				<span>you can view the more detail via link</span>
																				<a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i class="icofont-heart"></i></a>
																			<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																		</li>
																		<li>
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
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
										</div>
									</div>
								</div><!-- share video post -->
								@endforeach  
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                     <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user1.jpg')}}">
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
													<a title="verified" href="time-line.html">Jack Carter</a> Share Post</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
												<p>
													Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
												</p>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>10+</p>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- share post without image -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                  <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#82828e" stroke="#82828e" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
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
												<ins><a title="" href="time-line.html">Maria k.</a> Premium Product</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<figure class="premium-post"><img src="{{asset('user/images/resources/book5.jpg')}}" alt=""></figure>
												<div class="premium">
													<a href="book-detail.html" class="post-title">Technicial words 2020 Book world</a>
													<p>
														Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
													</p>
													<a class="main-btn purchase-btn" title="" href="book-detail.html"><i class="icofont-cart-alt"></i> Buy Now</a>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>10+</p>
													</div>
													<div class="new-comment" style="display: block;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- post sell book -->
								<div class="main-wraper">
									<div class="wraper-title">
										<span><i class="icofont-video-alt"></i> Videos Play List</span>
										<a href="videos.html" title="">See all Videos</a>
									</div>
									<div class="videos-caro">
										<div class="item-video" >
											<a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8"></a>
											<div class="posted-user">
												<img src="{{asset('user/images/resources/user4.jpg')}}" alt="">
												<span>Frank J.</span>
											</div>
											<div class="vid-info">
												<span>1 year ago</span>
												<span><i class="icofont-eye-open"></i> 3.1k</span>
											</div>
										</div>
										<div class="item-video" data-merge="2">
											<a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs"></a>
											<div class="posted-user">
												<img src="{{asset('user/images/resources/user2.jpg')}}" alt="">
												<span>Maria K.</span>
											</div>
											<div class="vid-info">
												<span>2 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 1.1k</span>
											</div>
										</div>
										<div class="item-video" data-merge="2">
											<a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a> 
											<div class="posted-user">
												<img src="{{asset('user/images/resources/user1.jpg')}}" alt="">
												<span>Jack Carter</span>
											</div>
											<div class="vid-info">
												<span>4 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 20k</span>
											</div>
										</div>
										<div class="item-video" data-merge="2">
											<a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg"></a>
											<div class="posted-user">
												<img src="{{asset('user/images/resources/user3.jpg')}}" alt="">
												<span>Fawad Jan</span>
											</div>
											<div class="vid-info">
												<span>1 Month ago</span>
												<span><i class="icofont-eye-open"></i> 8k</span>
											</div>
										</div>
										
									</div>
								</div><!-- video playlist carousel -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                  <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user3.jpg')}}">
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
												<ins><a title="" href="time-line.html">Turgut Alp</a> Create Post</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<figure>
													<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">
														<img src="{{asset('user/images/resources/study.jpg')}}" alt="">
													</a>	
												</figure>
												<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
												<p>
													Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
												</p>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>30+</p>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- share image with post -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                     <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#82828e" stroke="#82828e" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user4.jpg')}}">
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
												<ins><a title="" href="time-line.html">Saim turan</a> added image album</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<figure>
													<div class="img-bunch">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<figure>
																	<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album1.jpg')}}">
																		<img src="{{asset('user/images/resources/album1.jpg')}}" alt="">
																	</a>
																</figure>
																<figure>
																	<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album2.jpg')}}"><img src="{{asset('user/images/resources/album2.jpg')}}" alt="">
																	</a>
																</figure>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<figure>
																	<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album6.jpg')}}"><img src="{{asset('user/images/resources/album6.jpg')}}" alt="">
																	</a>
																</figure>
																<figure>
																	<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album5.jpg')}}"><img src="{{asset('user/images/resources/album5.jpg')}}" alt="">
																	</a>
																</figure>
																<figure>
																	<a data-toggle="modal" data-target="#img-comt" href="{{asset('user/images/resources/album4.jpg')}}"><img src="{{asset('user/images/resources/album4.jpg')}}" alt="">
																	</a>
																	<div class="more-photos">
																		<span>+15</span>
																	</div>
																</figure>
															</div>
														</div>
													</div>	
												</figure>
												<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
												<p>
													Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
												</p>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>50+</p>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- share image album -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                    <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user5.jpg')}}">
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
												<ins><a title="" href="time-line.html">Andrew Jhon</a> Shared Link</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
													<em><a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" title="" target="_blank">https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538</a></em>
												<figure>
													<span>fetched-image</span>
													<img src="{{asset('user/images/resources/laptop.png')}}" alt="">
												</figure>
												<a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" class="post-title" target="_blank">Winku Social Network with Company Pages Theme</a>
												<p>
													“Winku” is a social community mobile app kit with features. user can use this app for sharing blog, posts, timeline, create Group, Create Pages, chat/Messages, Movies sharing, QA, and Much More.
												</p>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>10+</p>
													</div>
													<div class="new-comment" style="display: block;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- share link -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                      <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
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
												<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<em><a href="https://www.youtube.com/embed/zdow47FQRfQ" title="" target="_blank">https://www.youtube.com/embed/zdow47FQRfQ</a>
												</em>
												<iframe height="285" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												
												<p>
													Cookie? Biscuit? Bikkie? They all mean the same thing! Our lovely English teachers will quickly show you some pronunciation and vocabulary differences from Australia, America, and England!
												</p>
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>20+</p>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- share video -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
                                                     <svg style="vertical-align: middle;"  xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{asset('user/images/resources/user2.jpg')}}">
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
												<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<img class="gif" src="{{asset('user/images/giphy.png')}}" data-gif="{{asset('user/images/giphy-sample.gif')}}" alt="">
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
															<ins>5k</ins>	
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
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/thumb.png')}}"> Likes</span>
																<ul class="namelist">
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>20+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/heart.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/heart.png')}}"> Love</span>
																<ul class="namelist">
																	<li>Amara Sin</li>
																	<li>Jhon Doe</li>
																	<li><span>10+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/smile.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/smile.png')}}"> Happy</span>
																<ul class="namelist">
																	<li>Sarah K.</li>
																	<li>Jhon Doe</li>
																	<li>Amara Sin</li>
																	<li><span>100+ more</span></li>
																</ul>
															</div>
														</div>
														<div class="popover_wrapper">
															<a class="popover_title" href="#" title=""><img alt="" src="{{asset('user/images/smiles/weep.png')}}"></a>
															<div class="popover_content">
																<span><img alt="" src="{{asset('user/images/smiles/weep.png')}}"> Dislike</span>
																<ul class="namelist">
																	<li>Danial Carbal</li>
																	<li>Amara Sin</li>
																	<li>Sarah K.</li>
																	<li><span>15+ more</span></li>
																</ul>
															</div>
														</div>
														<p>20+</p>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{asset('user/images/resources/user1.jpg')}}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<a title="Like" href="#"><i class="icofont-heart"></i></a>
																	<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																</li>
																<li>
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
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- gif image post -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img alt="" src="{{asset('user/images/resources/sponsor.png')}}">
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
												<ins><a title="" href="time-line.html">Sponsors Ads</a></ins>
												<span><i class="icofont-globe"></i> Sponsor</span>
											</div>
											<div class="post-meta">
												<ul class="sponsored-caro">
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod1.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Aloevera Juice 1 liter</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
															</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod5.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Beauty Cosmetics</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
															</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod4.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Overtime For Men</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
															</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod3.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Redish Baby Items</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
															</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod2.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Potato Baby Fider</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
															</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
													<li>
														<figure><img src="{{asset('user/images/resources/sponsor-prod3.jpg')}}" alt=""></figure>
														<div class="sponsor-prod-name">
															<a href="#" title="">Baby items fider</a>
															<span>$24</span>
														</div>
														<a href="#" title="" class="shop-btn">Shop Now</a>
														<div class="share-info">
																<span>50 shares</span>
																<span>20k Likes</span>
														</div>
														<div class="stat-tools">
															<div class="box">
															  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															  </div>
															</div>
															<div class="box">
																<div class="Emojis">
																  <div class="Emoji Emoji--like">
																	<div class="icon icon--like"></div>
																  </div>
																  <div class="Emoji Emoji--love">
																	<div class="icon icon--heart"></div>
																  </div>
																</div>
															</div>
															<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div><!-- advertisment carousel -->

								

								

								