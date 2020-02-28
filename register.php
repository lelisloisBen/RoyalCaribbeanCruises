<?php
require "conn.php";
if(isset($_GET['response'])){
	$r=$_GET['response'];
	if($r=="e"){
		$response="User Already Exists";
	}else if($r="d"){
		$response="User Successfully Registered";
	}
}

?>
<head>
<title>Guest Registration</title>

<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>
<script type="text/javascript">
	alert("<?php echo $response; ?>");
</script>
</head>
<body>
	<H1 style="text-align: center;margin-top: 40px;color:#2F7F96">GUEST REGISTRATION FORM</H1>
	<form name="frmregister" class="form" action="addguest.php" method="post" onSubmit="return validate();"	>
		<table class="form" border="0">
			<tr><th><h2>Guest Information</h2></th></tr>
			<tr>
				<th><label for="pi"><strong>Personal Identification</strong></label></th>
				<td><input class="inp-text spinner" name="pi" id="pi" type="number" size="7" /></td>
			</tr>

			<tr>
				<th><label for="fName"><strong>First Name:</strong></label></th>
				<td><input class="inp-text" name="fName" id="fName" type="text" size="30" /></td>
			</tr>
			<tr>
				<th><label for="lName"><strong>Last Name:</strong></label></th>
				<td><input class="inp-text" name="lName" id="lName" type="text" size="30" /></td>
			</tr>
			<tr>
				<th><label for="email"><strong>Email:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="email" size="30" /></td>
			</tr>
			<tr>
				<th><label for="included"><strong>Include in Email List:</strong>  </label></th>
				<td><input class="container" type="checkbox" id="included" name="included"></td>
				
			</tr>
			<tr><th><h2>Cruise Preference</h2></th></tr>
			
			<tr>
				<th><label><strong>Brand</strong></label></th>
				<th>
					
				  	<label for="celeb" class="container">Celebrity
				  	<input type="radio" id="celeb" name="brand" value="C">
					<span class="checkmark"></span></label><br>
				  	
				  	<label for="azam"  class="container">Azamara
				  	<input type="radio" id="azam" name="brand" value="Z">
				  	<span class="checkmark"></span></label><br>
				  	
				  	<label for="royal"  class="container">Royal
				  	<input type="radio" id="royal" name="brand" value="R">
				  	<span class="checkmark"></span></label>
				</th>
			</tr>
			<tr>
				<th><label for="ship"><strong>Choose a Ship:</strong> </label></th>
				<td>
					<select id="ship" name="ship">
					  	<option value="ship1a">Ship 1: C</option>
					  	<option value="ship2a">Ship 2: C</option>
					  	<option value="ship1b">Ship 1: A</option>
					  	<option value="ship2b">Ship 2: A</option>
					  	<option value="ship1c">Ship 1: R</option>
					  	<option value="ship2c">Ship 2: R</option>
					  	
					</select>
				</td>
			</tr>
			<tr>
				<th>
					<label for="saildate"><strong>Sail Date:</strong></label>
				</th>
				<th>
					<input type="date" id="saildate" name="saildate">
				</th>
			</tr>
			<tr>
				<th>
					<label for="comments"><strong>Comments (optional):</strong></label>
				</th>
				<th>
					<textarea id="comments" name="comments" rows="4" cols="50" maxlength="500"></textarea> 
				</th>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
				
			</tr>
		</table>
	</form>
	<?php

		
		$mysql_qry = "select * from guest;";
		$result = mysqli_query($conn ,$mysql_qry);
		if(mysqli_num_rows($result) > 0) {
			echo "<h1 style='text-align:center;margin-top:50px;margin-bottom:30px;'>Guests</h1>";
			echo "<table class='bluetable'>
				<tr><th>Personal ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Brand</th><th>Included in Email List</th><th>Ship</th><th>Sail Date</th><th>Comments</th><th>Action</th></tr>";
			while ($row = mysqli_fetch_assoc( $result )) {
				echo "			
				<tr>
				<td>{$row['personal_id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email_address']}</td>
				<td>{$row['brand']}</td>
				<td>{$row['email_list_flag']}</td>
				<td>{$row['ship']}</td>
				<td>{$row['sail_date']}</td>
				<td>{$row['comments']}</td>
				<td>
				<form action='removeguest.php' method='post'>
				 <input type='hidden' id='removeID' name='removeID' value='{$row['personal_id']}'/>
				 <input type='submit' value='Remove' />
				</form></td>
				</tr>";
				
			}
			echo "</table>";
		}


		else {
			echo 'something wrong';
		}



		
?>
</body>
</html>
