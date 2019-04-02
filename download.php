<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "online music store");
?>

<!DOCTYPE html>
<html>

<head>

<link type="text/css" rel="stylesheet" href="Styles/view_track.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="js/modernizr.custom.js"></script>

</head>

<body class="body">
<div id="navbar">

  <div class="header-right">
    <a href="#home">Home</a>
    <a class="active" href="#albums">Albums</a>
    <a href="#comings">Coming Soon</a>
    <a href="#uploads">Uploads</a>
    <a href="#about">About</a>
    <div class="image1" style="margin-top:10px">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button1 type="submit"><i class="fa fa-search"></i></button1>
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
    
    
<!--Album-->
      <?php
				$query = "SELECT * FROM song WHERE SongID=1";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

    
    <img class="img2" src="ProjectImage/<?php echo $row["CoverImage"]; ?>" width="400px" height="450"><br><br><br><br><br>
    
    <div class="div1" style="background-color: darkgrey">
        
    
    <button id="but" data-modal="modal-3" class="md-trigger" style="color:black;margin-top:50%;margin-left:10%">Download  <span class="glyphicon glyphicon-chevron-right" ></span></button>
        
        <!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
    
    </div>
    
    <p style="font-weight:800;font-size:25px"><?php echo $row["Title"]; ?></p><br>
    
    <hr class="style14"><br><br><br>

    
    <p><b>
    Artist: <?php echo $row["Artist"]; ?><br><br>
    Duration: 25.25<br><br>
    Category: <br><br>
    Released: <?php echo $row["GenreID"]; ?><br><br>
    Beatpods rating: 
        </b></p>
    
    	<?php
					}
				}
			?>
    
    <hr class="style14"><br><br><br>
    <p><b>Share: </b>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-pinterest"></a>
    </p><br><br><br><br><br><br>
    
    <!--Tab header-->
<button class="tablink" onclick="openCity('description', this, 'whitesmoke')" id="defaultOpen" style="margin-left: 100px">Description</button>
<button class="tablink" onclick="openCity('artist', this, 'whitesmoke')">Artist</button>
<button class="tablink" onclick="openCity('TrackListing', this, 'whitesmoke')">TrackListing</button>

    
<br><br>
<div id="description" class="tabcontent">
    <br><br>
    <p> Second studio album by the English singer-songwriter. The album reached #1 in the UK Albums Charts and features the singles 'Don't Matter Now', 'Paradise' and 'Shotgun'.</p>
    <br><br><br><br>
</div>

<div id="artist" class="tabcontent">
    <br><br>
    <img class="img1" src="Images/artist2.jpg" align="center"><br><br>
    
    <p>
    <h2 align="center">George Ezra</h2><br><br>
    
    Birthday: June 7, 1993 <br>
    Birthplace: U.K. <br>
    Star Sign: Gemini <br>
    Profession: Folk Singer <br><br><br><br>
    
    George Ezra is an English artist musician who Best known for his hit melody “Budapest,” this British vocalist and lyricist discharged his introduction solo collection, Wanted on Voyage, in 2014. The guaranteed gold recording topped at #3 on United Kingdom music outlines.

    Ezra refers to Bob Dylan and Woody Guthrie as his primary musical impacts. An energetic fixation on Dylan incited Ezra to search out prior American society and soul craftsmen<br><br><br><br>
    </p>
    
    </div><br><br>
    
    
<div id="TrackListing" class="tabcontent">
    
    <table id="customers">
  <tr align="center">
    <th>Track</th>
    <th>Track Name</th>
    <th>Time 1</th>
  </tr>
  <tr>
    <td>Track 1</td>
    <td>Pretty Shining People</td>
    <td>3:32</td>
  </tr>
  <tr>
    <td>Track 2</td>
    <td>Don't Matter Now</td>
    <td>2:56</td>
  </tr>
  <tr>
    <td>Track 3</td>
    <td>Get Away</td>
    <td>2:34</td>
  </tr>
    <tr>
    <td>Track 4</td>
    <td>Shotgun</td>
    <td>3:21</td>
  </tr>      
   <tr>
    <td>Track 5</td>
    <td>Paradise</td>
    <td>3:42</td>
  </tr>
  <tr>
    <td>Track 6</td>
    <td>All My Love</td>
    <td>2:40</td>
  </tr>
  <tr>
    <td>Track 7</td>
    <td>Sugarcoat</td>
    <td>3:22</td>
  </tr>
  <tr>
    <td>Track 8</td>
    <td>Hold My Girl</td>
    <td>3:31</td>
  </tr>
  <tr>
    <td>Track 9</td>
    <td>Saviour (Feat. First Aid Kit)</td>
    <td>3:32</td>
  </tr>
  <tr>
    <td>Track 10</td>
    <td>Only a Human</td>
    <td>3:34</td>
  </tr>
  <tr>
      <td>Track 11</td>
    <td>The Beautiful Dream</td>
    <td>4:29</td>
  </tr>    
  
</table><br><br><br><br>
    
</div>

<script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
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
			</div>

</footer>
    
</body>

</html>