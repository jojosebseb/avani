@extends('front.layout.main')
@section('main')
    <div id="parentContainer">
        <section class="section-container" id="mediaBanner">
            <div class="container">
                <div class="media-banner-slider">
                    <div class="slider-item">
                        <img src="{{url('/')}}/assets/front/img/media-release/image-page-news.jpg" alt="">
                        <div class="slider-news">
                            <div class="news-category">
                                news
                            </div>
                            <div class="section-title green">
                                Plastic you can drink: A solution for pollution?
                            </div>
                            <div class="paragraph">
                                The island of Bali is a jewel of the Indonesian archipelago, a tourist magnet known for idyllic beaches and lush forests.
                                But the curse of plastic pollution threatens to make this a paradise lost, disfigured by trash-strewn shores and sprawling landfill sites.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-container bg-blue" id="mediaSlider">
            <div class="media-slider-container">
                <div class="media-slide-items">
                    <div class="container">
                        <div class="white-title">
                            Plastic prospects
                        </div>
                        <div class="quote-paragraph">
                            "One of the great things about bioplastics right now is there are always new feedstocks being explored, and what (Avani) is doing with cassava is a great innovation,"

                        </div>
                        <div class="white-author">
                            Edward, Owner Multiplex
                        </div>
                        <img src="{{url('/')}}/assets/front/img/dummy-man.png" alt="" class="right-avatar">
                    </div>
                </div>
                <div class="media-slide-items">
                    <div class="container">
                        <div class="white-title">
                            Plastic prospects
                        </div>
                        <div class="quote-paragraph">
                            "One of the great things about bioplastics right now is there are always new feedstocks being explored, and what (Avani) is doing with cassava is a great innovation,"

                        </div>
                        <div class="white-author">
                            Edward, Owner Multiplex
                        </div>
                        <img src="{{url('/')}}/assets/front/img/dummy-man.png" alt="" class="right-avatar">
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-container" id="news">
            <div class="container">
                <div class="news-date">
                    February 2017
                </div>
                <a href="{{url('/')}}/news/asd">
                    <div class="news-parent-container">
                        <div class="w50">
                            <img src="{{url('/')}}/assets/front/img/news-dummy.png" alt="" class="news-img">
                        </div>
                        <div class="w50">
                            <div class="news-category">news</div>
                            <div class="news-title">
                                Plastic you can drink: A solution for pollution?
                            </div>
                            <div class="paragraph">
                                <span class="news-paragraph-date">02 February 2017 - </span>
                                The island of Bali is a jewel of the Indonesian archipelago, a tourist magnet known for idyllic beaches and lush forests. But the curse of plastic pollution threatens to make this a paradise lost, disfigured by trash-strewn shores and sprawling landfill sites.
                            </div>
                            <div class="underlined-btn">Read more</div>
                        </div>
                    </div>
                </a>
                <!--<div class="news-separator container"></div>
                <div class="news-date">
                    January 2017
                </div>
                <a href="{{url('/')}}/news/asd">
                    <div class="news-parent-container">
                        <div class="w50">
                            <img src="{{url('/')}}/assets/front/img/news-dummy.png" alt="" class="news-img">
                        </div>
                        <div class="w50">
                            <div class="news-category">news</div>
                            <div class="news-title">
                                Plastic you can drink: A solution for pollution?
                            </div>
                            <div class="paragraph">
                                <span class="news-paragraph-date">02 February 2017 - </span>
                                The island of Bali is a jewel of the Indonesian archipelago, a tourist magnet known for idyllic beaches and lush forests. But the curse of plastic pollution threatens to make this a paradise lost, disfigured by trash-strewn shores and sprawling landfill sites.
                            </div>
                            <div class="underlined-btn">Read more</div>
                        </div>
                    </div>
                </a>
                <a href="{{url('/')}}/news/asd">
                    <div class="news-parent-container">
                        <div class="w50">
                            <img src="{{url('/')}}/assets/front/img/news-dummy.png" alt="" class="news-img">
                        </div>
                        <div class="w50">
                            <div class="news-category">news</div>
                            <div class="news-title">
                                Plastic you can drink: A solution for pollution?
                            </div>
                            <div class="paragraph">
                                <span class="news-paragraph-date">02 February 2017 - </span>
                                The island of Bali is a jewel of the Indonesian archipelago, a tourist magnet known for idyllic beaches and lush forests. But the curse of plastic pollution threatens to make this a paradise lost, disfigured by trash-strewn shores and sprawling landfill sites.
                            </div>
                            <div class="underlined-btn">Read more</div>
                        </div>
                    </div>
                </a>-->
            </div>
        </section> --}}
		@include('front.layout.include.pressroom')
    </div>
@stop
