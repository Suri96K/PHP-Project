<?php
  
    include("connection.php");
 
  
  
	if ( isset($_POST['submit']))
	{
		$UserRole = $_POST['UserRole'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$EmailAddress = $_POST['EmailAddress'];
		$ContactNo = $_POST['ContactNo'];
		$username = $_POST['username'];
		$Password = sha1($_POST['Password']);
		
		
		
		//validation for name and phone number(mobile or landline)

if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
	{
		echo("Only letters and white space allowed for Name");
		//echo'<a href="javascript:history.go(-1)">Back</a>'; //if only needed without that script
		echo "<script>alert('fname not valid'); window.location.href = 'javascript:history.go(-1)'; </script>";
    }
	else if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
	{
		echo("Only letters and white space allowed for Name");
		//echo'<a href="javascript:history.go(-1)">Back</a>'; //if only needed without that script
		echo "<script>alert('lname not valid'); window.location.href = 'javascript:history.go(-1)'; </script>";
    }
	


	
else if (!preg_match("/^[0 ][1-9][0-9]{8}$/",$ContactNo)) 
	{
   		       //used [1-9] caz maybe phone be landline. else can put 7 only.
	    echo("Mobile not valid");
		echo "<script>alert('ContactNo not valid'); window.location.href = 'javascript:history.go(-1)'; </script>";
    }
	
else
{

$query = "INSERT INTO user (fname,lname, EmailAddress, username, Password,  ContactNo,UserRole)
				VALUES('$fname', '$lname', '$EmailAddress', '$username', '$Password', '$ContactNo', '$UserRole')";

$result =  mysqli_query($con, $query);



if (!($result))
  {
  	echo("Error : " . mysqli_error($con));
  }
else
  {
		echo("Account creation was Successful");
		echo "<script>alert('Account creation was Successful'); window.location.href = 'add_admin.php'; </script>";

  }

}

	}
?> 
<?php 
	mysqli_close($con);
?>
		
		