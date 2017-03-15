@extends('front.layout.main')
@section('main')
    <div id="parentContainer">

        <section class="section-container video" id="aboutBanner">
            <div class="video-btn"><img src="{{url('/')}}/assets/front/img/global/play-btn.png" alt="" class="play-btn">
                <iframe class="youtube" id="ivan"
                    src="https://www.youtube.com/embed/JRXDhO3i4r4?autoplay=0&showinfo=0&controls=1&enablejsapi=1&version=3" frameborder="0" >
                </iframe>
                <div class="cross-btn"><a href="javascript:void(0);" onclick="stop();">+</a></div>
            </div>
        </section>
        <section class="section-container" id="History">
            <div class="container">
                <div class="section-title">
                    Avani <span class="green">History</span>
                </div>
                <div class="paragraph">
                    Avani was established in the year of 2014 spearheaded by individuals who strive to be difference makers utilizing technology as a solution to combat the global epidemic of plastic pollution. Avani provides a game-changing compostable bioplastic made from cassava starch as well as a full range of sustainable food packaging and hospitality products made from renewable resources.
                    <br><br>
                    Through years of research and development prior to its launch, Avani have came up with groundbreaking technology that enables them to replace the otherwise disposable plastic products which take hundreds and even thousands of years to be decomposed by Mother nature by using renewable resources made from plants. Parallel to that, as a social impact enterprise, we are committed to exercise good corporate governance through our business practices as well as adopting the Triple Bottom Line approach in assuring the sustainability of our business.
                </div>
                <div class="bg-btn bg-blue">Learn More</div>
            </div>
        </section>
        <div class="container seperator"></div>

        <section class="section-container" id="Principles">
	        <div class="container">
	            <div class="section-title">
	                Packaging with <span class="blue">principles</span>.
	            </div>
	            <div class="paragraph">
	                Avani provides a full range of sustainable alternatives to plastic which are made 100% from renewable resources. Avani is a one-stop-shop solution for all eco-friendly needs ranging from shopping bags, F&B packaging, up until hotel amenities.
	            </div>
	            <div class="ingredient-flex">
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-1.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Sustainable
	                    </div>
	                    <div class="module-subcaption">
	                        all Avani products are made from renewable resources
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-2.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Biodegradable and compostable
	                    </div>
	                    <div class="module-subcaption">
							all Avani products have been certified biodegradable and compostable
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-3.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Closed loop circular economy
	                    </div>
	                    <div class="module-subcaption">
							maximizing values and recovering all materials at the end of each service life of material
	                    </div>
	                </div>
	                <div class="ingredient-module">
	                	<div class="img-box">
                            <img src="{{url('/')}}/assets/front/img/home/principle-4.png" alt="">
                        </div>
	                    <div class="module-caption">
	                        Fully customizable
	                    </div>
	                    <div class="module-subcaption">
	                        customize them according to your needs
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

        <section class="section-container" id="scrollAbout"></section>
        <section class="section-container" id="whatWeDo">
            <div class="container">
                <div class="section-title">
                    What we do? <br>
                    <span class="blue">Sustainable</span> <span class="green">disposable</span><br>
                    solutions.
                </div>
                <div class="paragraph">
                    Bali, Indonesia is assumed by most as a tropical island paradise with pristine white sand beaches. Unfortunately, scrutinizing the matters closer, the truth is that Bali's beaches are now often saturated with garbage and debris with the majority of them being plastic. As of 2015, it is known that Bali produces around 1,000 cubic meters of plastic garbage every day and only .5% of this waste gets recycled or up-cycled.  PT. Nirwana Alam Hijau (under trade name Avani) is a Bali-based social enterprise that supplies ecofriendly products as a replacement to plastic. The company aims to help rehabilitate the island by offering 100% sustainable disposable packaging solutions and compostable plastic alternatives to Bali's hospitality &amp; retail industries. By focusing to replace single-use plastic products,  the company offers:
                    <ul class="dotted-ul">
                        <li>Take-away cups</li>
                        <li>Take-aways boxes</li>
                        <li>Wooden eating cutlery</li>
                        <li>Paper Straws</li>
                        <li>Shopping bags</li>
                        <li>Apparel Poly bags</li>
                        <li>Laundry bags</li>
                        <li>and more</li>
                    </ul>
                    By providing affordable &amp; eco-friendly alternatives along with the cooperation of the local service &amp; retail industries we hope to minimize the amount of toxic plastics consumed and discarded into Bali's critical ecosystem. At the same time, in delivering its values as a social enterprise, Avani is committed to help teach its inhabitants, through their partnership programs, how to maintain it and help return Bali's tarnished image to its past glory.
                </div>
            </div>
        </section>
        <div class="seperator"></div>
    </div>
@stop
