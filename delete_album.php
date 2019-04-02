<?php

//including the database connection file
include("connection.php");

//getting albumid of the data from url
$AlbumID = $_GET['AlbumID'];

//deleting the row from song table
$result = mysqli_query($con, "DELETE FROM album 
							  WHERE AlbumID=$AlbumID");
							  
if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\Album Deletion was Successful");
		echo "<script>alert('Album Deletion was Successful'); window.location.href = 'index_album.php'; </script>";
		
  }
	
							  


?>

<?php 
	mysqli_close($con);
?>						