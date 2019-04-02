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

	
	$GenreID = mysqli_real_escape_string($con, $_POST['GenreID']);
	$Type = mysqli_real_escape_string($con, $_POST['Type']);
	
	// checking empty fields 
	if( empty($GenreID) || empty($Type) ){
		
		if(empty($GenreID)) 
		{
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
		
		if(empty($Type)) 
		{
			echo "<font color='red'>Genre Type title field is empty.</font><br/>";
		}
		
		
			
			
	}
	else 
	{	
		//updating the table
		$result = mysqli_query($con, "UPDATE genre 
									  SET GenreID='$GenreID',Type='$Type'
  									  WHERE GenreID='$GenreID'");
		
		//redirecting to the display page. In our case, it is index.php
		header("Location: index_genre.php");
	}
}
?>
<?php
//getting id from url
$GenreID = $_GET['GenreID'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM genre WHERE GenreID='$GenreID'");

while($row = mysqli_fetch_array($result))
{
	$GenreID = $row['GenreID'];
	$Type = $row['Type'];
	
}
?>
<html>
<head>	
	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Update Genre</title>
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
	<input type="submit"  class="button_text" type="submit" name="add" value="Back "  onclick="window.location='index_genre.php';"/>
	<br/><br/>
	
   <div class="row">
  <div class="col-50">
    <div class="container" style="margin-left:30%;margin-right:30%;background-color:black">
        <div class="row">

          <div class="col-50">
              <h2><span style="color:white">Update Genre</span></h2>
			  
	<form name="form1" method="post" action="edit_genre.php">
	
		
				<label for="SongID">Genre ID</label>
				<input type="text" name="GenreID" value="<?php echo $GenreID;?>">
			
				<label for="Type">Type</label>
				<input type="text" name="Type" value="<?php echo $Type;?>">
			
				
			
	<
				<input type="hidden" name="GenreID" value=<?php echo $_GET['GenreID'];?>>
				<input type="submit" name="update" value="Update" style="margin-left: 30%;"  class="button_text" >
			   
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
