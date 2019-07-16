<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tiệm bánh G007 </title>
	<base href="{{ asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="shop/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="shop/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="shop/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="shop/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="shop/style" href="shop/assets/dest/css/style.css">
	<link rel="stylesheet" href="shop/assets/dest/css/animate.css">
	<link rel="stylesheet" title="shop/style" href="shop/assets/dest/css/huong-style.css">

</head>
<body>

	@include('layout.header')
	
	@yield('content') <!-- .container -->
	@include('layout.footer')
	 <!-- #footer -->
	@yield('script')


	<!-- include js files -->
	<script src="shop/assets/dest/js/jquery.js"></script>
	<script src="shop/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="shop/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="shop/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="shop/assets/dest/vendors/animo/Animo.js"></script>
	<script src="shop/assets/dest/vendors/dug/dug.js"></script>
	<script src="shop/assets/dest/js/scripts.min.js"></script>
	<script src="shop/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="shop/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="shop/assets/dest/js/waypoints.min.js"></script>
	<script src="shop/assets/dest/js/wow.min.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2015488292094397&autoLogAppEvents=1"></script>
	<!--customjs-->
	<script src="shop/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
