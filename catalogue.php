<!DOCTYPE html >
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

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

    <link rel="stylesheet" href="style3.css">

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
	

	<style>
		.imgThumbnails{
		width:250px;
		float: left;
		padding:7px;

		}

		.button{
		font-family: "Quicksand", sans-serif;
		background-color:white;
		border:2px solid black;
		border-radius:5px;
		color:black;
		transform: translateX(50%)}

		.button:hover{
		transition: 0.7s;
		background-color:black;
		color:orange;
		text-shadow: 0 0 2px, 0 0 5px, 0 0 8px orange;
		}

		.description, .price{
		font-family: "Quicksand", sans-serif;
		text-transform: capitalize;
		text-align: center;
		color:black;
		}

.next, .prev {
color:black}
		
	</style>


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

    </nav><br>

	<div class="container-fluid nav2 text-center">
		<div class="row">
			<div class="col-3">
				<a class="nav3" href="catalogue.php?page=1">Accessories</a>
			</div>
			<div class="col-3">
				<a href="catalogue.php?page=2">Hoodies</a>
			</div>
			<div class="col-3">
				<a href="catalogue.php?page=3">Shirts</a>
			</div>
			<div class="col-3">
				<a href="catalogue.php?page=4">Shoes</a>
			</div>
		</div>
	</div>



    <!--- Navbar ends here-->


    <!--- Contact Us starts here-->
    <br>
    
<?
        
        function db_result_to_array($result){
            $res_array=array();
            for ($count=0; $row=@mysql_fetch_array($result); $count++){
                $res_array[$count]=$row;
              }	
	    return $res_array;
            }


       function display_products($product_array){
           $count=0;
           $description = array();
           $price = array();
           $urlarray = array();
           print "<table>";
           foreach ( $product_array as $row ){
               if($count==0){
                   print "<tr>\n";
	           print "<tr>\n";
                   print "<tr>";
               }
	       $url="detailed.php?productid=".($row["product"]);
              
               print "<td>";
	       print("<img xmlns='http://www.w3.org/2000/svg/' src='./images/".$row["product"].".jpg' class='imgThumbnails'>");
	       //echo"<object style=\"overflow:hidden;\"   data=\"./images/".$row["product"].".svg\" type=\"image/svg+xml\"></object>";  
	       echo "</td>";
               array_push($description,$row[description]);
               array_push($price,$row[price]);
               array_push($urlarray,$url);
               

                          
               $count = $count+1;
               if($count%4==0){
                   print "</tr>\n";
                   print "<tr>\n";
                   for($i=0;$i<4;$i++){
                       echo "<td class='description'>$description[$i]\n<br>" ;
                       echo nl2br("R$price[$i].00\n<br>"); 
                       print "<a href=".$urlarray[$i]."><button class='button'>Buy Now</button></a></td>"; 
                   }
                   $description = array();
                   $price = array();
                   $urlarray = array();
                   print "</tr>\n";
                   print "<tr>\n";
               }
               if($count == 15 ){
                   print "</tr>\n";
                   print "<tr>\n";
                   for($i=0;$i<3;$i++){
                       echo "<td class='description'>$description[$i]\n<br>" ;
                       echo nl2br("R$price[$i].00\n<br>"); 
                       print "<a href=".$urlarray[$i]."><button class='button'>Buy Now</button></a></td>"; 
                   }
                   $description = array();
                   $price = array();
                   $urlarray = array();
                   print "</tr>\n";
                   print "<tr>\n";
                   $count = 0;
                   print "</tr>\n";
                   print "</table>\n";
                   print "<table>";
                   print "<tr>";
               }
           }
           
       }





       //get categories out of database
       $user = "weebfits";
       $pass = "animestore100";
       $db = "weebfits";
       $link = mysql_connect( "mars", $user, $pass );
       if ( ! $link )
           die( "Couldn't connect to database. Please leave a <a href=\"comment.php\">comment</a> and we will fix the error as soon as possible. " );
       mysql_select_db( $db, $link )
           or die ( "Couldn't open $db: ".mysql_error()."Please leave a <a href=\"comment.php\">comment</a> and we will fix the error as soon as possible." );

       // how many rows to show per page
       $rowsPerPage = 15;
       // by default we show first page
       $pageNum = 1;
       // if $_GET['page'] defined, use it as page number
       if(isset($_GET['page'])){
         $pageNum = $_GET['page'];
       }
       // counting the offset
       $offset = ($pageNum - 1) * $rowsPerPage;
       

      
      $query= "SELECT product, description, price FROM inventory ORDER BY product limit $offset,$rowsPerPage"; 
       $result = mysql_query($query) or die('Error, query failed');
       $num_rows = mysql_num_rows( $result );
       
       if ($num_rows == 0)
           print "Sorry ,we are having trouble with our database.Please leave a <a href=\"comment.php\">comment</a> and we will fix the error as soon as possible. ";
       else  {
            $result=db_result_to_array($result);
            display_products($result);
       }	
       
       //rest of paging
       // how many rows we have in database
       $query = "SELECT COUNT(product) AS numrows FROM inventory ";
       //echo $query."<br>\n";
       $result = mysql_query($query) or die('Error, query failed');
       $row = mysql_fetch_array($result);
       $numrows = $row['numrows'];
       // how many pages we have when using paging?
       $maxPage = ceil($numrows/$rowsPerPage);
       // print the link to access each page
       $self = $_SERVER['PHP_SELF'];
       $nav = '';
       
       for($page = 1; $page <= $maxPage; $page++)
          {
         if ($page == $pageNum){
           $nav .= " $page "; // no need to create a link to current page
         }else{
           $nav .= " <a href=\"$self?page=$page\">$page</a> ";
         }
       }
       // creating previous and next link

       // plus the link to go straight to
       // the first and last page
       echo "<br><br>";
       if ($pageNum > 1){
         $page = $pageNum - 1;
         $prev = " <a href=\"$self?page=$page\">[Prev]</a> ";
         $first = " <a href=\"$self?page=1\">[First Page]</a> ";
       }else{
         $prev = '&nbsp;'; // we're on page one, don't print previous link
         $first = '&nbsp;'; // nor the first page link
       }
       if ($pageNum < $maxPage){
         $page = $pageNum + 1;
         $next = " <a href=\"$self?page=$page\">[Next]</a> ";
         $last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
       }else{
         $next = '&nbsp;'; // we're on the last page, don't print next link
         $last = '&nbsp;'; // nor the last page link
       }
       // print the navigation link

       echo $first . $prev . $nav . $next . $last;



       mysql_close( $link );
?>

    <!--- Catalogue Ends here-->


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

