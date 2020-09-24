<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];


$response=array();
$response["result"]=array();



	  
		$sql= "SELECT id, question, answer FROM doubts where email= '$email' and active_flag_user = 'Y'";
      
	  $r=mysqli_query($conn,$sql);
	 // $res=mysqli_fetch_array($r); 


		   while($row=mysqli_fetch_array($r))
		   {
			$tmp=array();
			
			$tmp["id"] = $row['id'];
                        $tmp["question"] = $row['question'];
			$tmp["answer"] = $row['answer'];
	     	array_push($response["result"],$tmp);
		  }
header('Content-Type: application/json');
echo json_encode($response);

		
$conn->close();
  }
	    


?>