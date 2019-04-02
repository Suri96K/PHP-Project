<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "music3");
?>

<html>
<head>
    <link href="Styles/order_history.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }

    th, td {
        text-align: left;
        padding: 8px;
        }
        
    tr:nth-child(even){background-color: grey}
    </style>
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
    
<h3 align="center">Order Details</h3><br><br><br>
			<div style="overflow-x:auto;">
				<table class="table table-bordered">
					<tr>
						<th width="10%" align="center">Purchase ID</th>
						<th width="20%">User Email</th>
						<th width="20%">Credit/Debit card number</th>
						<th width="20%">Expiry Month</th>
						<th width="20%">Expiry Year</th>
					</tr>
                    <?php
				$query = "SELECT * FROM payment";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
					<tr>
						<td align="center"><?php echo $row["PaymentID"]; ?></td>
						<td align="center"><?php echo $row["Email"]; ?></td>
						<td align="center"><?php echo $row["CardNo"]; ?></td>
						<td align="center"><?php echo $row["MonthID"]; ?></td>
                        <td align="center"><?php echo $row["YearID"]; ?></td>
					</tr>
					
		
					<?php
					}
				}
			?>
						
				</table>
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
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