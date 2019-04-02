<?php

//including the database connection file
include("connection.php");



//getting genreid of the data from url
$GenreID = $_GET['GenreID'];

//$GenreID= $_POST['GenreID'];
//	echo $GenreID;
	

//deleting the row from genre table
$result = mysqli_query($con, "DELETE FROM genre 
							  WHERE GenreID=$GenreID");
	
if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\nGenre Deletion was Successful");
		echo "<script>alert('Genre Deletion was Successful'); window.location.href = 'index_genre.php'; </script>";
		
  }
	
							  

//redirecting to the display page (index_genre.php in our case) after deleting record
//header("Location:index_genre.php");

?>

<?php 
	mysqli_close($con);
?>