@extends('front.layout.main')
@section('main')
	<div id="parentContainer">
	    <section class="section-container" id="indexSlider">
	            <div class="slider-container">

					<div class="slider-item" id="indexSlide#0">
						<img src="{{url('/')}}/assets/front/img/home/video-bg.jpg" alt="" class="slide-bg">
						<div class="video-btn"><img src="{{url('/')}}/assets/front/img/global/play-btn.png" alt="" class="play-btn">
							<iframe class="youtube" id="ivan"
								src="https://www.youtube.com/embed/JRXDhO3i4r4?autoplay=0&showinfo=0&controls=1&enablejsapi=1&version=3" frameborder="0" >
							</iframe>
							<div class="cross-btn"><a href="javascript:void(0);" onclick="stop();">+</a></div>
						</div>
					</div>

	                <div class="slider-item" id="indexSlide#1">
                        <img src="{{url('/')}}/assets/front/img/home/slide-bg.png" alt="" class="slide-bg">
                        <div class="floating-text">
                            <div class="floating-title green">
                                Sustainable with <br>
                                exceptional performance
                            </div>
                            <div class="paragraph">
                                Made with paper sourced from managed plantations <br>
                                and and inner-wall coated with plant-based bioplastic
                            </div>
                        </div>
                        <img src="{{url('/')}}/assets/front/img/home/slide-img-1.png" alt="" class="slide-btm">
                    </div>
                    <div class="slider-item" id="indexSlide#2">
                        <img src="{{url('/')}}/assets/front/img/home/slide-bg.png" alt="" class="slide-bg">
                        <div class="floating-text">
                            <div class="floating-title green">
                                Sustainable  <br>
                                &amp; Disposable Bags
                            </div>
                            <div class="paragraph">
                                Look, feel and perform like plastic but are made from <br>
                                cassava root and all natural
                            </div>
                        </div>
                        <img src="{{url('/')}}/assets/front/img/home/slide-img-2.png" alt="" class="slide-btm">
                    </div>
	            </div>
	    </section>
	    <section class="section-container" id="About">
	        <div class="container">
	            <div class="w50 pad-right">
	                <div class="section-title">
	                    Engineered <br>
	                    <span class="green">Eco-Products</span>.
	                </div>
	                <div class="paragraph">
	                    Avani is a social impact enterprise based in Bali, Indonesia, the epicenter of the battle against plastic waste. Through years of research and development, we have came up with the technology that’s able to replace the otherwise disposable plastic which take hundreds and even thousands of years to be decomposed by Mother nature by using renewable resources made from plants. Parallel to that, as a social impact enterprise, we are committed to good corporate governance and also practice a Triple Bottom Line approach (People, Planet, Profit) in assuring the sustainability of our business.
	                </div>
	                <div class="bg-btn bg-blue">Learn More</div>
	            </div>
	            <div class="w50">
	                <iframe class="video" src="//www.youtube.com/embed/uxolBZZ_fRU" frameborder="0" allowfullscreen></iframe>
	            </div>
	        </div>
	    </section>
	    <section class="section-container bg-blue" id="mediaSlider">
	        <div class="media-slider-container">
	            <div class="media-slide-items">
	                <div class="container">
	                    <div class="white-title">Plastic prospects</div>
	                    <div class="quote-paragraph">
	                        "One of the great things about bioplastics right now is there are always new feedstocks being explored, and what (Avani) is doing with cassava is a great innovation,"
	                    </div>
	                    <div class="white-author">Edward, Owner Multiplex</div>
	                    <img src="{{url('/')}}/assets/front/img/dummy-man.png" alt="" class="right-avatar">
	                </div>
	            </div>
	            <div class="media-slide-items">
	                <div class="container">
	                    <div class="white-title">Plastic prospects</div>
	                    <div class="quote-paragraph">
	                        "One of the great things about bioplastics right now is there are always new feedstocks being explored, and what (Avani) is doing with cassava is a great innovation,"
	                    </div>
	                    <div class="white-author">Edward, Owner Multiplex</div>
	                    <img src="{{url('/')}}/assets/front/img/dummy-man.png" alt="" class="right-avatar">
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="section-container" id="Principles">
	        <div class="container">
	            <div class="section-title">
	                Packaging with <span class="blue">principles</span>.
	            </div>
	            <div class="paragraph">
	                Our vision is to provide sustainable food packaging that is superior in quality at an affordable price.
	            </div>
	            <div class="ingredient-flex">
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-1.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Social impact
	                    </div>
	                    <div class="module-subcaption">
	                        The majority of Avani products are made from corn or sugarcane.
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-2.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Eco friendly
	                    </div>
	                    <div class="module-subcaption">
	                        Our inks are soy or water based therefore non-toxic.
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-3.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Made from renewable resources
	                    </div>
	                    <div class="module-subcaption">
	                        Corn &amp; sugarcane are both annually renewable resources.
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-4.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Lower corban footprint
	                    </div>
	                    <div class="module-subcaption">
	                        Our raw material provide a sustainable solution to oil-based food packaging.
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="section-container" id="Solutions">
	        <div class="container">
	            <div class="w50">
	                <div class="section-title">
	                    Our <span class="blue">technology</span> provide solutions for the <span class="green"> future </span>.
	                </div>
	                <div class="paragraph pad-right">
	                    -	Avani provides a full range of sustainable alternatives to plastic that is made 100% from renewable resources. Explore our range of eco-friendly products to find the most sustainable solution for your business as well as household.
	                </div>
	                <div class="bg-btn bg-green">
	                    Shop Now
	                </div>
	            </div>
	        </div>
	    </section>
	    <section class="section-container" id="IAMNOTPLASTIC">
	        <div class="section-title container">
	            #IAMNOT<span class="green">PLASTIC</span>
	            <div class="paragraph">
	                We see you. Show us your style with #IAMNOTPLASTIC
	            </div>
	        </div>
	        <div class="gallery-flex container">
	        	<?php $i=1; ?>
	        	@if(count($igimg))
		        	@foreach($igimg as $data)
			            <div class="gallery-module" data-gallerycount="{{$i++}}">
	        				<a class="gallery-anchor" href="https://www.instagram.com/p/{{$data->code}}" target="_blank">
				                <img src="{{$data->thumbnail_src}}" alt="">
				                <div class="hover-tint"></div>
				                <!--<div class="module-data">
				                    <div class="module-functions">
				                        <div class="left">
				                            <span class="gallery-owner-span"><img src="{{$data->owner->profile_pic_url}}" class="gallery-owner-image"></span><span class="delay-1">@<span class="green">{{$data->owner->username}}</span></span>
				                        </div>
			                            <div class="right">
			                                <span class="delay-2">
			                                    <span class="gallery-like">{{$data->likes->count}}</span><img src="{{url('/')}}/assets/front/img/heart.png" alt="" class="ico">
			                                </span>
			                                <span class="delay-3">
			                                    <span class="gallery-comment">{{$data->comments->count}}</span><img src="http://img.static.sldclc.com/chat.png" alt="" class="ico">
			                                </span>
			                            </div>
				                    </div>
				                	<div class="gallery-caption">{{$data->caption}}</div>
				                </div>-->
		            		</a>
			            </div>
		            @endforeach
	            @endif
	        </div>
	    </section>
	    <section class="section-container" id="asSeen">
	        <div class="container">
	            <div class="side-title">
	                As Seen In
	            </div>
	            <div class="sponsors-container">
	            	<div class="sponsor-module">
                        <a href="http://www.bbc.com/indonesia/trensosial-38740898" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/bbc.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="http://edition.cnn.com/2017/01/16/world/cassava-plastic/" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/cnn.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="http://www.businessinsider.co.id/green-cassava-bag-bali-biodegradable-compostable-plastic-waste-ocean-dissolve-drink-kevin-kumala-2016-12/?r=US&IR=T#1FBcIfTSEDfEV110.97" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/bilogo.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="https://www.facebook.com/techinsider/videos/681685422029817/" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/techin.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="#" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/nytimes.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="https://sg.news.yahoo.com/cassava-carrier-bags-indonesian-entrepreneur-tackles-plastic-scourge-065253422--finance.html" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/yahoo.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="http://www.msn.com/en-sg/news/newsother/cassava-bioplastic-dissolvable-and-drinkable-plastic-straight-out-of-bali/ar-BBxlUYc" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/msn.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="https://www.facebook.com/aljazeera/videos/10155005037598690/" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/aljazeera.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="http://www.leparisien.fr/environnement/en-indonesie-un-jeune-entrepreneur-s-attaque-au-fleau-du-plastique-08-02-2017-6664977.php" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/leparisien.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="http://www.elmundo.es/ciencia/2017/02/07/5899901722601df47a8b45d6.html" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/elmundo.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="https://www.fastcoexist.com/3067107/if-this-plastic-bag-ends-up-in-the-ocean-dont-worry-animals-can-safely-eat-it" target="_blank">
                            <img src="{{url('/')}}/assets/front/img/news/fastcompany.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor-module">
                        <a href="#">
                            <img src="{{url('/')}}/assets/front/img/news/techinasia.png" alt="">
                        </a>
                    </div>
	            </div>
	        </div>
	    </section>
	    <div class="seperator"></div>
	</div>
@stop
