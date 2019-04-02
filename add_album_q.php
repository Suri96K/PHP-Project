<?php
  
    require 'connection.php';
  
	if ( isset($_POST['submit']))
	{
		
		$Title = $_POST['Title'];
		$Artist = $_POST['Artist'];
		$GenreID = $_POST['GenreID'];
		$Price = $_POST['Price'];
		$Description = $_POST['Description'];
		
		
		
		
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"Images/" . $newFilename);
		$location1="" . $newFilename;
		
		/*
		$fileinfo=PATHINFO($_FILES["mp3"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["mp3"]["tmp_name"],"Songs/" . $newFilename);
		$location2="" . $newFilename;
 
	*/
		
										
										
		$qry = "INSERT INTO album ( Title, Artist, GenreID, Price, CoverImage, Description)
				VALUES('$Title', '$Artist', '$GenreID', '$Price', '$location1' , '$Description')";
				
	
		$result =  mysqli_query($con, $qry);
		
			if (!($result))
		  {
			echo("Error : " . mysqli_error($con));
		  }
		else
		  {
			echo("Album successfully added");
		   echo "<script>alert('Album successfully added'); window.location.href = 'index_album.php'; </script>";
		  }

	}
?> 
<?php 
	mysqli_close($con);
?>
		