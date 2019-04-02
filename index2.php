<?php
session_start();	
$connect = mysqli_connect("localhost", "root", "", "music3");
if(!isset($_SESSION["username"])|| !isset($_SESSION["loggedIn"])) {
		header("Location:login.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    
      <link rel="stylesheet" href="Styles/stylesheet.css">
    <link rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body class="body">

<div class="top-container">
    <img src="Images/beat.png" width="250px" style="margin-top: 10px ; margin-left: 10px">
    
   
    
   <a href="logout.php" ><button class="button button4"><span class="glyphicon glyphicon-user" ></span> Welcome  &nbsp <?php echo $_SESSION["username"]?> Logout</button></a>
    
    <br><br><br><br><br><br><br>
    <h1 align="center" style="color:white;font-weight:1000">Publish your own/home made <br>tracks and covers</h1>
    
    <button class="button5 button6"><span class="glyphicon glyphicon-cloud-upload" ></span>  Upload Now</button>

</div>

<div id="navbar">

  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#albums">Albums</a>
    <a href="#comings">Coming Soon</a>
    <a href="#uploads">Uploads</a>
    <a href="#about">About</a>
    <div class="image1" style="margin-top:10px">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
      
      <div class="image1">
                  <a href="#">
          <span class="glyphicon glyphicon-shopping-cart" ></span>
        </a>
          
                          <a href="#">
          <span class="glyphicon glyphicon-bell"></span>
        </a>
      </div>
      
</div>
    
  
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
</div>   
    
    
<!--Content-->
<br><br><br>



<!--Search-->
<form class="example" action="/action_page.php" style="margin:auto;max-width:800px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    
<!--Recomended-->
<br><br><br><br><br>
    
    <h2 align="center">Recommended for you</h2>
<hr class="style14">
    
        <?php
				$query = "SELECT * FROM song LIMIT 4";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
    
<div class="img">
    <a target="_blank" href="download.php">
    <img src="ProjectImage/<?php echo $row["CoverImage"]; ?>" class="image" width="250px" height="250px" /></a>
    <p><h4 align="center"> <?php echo $row["Title"]; ?> -  <?php echo $row["Artist"]; ?></h4></p>
</div>
    
    	<?php
					}
				}
			?>
    
    <button class="button10 button11">View more  <span class="glyphicon glyphicon-chevron-right" ></span></button><br><br><br>
    
    <h2 align="center">Trending<h2>
<hr class="style14">
                <?php
				$query = "SELECT * FROM album LIMIT 4";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
    
<div class="img">
<a target="_blank" href="veiw_track.php">
    <img src="ProjectImage/<?php echo $row["CoverImage"]; ?>" class="image" width="250px" height="250px" /></a>
    <p><h4 align="center"> <?php echo $row["Title"]; ?> -  <?php echo $row["Artist"]; ?></h4></p>
</div>
    
    	<?php
					}
				}
			?>
<br><br>
    
    <button class="button10 button11">View more  <span class="glyphicon glyphicon-chevron-right" ></span></button><br><br><br>
    
    
<!--Footer-->
 	<footer  class="footer-distributed">

			<div align="center" class="footer-right">

				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.github.com/"><i class="fa fa-github"></i></a>

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
			</div>

</footer>   


    
</body>

</html>
