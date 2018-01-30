<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "photograph";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

//$name =$_SESSION["USERNAME"];
$name = 'yash';
$sql = "select profile from profile where name ='$name' ";
$result = mysqli_query($conn,$sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row = mysqli_fetch_array($result);


$sqll = "select cover from cover where name ='$name' ";
$result1 = mysqli_query($conn,$sqll);

if (!$result1) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row1 = mysqli_fetch_array($result1);

	
	
	
	


//$image = $row['image'];

//$image_src = "upload/".$image;


?>

<!DOCTYPE html>
<html>
<head>
<style>

body {
    font-family: "Times new Roman", sans-serif;
}

.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #66b3ff;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 10px 6px 16px;
   
    font-size: 25px;
    color: #111;
    display: block;
}

.sidenav a:hover {
    color:#ff0066;
}

.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 0px;
	border: solid #ff0066;
	border-style: double;
    border-width: 10px;
	  position: relative;
}

#id1 {
    border-radius: 90%;
	
}
.cover{
	width: 100%;
    max-width: 100%;
    height: 500px;
	 display: block;
	
	
}
.text_block {
    position: absolute;
    bottom: 5px;
    right: 10px;
    background-color: none;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
</style>
</head>
<body>

<div class="sidenav">

<form action="user_profile.php" method="POST" enctype="multipart/form-data">
  <br>
  <img src="<?=$row[0]?>" width="175" height="175" alt ="Set Profile Pic" id="id1">  
  <br>
  <input type="submit" value="Update Profile Photo">
</form>
  <br>
  <a href="user_gallary.php">My Gallary</a>
  <a href="user_about.php">About</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <form action="user_cover.php" method="POST" enctype="multipart/form-data">
 <img src="<?=$row1[0]?>" alt="Nature" class="cover">
 <input type="submit" value="Update Cover Photo">
 </form>
 <div class="text_block"> 
    <h4>Nature</h4>
    <p>What a beautiful sunrise</p>
  </div>
  
  
  

</div>
     
</body>
</html> 
