<?php

    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../loginform.php");
    exit;
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploads</title>
    <link rel="shortcut icon" href="../images/Sellcia logo2.jpg" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="../css/vela.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery library -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="phonesandtablets.php">Phones and Tablets</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="uploadform.php" class="active">Uploads</a></li>
            </ul>
        </nav>
    </header>
    <!-- <div class="searchbarcode">
            <link rel="stylesheet" href="../css/searchbar.css">
                <div class="container">
                    <input class="main"/><span class="searchicon"></span>
                        <div class="nomic">
                             <div class="mic-stand"></div>
                        </div>
                        <div class="icon-holder">
                            <div class="icon" id="parking">
                            <div class="tooltip">Parking</div>
                        </div>
                        <div class="icon" id="gas">
                            <div class="base"></div>
                            <div class="tooltip">Gas</div>
                        </div>
                        <div class="icon" id="eat">
                            <div class="fork"></div>
                            <div class="knife"></div>
                            <div class="tooltip">Food</div>
                        </div>
                        <div class="icon" id="coffee">
                            <div class="cup"></div>
                            <div class="tooltip">Coffee</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">Misc</div>
                        </div>
                </div>
        </div> -->
    </div>
    <div style="margin-top:10px; padding-left:560px;">
    <form action="uploadvalidate.php" method="POST" enctype="multipart/form-data">
        <label for="text" style="font-weight:bold;">Product Name</label>
        <input type="text" name="product" placeholder="Product Name" required style="margin-left:0px;"><br><br>
        <label for="product_id" style="font-weight:bold;">Product ID</label>
        <input type="number" name="product_id" class="product_id" placeholder="Product ID" required style="margin-left:28px;"><br><br>
        <label for="cost" style="font-weight:bold;">Cost</label>
        <input type="number" name="cost" placeholder="Cost Of Product" required style="margin-left:75px;"><br><br>
        <label for="category" style="font-weight:bold;">Category</label>
        <input type="text" name="category" placeholder="Category Of Product" required style="margin-left:40px;"><br><br>
        <label for="image" style="font-weight:bold;">Upload Image</label>
        <input type="file" name="image" id="filetoupload"><br><br>
        <label for="description" style="font-weight:bold;">Description</label>
        <input type="text" name=description placeholder="Description" required style="margin-left:22px;"><br><br>
        <input type="submit" name="submit" value="Upload Information" style="margin-left:70px; background-color:rgb(63, 170, 104); border:none; border-radius:4px; color:white;"><br><br>
        
    </form>
    </div>
    
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