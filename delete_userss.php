<?php 
/*
session_start();

if (!isset ($_SESSION["username"])|| !isset($_SESSION["loggedIn"])){
	header("location:login.php");
	exit();
}

*/
	//including the database connection file
	include("connection.php");
	 	
?>


<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="template.css">
	






<style>
<!--------table------------>
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

.btn-group button {
    background-color: gray; /* Green background */
    border: 1px solid black; /* Green border */
	border-width: thick;
    color: white; /* White text */
    font-size: 20px; 
	//font-weight:bold;
	padding: 10px 5px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: right; /* Float the buttons side by side */
	
     width: 280px;
    height: 100px;
	 border-radius: 25px;
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #FFA07A;
}



.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:black;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #FF4500;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: black;
  color: white;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
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

	
a.two:link, a:visited {
    background-color:#FF4500;
    color: white;
	border-radius:14px;
    padding: 8px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a.two:hover, a:active {
    background-color: #FF7F50;
}
</style>

</head>

<body class="body">
    
<!--header-->    
<div id="navbar">

  <div class="header-right">
    <a href="admin_hom.php">Home</a>
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

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<body>

<div class="sidebar">
  <a  href="index_song.php">Manage Songs</a>
  <a href="index_album.php">Manage Albums</a>
  <a href="index_genre.php">Manage Genres</a>
   <a class="active" href="delete_users.php">Delete users</a>  
  <a href="order_history.php">View Order History</a>
  <!---------a href="#about">Update cover images</a------->
</div>

<!-----div class="btn-group">
  <button>Add user account</button>
  <button> View payments</button>
 
  <button>Add admin account </button>
  <button>View orders </button>
</div------->



<!-------admin table------------>
<!---------user table----------->

<br><br>
<div align="right">

	<table id="song">

	<tr>
        <th>UserID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email Address</th>
		<th>Username</th>
		<th>Contact No</th>
		<th>User Role</th>
		<th>Status</th>
		<th>Action</th>
	</tr>

<?php 
	
// using mysqli_query to fetch data from table user
//fetching data in ascending order
$result = mysqli_query($con, "SELECT * 
							  FROM user 
							  ORDER BY UserID");
	
while($row = mysqli_fetch_array($result)) {

		
		echo "<tr>";
		
		echo "<td><b>".$row['UserID']."</b></td>";
		
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['EmailAddress']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['ContactNo']."</td>";
		echo "<td><b>".$row['UserRole']."</b></td>";
		echo "<td>".$row['Status']."</td>";
		
		

	
		
		echo "<td><a class=one href=\"delete_users.php?UserID=$row[UserID]\"onClick=\"return confirm('Are you sure you want to delete account?')\">Delete</a></td>";
	
	
	}
	?>
	</table>



<br><br>


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

