<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
        $id = $_POST['id']; 
        $tname = $_POST['tname'];
	$tplace = $_POST['tplace'];
	$tdist = $_POST['tdist'];
	$taddress = $_POST['taddress'];
	$tdesc = $_POST['tdesc'];
	
        $timage = $_POST['timage'];
        
        $tlatitude = $_POST['latitude'];
	$tlongitude= $_POST['longitude'];

 $update ="user";
 $path = "uploads/$id$update.png";
 $actualpath = "http://vairaisathish.5gbfree.com/Meyyunarvom/$path";

        
               $sql = "UPDATE temple set tname = '$tname', tplace = '$tplace', tdist = '$tdist', taddress = '$taddress', tdesc = '$tdesc', timage = '$actualpath', latitude= '$tlatitude', longitude= '$tlongitude', active_flag_admin ='Y', active_flag_user='Y', active_flag_publish ='N' where id='$id'";

	

	
		 if(mysqli_query($conn,$sql))
                 {
                         file_put_contents($path,base64_decode($timage)); 
			 echo 'Updated Successfully by User;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}

$conn->close();
               
             
	}


 

?>