<?php
  
    require 'connection.php';
  
	if ( isset($_POST['submit']))
	{
		$GenreID = $_POST['GenreID'];
		$Type = $_POST['Type'];
				
		
	
									
										
		$query = "INSERT INTO genre (GenreID, Type)
				VALUES('$GenreID', '$Type')";
		$result =  mysqli_query($con, $query);

		
			if (!($result))
		  {
			echo("Error : " . mysqli_error($con));
		  }
		else
		  {
			echo("Genre successfully added");
		   echo "<script>alert('Genre successfully added'); window.location.href = 'index_genre.php'; </script>";
		  }

	}
?> 
<?php 
	mysqli_close($con);
?>
		
		
	
	