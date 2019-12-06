<?php
    include_once('../connection.php');
    $stmt1 = "SELECT * FROM shopping  where id ='61' ORDER BY id DESC;";
    $stmt2 = "SELECT * FROM shopping  where id ='62' ORDER BY id DESC;";
    $stmt3 = "SELECT * FROM shopping  where id ='63' ORDER BY id DESC;";
    $stmt4 = "SELECT * FROM shopping  where id ='64' ORDER BY id DESC;";
    $stmt5 = "SELECT * FROM shopping  where id ='65' ORDER BY id DESC;";
    $stmt6 = "SELECT * FROM shopping  where id ='66' ORDER BY id DESC;";
    $stmt7 = "SELECT * FROM shopping  where id ='67' ORDER BY id DESC;";
    $stmt8 = "SELECT * FROM shopping  where id ='68' ORDER BY id DESC;";
    $stmt9 = "SELECT * FROM shopping  where id ='69' ORDER BY id DESC;";
    $stmt10 = "SELECT * FROM shopping  where id ='70' ORDER BY id DESC;";
    $stmt11= "SELECT * FROM shopping  where id ='71' ORDER BY id DESC;";
    $stmt12 = "SELECT * FROM shopping  where id ='72' ORDER BY id DESC;";
    $stmt13 = "SELECT * FROM shopping  where id ='73' ORDER BY id DESC;";
    $stmt14 = "SELECT * FROM shopping  where id ='74' ORDER BY id DESC;";
    $stmt15= "SELECT * FROM shopping  where id ='75' ORDER BY id DESC;";
    $stmt16 = "SELECT * FROM shopping  where id ='76' ORDER BY id DESC;";
    
    
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronics</title>
    <link rel="shortcut icon" href="../images/Sellcia logo2.jpg" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="../css/vela.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="nav1">
            <li><a><img src="../images/Sellcia logo2.jpg" alt=""></a></li>
                <li class="accessories"><a>
                    <div class="login">Login
                        <div class="loginlinks">
                                <button type="button" class="buttonlogin"><a  href="loginform.php" >Login</a></button>
                                <button type="button"><a href="joinform.php">Join</a></button>
                        </div>
                    </div>
                </a></li>
            <li class="accessories1"><a>Cart</a></li>
            <li class="accessories1"><a>Help</a></li>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../electronics.php"class="active">Electronics</a></li>
                <li><a href="../shoes.php">Shoes</a></li>
                <li><a href="../phonesandtablets.php">Phones and Tablets</a></li>
                <li><a href="../books.php">Books</a></li>
                <li><a href="../uploadform.php">Uploads</a></li>
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
    </div>
    
    <div class="container-grid">
        <div id="grid">
            <div class="slot3">
                    <div class="img" style="height:-200px;"><img src="http://localhost:8888/vela/uploads/<?php echo $rows3['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows3['Product'];?></div>
                    <div class="description"><?php echo $rows3['Description'];?></div>
                    <div class="price">KSh <?php echo $rows3['Cost'];?></div> 
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
</body>
</html>