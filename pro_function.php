<?php
	session_start();

	$con = mysqli_connect('localhost' , 'root' , '' , 'multiuserlogin');
	
	if ($con->connect_error)
	{
		die ("Connection Failed".$con->connect_error);
	}

	else
	{
		//echo "Successfully created the Connection";
	}

	$user1 = $_SESSION['username'];
	
	$query = "SELECT * FROM login WHERE username='$user1'";
	$result = $con->query($query);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$user1 = $row['username'];
			
			$email = $row['email'];	
		}
		
	}
	

	if (isset ($_POST["edit"]))
	{
		update();
	}
	
	function update()
	{
		global $con , $user1;
		
		$newuser = $_POST['user'];
		$newmail= $_POST['email'];
		
		
		$sql = "UPDATE login
				SET username='$newuser' , email='$newmail'  
				WHERE username='$user1'";

		if ($con->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $conn->error;
		}
		
	}

			






?>