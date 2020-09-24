<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	$email = $_POST['email'];
        $tname = $_POST['tname'];
	$tplace = $_POST['tplace'];
	$tdist = $_POST['tdist'];
	$taddress = $_POST['taddress'];
	$tdesc = $_POST['tdesc'];
	$timage = $_POST['timage'];
        $tlatitude = $_POST['latitude'];
	$tlongitude= $_POST['longitude'];
        

	
$sql ="SELECT id FROM temple ORDER BY id ASC";


$res = mysqli_query($conn,$sql);
 
  
 while($row = mysqli_fetch_array($res)) {

 $id = $row['id'];

}
 $path = "uploads/$id.png";

 $actualpath = "http://vairaisathish.5gbfree.com/Meyyunarvom/$path";
 
$sql = "INSERT INTO temple(name, email, place, tname, tplace, tdist, taddress, tdesc,  timage,latitude,longitude,active_flag_user, active_flag_admin, active_flag_publish) VALUES ((SELECT name FROM users AS a WHERE email = '$email'
), '$email', (SELECT place FROM users AS a WHERE email = '$email'
), '$tname', '$tplace', '$tdist', '$taddress', '$tdesc', '$actualpath' , '$tlongitude', '$tlongitude','Y','Y','N')";
 
 if(mysqli_query($conn,$sql))
 {

  file_put_contents($path,base64_decode($timage));
  
  echo 'Successfully Added Your Temple;';
 }
 else{
   echo 'Error in Uploading;';
 }

}
$conn->close();


?>