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
					<li class="active"><a href="{{url('/')}}">Home</a></li>
				<li><a href="{{url('/posts')}}">Offer</a></li>
				<li><a href="{{url('/viewcartforadminnew')}}">Admin Dashboard</a></li>
				<li><a href="{{url('/viewcart')}}">Cart</a></li>
				<li><a href="{{url('/login')}}">Login</a></li>		
			</ul>
		</div>
		<div class="clear"></div>
	</div>


<div class="text-h">
	<h2 style="text-align: center;">Subcatagory</h2>
</div>
<div class="content">
<div class="section group">
	
	
	@foreach($subcatagory as $subcatagory)
	<div class="col_1_of_5 span_1_of_5" style="background-color: blue;">
		<div class="grid-imgs">
			<a href="{{URL('catagorywiseproduct/'.$subcatagory->sub_id)}}"><p style="text-align: center; font-size: 20px;  color: black; font-family: Arial;font-size: 20px;color: white;">{{$subcatagory->cat_name}}</p></a> 
		</div>
		
	</div>

	@endforeach
</div>



<div class="text-h">
	<h2 style="text-align: center;">Popular Products</h2>
</div>
<div class="section group" style="background-color:green">
	@foreach($mostsellingproduct as $popularproduct)
	<div class="col_1_of_5 span_1_of_5" style="background-color:blue">
		
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
			<h2>Payment Method</h2>
			<ul class="nav1">
			<img src="{{asset('cicohomepage/images/bikash.jpg')}}" width="25%" height="15%" alt=""  title="logo"/>
				<img src="{{asset('cicohomepage/images/Nogod.jpg')}}" width="25%" height="15%" alt=""  title="logo"/>
				<img src="{{asset('cicohomepage/images/Rocket.jpg')}}" width="35%" height="15%" alt=""  title="logo"/>
			</ul>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2></h2>
			<ul class="nav1">
				<h2>Payment Number</h2>
			<ul class="nav1">
				<li><a href="">01819685353</a></li>
			</ul>
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
		<p class="w3-link">?? 2013 Extro-Electronics. All Rights Reserved | Desig by <a href="http://w3layouts.com/" target="_blank"></a></p>
	</div>
</div>
</body>
</html>