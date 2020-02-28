<?php


require "conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$personal_id= $_POST['pi'];
	$first_name=$_POST['fName'];
	$last_name = $_POST['lName'];
  $email = $_POST['email'];
  $inc = $_POST['included'];
  $brand = $_POST['brand'];
  $ship = $_POST['ship'];
  $saildate = $_POST['saildate'];
  $comments = $_POST['comments'];
  if($inc=="") $inc=0;
  else $inc=1;

  $check="SELECT * FROM guest WHERE personal_id = '$personal_id'";
  $rs = mysqli_query($conn,$check);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
  if($data[0] > 1) {
      header('Location:Register.php?response=e');
    }
  else {

    $query = "INSERT INTO guest (personal_id, first_name, last_name, email_address, brand, email_list_flag, ship, sail_date, comments) values ('$personal_id','$first_name','$last_name','$email','$brand','$inc','$ship','$saildate','$comments')";
      if(mysqli_query($conn, $query)==true){
          echo true;
          header('Location:Register.php?response=d');
      }
      else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
  }


}	
?>

