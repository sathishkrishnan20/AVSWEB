<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];
$pass = $_POST['password'];
 
    if($email == "admin@avs.com" && $pass=="admin123")
    {
           echo "success;";
    }
    else {
          echo "please provide correct details;";
    }

 
}
?>