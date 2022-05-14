<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Extro-Electronics Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{asset('cicohomepage/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<script src="{{asset('cicohomepage/js/modernizr.js')}}"></script>
 <!-- jQuery -->
<script src="{{asset('cicohomepage/js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{asset('cicohomepage/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>
<!-- FlexSlider -->
<script defer src="{{asset('cicohomepage/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
</head>
<body>
<div class="wrap"> 
	<div class="header">
		<div class="logo">
				<a href="{{url("/")}}"><img src="{{asset('cicohomepage/images/cicotech.jpg')}}" width="15%" height="10%" alt=""  title="logo"/></a>
		</div>
		<div class="nav-right">
			<ul class="nav">
				<li ><a href="{{url('/')}}">Home</a></li>
				<li class="active"><a href="{{url('/posts')}}">Offer</a></li>
				<li><a href="{{url('/viewcartforadminnew')}}">Admin Dashboard</a></li>
				<li><a href="{{url('/viewcart')}}">Cart</a></li>
				<li><a href="{{url('/login')}}">Login</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>




<div class="content">

	<div class="text-h">
	<h2 style="text-align: center;">Discounted Product</h2>
</div>
<div class="section group">
	@foreach($discounted_product as $discounted_product)
	<div class="col_1_of_5 span_1_of_5">
		
		<div class="grid-img">
				<a href=""><img src="{{url($discounted_product->p_image)}}" alt=""/></a> 
		</div>
		<p style="text-align: center;">{{$discounted_product->p_name}}</p>
	<p style="text-align: center;">Available Quantity:{{$discounted_product->discounted_quantity}}</p>
		<p style="text-align: center;">Discount percentage:{{$discounted_product->discount_in_percentage}}</p>
	
		
		</div>
		@endforeach
</div>

<div class="text-h">
	<h2 style="text-align: center;">Combo Package</h2>
</div>

<div class="section group">
	
	@foreach($posts as $posts)
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
			
			<a href=""><img src="{{url($posts->image)}}" alt=""/></a>

		</div>
		<p style="text-align: center;">{{$posts->title}}</p>
	</div>
	@endforeach
</div>


<div class="text-h">
	<h2 style="text-align: center;">Popular Products</h2>
</div>
<div class="section group" style="background-color:green;">
	@foreach($mostsellingproduct as $popularproduct)
	<div class="col_1_of_5 span_1_of_5" style="background-color:blue;">
		
		<div class="grid-img">
				<a href=""><img src="{{url($popularproduct->p_image)}}" alt=""/></a> 
		</div>
		<p style="text-align: center; color:white;">{{$popularproduct->p_name}}</p>
	
		
		</div>
		@endforeach
</div>




</div>
<div class="footer">
	<div class="section group">
		<div class="col_1_of_4 span_1_of_4">
			<h2>Payment method</h2>
			<ul class="nav1">
				<li><a href="">Bikash(বিকাশ)</a></li><br>
				<li><a href="">Nogod</a></li><br>
				<li><a href="">Rocket(রকেট)</a></li><br>
		
			</ul>



			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			
			<ul class="nav1">
				<h2>Payment Number</h2>
			<ul class="nav1">
				<li><a href="">01819685353</a></li>
			</ul>			
			
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Follow Us</h2>
			<ul class="nav">
				<li><a href="https://www.facebook.com/CICOTECHBD"><img src="{{asset('cicohomepage/images/facebook.png')}}" title="facebook" alt=""/></a></li>
				<li><a href=""><img src="{{asset('cicohomepage/images/twitter.png')}}" title="twitter" alt=""/></a></li>
				<li><a href=""><img src="{{asset('cicohomepage/images/rss.png')}}" title="rss" alt=""/></a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Contact Us</h2>
			<ul class="nav">
				<p>Address:Shah-kabir Mazer Road,Chalabon,Dakshinkhan,uttra,Dhaka</p>
					<p>Hotline :<a  href="tel:01407042715">01407042715</a></p>
				<li>Email: <a href="mailto:xixotech01@gmail.com"><span>xixotech01@gmail.com</span></a></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer1">
		<p class="w3-link">© 2013 Extro-Electronics. All Rights Reserved | Desig by <a href="http://w3layouts.com/" target="_blank"></a></p>
	</div>
</div>
</body>
</html>