<?php
        // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../loginform.php");
        exit;
    }
        include_once('../connection.php');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VELA</title>
    <link rel="shortcut icon" href="../images/sellciashopping.jpeg" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    
    <!-- Latest compiled and minified CSS -->
	<!-- jQuery library -->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="../css/vela.css">
    <link rel="stylesheet" href="../css/slider.css">

<!-- fontslink -->
<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../css/fonts.css">
</head>
<body>
    <header>
    
  

        <nav class="nav1">
            <li><a><img src="../images/sellcia logo2.jpg" alt="" style=></a></li>
            
            <li class="accessories"><a>
                     <div class="user">
                         <p style="">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                    </div>
                    <div class="login">
                        <button type="button" class="buttonlogin"><a  href="../logout.php" style="color:white;">Logout</a></button>
                    </div>
                </a></li>
            <li class="accessories1"><a>Cart</a></li>
            <li class="accessories1"><a>Help</a></li>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="electronics.php">Electronics</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="phonesandtablets.php">Phones and Tablets</a></li> 
                <li><a href="books.php">Books</a></li>
                <li><a href="uploadform.php">uploads</a></li>
                </ul>
        </nav>

        </header>
        <div class="searchbarcode">
            <link rel="stylesheet" href="../css/searchbar.css">
            <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
                <div class="container">
                    <input class="main"/><span class="searchicon"></span>
                        <div class="microphone">
                             <div class="mic-stand"></div>
                        </div>
                        <div class="icon-holder">
                            <div class="icon" id="parking">
                            <div class="tooltip">Electronics</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking1"></div>
                            <div class="tooltip">Shoes</div>
                        </div>
                        <div class="icon" id="">
                            <div class="pho" id="parking2"></div>
                            <div class=""></div>
                            <div class="tooltip">Phones and Tablets</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking3"></div>
                            <div class="tooltip">Books</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">More</div>
                        </div>
                </div>
        </div>
    </div>
        <h1 class="kariba">
  <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Wellcome To Sellcia.", "We Have All You Need.", "Good Quality.","Fair Prices!", "And We Delivers Everytime." ]'>
    <span class="wrap"></span>
  </a>
</h1>

        <link rel="stylesheet" href="css/slider.css">
        <script src="js/slider.js"></script>
        <div class="container">
  <div class="page-header">
    <h1></h1>
    
  </div>
  <div class="carousel slide carousel-swipe" id="carousel" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
      <li class="active" data-target="#carousel" data-slide-to="0"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
    </ol>
    
    </div><a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Prev</span></a><a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">next</span></a>
  </div>
</div>
                


                 <div class="container" style="background-color:black;">
  <div class="row">
	  <div class="col-sm-12">
		 <h2 class="h2 font-weight-bold text-uppercase text-center my-5"><span style="color:white">Our</span> <span style="color:green">Deals</span></h2>
	  </div>
  </div>
  <div class="row">
	<div class="col-sm-12">
	  <div class="carousel box-carousel d-none d-sm-block">
		  <div class="box">
			<a href="https://www.digitalus.com/" ><i class="fas fa-mobile-alt"></i><br>Phones</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/product/host.stml" ><i class="fas fa-book"></i><br>Books</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/" ><i class="fas fa-shoe-prints"></i><br>Shoes</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/product/engage.stml" ><i class="fas fa-shipping-fast"></i><br>Delivery</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/product/engage.stml"><i class="fas fa-shopping-bag"></i><br>Deals</a>
		  </div>
		<div class="box">
			<a href="https://www.digitalus.com/" ><i class="fab fa-apple"></i><br>iphones</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/product/host.stml" ><i class="fas fa-tablet-alt"></i></i><br>Tablets</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/" ><i class="fab fa-cc-visa"></i><br>accepted</a>
		  </div>
		  <div class="box">
			<a href="https://www.solodev.com/product/engage.stml" ><i class="fas fa-blender"></i><br>Electronics</a>
		  </div>
		  
		</div><!-- carousel-->
	</div><!--col-->
  </div><!--row-->
	
  <div class="carousel-mobile box-carousel-mobile d-block d-sm-none">
	<div class="row d-flex justify-content-center">
	  <div class="col-xs-6">
		<div class="box">
		  <a href="https://www.digitalus.com/" ><i class="fa fa-3x fa-laptop" aria-hidden="true"></i><br>Web Design</a>
		</div>
		<div class="box">
		  <a href="https://www.solodev.com/product/host.stml" ><i class="fa fa-3x fa-cloud" aria-hidden="true"></i><br>Cloud Hosting</a>
		</div>
		<div class="box">
		  <a href="https://www.solodev.com/" ><i class="fa fa-3x fa-users" aria-hidden="true"></i><br>WXP</a>
		</div>
	  </div><!-- col-->
	  <div class="col-xs-6">
		<div class="box">
		  <a href="https://www.digitalus.com/" ><i class="fa fa-3x fa-laptop" aria-hidden="true"></i><br>Web Design</a>
		</div>
		<div class="box">
		  <a href="https://www.solodev.com/product/host.stml" ><i class="fa fa-3x fa-cloud" aria-hidden="true"></i><br>Cloud Hosting</a>
		</div>
		<div class="box">
		  <a href="https://www.solodev.com/" class="more-links">More Quick Links</a>
		</div>
	  </div><!-- col-->
	</div>
  </div>
</div><!-- container-->
                
<br><br>
<div class="kay">
<h1>Online Shopping with Sellcia Kenya - Africa's No 1 Online Store</h1>
<p><b>VELA Kenya</b> is your number one Online Shopping solution. 
You can purchase all your mobile phones, tablets, computers,laptops, and more online and have them delivered to you.
 VELA has payment options that suit everyone, and we have a payment-on-delivery option for extra convenience.</p>
 <p>Be in the loop with new products and from top brands in VELA Kenya and make use of our latest offers to shop at the best price guarantee!
  In our online shop, you are even able to pre-order the phones you want. 
  Also take advantage of computing products available to own, printers and other Electronic devices such as hard drives at affordable prices.
   VELA remains your No°1 online marketplace for easy convenience and you get nothing but the best!

   <br><br>
   Love reading? Browse through our books categories to order educational books for your kids and loved ones and get the best deal on small and large appliances for the home. </p>
<p>Shop for smartphones <a href="phonesandtablets.php">Smartphones</a> on VELA, as we offer huge discounts on all mobiles, tablets and accessories. Join the biggest online sales event ever today. We have the latest collection of smartphones like the <a href="phonesandtablets.php">Samsung Note 9</a> and gadgets from the best brands in the industry! </p>
</div>
            
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
    <script src="../js/slider.js"></script>
    <script src="../js/fonts.js"></script>
    <section class="footer">
        <footer>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link href="../css/footer.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<p class="mb-4">Terms and Conditions.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>77967 Nairobi,Kenya.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@Sellcia.com</a></p>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@Sellcia </a> Sellcia Delivers everytime</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">28 <br><span>APR</span></label>
								<span>Corporate and Bulk Purchase.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Return Policy.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>How to shop and Delivery .</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2019 Sellcia. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
        </footer>
    </section>
</body>
</html>