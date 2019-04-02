<?php /*session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    //echo "User Logged in, " . $_SESSION['username'] . "!";
	$namesession=$_SESSION['username'];
} 
else 
{
    echo "Please log in first to use the system.";
	header("location:login_index.php");
} */

	//including the database connection file
	include("connection.php");

if(isset($_POST['update']))
{	

	$SongID = mysqli_real_escape_string($con, $_POST['SongID']);
	$Title = mysqli_real_escape_string($con, $_POST['Title']);
	$Artist = mysqli_real_escape_string($con, $_POST['Artist']);
	$GenreID = mysqli_real_escape_string($con, $_POST['GenreID']);
	$AlbumID = mysqli_real_escape_string($con, $_POST['AlbumID']);
	$Duration = mysqli_real_escape_string($con, $_POST['Duration']);
	$DateReleased = mysqli_real_escape_string($con, $_POST['DateReleased']);
	$Description = mysqli_real_escape_string($con, $_POST['Description']);
	
	// checking empty fields 
	if( empty($SongID) || empty($Title) || empty($Artist) || empty($GenreID) || empty($AlbumID) || empty($Duration) || empty($DateReleased) || empty($Description) ) {	
			
		if(empty($SongID)) 
		{
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
		
		if(empty($Title)) 
		{
			echo "<font color='red'>Song title field is empty.</font><br/>";
		}
		
		if(empty($Artist)) 
		{
			echo "<font color='red'>Artist field is empty.</font><br/>";
		}
		
		if(empty($GenreID))
			{
			echo "<font color='red'>Genre field is empty.</font><br/>";
		}
		if(empty($AlbumID))
			{
			echo "<font color='red'>Album field is empty.</font><br/>";
		}
		
		if(empty($Duration)) 
		{
			echo "<font color='red'>Duration type field is empty.</font><br/>";
		}
		if(empty($DateReleased)) 
		{
			echo "<font color='red'>Date Released field is empty.</font><br/>";
		}
		
		if(empty($Description)) 
		{
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
			
	}
	else 
	{	
		//updating the table
		$result = mysqli_query($con, "UPDATE song 
									  SET SongID='$SongID',Title='$Title', Artist='$Artist',GenreID='$GenreID',AlbumID='$AlbumID',Duration='$Duration',Description='$Description', DateReleased='$DateReleased' 
  									  WHERE SongID='$SongID'");
		
		//redirecting to the display page. In our case, it is index.php
		header("Location: index_song.php");
	}
}
?>
<?php
//getting id from url
$SongID = $_GET['SongID'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM song WHERE SongID='$SongID'");

while($row = mysqli_fetch_array($result))
{
	$SongID = $row['SongID'];
	$Title = $row['Title'];
	$Artist = $row['Artist'];
	$GenreID = $row['GenreID'];
	$AlbumID = $row['AlbumID'];
	$Duration = $row['Duration'];
	$DateReleased = $row['DateReleased'];
	$Description = $row['Description'];
	
}
?>
<html>
<head>	
	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Update Song Details</title>
	<link rel="stylesheet" type="text/css" href="styles/template.css">
	<link rel="stylesheet" type="text/css" href="styles/payment_details.css">
<style>




<!------button------>
input[type=text],[type=date], [type=time],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
   
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit], [type=reset] {
    background-color: #FF4500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:160px;
    height:40px;
}

input[type=submit]:hover, [type=reset]:hover {
    background-color: #FFA07A;
}


</style>

</head>

<body class="body">
    
<!--header-->    
<div id="navbar">

  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#albums">Albums</a>
    <a href="#comings">Coming Soon</a>
    <a href="#uploads">Uploads</a>
    <a href="#about">About</a>
      
      <div class="image1">
                  <a href="#">
          <span class="glyphicon glyphicon-shopping-cart" ></span>
        </a>
          
                                    <a href="#">
          <span class="glyphicon glyphicon-bell"></span>
        </a>
          
      </div>
      
    </div>
    </div>
	<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  class="button_text" type="submit" name="add" value="Back "  onclick="window.location='index_song.php';"/>
	<br/><br/>
	
   <div class="row">
  <div class="col-50">
    <div class="container" style="margin-left:30%;margin-right:30%;background-color:black">
        <div class="row">

          <div class="col-50">
              <h2><span style="color:white">Update Song Details</span></h2>
			  
	<form name="form1" method="post" action="edit_song.php">
	
		
				<label for="SongID">SongID</label>
				<input type="text" name="SongID" value="<?php echo $SongID;?>">
			
				<label for="SongID">Title</label>
				<input type="text" name="Title" value="<?php echo $Title;?>" required>
			
				<label for="SongID">Artist</label> 
			<input type="text" name="Artist" value="<?php echo $Artist;?>"required>
			
			<label for="SongID">GenreID</label>
				<input type="text" name="GenreID" value="<?php echo $GenreID;?>"required>
				<font style="color:white;">
	
	<!-------select album-------->
    <!------?php 
    $sql = "SELECT * FROM album";
    $result = mysqli_query($con,$sql);
       if ($result->num_rows > 0) {?>
        <div class="label">Select the album: <select name="AlbumID">

    <!----?php while($row = $result->fetch_assoc()) {?>
    	<option value="<!----?php echo $row['AlbumID']?>"><!---?php echo $row['Title']?></option>

		<!---?php }?>
    </select></div>
    <!---?php }?>
    <br /><br--------->
    
	

			 
				<label for="Duration">Duration</label>
				<input type="text" name="Duration" value="<?php echo $Duration;?>">
			
				<label for="AlbumID">AlbumID</label>
				<input type="text" name="AlbumID" value="<?php echo $AlbumID;?>" maxlength="100">
				
				<label for="Date Released">Date Released</label> 
				<input type="date" name="DateReleased" value="<?php echo $DateReleased;?>">
				
				<label for="Description">Description</label>
				<input type="text" name="Description" value="<?php echo $Description;?>" maxlength="500">
				
			<!-------label for="CoverImage">Image:</label>
	 <input type="file" id="image" name="image" value="<!-------?php echo $CoverImage;?>"-----> 
	 
	 </font>
	<!--------textarea id="des" name="des" placeholder="Song Description.." style="height:200px"></textarea------->
				<div align="center">
				<input type="hidden" name="SongID" value=<?php echo $_GET['SongID'];?>>
				<input type="submit" name="update" value="Update"   class="button_text" >
			    <input type="reset" name="reset" value="Reset" class="button_text">
				</div>
	</form>
	
	</div>
	 </div>
            
        </div>
    </div>
  
<hr>
	
	
	 <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}




</script>

 <!--Footer-->
 	<footer  class="footer-distributed">

			<div align="center" class="footer-right">

				<a href="https://www.facebook.com/"><i class="faq faq-facebook"></i></a>
				<a href="https://www.twitter.com/"><i class="faq faq-twitter"></i></a>
				<a href="https://www.linkedin.com/"><i class="faq faq-linkedin"></i></a>
				<a href="https://www.github.com/"><i class="faq faq-github"></i></a>

			</div>
			
			

			<div align="center" class="footer-left">
				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p>beatPods &copy; 2018</p>
			</div>
			

</footer>
 
	
</body>

</html>
