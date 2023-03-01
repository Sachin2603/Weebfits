<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weebfits Clothing</title>

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

    <link rel="stylesheet" href="style.css">

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
    <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
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
    
    </nav>
    <!--- Navbar ends here-->

    <div class="container-fluid">
        <div class="row textboxes text-center">
            <div class="col-4 textboxes1">
                <p>Free Shipping on orders over R650</p>
            </div>
            <div class="col-4 textboxes1">
                <p>Get the latest Anime Apparel Here</p>
            </div>
            <div class="col-4 textboxes2">
                <p>Free International Shipping on <br> orders over R1500</p>
            </div>
        </div>
    </div>

    <!--- Carousel starts here-->
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./images/banner1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/banner2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/banner3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    
    <!--- Carousel ends here-->

    <!--- PRODUCT SLIDER STARTS HERE-->
    <script>
        $(document).ready(function () {
            $('#autoWidth').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function () {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });
        });
    </script>

    <br>

    <div class="product1 text-center">
        <h2>-MOST POPULAR-</h2>
        <span><a href="catalogue.php">VIEW ALL OUR PRODUCTS</a></span>
    </div>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden">
<?php
    function db_result_to_array($result){
            $res_array=array();
            for ($count=0; $row=@mysql_fetch_array($result); $count++){
                $res_array[$count]=$row;
              }	
	    return $res_array;
            }


    $products = array(accessory1,accessory2,accessory3,accessory4,accessory5,accessory6,accessory7,accessory8,accessory9,accessory10,accessory11,accessory12,accessory13,accessory14,accessory15,hoodie1,hoodie2,hoodie3,hoodie4,hoodie5,hoodie6,hoodie7,hoodie8,hoodie9,hoodie10,hoodie11,hoodie12,hoodie13,hoodie14,hoodie15,shirt1,shirt2,shirt3,shirt4,shirt5,shirt6,shirt7,shirt8,shirt9,shirt10,shirt11,shirt12,shirt13,shirt14,shirt15,shoe1,shoe2,shoe3,shoe4,shoe5,shoe6,shoe7,shoe8,shoe9,shoe10,shoe11,shoe12,shoe13,shoe14,shoe15);
    shuffle($products);
    //get categories out of database
       $user = "weebfits";
       $pass = "animestore100";
       $db = "weebfits";
       $link = mysql_connect( "mars", $user, $pass );
       if ( ! $link )
           die( "Couldn't connect to MySQL" );
       mysql_select_db( $db, $link )
           or die ( "Couldn't open $db: ".mysql_error() );
           for( $i=0;$i<10;$i++){
               $query= "SELECT product, description, price FROM inventory WHERE product='".$products[$i]."' ";
               $result = mysql_query($query) or die('Error, query failed');
               $num_rows = mysql_num_rows( $result );       
               if ($num_rows == 0)
                   print "Sorry there are no products in your database.";
               else  {
               $result=db_result_to_array($result);
               print "<li class=\"item-a\">";
                  print"  <div class=\"box\">";
                        print" <div class=\"slide-img\">";
                           print" <img alt=\"\" src=\"./images/".$result[0]['product'].".jpg\">";
                       print" </div>";
                       print" <div class=\"detail-box\">";
                           print" <div class=\"type\">";
                               print" <a href=\"detailed.php?productid=".$result[0]['product']."\">".$result[0]['description']."</a>";
                               print" <span>".$result[0]['description']."</span>";
                           print" </div>";
                           print" <h5><b>".$result[0]['price']."</b></h5>";
                       print" </div>";
                   print" </div>";
               print" </li>";
           }
       }


            

                        

?>

        </ul>

    </section>
    <!--- PRODUCT SLIDER ENDS HERE-->

    <!--- COMPETITION STARTS HERE-->
    <div class="competition">
        <img class="img-fluid" src="./images/banner4.png" alt="">
    </div>
    <!--- COMPETITION ENDS HERE-->
<br>
    <!--SHOP HERE-->
    <div class="container">
        <h2 class="text-center shop1">-OUR STORE-</h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-5 shop2">
                <h3>HOODIES</h3>
                <hr>
                <img class="img-fluid" width="400px" height="auto" src="./images/hoodiecover.png" alt=""><br>
                <a href="#">SHOP HOODIES</a>
            </div>
            <div class="col-2"></div>
            <div class="col-5 shop2">
                <h3>T-SHIRTS</h3>
                <hr>
                <img class="img-fluid" width="400px" height="auto" src="./images/tshirtcover.png" alt=""><br>
                <a href="#">SHOP T-SHIRTS</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-5 shop2">
                <h3>SHOES</h3>
                <hr>
                <img class="img-fluid" width="400px" height="auto" src="./images/shoe13.jpg" alt=""><br><br>
                <a href="#">SHOP SHOES</a>
            </div>
            <div class="col-2"></div>
            <div class="col-5 shop2">
                <h3>ACCESSORIES</h3>
                <hr>
                <img class="img-fluid" width="400px" height="auto" src="./images/accessory6.jpg" alt=""><br><br>
                <a href="#">ACCESSORIES</a>
            </div>
        </div>
    </div>
<br><br>
    <!--SHOP ENDS HERE-->
    <div class="container-fluid text-center end">
        <h3>CAN'T FIND WHAT YOU'RE LOOKING FOR? <br>FEEL FREE TO CONTACT US</h3>
    </div>

<br><br>

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