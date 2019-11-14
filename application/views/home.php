<?php 
$amount = 300000;
$email = 'sales@thebetstrategies.com';
 ?>
<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Betting Strategies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'> -->
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<header id="fh5co-header" style="background-image: url(assets/images/hero_bg_1.jpg)">
		<div class="overlay"></div>
		<div class="container">
			<div class="row" style="margin-top: 5em;">
				<div class="col-md-12 text-center">
					<h1 id="fh5co-logo" class="cursive-font"><a href="index.html">THE BETTING STRATEGIES</a></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="intro">
						
						<h2>At Last! You can download the FREE VERSION of the book everyone is talking about, 50 SECRET STRATEGIES TO WIN OVER 95% OF YOUR SPORTS BETS, to learn how to predict games with very high accuracy. Read it and decide before you buy the full version. Fair deal? <now insert the link here OR a button that says "download free version"></h2>
						<p>
							<a href="<?php echo base_url().'Home/free_copy/'; ?>" class="btn btn-primary btn-lg btn-hardbound">download free version </a> <span class="fh5co-block">&nbsp;&nbsp;
							or &nbsp;&nbsp;</span> <a href="#" onclick="payWithPaystack()"  class="btn-ebook">Click here to Order full version</a>
							<h5 style="color: red; text-align: center; padding-top: "><strong>The full book downloads automatically to your device after payment.</strong></h5>
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<figure class="fh5co-intro-img">
						<img class="img-1 animate-box" src="assets/images/book_black.png" alt="Free Website Template by FreeHTML5.co">
						<img class="img-2 animate-box" src="assets/images/book_white.png"i alt="Free Website Template by FreeHTML5.co">
					</figure>
				</div>
			</div>
		</div>
	</header>

	<div id="main">
			
		<div class="container">
			
			<div class="row row-pb-md">
				
			</div>
			<div class="row fh5co-feature">
				<div class="col-md-6 col-md-push-6">
					<div class="fh5co-copy">
						<div class="fh5co-copy-inner">
							<h2>Why you need this book</h2>
							<p>"All Sports have patterns and those who win big in bets had, at some points discoverned these patterns it feels Like a superpower" <br> --Ryan Turning, Veteran Sports Analyst</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="fh5co-img text-right">
						<figure class="fh5co-figure animate-box">
							<img class="img-2" src="assets/images/book_white.png" alt="Free Website Template by FreeHTML5.co">	
						</figure>
					</div>
				</div>
			</div>
			<!-- END feature -->

			<div class="row fh5co-feature fh5co-reverse">
				<div class="col-md-6">
					<div class="fh5co-copy">
						<div class="fh5co-copy-inner">
							<h2>Discover the Strategies</h2>
							<p>We're now offering a fantastic opportunity for you to finally achieve what you want from betting using all the  book - and with the help of the most successful Bet strategies</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-img text-left">
						<figure class="fh5co-figure animate-box">
							<img class="img-2" src="assets/images/book_black.png" alt="Free Website Template by FreeHTML5.co">	
						</figure>
					</div>
				</div>
			</div>

		
		</div>

		<div><?php
		if ($this->session->flashdata('error')) {
			?>
			<div class="alert alert-danger text-center" style="margin-top:20px;">
				<?php echo $this->session->flashdata('error'); ?>
				</div> <?php 
		}

			?>
		</div>
 
		

		<div id="features">
			<div class="container">
				<div class="row text-center fh5co-heading">
					<div class="col-md-8 col-md-offset-2">
						<h2>Bonus Stategies</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-tablet"></i>
							</span>
							<h3>Betting Patterns</h3>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-heart"></i>
							</span>
							<h3>Secret Techniques</h3>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-star"></i>
							</span>
							<h3>Tips</h3>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-cog"></i>
							</span>
							<h3>Tactics</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="get-subscribe">
			<div class="container">
				<div class="row text-center fh5co-heading">
					<div class="col-md-8 col-md-offset-2">
						<h2>DOWNLOAD THE COMPLETE BOOK</h2>
						<p>The full book downloads automatically to your device after payment. For any enquiry, contact @lastifol on Twitter, Instagram or Telegram</p>
					</div>
				</div>
				<div class="get-subscribe">
					<form class="form-inline">
						
						<div class="col-md-12 col-sm-12">
				<script src="https://js.paystack.co/v1/inline.js"></script>
							<button type="button" onclick="payWithPaystack()" class="btn btn-default btn-block">Click here to Order full version</button>
						</div>
					</form>
				</div>
			</div>
		</div>



		<footer id="footer">
			<div class="container">
				<div class="col-md-12 text-center">
					<p class="copyright">
						<small>&copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved.</small>
						<em><small>Designed and developed by <a href="http://abiatechhub.com" target="_blank">Abia Tech Hub</a></small> </em>
					</p>
					<ul class="fh5co-social">

						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- MAIN JS -->
	<script src="assets/js/main.js"></script>
	 <script>
      
      function payWithPaystack(){
        var handler = PaystackPop.setup({
          key: '<?php echo PAYSTACK_PUBLIC_KEY; ?>',
          email: '<?php echo "$email"; ?>',
          amount: '<?php echo "$amount";?>',
          ref: ''+Math.floor((Math.random() * 1000000000) + 1000), 
          metadata: {
             custom_fields: [
                {
                    display_name: "",
                    variable_name: "mobile_number",
                    value: "+2348012345678"
                }
             ]
          },
          callback: function(response){
              
            $.post("<?php echo base_url().'Home/verify/'; ?>", {reference:response.reference, email: '<?php echo "$email"; ?>', amount: '<?php echo "$amount"; ?>'}, 

              function(status){
                if(response.status == "success")

                	//alert(JSON.stringify(response.transaction_key));
                    window.location = '<?php echo base_url()."Home/download"; ?>?cvbs='+ response.reference;
                else
                    
                    alert('Your Transaction was not successful');
            });
            },
          onClose: function(){
              alert('window closed');
          }
        });
        handler.openIframe();
      }

  </script>

	</body>
</html>

