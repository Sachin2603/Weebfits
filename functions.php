<?php
    session_start(); 

class Signup{
    var $fname;
    var $lname;
    var $email;
    var $password;

    function createAccount($fname,$lname,$email, $password)
    { 
      $this->fname = $fname;
      $this->lname = $lname;
      $this->email = $email;
      $this->password = $password;
    }//
    
    function getFname(){
      return $this->fname;
    } 
    function setFname($fname){
      $this->fname = $fname;
    }
 
    function getLname(){
      return $this->lname;
    } 
    function setLname($lname){
      $this->lname = $lname;
    }

    function getEmail(){
      return $this->email;
    } 
    function setEmail($email){
      $this->email = $email;
    }
    function getPassword(){
      return $this->password;
    } 
    function setPassword($password){
      $this->password = $password;
    }

    function addUser($fname, $lname, $email, $password)
    {
    $user = "weebfits";
    $pass = "animestore100";
    $db = "weebfits";
    $link = mysql_connect( "mars", $user, $pass );
    if ( ! $link )
      die( "Couldn't connect to MySQL" );
    mysql_select_db( $db, $link )
      or die ( "Couldn't open $db: ".mysql_error());
    
    //added here
    if (empty($fname)||empty($lname)||empty($email)||empty($password)){
       print "<h1>Error! Please fill in all areas before proceeding. Click <a href=\"registration.php\">here</a>to retry.</h1>";
    }else{
      $query="INSERT INTO user(fname, lname, email, pword) VALUES ('$fname','$lname','$email','$password')"; 
    }
   

    

    $_SESSION['email'] = $email;
    

    mysql_query($query, $link)
      or die("Couldn't add data to table: ".mysql_error()."Please leave a <a href=\"comment.php\">comment</a> and we will sort it out as soon as possible");
    mysql_close($link);


    }
} //class ends here



if(isset($_POST['submit']))
{
  
  signup();  
}

function signup()
{
  $signup= new Signup();
  $signup->createAccount($_POST['fname'],$_POST['lname'],$_POST['email'], $_POST['password']);
  $signup->addUser($_POST['fname'],$_POST['lname'],$_POST['email'], $_POST['password']);
  header('Location: regInfo.php');
  exit;
}



   
?>

