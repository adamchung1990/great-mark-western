<!DOCTYPE html> 
<html lang="en">
<head> 

<title>Great Mark Western</title> 

<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Style Sheets --> 
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

<!-- CUSTOM FONTS -->
<script src="//use.typekit.net/hac5ytw.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Scripts --> 
<script type="text/javascript">
	if (typeof jQuery == 'undefined')
		document.write(unescape("%3Cscript src='js/jquery-1.9.js'" + 
															"type='text/javascript'%3E%3C/script%3E"))
</script>
<script type="text/javascript" language="javascript" src="js/trunk.js"></script>
<script type="text/javascript" language="javascript" src="js/stellar.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->


</head> 
 
<body> 

<div class="container">

	<header class="slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
			<li></li><li></li><li></li>
		</ul>
		<a href="index.html"><img id="nav-logo" src="images/GMW-logo-small.png" /></a>
	</header>
	<div class="nav-container nav-active">
		<nav class="slide">
			<ul>
				<li><a href="index.html">OUR STORY</a></li>
				<li><a href="raisingcattle.html">RAISING CATTLE</a></li>
				<li id="logo-small">
					<a href="index.html"><img src="images/GMW-logo-small.png"/></a>
				</li>
				<li><a href="testimonials.html">TESTIMONIALS</a></li>
				<li><a class="current" data-scroll data-options='{ "easing": "easeInQuad" }' href="#nav-background">CONTACT</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="content slide" style="height:100%;">
		<ul class="responsive" style="height:100%;">
			<li class="contact">
				<section class="banner" id="contact-image" >
				<article class="contact-page">
					<p id="contact-intro">Flavor guaranteed and consistent quality, every time. That’s the hallmark of Great Mark Western Angus beef. Taste the difference. See what Great Mark Western customers are talking about.</p>
					<div class="contact-box">
						<p id="contact-copy">Place your order for Great Mark Western Premium Reserve Angus Beef today by filling out this form</p>
						
						<form method="post" action="mailer.php">
				        <div class="contact-form">
						    <label>Business Name *</label>
						    <input type="text" name="name" required>
						            
						    <label>Phone Number</label>
						    <input type="tel" name="phone" >
						            
						    <label>Any Special Request?</label>
						    <textarea rows="10" name="message" ></textarea>

						    <label>E-mail*</label>
						    <input type="email" name="email" required>

						    <label>Type in the code below to verify you're human *</label>
						    <input type="text" name="verify" class="verif_box" required>
						    <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
						</div>            
						    <input id="submit" name="submit" type="submit" value="SEND">
						        
						</form>
						
					</div>
					<p class="contact-info">phone: 248.414.1700</p>
					<p class="contact-info">email: info@GreatMarkWestern.com</p>
				</article>
				</section>
			</li>
		</ul>
	</div>
	
</div>

	
<!-- Smooth Scroll Javascript -->
	
	<script src='js/smooth-scroll.js'></script>
	<script>
		smoothScroll.init({
			speed: 1000,
			easing: 'easeInOutCubic',
			offset: 0,
			updateURL: true,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
	</script>


	<script type="text/javascript">
	    $(document).ready(function(){
	    	$(window).stellar();
	    	document.getElementById('activelink').focus();
	    });
	 
	 
	</script>


</body> 
</html>







