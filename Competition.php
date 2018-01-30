<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "photograph";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);



if((isset($_POST['year']) && !empty($_POST['year']))&& (isset($_POST['month']) && !empty($_POST['month']))
	&&(isset($_POST['day']) && !empty($_POST['day'])) && (isset($_REQUEST['number']) && (!empty($_REQUEST['number'])))  ){
	
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$name = $_REQUEST['number'];

$insert_name = mysqli_query($conn,"INSERT INTO competition (Competition_name,year,month,day) values ('$name','$year','$month','$day')");

$r_year = "";
$r_month = "";
$r_day = "";
$r_num = "";
//$id = 4;
/*
echo $year;
echo $month;
echo $day;
*/
}


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
  font-size: 28px;
  background-color: #f1f1f1;
   padding: 20px;
    font-family: Arial;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #ff0080;
}

#navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content_outer {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 60px;
}
 *{
    box-sizing: border-box;
}

.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
	padding:8px;
}

.column {
     padding: 8px;
    float: left;
    width: 33.33%;

}


/* Content */
.content {
    background-color: white;
    padding: 10px;
	height:230px;
}

</style>
</head>
<body>

<div class="header">
  <h2>Scroll Down</h2>
  <p>Scroll down to see the sticky effect.</p>
</div>

<div id="navbar">
<a href="javascript:void(0)"></a>
 <a href="javascript:void(0)">News</a>
</div>

<div class="content_outer">
<div class="main">

<h1>Going Competition</h1>
<hr>

<!-- Competioton -->
<div class="row">
<?php 
$result = mysqli_query($conn,"SELECT * FROM competition");



 while($row = mysqli_fetch_assoc($result)){
 
 
     ?>
  <div class="column">
    <div class="content">
      
  <!--    <h4 id= "competition1"> </h4>   -->
         <h4 id = "4"> </h4>
	  <?php echo '<h4 id= "'.$row['id'].'"> </h4>' ?>  
     <?php echo '<p id= "link'.$row['id'].'"> </p>' ?>
	 <?php echo '<p> '.$row['Competition_name'].' </p>' ?>
    </div>
  </div>
 <?php   }?>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

 </div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>


<script type="text/javascript">
<?php 
$result1 = mysqli_query($conn,"SELECT * FROM competition");

 while($row1 = mysqli_fetch_assoc($result1)){ ?>
	 
var year = parseInt("<?php echo $row1['year'] ?>");
var mon = parseInt("<?php echo $row1['Month'] ?>");
var month =mon-1;
var day = parseInt("<?php echo $row1['Day'] ?>");

var id_outer = parseInt("<?php echo $row1['id'] ?>");

mycounter(year,month,day,id_outer);

function mycounter(y,m,d,id_name){
	
	var countDownDate = new Date(y,m,d).getTime();
	var id = id_name;
	var pre ="link";
	var id2 = pre + id;
	function count() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
   
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById(id).innerHTML = "EXPIRED";
		result = "Sorry!";
		document.getElementById(id2).innerHTML = result;
		
    }
	else{
		document.getElementById(id).innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
	    
             var text = "Click here for Participation";
            var result = text.link('user_gallary.php').fontsize(3);
	   document.getElementById(id2).innerHTML = result;
	}
}

var x = setInterval(count, 1000);

	
}







 <?php  }  ?>

</script>


</body>
</html>
