<?php


require "conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$personal_id= $_POST['removeID'];
	
	echo $personal_id;
	$query = "DELETE FROM guest where personal_id='$personal_id'";
    if(mysqli_query($conn, $query)==true){
        echo true;
        header('Location:Register.php');
    }
    else {
      echo "Error: " . $query . "<br>" . $db->error;
  }

}	
?>

