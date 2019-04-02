<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "music3");
?>

<!DOCTYPE html>
<html lang="en" >
    
    <head>
        <link rel="stylesheet" type="text/css" href="Styles/veiw_more.css">
    </head>
    
    <body class="body">
        
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
        
         <?php
				$query = "SELECT * FROM album";
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
    
    </body>

</html>