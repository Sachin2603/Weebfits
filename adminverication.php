<?php

  $username = $HTTP_POST_VARS['username'];
  $password = $HTTP_POST_VARS['password'];



  if(isset($_POST['submit']))
    { 
      if($username=="weebfits" and $password=="animestore100")
      {
          header('Location: admin.php');
          exit;
      }  
      else if($username!="weebfits" and $password!="animestore100")
      {
        print "The password and username you have entered is incorrect. Please try again<br><br>";
        print "<a href=\"adminlogin.php\"><button>Try Again</button></a>";
      }
      else if($username!="weebfits")
      {
        print "The username you have entered is incorrect. Please try again<br><br>";
        print "<a href=\"adminlogin.php\"><button>Try Again</button></a>";
      }
      else if($password!="password")
      {
        print "The password you have entered is incorrect. Please try again<br><br>";
        print "<a href=\"adminlogin.php\"><button>Try Again</button></a>";
      }
      
    } 

?>