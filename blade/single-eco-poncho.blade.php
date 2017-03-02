@extends('front.layout.main')
@section('main')

    <div id="parentContainer">
        <section class="section-container" id="productHero">
            <div class="container flex">
                <div class="w50 pad-around">
                    <div class="section-title green">
                        Eco Poncho
                    </div>
                    <div class="paragraph">
                        Biowear eco poncho is a brainchild of Avani. The rain poncho is made of renewable resources of corn soy and sunflower seed. From this material we are able to create an eco friendly alternative as a counterpart to the normally used petroleum based raincoat. By using this material, in 180 days it actually becomes compost for our soil. It looks and feels like plastic but is not plastic.
                    </div>
                    <div class="outline-btn outline-green">
                        Learn more
                    </div>
                </div>
                <div class="w50">
                    <img src="{{url('/')}}/assets/front/img/products/ecoponcho/header.png" alt="">
                </div>
            </div>
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
                            Certified 100% biodegradable and compostable
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/2.png" alt="">
                        </div>
                        <div class="module-caption">
                            Durable up to 6 months
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/3.png" alt="">
                        </div>
                        <div class="module-caption">
                            Have been used for notable international events such as (London Paralympics,  ..)
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/4.png" alt="">
                        </div>
                        <div class="module-caption">
                            Lightweight, durable, and windproof
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/5.png" alt="">
                        </div>
                        <div class="module-caption">
                            Uses eco friendly non toxic water based inks
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/ecobags/icons/6.png" alt="">
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

        <div class="seperator container"></div>

    </div>

@stop
