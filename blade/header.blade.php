<nav>
	<div id="navbar">
	    <div class="container">
	        <div class="logo-container">
	            <a href="{{route('home')}}"><img src="{{url('/')}}/assets/front/img/global/logo.png" alt=""></a>
	        </div>
	        <ul class="navbar-navigation">
	            <li id="productHandle">
	            	Products
	            	@include('front.layout.include.productdrop')
	            </li>
	            <li><a href="{{route('about')}}">About Us</a></li>
	            <li><a href="{{route('press')}}">Press &amp; Media</a></li>
	            <li><a href="{{route('contact')}}">Contact Us</a></li>
	        </ul>
	        <ul class="navbar-function">
	            <li>Login</li>
	            <li>Cart <span class="" id="navbarQty">0</span></li>
	        </ul>
	        <div class="mobile-handle">
	            <div class="mobile-lines" id="line1"></div>
	            <div class="mobile-lines" id="line2"></div>
	            <div class="mobile-lines" id="line3"></div>
	        </div>
	    </div>
	</div>
</nav>