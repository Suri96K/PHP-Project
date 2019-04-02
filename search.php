
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "music3");
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
    
    <button class="button button4"><span class="glyphicon glyphicon-plus-sign" ></span>  Create new account</button>
    
    <button class="button button4"><span class="glyphicon glyphicon-user" ></span>  Login</button>
    
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
		
		
		
		
          <form class="navbar-form navbar-left" action="search.php"  method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="qsearch">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
		
		
		
		



    <?php
require 'dbconnect.php';
  $quer = $_GET['qsearch'];

    if($quer != NULL){
    // gets value sent over search form
         
        $sql = "SELECT * FROM song
            WHERE Title LIKE '%$quer%' or Artist LIKE '%$quer%'"  or die(mysql_error());
         $results = $con->query($sql);
    
        $rowcount=mysqli_num_rows($results);
    
        if($results->num_rows > 0){ // if one or more rows are returned do following?>
             
			 
			 
			 
			 
			 
			 
			 
			 
			 
            <hgroup style="margin-top:20px" class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $rowcount ?></strong> results were found for the search for <strong class="text-danger"><?php echo $quer ?></strong></h2>								
	</hgroup>
            
        <?php    while($row = $results->fetch_assoc()){?>
<div class="container">

    <section class="col-xs-12 col-sm-6 col-md-12" style="border-bottom: 1px solid #ccc;">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<p class="thumbnail"><img src="Images/<?php echo $row['CoverImage'] ?>" style="height:150px;width:100px" /></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><span> Title : <?php echo $row['Title'] ?></span></li>
					<li><span>Artist : <?php echo $row['Artist'] ?></span></li>
					<li><span>Duration : <?php echo $row['Duration'] ?></span></li>
                    <li><span>Date Released : <?php echo $row['DateReleased'] ?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3 style="color:#129CB7"><?php   echo $row['Title'] ?></h3>
                <span><?php   echo $row['Description'] ?></span>						
			</div>
			<span class="clearfix borda"></span>
		</article>
        </br>
	</section>
</div>
    </br></br>

<?php
          
             
            }
             
        }
        else{ // if there is no matching rows do following ?>
     <hgroup style="margin-top:20px" class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $rowcount ?></strong> results were found for the search for <strong class="text-danger"><?php echo $quer ?></strong></h2>								
	</hgroup>
      
      <?php  }
    }
    
    else{ ?>
          <hgroup style="margin-top:100px;text-align: center;margin-bottom:100px;border-bottom: 0px" class="mb20">

              <h2 class="lead"><strong  class="text-danger">Do Not Leave The Search Bar Empty.</strong> </br></br> <strong class="text-danger">Please try searching again.</strong></h2>								
	</hgroup>
        
   <?php }
        
?>






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
    <img src="Images/<?php echo $row["CoverImage"]; ?>" class="image" width="250px" height="250px" /></a>
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
    <img src="Images/<?php echo $row["CoverImage"]; ?>" class="image" width="250px" height="250px" /></a>
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