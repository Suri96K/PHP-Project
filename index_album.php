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


<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Homepage Song</title>
	<link rel="stylesheet" type="text/css" href="template.css">
	<!-------link rel="stylesheet" type="text/css" href="styles/payment_details.css"------->

<style>
#song {
    font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 95%;
	border-radius: 25px;
	
}

#song td, #customers th {
    border: 1px solid black;
    padding: 8px;
	
}




#song tr:nth-child(even){background-color: #C0C0C0; }
#song tr:nth-child(odd){background-color: white; }

#song tr:hover {background-color: #ddd;}

#song th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: black;
    color: white;
}



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
    height:60px;
}

input[type=submit]:hover {
    background-color: #FFA07A;
}

.container {
    
    background-color: green;
    padding-left: 500px;
	border-weight:50px;
	border-color:orange;
	}

	
a.one:link, a:visited {
    background-color:#FF4500;
    color: white;
	border-radius:14px;
    padding: 8px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a.one:hover, a:active {
    background-color: #FF7F50;
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
    </div>
	
	<br>


<input type="submit"  class="button_text" type="submit" name="add" value="Back"  onclick="window.location='admin_hom.php'"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit"  class="button_text" type="submit" name="add" value="Add Album +"  onclick="window.location='add_album.php'"/><br><br>


<div align="center">

	<table id="song">

	<tr>
		<th>AlbumID </th>
		<th>CoverImage </th>
		<th>Title </th>
		<th>Artist </th>
		<th>GenreID    </th>
		<th>Price ($) </th>
		<th>Description </th>
		<th>Action</th>
		
	</tr>

<?php 
	
// using mysqli_query to fetch data from table song
//fetching data in ascending order
$result = mysqli_query($con, "SELECT * 
							  FROM album 
							  ORDER BY AlbumID");
	
while($row = mysqli_fetch_array($result)) {

		
		echo "<tr>";
		
		echo "<td><b>".$row['AlbumID']."</b></td>";
		echo "<td><img src=Images/". $row['CoverImage']." class=image width=100 height=100></td>";
		echo "<td>".$row['Title']."</td>";
		echo "<td>".$row['Artist']."</td>";
		echo "<td>".$row['GenreID']."</td>";
		echo "<td>".$row['Price']."</td>";
		echo "<td>".$row['Description']."</td>";
		
		

//echo '<img src="your_path_to_image/'.$image.'" />';		
		
		echo "<td><a class=one href=\"edit_album.php?AlbumID=$row[AlbumID]\">Edit</a><br><br>
		<a class=one href=\"delete_album.php?AlbumID=$row[AlbumID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	
	
	}
	?>
	</table>

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
