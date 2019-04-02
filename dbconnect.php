<?php

	$con=new mysqli('localhost', 'root', '', 'music3');
	
	if( $con->connect_error )
	{
		die("DB Error".$con->connect_error);
		
	}
	
	else
	{
		//echo"Connection ok";
	}
		
		
		
		
	
	
?>
	