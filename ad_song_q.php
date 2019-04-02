<?php
  
    require 'connection.php';
  
	if ( isset($_POST['submit']))
	{
		$Title = $_POST['Title'];
		$Artist = $_POST['Artist'];
		$AlbumID = $_POST['AlbumID'];
		$GenreID = $_POST['GenreID'];
		$DateReleased = $_POST['DateReleased'];
		$Duration = $_POST['Duration'];
		$Description = $_POST['Description'];
		
		
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"Images/" . $newFilename);
		$location1="" . $newFilename;
		
		$fileinfo=PATHINFO($_FILES["mp3"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["mp3"]["tmp_name"],"Songs/" . $newFilename);
		$location2="" . $newFilename;
 
 /*
 $target_dir = "Images/";
		$target_file = $target_dir . date("dmYhis") . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" ) 
		{
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
			{
				$files = date("dmYhis") . basename($_FILES["image"]["name"]);
			}
			else
			{
				echo "Error Uploading File";
				exit;
			}
		}
		else
		{
			echo "File Not Supported";
			exit;
		}
		$filename = $_FILES['CoverImage'];
		$location1 = "Images/" . $files;
	
		*/
		
		
		
										
										
		$qry = "INSERT INTO song (Title, Artist,  AlbumID, GenreID, Duration, CoverImage, Mp3, DateReleased, Description)
				VALUES('$Title', '$Artist','$AlbumID', '$GenreID', '$Duration', '$location1', '$location2' ,'$DateReleased', '$Description')";
				
	
		$result =  mysqli_query($con, $qry);
		
			if (!($result))
		  {
			echo("Error : " . mysqli_error($con));
		  }
		else
		  {
			echo("Song successfully added");
		   echo "<script>alert('Song successfully added'); window.location.href = 'index_song.php'; </script>";
		  }

	}
?> 
<?php 
	mysqli_close($con);
?>
		