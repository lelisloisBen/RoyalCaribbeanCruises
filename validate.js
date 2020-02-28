

function validate()
{
	
	var x = document.forms["frmregister"]["pi"].value;
  	if (x == "") {
	    alert("Enter your Personal Identification!");
	    return false;
  	}
  	if (x.length!=7) {
	    alert("Personal Identification must be a 7-Digit Number!");
	    return false;
  	}
 	var x = document.forms["frmregister"]["fName"].value;
  	if (x == "") {
	    alert("First Name must be filled out");
	    return false;
  	}
  	var x = document.forms["frmregister"]["lName"].value;
  	if (x == "") {
	    alert("Last must be filled out");
	    return false;
  	}
  	var x = document.forms["frmregister"]["email"].value;
  	if (x == "") {
	    alert("Please Enter your Email!");
	    return false;
  	}
  	var x = document.forms["frmregister"]["brand"].value;
  	if (x == "") {
	    alert("Please Choose a Ship Brand");
	    return false;
  	}
  	var x = document.forms["frmregister"]["saildate"].value;
  	if (x == "") {
	    alert("Select a Sail Date");
	    return false;
  	}
  	var today = new Date();
	// var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	var gx = new Date(x);
	// alert(gx);
	// alert(today);
  	if(gx < today){
	    alert('Please Select the sail date in Future!');
	    return false;
	}
  	
	
}