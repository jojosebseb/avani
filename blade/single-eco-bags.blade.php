@extends('front.layout.main')
@section('main')

    <div id="parentContainer">
        <section class="section-container" id="productHero">
            <div class="container flex">
                <div class="w50 pad-around">
                    <div class="section-title green">
                        Eco-Bags
                    </div>
                    <div class="paragraph">
                        Every year, an estimated of 1 trillion plastic bags are consumed worldwide, and Avani’s cassava-based eco bags are the perfect replacement to mitigate this horrible worldwide epidemic. Avani bags are made from purely 100% bio-based material and it is also widely considered as one of the lowest cost for cassava based bioplastic as well as having distinguishing features as below:
                        <!-- <ul>
                            <li>Biodegrades and compostable in months</li>
                            <li>Harmless to animal life</li>
                            <li>High performance underload</li>
                            <li>Can be recycled back with paper</li>
                            <li>Good oxygen barrier and anti-static properties</li>
                            <li>Safe for food products</li>
                            <li>Customizable based on MOQ</li>
                        </ul> -->
                    </div>
                    <div class="outline-btn outline-green">
                        Learn more
                    </div>
                </div>
                <div class="w50">
                    <img src="{{url('/')}}/assets/front/img/products/ecobags/Ecobags-Header.png" alt="">
                </div>
            </div>
        </section>

        <section class="section-container" id="productBanner">
            <a href=""><img src="{{url('/')}}/assets/front/img/global/play-btn.png" alt="" class="play-btn"></a>
        </section>

        <section class="section-container grey" id="productPrinciples">
            <div class="container">
                <div class="section-title centered">
                    OUR BAGS ARE FOOD SAFE <br>
                    AND HARMLESS TO ANIMAL CONSUMPTION
                </div>
                <div class="ingredient-flex">
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/1.png" alt="">
                        </div>
                        <div class="module-caption">
                            Biodegrades and compostable in months
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/2.png" alt="">
                        </div>
                        <div class="module-caption">
                            Harmless to animal life
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/3.png" alt="">
                        </div>
                        <div class="module-caption">
                            High performance underload
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/4.png" alt="">
                        </div>
                        <div class="module-caption">
                            Can be recycled back with paper
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/5.png" alt="">
                        </div>
                        <div class="module-caption">
                            Good oxygen barrier and anti-static properties
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/6.png" alt="">
                        </div>
                        <div class="module-caption">
                            Safe for food products
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/7.png" alt="">
                        </div>
                        <div class="module-caption">
                            Customizable based on MOQ
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-container no-bg" id="productCustomizable">
            <div class="container">
                <div class="w50 vertical-center">
                    <div class="section-title ">
                        Customizable
                    </div>
                    <div class="paragraph">
                        ALL OF OUR BAGS ARE AVAILABLE BY DIRECT ORDER ONLY AND CUSTOMIZABLE WITH UP TO 2 BIO-INK COLORS ON A BACKGROUND OF NUMEROUS STANDARD PANTONE COLORS. INQUIRE TODAY
                    </div>
                </div>
                <img src="{{url('/')}}/assets/front/img/global/cups.png" alt="" class="customizable-img">
            </div>
        </section>





        <section class="section-container" id="productEnquiry">
            <div class="container">
                <div class="paragraph">
                    Interested in this product? Make an enquiry now and our sales represantative will be in touch as soon as possible.
                </div>
                <div class="outline-btn outline-green">
                    Make an enquiry
                </div>
            </div>
        </section>

        <div class="seperator"></div>

    </div>
@stop
