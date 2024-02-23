@extends('User.layout.lingua')

@section('linguaContent')

<!-- Home -->

<div class="home">
    <div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
    <div class="home_content">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="home_title">Learn Languages Easily</h1>
                    <div class="home_button trans_200"><a href="#">get started</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                <div class="flag"><img src="images/Ukrainian.svg" alt=""></div>
                                <div class="lang_name">Ukrainian</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/Japanese.svg" alt=""></div>
                                <div class="lang_name">Japanese</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/Lithuanian.svg" alt=""></div>
                                <div class="lang_name">Lithuanian</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/Swedish.svg" alt=""></div>
                                <div class="lang_name">Swedish</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/English.svg" alt=""></div>
                                <div class="lang_name">English</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/Italian.svg" alt=""></div>
                                <div class="lang_name">Italian</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/Chinese.svg" alt=""></div>
                                <div class="lang_name">Chinese</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/French.svg" alt=""></div>
                                <div class="lang_name">French</div>
                            </a>
                        </div>

                        <!-- Flag -->
                        <div class="owl-item language_item">
                            <a href="#">
                                <div class="flag"><img src="images/German.svg" alt=""></div>
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


@endsection
