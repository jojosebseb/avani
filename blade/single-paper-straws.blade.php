@extends('front.layout.main')
@section('main')

    <div id="parentContainer">
        <section class="section-container" id="productHero">
            <div class="container flex">
                <div class="w50 pad-around">
                    <div class="section-title green">
                        Paper Straws
                    </div>
                    <div class="paragraph">
                        Enough plastic straws are used in the US alone to wrap around the earth circumference 2.5x a day. Avani paper straws provides an eco-friendly solution to combat this massively growing epidemic by offering a biodegradable solution much kinder to mother earth.
                        <!-- <ul>
                            <li>FDA certified</li>
                            <li>Lasts optimally up to 1 hour of usage</li>
                            <li>Biodegradable</li>
                            <li>Achieved HACCP certification</li>
                            <li>Customizable based on MOQ</li>
                        </ul> -->
                    </div>
                    <div class="outline-btn outline-green">
                        Learn more
                    </div>
                </div>
                <div class="w50">
                    <img src="{{url('/')}}/assets/front/img/ecobags/ecobags-1.png" alt="">
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
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/icons/1.png" alt="">
                        </div>
                        <div class="module-caption">
                            FDA certified
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/icons/2.png" alt="">
                        </div>
                        <div class="module-caption">
                            Lasts optimally up to 1 hour of usage
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/icons/3.png" alt="">
                        </div>
                        <div class="module-caption">
                            Biodegradable
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/icons/4.png" alt="">
                        </div>
                        <div class="module-caption">
                            Achieved HACCP certification
                        </div>
                    </div>
                    <div class="ingredient-module">
                        <div class="img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/icons/5.png" alt="">
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

        <section class="section-container" id="productInformation">
            <div class="section-title">
                Products
            </div>
            <div class="container">
                <div class="product-adapter">
                    <div class="w30">
                        <div class="product-img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-Black.jpg" alt="">
                        </div>
                        <div class="img-thumb-container">


                            <div class="img-thumb-slide">
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-Black.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-Black-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-White.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-White-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-Red.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Plain-Red-2.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w70">
                        <div class="product-name green">
                            Solid Color Eco Straws (Colors: White, Black, Red, Kraft Brown)
                        </div>
                        <div class="product-information-paragraph">
                            Made of FDA approved materials and inks, and are biodegradable, compostable, sustainable and 100% chlorine free. HACCP and ISO 22000 certified, a micro thin plant based wax liner makes our straws durable for hours and can be discarded with a clear conscious. Custom designed straws are available for wholesale orders.
                            <br>
                            <br>

                            <b>Specifications:</b>
                            <ul class="dotted-ul">
                                <li>6x200mm</li>
                                <li>FAvailable in Solid White, Black, Red or Brown Colors</li>
                                <li>FDA Approved</li>
                                <li>Chlorine Free</li>
                                <li>Available in packs of 50, 100, 250 or 500 pieces</li>
                            </ul>

                        </div>
                        {{-- <ul class="size-parent">
                            <li class="active">8 oz</li>
                            <li>12 oz</li>
                            <li>16 oz</li>
                            <li class="black">Qty <span class="arrow down"></span></li>
                        </ul> --}}
                        <div class="outline-btn outline-green">
                            <a href="https://avanionline.myshopify.com/collections/straws">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="product-adapter">
                    <div class="w30">
                        <div class="product-img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Swirly.jpg" alt="">
                        </div>
                        <div class="img-thumb-container">


                            <div class="img-thumb-slide">
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Swirly.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Swirly-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlackWhite-Swirly.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlackWhite-Swirly-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/GreenWhite-Swirly.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/GreenWhite-Swirly-2.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w70">
                        <div class="product-name green">
                            Color Swirls Eco Straws (Colors: Black, Blue, Green)
                        </div>
                        <div class="product-information-paragraph">
                            Made of FDA approved materials and inks, and are biodegradable, compostable, sustainable and 100% chlorine free. HACCP and ISO 22000 certified, a micro thin plant based wax liner makes our straws durable for hours and can be discarded with a clear conscious. Custom designed straws are available for wholesale orders.
                            <br>
                            <br>

                            <b>Specifications:</b>
                            <ul class="dotted-ul">
                                <li>6x200mm</li>
                                <li>FAvailable in Solid White, Black, Red or Brown Colors</li>
                                <li>FDA Approved</li>
                                <li>Chlorine Free</li>
                                <li>Available in packs of 50, 100, 250 or 500 pieces</li>
                            </ul>

                        </div>
                        {{-- <ul class="size-parent">
                            <li class="active">8 oz</li>
                            <li>12 oz</li>
                            <li>16 oz</li>
                            <li class="black">Qty <span class="arrow down"></span></li>
                        </ul> --}}
                        <div class="outline-btn outline-green">
                            <a href="https://avanionline.myshopify.com/collections/straws">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="product-adapter">
                    <div class="w30">
                        <div class="product-img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/Bamboo.jpg" alt="">
                        </div>
                        <div class="img-thumb-container">


                            <div class="img-thumb-slide">
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Bamboo.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Bamboo-2.jpg" alt="">
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="w70">
                        <div class="product-name green">
                            Special Designs Eco Straws (Colors: Bamboo)
                        </div>
                        <div class="product-information-paragraph">
                            Made of FDA approved materials and inks, and are biodegradable, compostable, sustainable and 100% chlorine free. HACCP and ISO 22000 certified, a micro thin plant based wax liner makes our straws durable for hours and can be discarded with a clear conscious. Custom designed straws are available for wholesale orders.
                            <br>
                            <br>

                            <b>Specifications:</b>
                            <ul class="dotted-ul">
                                <li>6x200mm</li>
                                <li>Available in a Bamboo Motif or Valentine Heart prints</li>
                                <li>FDA Approved</li>
                                <li>Chlorine Free</li>
                                <li>Available in packs of 50, 100, 250 or 500 pieces</li>
                            </ul>

                        </div>
                        {{-- <ul class="size-parent">
                            <li class="active">8 oz</li>
                            <li>12 oz</li>
                            <li>16 oz</li>
                            <li class="black">Qty <span class="arrow down"></span></li>
                        </ul> --}}
                        <div class="outline-btn outline-green">
                            <a href="https://avanionline.myshopify.com/collections/straws">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="product-adapter">
                    <div class="w30">
                        <div class="product-img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Spot.jpg" alt="">
                        </div>
                        <div class="img-thumb-container">


                            <div class="img-thumb-slide">
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Spot.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/BlueWhite-Spot-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/GoldWhite-Spot.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/GoldWhite-Spot-2.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w70">
                        <div class="product-name green">
                            Polka Dot Eco Straws (Colors: Gold, Blue)
                        </div>
                        <div class="product-information-paragraph">
                            Made of FDA approved materials and inks, and are biodegradable, compostable, sustainable and 100% chlorine free. HACCP and ISO 22000 certified, a micro thin plant based wax liner makes our straws durable for hours and can be discarded with a clear conscious. Custom designed straws are available for wholesale orders.
                            <br>
                            <br>

                            <b>Specifications:</b>
                            <ul class="dotted-ul">
                                <li>6x200mm</li>
                                <li>Available in Gold or Blue Polka Dots on White or White Polka Dots on Red</li>
                                <li>FDA Approved</li>
                                <li>Chlorine Free</li>
                                <li>Available in packs of 50, 100, 250 or 500 pieces</li>
                            </ul>

                        </div>
                        {{-- <ul class="size-parent">
                            <li class="active">8 oz</li>
                            <li>12 oz</li>
                            <li>16 oz</li>
                            <li class="black">Qty <span class="arrow down"></span></li>
                        </ul> --}}
                        <div class="outline-btn outline-green">
                            <a href="https://avanionline.myshopify.com/collections/straws">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="product-adapter">
                    <div class="w30">
                        <div class="product-img-container">
                            <img src="{{url('/')}}/assets/front/img/products/paperstraws/Blue-Diamond.jpg" alt="">
                        </div>
                        <div class="img-thumb-container">


                            <div class="img-thumb-slide">
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Blue-Diamond.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Blue-Diamond-2.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Red-Diamond.jpg" alt="">
                                </div>
                                <div class="img-thumb">
                                    <img src="{{url('/')}}/assets/front/img/products/paperstraws/Red-Diamond-2.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w70">
                        <div class="product-name green">
                            Diamond Checkered Eco Straws (Colors: Red, Blue)
                        </div>
                        <div class="product-information-paragraph">
                            Made of FDA approved materials and inks, and are biodegradable, compostable, sustainable and 100% chlorine free. HACCP and ISO 22000 certified, a micro thin plant based wax liner makes our straws durable for hours and can be discarded with a clear conscious. Custom designed straws are available for wholesale orders.
                            <br>
                            <br>

                            <b>Specifications:</b>
                            <ul class="dotted-ul">
                                <li>6x200mm</li>
                                <li>Available in Red or Blue Diamond Checkers on White</li>
                                <li>FDA Approved</li>
                                <li>Chlorine Free</li>
                                <li>Available in packs of 50, 100, 250 or 500 pieces</li>
                            </ul>

                        </div>
                        {{-- <ul class="size-parent">
                            <li class="active">8 oz</li>
                            <li>12 oz</li>
                            <li>16 oz</li>
                            <li class="black">Qty <span class="arrow down"></span></li>
                        </ul> --}}
                        <div class="outline-btn outline-green">
                            <a href="https://avanionline.myshopify.com/collections/straws">Visit Store</a>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- productinfo-end -->


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
