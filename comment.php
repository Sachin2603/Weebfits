


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave A Review</title>

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

    <link rel="stylesheet" href="style2.css">

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


    <!--- About Us starts here-->
    <br>
    <?php 
// Set these to get the guestbook more personal.
// ========================================
$gbfile = "comment.txt"; // The file that all guestbook entrys should be saved in.
$thisfile = "comment.php"; // The name of this file.
$dateshow = "Y-m-d - H:i:s"; // Decides how the date should be shown. http://www.w3schools.com/php/func_date_date.asp
$username = "weebfits"; // Admin username.
$password = "animestore100"; // Admin password.
$wrongpass = "Sorry. The password you have entered is incorrect."; // Text to show when the wrong password has been entered.
$wrongname = "Sorry. The username you have entered is incorrect."; // Text to show when the wrong username has been entered.
$thankstxt = "<meta http-equiv='refresh' content='3;URL=$thisfile'><p>Thank you for writing in my guestbook!<br>You will be sent back in 3 seconds. If not click <a href='$thisfile'>here</a></p>"; // The text that the user will see after entering something in the guestbook.
$errornoname = "<meta http-equiv='refresh' content='3;URL=$thisfile'><p>You have to enter a name!<br>You will be sent back in 3 seconds. If not click <a href='$thisfile'>here</a></p>"; // Text to print out when no name has been entered in the entry.
$errornomsg = "<meta http-equiv='refresh' content='3;URL=$thisfile'><p>You have to enter a message!<br>You will be sent back in 3 seconds. If not click <a href='$thisfile'>here</a></p>"; // Text to print out when no message has been entered in the entry.
$gbedited = "<meta http-equiv='refresh' content='3;URL=$thisfile'><p>Guestbook has been edited!<br>You will be sent back in 3 seconds. If not click <a href='$thisfile'>here</a></p>"; // Text to print out when guestbook has been edited.
// ========================================

// Do not change under here
// ========================================
$gbpage = "$_SERVER[PHP_SELF]";
$date = date("$dateshow");
$name = htmlentities(strip_tags($_POST['name']));
$email = htmlentities(strip_tags($_POST['email']));
$homepage = htmlentities(strip_tags($_POST['homepage']));
$message = nl2br(htmlentities(strip_tags($_POST['message'])));
$message = str_replace(array("\r", "\n"), '', $message);
$message = wordwrap($message, 75, "<br />", true);
$printfull = "<table width=\"400\" border=\"1\" align=\"center\" bordercolor=\"#CCCCCC\"><tr><td width=\"80\"><strong>Date:</strong></td><td width=\"320\">$date</td></tr><tr><td><strong>Name:</strong></td><td>$name</td></tr><tr><td><strong>Email:</strong></td><td><a href=\"mailto:$email\">$email</a></td></tr><tr><td><strong>Homepage:</strong></td><td><a href=\"$homepage\" target=\"_blank\">$homepage</a></td></tr><tr><td><strong>Message:</strong></td><td>$message</td></tr></table><br> \n";
$printnoemail = "<table width=\"400\" border=\"1\" align=\"center\" bordercolor=\"#CCCCCC\"><tr><td width=\"80\"><strong>Date:</strong></td><td width=\"320\">$date</td></tr><tr><td><strong>Name:</strong></td><td>$name</td></tr><td><strong>Homepage:</strong></td><td><a href=\"$homepage\" target=\"_blank\">$homepage</a></td></tr><tr><td><strong>Message:</strong></td><td>$message</td></tr></table><br> \n";
$printnopage = "<table width=\"400\" border=\"1\" align=\"center\" bordercolor=\"#CCCCCC\"><tr><td width=\"80\"><strong>Date:</strong></td><td width=\"320\">$date</td></tr><tr><td><strong>Name:</strong></td><td>$name</td></tr><tr><td><strong>Email:</strong></td><td><a href=\"mailto:$email\">$email</a></td></tr><tr><td><strong>Message:</strong></td><td>$message</td></tr></table><br> \n";
$printnoemailpage = "<table width=\"400\" border=\"1\" align=\"center\" bordercolor=\"#CCCCCC\"><tr><td width=\"80\"><strong>Date:</strong></td><td width=\"320\">$date</td></tr><tr><td><strong>Name:</strong></td><td>$name</td></tr><tr><td><strong>Message:</strong></td><td>$message</td></tr></table><br> \n";
// ========================================

// SCRIPT START !!!
// ========================================
switch($_GET['id'])
{
default:
	?>
	<p align="left"><a href="<?php echo $gbpage; ?>?id=2">Admin</a></p>
	<table align="center"><form action="<?php echo $gbpage; ?>?id=1" method="post" name="submitform">
	<tr><td><strong class='info'>Name:</strong></td><td><input type="text" name="name" size="40" maxlength="50"></td></tr>
	<tr><td><strong class='info'>Email:</strong></td><td><input type="text" name="email" size="40" maxlength="50"></td></tr>
	<tr><td><strong class='info'>Homepage:</strong></td><td><input type="text" name="homepage" size="40" maxlength="50" value="http://"></td></tr>
	<tr><td valign="top"><strong class='info'>Message:</strong></td><td><textarea name="message" cols="30" rows="7"></textarea></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
	</form></table><br>
	<?php
	$gb = file($gbfile);
	$gb = array_reverse($gb);
	foreach ($gb as $guestbook) { echo stripslashes($guestbook); }
break;

case 1:
	if($name == "")
		{ echo $errornoname; }
	elseif($message == "")
		{ echo $errornomsg; }
	elseif($email == "")
	{
		if($homepage == "" || $homepage == "http://")
		{
		$writeinfo = $printnoemailpage;
		$printer = fopen($gbfile,"a");
		fwrite($printer,$writeinfo);
		fclose($printer);
		echo $thankstxt;
		}
		else
		{
		$writeinfo = $printnoemail;
		$printer = fopen($gbfile, 'a');
		fwrite($printer,$writeinfo);
		fclose($printer);
		echo $thankstxt;
		}
	}
	elseif($homepage == "" || $homepage == "http://")
	{
	$writeinfo = $printnopage;
	$printer = fopen($gbfile, 'a');
	fwrite($printer,$writeinfo);
	fclose($printer);
	echo $thankstxt;
	}
	else
	{
	$writeinfo = $printfull;
	$printer = fopen($gbfile, 'a');
	fwrite($printer,$writeinfo);
	fclose($printer);
	echo $thankstxt;
	}
break;
case 2:
	?>
	<table align="center"><form action="<?php echo $gbpage; ?>?id=3" method="post" name="submitform">
	<tr><td><strong>Username:</strong class='info'></td><td><input type="text" name="adminname" size="20"></td></tr>
	<tr><td><strong>Password:</strong class='info'></td><td><input type="password" name="adminpass" size="20"></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="Login"></td></tr>
	</form></table>
	<?php
break;
case 3:
	if($_POST["adminname"] == $username) { if($_POST["adminpass"] == $password) {
	?>
	<table align="center"><form name="guestbookedit" method="post" action="<?php echo $gbpage; ?>?id=4">
	<tr><td><textarea name="gbedit" cols="65" rows="30" wrap="off">
	<?php
	$gb = file("$gbfile");
	$gb = array_values($gb);
	foreach ($gb as $guestbook) { echo stripslashes($guestbook); }
	?>
	</textarea></td></tr>
	<tr><td  class='info'>Enter admin password to edit entrys: <input type="password" name="psw" size="20"></td></tr>
	<tr><td  class='info'><input type="submit" name="Submit" value="Save"><input type="reset" name="Reset" value="Reset"></td></tr>
	</form></table>
	<?php
	} else { echo "$wrongpass"; } }
	else { echo "$wrongname"; }
break;
case 4:
	if($_POST["psw"] == $password)
	{
		$writeinfo = $_POST['gbedit'];
		$writeinfo = stripslashes($writeinfo);
		$printer = fopen($gbfile, 'w');
		fwrite($printer,$writeinfo);
		fclose($printer);
		echo $gbedited;
	}
	else { echo "$wrongpass"; }
break;
}
// ========================================
// SCRIPT END !!!
?>

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


















