<?php

    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../loginform.php");
    exit;
    }

    include_once('../connection.php');

    $stmt1 = "SELECT * FROM shopping  where id ='44' ORDER BY id DESC;";
    $stmt2 = "SELECT * FROM shopping  where id ='45' ORDER BY id DESC;";
    $stmt3 = "SELECT * FROM shopping  where id ='46' ORDER BY id DESC;";
    $stmt4 = "SELECT * FROM shopping  where id ='48' ORDER BY id DESC;";
    $stmt5 = "SELECT * FROM shopping  where id ='49' ORDER BY id DESC;";
    $stmt6 = "SELECT * FROM shopping  where id ='50' ORDER BY id DESC;";
    $stmt7 = "SELECT * FROM shopping  where id ='51' ORDER BY id DESC;";
    $stmt8 = "SELECT * FROM shopping  where id ='52' ORDER BY id DESC;";
    $stmt9 = "SELECT * FROM shopping  where id ='60' ORDER BY id DESC;";
    $stmt10 = "SELECT * FROM shopping  where id ='54' ORDER BY id DESC;";
    $stmt11= "SELECT * FROM shopping  where id ='55' ORDER BY id DESC;";
    $stmt12 = "SELECT * FROM shopping  where id ='56' ORDER BY id DESC;";
    $stmt13 = "SELECT * FROM shopping  where id ='57' ORDER BY id DESC;";
    $stmt14 = "SELECT * FROM shopping  where id ='58' ORDER BY id DESC;";
    $stmt15= "SELECT * FROM shopping  where id ='59' ORDER BY id DESC;";
    $stmt16 = "SELECT * FROM shopping  where id ='21' ORDER BY id DESC;";
    
    
    $result1 = mysqli_query($conn, $stmt1);
    $result2 = mysqli_query($conn, $stmt2);
    $result3 = mysqli_query($conn, $stmt3);
    $result4 = mysqli_query($conn, $stmt4);
    $result5 = mysqli_query($conn, $stmt5);
    $result6 = mysqli_query($conn, $stmt6);
    $result7 = mysqli_query($conn, $stmt7);
    $result8 = mysqli_query($conn, $stmt8);
    $result9 = mysqli_query($conn, $stmt9);
    $result10 = mysqli_query($conn, $stmt10);
    $result11 = mysqli_query($conn, $stmt11);
    $result12 = mysqli_query($conn, $stmt12);
    $result13 = mysqli_query($conn, $stmt13);
    $result14 = mysqli_query($conn, $stmt14);
    $result15 = mysqli_query($conn, $stmt15);
    $result16 = mysqli_query($conn, $stmt16);
    
    
    $rows1 = mysqli_fetch_assoc ($result1);
    $rows2 = mysqli_fetch_assoc ($result2);
    $rows3 = mysqli_fetch_assoc ($result3);
    $rows4 = mysqli_fetch_assoc ($result4);
    $rows5 = mysqli_fetch_assoc ($result5);
    $rows6 = mysqli_fetch_assoc ($result6);
    $rows7 = mysqli_fetch_assoc ($result7);
    $rows8 = mysqli_fetch_assoc ($result8);
    $rows9 = mysqli_fetch_assoc ($result9);
    $rows10 = mysqli_fetch_assoc ($result10);
    $rows11 = mysqli_fetch_assoc ($result11);
    $rows12 = mysqli_fetch_assoc ($result12);
    $rows13 = mysqli_fetch_assoc ($result13);
    $rows14 = mysqli_fetch_assoc ($result14);
    $rows15 = mysqli_fetch_assoc ($result15);
    $rows16 = mysqli_fetch_assoc ($result16);
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronics</title>
    <link rel="shortcut icon" href="images/Sellcia logo2.jpg.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="../css/vela.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="../css/vela.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="css/vela.css">
</head>
<body>
    <header>
        <nav class="nav1">
            <li><a><img src="../images/Sellcia logo2.jpg" alt=""></a></li>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="electronics.php">Electronics</a></li>
                <li><a href="shoes.php" class="active">Shoes</a></li>
                <li><a href="phonesandtablets.php">Phones and Tablets</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="uploadform.php">Uploads</a></li>
            </ul>
        </nav>
    </header>

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
    <!-- <div class="searchbarcode">
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
                            <div class="" id="parking"></div>
                            <div class="tooltip">Shoes</div>
                        </div>
                        <div class="icon" id="">
                            <div class="pho" id="parking"></div>
                            <div class=""></div>
                            <div class="tooltip">Phones and Tablets</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking"></div>
                            <div class="tooltip">Books</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">More</div>
                        </div>
                </div>
        </div>
    </div> -->
    
    <div class="container-grid">
        <div id="grid">
            <div class="slot1">
            <a href="products/slot1.php">
                    <div class="img" style="height:-200px;"><img src="http://localhost:8888/vela/uploads/<?php echo $rows1['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows1['Product'];?></div>
                    <div class="description"><?php echo $rows1['Description'];?></div>
                    <div class="price">KSh <?php echo $rows1['Cost'];?></div> 
            </a> 
            </div>
            <div class="slot2">
            <a href="products/slot2.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows2['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows2['Product'];?></div>
                    <div class="description"><?php echo $rows2['Description'];?></div>
                    <div class="price">KSh <?php echo $rows2['Cost'];?></div>  
            </a>
            </div>
            <div class="slot3">
            <a href="products/slot3.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows3['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows3['Product'];?></div>
                    <div class="description"><?php echo $rows3['Description'];?></div>
                    <div class="price">KSh <?php echo $rows3['Cost'];?></div>  
            </a>
            </div>
            <div class="slot4">
            <a href="products/slot4.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows4['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows4['Product'];?></div>
                    <div class="description"><?php echo $rows4['Description'];?></div>
                    <div class="price">KSh <?php echo $rows4['Cost'];?></div> 
            </a>

            </div>
            <div class="slot5">
            <a href="products/slot5.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows5['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows5['Product'];?></div>
                    <div class="description"><?php echo $rows5['Description'];?></div>
                    <div class="price">KSh <?php echo $rows5['Cost'];?></div>  
            </a>
            </div>
            <div class="slot6">
            <a href="products/slot6.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows6['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows6['Product'];?></div>
                    <div class="description"><?php echo $rows6['Description'];?></div>
                    <div class="price">KSh <?php echo $rows6['Cost'];?></div> 
            </a> 
            </div>
            <div class="slot7">
            <a href="products/slot7.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows7['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows7['Product'];?></div>
                    <div class="description"><?php echo $rows7['Description'];?></div>
                    <div class="price">KSh <?php echo $rows7['Cost'];?></div>  
            </a>
            </div>
            <div class="slot8">
            <a href="products/slot8.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows8['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows8['Product'];?></div>
                    <div class="description"><?php echo $rows8['Description'];?></div>
                    <div class="price">KSh <?php echo $rows8['Cost'];?></div>  
            </a>
            </div>
            <div class="slot9">
            <a href="products/slot9.php">
                    <div class="img" style="height:-200px;"><img src="http://localhost:8888/vela/uploads/<?php echo $rows9['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows9['Product'];?></div>
                    <div class="description"><?php echo $rows9['Description'];?></div>
                    <div class="price">KSh <?php echo $rows9['Cost'];?></div>  
            </a>
            </div>
            <div class="slot10">
            <a href="products/slot10.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows10['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows10['Product'];?></div>
                    <div class="description"><?php echo $rows10['Description'];?></div>
                    <div class="price">KSh <?php echo $rows10['Cost'];?></div>  
            </a>
            </div>
            <div class="slot11">
            <a href="products/slot11.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows11['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows11['Product'];?></div>
                    <div class="description"><?php echo $rows11['Description'];?></div>
                    <div class="price">KSh <?php echo $rows11['Cost'];?></div>  
            </a>
            </div>
            <div class="slot12">
            <a href="products/slot12.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows12['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows12['Product'];?></div>
                    <div class="description"><?php echo $rows12['Description'];?></div>
                    <div class="price">KSh <?php echo $rows12['Cost'];?></div> 
            </a> 
            </div>
            <div class="slot13">
            <a href="products/slot13.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows13['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows13['Product'];?></div>
                    <div class="description"><?php echo $rows13['Description'];?></div>
                    <div class="price">KSh <?php echo $rows13['Cost'];?></div>  
            </a>
            </div>
            <div class="slot14">
            <a href="products/slot14.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows14['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows14['Product'];?></div>
                    <div class="description"><?php echo $rows14['Description'];?></div>
                    <div class="price">KSh <?php echo $rows14['Cost'];?></div>  
            </a>
            </div>
            <div class="slot15">
            <a href="products/slot15.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows15['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows15['Product'];?></div>
                    <div class="description"><?php echo $rows15['Description'];?></div>
                    <div class="price">KSh <?php echo $rows15['Cost'];?></div>  
            </a>
            </div>
            <div class="slot16">
            <a href="products/slot16.php">
                    <div class="img"><img src="http://localhost:8888/vela/uploads/<?php echo $rows16['Image'];?>" alt="" style="max-height:250px;></div>
                    <div class="product"><?php echo $rows16['Product'];?></div>
                    <div class="description"><?php echo $rows16['Description'];?></div>
                    <div class="price">KSh <?php echo $rows16['Cost'];?></div>  
            </a>
            </div>     
        </div>
    </div>
    <br><br>
<div>
<h1>Online Shopping with VELA Kenya - Africa's No 1 Online Store</h1>
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
    <section class="footer">
        <footer>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link href="css/footer.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@userthemes.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
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
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
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
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
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
							&copy; 2018 Your Company. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
        </footer>
    </section>
</body>
</html>