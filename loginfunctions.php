<?php
  session_start();
?>
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

    <link rel="stylesheet" href="loginfunctions.css">

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


<?php 

 class Login{
    var $email;
    var $password;

    function createAccountInstance($email,$password)
    { 

      $this->email = $email;
      $this->password = $password;

    }

    function getEmail()
    {
      return $this->email;   
    }
    function setEmail($email)
    {
      $this->email = $email;
    }

    function getPassword()
    {
      return $this->password;   
    }
    function setPassword($password)
    {
      $this->password = $password;
    }
    
  
    
    
  }//class ends here

  if(isset($_POST['submit']))
    { 
      login();  
    } 
    
    function db_result_to_array($result){
            $res_array=array();
            for ($count=0; $row=@mysql_fetch_array($result); $count++){
                $res_array[$count]=$row;
              }	
	    return $res_array;
            }


    function login()
    {
        $user = "weebfits";
        $pass = "animestore100";
        $db = "weebfits";
        $link = mysql_connect( "mars", $user, $pass);
        if ( ! $link )
          die( "Couldn't connect to MySQL" );
        mysql_select_db( $db, $link )
          or die ( "Couldn't open $db: ".mysql_error());

        $emails=  $_POST['email'];
        $query= "SELECT * FROM user WHERE email='$emails'";
        $result = mysql_query($query);
        if(mysql_num_rows($result) == 0) {
          print "<p class='text1'>Sorry. Your account is not in our database. Please sign in<p><br>";
          print "<a href=\"registration.php\" class='text2'>Sign in</a>";
        } else {
          $result = db_result_to_array($result);
          if($result['pword']!=$_POST['password']){
            print "<p>Sorry ,your password is incorrect. Please try again.<a href=\"login.php\">Login</a></p>";
          }
          $login = new Login(); 
	  $login->createAccountInstance($_POST['email'],$_POST['password']);
          $_SESSION['email'] = $_POST['email'];
          $url = "index.php";
          if (!headers_sent())
          {    
            header('Location: '.$url);
            exit;
          }
          else
          {  
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
           }
          exit;

          
        }
        
    }



?>
<br>

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



