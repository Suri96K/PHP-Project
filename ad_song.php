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
	 	
?>


<html>
<head>	
	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add Song</title>
	<link rel="stylesheet" type="text/css" href="styles/template.css">
	<link rel="stylesheet" type="text/css" href="styles/payment_details.css">
<style>




<!------button------>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
   
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #FF4500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:160px;
    height:40px;
}

input[type=submit]:hover {
    background-color: #FFA07A;
}
input[type=reset] {
    background-color: #FF4500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:160px;
    height:40px;
}

input[type=reset]:hover {
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
              <h2><span style="color:white">Add Song Details</span></h2>
		

    <!--------input details of song-------->		
	<form id="form1" name="form1" action = "ad_song_q.php" method="POST" enctype="multipart/form-data">
    <label for="title">Title*</label>
    <input type="text" id="title" name="Title" placeholder="Title" required>

    <label for="artist">Artist / Band*</label>
    <input type="text" id="artist" name="Artist" placeholder="Artist" required>
	
	<font style="color:white;">
	
	<!-------select album-------->
    <?php 
    $sql = "SELECT * FROM album";
    $result = mysqli_query($con,$sql);
       if ($result->num_rows > 0) {?>
        <div class="label">Select the album: <select name="AlbumID">

    <?php while($row = $result->fetch_assoc()) {?>
    	<option value="<?php echo $row['AlbumID']?>"><?php echo $row['Title']?></option>

		<?php }?>
    </select></div>
    <?php }?>
    <br /><br>
    
	
	 <?php 
    $sql = "SELECT * FROM genre";
    $result = mysqli_query($con,$sql);
       if ($result->num_rows > 0) {?>
        <div class="label">Select the genre: <select name="GenreID">

    <?php while($row = $result->fetch_assoc()) {?>
    	<option value="<?php echo $row['GenreID']?>"><!--------?php echo $row['GenreID']?><!---------?php echo '.'?-------><?php echo $row['Type']?></option>

		<?php }?>
    </select></div>
    <?php }?>
    <br /><br>
    
    <!-----upload cover image------>
    <!-------label for="upload">Upload an image</label><br><br>
    <input type='file' id="file" class="button_text" accept="image/*" /------->
   
   
	<!--------form method="POST" action="upload.php" enctype="multipart/form-data">
	<label>Image:</label><input type="file" name="image">
	<button type="submit" formaction="upload.php">Upload Cover Image</button>
	</form-------->
	
     
     
	 <label for="duration">Duration</label>
     <input type="text" id="dur" name="Duration" placeholder="00:00" required>
    
	 <label for="duration">Date Released</label>
     <input type="text" id="date" name="DateReleased" placeholder="yy-mm-dd" required>
    
	<label for="CoverImage">Image:</label>
	 <input type="file" id="image" name="image"> 
	 
	 <label for="mp3">Mp3:</label>
		<input type="file" id="mp3" name="mp3" /></td>
		</tr>
    
<br><br><br><br>

</font>
    <label for="subject">Song Description</label>
	     <input type="text" id="Description" name="Description" placeholder="Song Description" required="required" maxlength="500">
	
	<div align="center">
	<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="reset" class="button_text" value="Reset" name="reset"/>
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
