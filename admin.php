
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weebfits Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="admin.css">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--TOP BOX FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">

    <!--NAVBAR FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">

    <!--TEXTBOXES-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--- PRODUCT SLIDER-->
    <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/style1.css" />
    <link rel="stylesheet" type="text/css"
        href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
    <script src="http://schauhan.in/Examples/ecommerce_product_slider/jquery-3.5.1.js"></script>
    <script src="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.js"></script>



</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 top-left">
                <a href="login.php">Login / Sign Up</a>
            </div>
            <div class="col-6 top-right">
                <a href="cart.php?action=log">CART <i style="font-size:18px" class="fa">&#xf07a;</i></a>
            </div>
        </div>

    </div>

    <div class="container-fluid heading">
        <h1 class="text-center">WEEBFITS</h1>
        <br>
    </div>

    <!--- Navbar starts here-->

    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item col-3 text-center">
                <a class="nav1 nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item col-3 text-center">
                <a class="nav1 nav-link" href="aboutus.html">About Us</a>
            </li>
            <li class="nav-item col-3 text-center">
                <a class="shop nav-link" href="catalogue.php">Shop Here</a>
            </li>
            <li class="nav-item col-3 text-center">
                <a class="nav1 nav-link" href="contactus.html">Contact Us</a>
            </li>
        </ul>

    </nav> <br>
    <!--- Navbar ends here-->
<!--LOGO AND NAV-->
	<div class="admin text-center">
        <h1>WEEBFITS - ITEM PAGE</h1><br>
	<a href="admin.php? action=products" class="list">View Products</a><br><br>
	<a href="admin.php? action=order" class="list">View Orders</a><br><br>
	<a href="admin.php? action=user" class="list">View Users</a><br><br>
            
        </div><br>


        <?php

        function db_result_to_array($result){
            $res_array=array();
            for ($count=0; $row=@mysql_fetch_array($result); $count++){
                $res_array[$count]=$row;
              }	
	          return $res_array;
            }
        //orders table
        function orders(){
            
            $userDB= "weebfits";
            $passDB= "animestore100";
            $db= "weebfits";
            $link= mysql_connect("mars", $userDB, $passDB);
            if(! $link)
                die("Couldn't connect to MySQL");
            mysql_select_db($db, $link)
                or die("Couldn't open $db: ".mysql_error());
            
            $query= "SELECT * FROM orders ORDER BY orderid";
            $result= mysql_query($query);
            $num_rows= mysql_num_rows($result);

            if ($num_rows == 0)
           print "Sorry there are no products in your database.";
           else  {
               //code display here
               $result = db_result_to_array($result);
               print "<table>";
                   print "<tr><td>Order ID</td><br> <td>Email</td><br><td>Product</td><br><td>Price per Product</td><br><td>Quantity</td></tr>";                  
               foreach ( $result as $row ){
                   print "<tr>";
                   print "<td>$row[orderid]</td>";
                   print "<td>$row[email]</td>";
                   print "<td>$row[description]</td>";
                   print "<td>$row[priceperproduct]</td>";
                   print "<td>$row[quantity]</td>";
                   print "</tr>";
               }
               print "</table>";
               
           }
        }
         
        //products
        function products(){
            //connect to database
            $userDB= "weebfits";
            $passDB= "animestore100";
            $db= "weebfits";
            $link= mysql_connect("mars", $userDB, $passDB);
            if(! $link)
                die("Couldn't connect to MySQL");
            mysql_select_db($db, $link)
                or die("Couldn't open $db: ".mysql_error());
            
            $query= "SELECT * FROM inventory ORDER BY product";
            $result= mysql_query($query);
            $num_rows= mysql_num_rows($result);

            if ($num_rows == 0)
           print "Sorry there are no products in your database.";
           else  {
              //code display here
              $result = db_result_to_array($result);
              print "<table>";
                   print "<tr><td>Product</td><br> <td>Type</td><br><td>Price</td><br><td>Description</td></tr>";                  
               foreach ( $result as $row ){
                   print "<tr>";
                   print "<td>$row[product]</td>";
                   print "<td>$row[type]</td>";
                   print "<td>$row[price]</td>";
                   print "<td>$row[description]</td>";
                   print "</tr>";
               }
               print "</table>";
           }
        }
        
        //users
        function users(){
            //connect to database
            $userDB= "weebfits";
            $passDB= "animestore100";
            $db= "weebfits";
            $link= mysql_connect("mars", $userDB, $passDB);
            if(! $link)
                die("Couldn't connect to MySQL");
            mysql_select_db($db, $link)
                or die("Couldn't open $db: ".mysql_error());
            
            $query= "SELECT * FROM user ORDER BY fname";
            $result= mysql_query($query);
            $num_rows= mysql_num_rows($result);

            if ($num_rows == 0)
           print "Sorry there are no products in your database.";
           else  {
               //code display here
               $result = db_result_to_array($result);
               print "<table>";
                   print "<tr><td>First Name</td><br> <td>Surname</td><br><td>Email</td><br><td>Password</td><br></tr>";                  
               foreach ( $result as $row ){
                   print "<tr>";
                   print "<td>$row[fname]</td>";
                   print "<td>$row[lname]</td>";
                   print "<td>$row[email]</td>";
                   print "<td>$row[pword]</td>";
                   print "</tr>";
               }
               print "</table>";
           }
        }
            
        if (isset($_GET["action"]))
        {
	          $action  = $_GET["action"];
	          if ($action == "products")
	          {
                products();
            }
            if ($action == "order")
	          {
                orders();
            }
            if ($action == "user")
	          {
                users();
            }
        }
         
        
           
        ?>

    <!--- Contact Us starts here-->


    <!--FOOTER STARTS HERE-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify about">Welcome to Weefits Anime Apparel, your number one source for all anime apparal. We're dedicated to giving you the very best of products, with a focus on 
dependability, customer service and uniqueness. Founded in 2021 by 4 members, Weebfits has come a long way from its beginnings. We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.Note, Weebfits is a fictitious site. </p>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h6>Products</h6>
                    <ul class="footer-links">
                        <li><a href="catalogue.php?page=2">Hoodies</a></li>
                        <li><a href="catalogue.php?page=3">T-Shirts</a></li>
                        <li><a href="catalogue.php?page=4">Shoes</a></li>
                        <li><a href="catalogue.php?page=1">Accessories</a></li>

                    </ul>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="catalogue.php">Shop Now</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="comment.php">Leave a Comment</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="index.php">Weebfit Clothing</a>.
                    </p>
                </div>
    
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER ENDS HERE-->
</body>

</html>

