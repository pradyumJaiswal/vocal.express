@extends('User.layout.masterLayout')

@section('title', 'Proficiency Test')

@section('Content')

<section>
    <div class="gap overlap nogap mate-black low-opacity">
        <div class="bg-image" style="background-image: url(http://127.0.0.1:8000/storage/covers/index_background.jpg)"></div>
        <div class="feature-meta">
            <h1>Hello <span>{{ ucfirst(Auth()->user()->name) }}</span> Complete Your Test</h1>
            <h3>your Proficiency Level , And then improve your communication.<span></span></h3>
        </div>
    </div>
</section>

<section>
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-contents" class="row merged20">
                        <div class="col-lg-12">
                        @php
                            $count =1;
                        @endphp
                            @foreach ($TestQuestions as $test)
                            <div class="main-wraper">

                            <h1 class="mainHeading1 test-heading-title"><a href="#" title="">{{ $test->TestType }} Test</a></h1>

                           <h2 class="question-title"><a href="#" title="">Instruction - </a> <small>{{ $test->Description }} </small></h2>
                        </div>

                            @foreach ($test->questions  as $question)
                            <div class="main-wraper">
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
                                <div class="friend-info">
                                    <h2 class="question-title"><a href="#" title="">

                                        Q {{  $count }} :

                                    {{-- @if($test->TestType == 'Word Power')
                                         {{ $question->QuestionText }}
                                    @endif

                                    @if($test->TestType == 'reading')
                                         {{ $question->QuestionText }}
                                    @endif --}}
                                    {{ $question->QuestionText }}


                                    </a></h2>
                                   {{-- <h2 class="question-title" id="questionTo-voice">{{  $count }} :  <small id="questionTo-voice">{{ $question->QuestionText }}</small> </h2>
                                    <button id="listenQuestion">Listen Now</button> --}}
                                    <div class="row">
                                        <div class="col-lg-6 text-hide-only">

                                         <h2 class="question-title" id="question{{ $loop->parent->index }}-{{ $loop->index }}"><small>{{ $question->QuestionText }}</small> </h2>

                                        </div>
                                        <div class="speaker-icon">
                                            <i class="icofont-record main-btn listenQuestion mic-btn" data-question-id="question{{ $loop->parent->index }}-{{ $loop->index }}">Listen Now</i>

                                        </div>
                                </div>
                                <h2 class="question-title"><a href="#" title="">Answer :</a></h2>
                                {{-- <div class="row">
                                    <div class="col-lg-8">
                                        <textarea class="col-lg-12 converted_text" placeholder="Write Answer"></textarea>
                                    </div>

                                    <div class="answer-mic">
                                        <button type="button" class="main-btn mic-btn" id="convert_to_text" ><i class="" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg></i>Record Your Answer
                                        </button>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-lg-8">
                                        <textarea class="col-lg-12 converted_text" id="answer{{ $loop->parent->index }}_{{ $loop->index }}" placeholder="Write Answer"></textarea>
                                    </div>

                                    <div class="answer-mic">
                                        <button type="button" class="main-btn mic-btn convert_to_text" data-answer-id="answer{{ $loop->parent->index }}_{{ $loop->index }}">Record Your Answer</button>
                                    </div>
                                </div>
                                    <div class="question-meta">
                                        {{-- <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
                                        </p> --}}
                                        {{-- <ul class="tags">
                                            <li><a data-ripple="" title="" href="#">Thesis</a></li>
                                            <li><a data-ripple="" title="" href="#">exprement</a></li>
                                            <li><a data-ripple="" title="" href="#">research</a></li>
                                        </ul> --}}
                                        {{-- <a href="#" title="" class="main-btn">view Answers</a> --}}
                                        <input type="submit" value="Submit Answers" class="main-btn">


                                    </div>
                                </div>
                            </div>

                            @php
                                $count++;
                            @endphp
                            @endforeach
                            @endforeach

                            {{-- <div class="load">
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
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
