<?php

//including the database connection file
include("connection.php");

//getting songid of the data from url
$SongID = $_GET['SongID'];

//deleting the row from song table
$result = mysqli_query($con, "DELETE FROM song 
							  WHERE SongID=$SongID");
							  
if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\nSong Deletion was Successful");
		echo "<script>alert('Song Deletion was Successful'); window.location.href = 'index_song.php'; </script>";
		
  }
	
							  


?>

<?php 
	mysqli_close($con);
?>							  

