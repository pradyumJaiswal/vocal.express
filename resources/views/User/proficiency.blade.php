@extends('User.layout.masterLayout')

@section('title', 'Proficiency Test')

@section('Content')


<section>
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mainHeading1">Hello ,{{ ucfirst(Auth()->user()->name) }}, Complete Your Test</h1>
                    <h4 class="mainHeading1"><small> your Proficiency Level , And then improve your communication.</small></h4>
                    {{-- <h4>{{ $user->name }}<span>{{ $user->user_name }}</span></h4> --}}
                    <div id="page-contents" class="row merged20">

                        <div class="col-lg-12">
                            {{-- <div class="search-question">
                                 <form method="post">
                                    <input type="text" placeholder="Search Questoin?">
                                    <button type="submit"><i class="icofont-search-1"></i></button>
                                </form>
                            </div> --}}
@php
    $count =1;
@endphp
                            @foreach ($TestQuestions as $test)
                            <div class="main-wraper">

                            <h1 class="mainHeading1"><a href="#" title="">{{ $test->TestType }} Test</a></h1>

                           <h2 class="question-title"><a href="#" title="">Instruction - </a> <small>{{ $test->Description }} </small></h2>
                        </div>

                            @foreach ($test->questions  as $question)
                            <div class="main-wraper">

                                <div class="friend-info">
                                    <h2 class="question-title"><a href="#" title="">{{  $count }} :  {{ $question->QuestionText }}</a></h2>
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
                                <div class="row">
                                    <div class="col-lg-8">
                                        <textarea class="col-lg-12" placeholder="Write Answer"></textarea>
                                    </div>

                                    <div>
                                        <a href="#" title=""><i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg></i>Record Your Answer</a>
                                    </div>
                                </div>
                                    <div class="question-meta">
                                        {{-- <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
                                        </p> --}}
                                        <ul class="tags">
                                            <li><a data-ripple="" title="" href="#">Thesis</a></li>
                                            <li><a data-ripple="" title="" href="#">exprement</a></li>
                                            <li><a data-ripple="" title="" href="#">research</a></li>
                                        </ul>
                                        <a href="#" title="" class="main-btn">view Answers</a>
                                    </div>
                                </div>
                            </div>

                            @php
                                $count++;
                            @endphp
                            @endforeach
                            @endforeach



                            <div class="main-wraper">
                                <div class="friend-info">
                                    <h2 class="question-title"><a href="#" title="">Is there a simple guide for Sass Mixins?</a></h2>
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
                                    <figure>
                                        <img src="images/resources/user3.jpg" alt="">
                                    </figure>
                                    <div class="friend-name">

                                        <ins><a href="time-line.html" title="">Fawad Khan</a> added a chapter</ins>
                                        <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                    </div>
                                    <div class="question-meta">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
                                        </p>
                                        <ul class="tags">
                                            <li><a data-ripple="" title="" href="#">Thesis</a></li>
                                            <li><a data-ripple="" title="" href="#">exprement</a></li>
                                            <li><a data-ripple="" title="" href="#">research</a></li>
                                        </ul>
                                        <a href="#" title="" class="main-btn">view Answers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wraper">
                                <div class="friend-info">
                                    <h2 class="question-title"><a href="#" title="">Is React compatible with jQuery?</a></h2>
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
                                    <figure>
                                        <img src="images/resources/user4.jpg" alt="">
                                    </figure>
                                    <div class="friend-name">

                                        <ins><a href="time-line.html" title="">Danial Cardos</a> added a chapter</ins>
                                        <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                    </div>
                                    <div class="question-meta">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
                                        </p>
                                        <ul class="tags">
                                            <li><a data-ripple="" title="" href="#">Thesis</a></li>
                                            <li><a data-ripple="" title="" href="#">exprement</a></li>
                                            <li><a data-ripple="" title="" href="#">research</a></li>
                                        </ul>
                                        <a href="#" title="" class="main-btn">view Answers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="load">
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
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
