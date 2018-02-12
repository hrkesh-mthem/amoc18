<!DOCTYPE HTML>
<?php
if(isset($_POST['year']) && empty($_POST['year'])){
	
		 echo '<script type="text/javascript">
                  alert("Enter Year");
                                                                       </script>';	
}
else if(isset($_POST['month']) && empty($_POST['month'])){
	
		 echo '<script type="text/javascript">
                  alert("Enter Month");
                              </script>';	
}
else if(isset($_POST['day']) && empty($_POST['day'])){
	
		 echo '<script type="text/javascript">
                  alert("Enter Day");    </script>';	
}
if((isset($_POST['year']) && !empty($_POST['year']))&& (isset($_POST['month']) && !empty($_POST['month'])) &&(isset($_POST['day']) && !empty($_POST['day']))){
	
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];

}
else{
	
$year = 2020;
$month = 1;
$day = 3;
}
/*
echo $year.'<br>';
echo $month. '<br>';
echo $day.'<br>';
*/

?>
<html>
<head>

<style>
p {
  text-align: center;
  font-size: 20px;
  margin:center;
}

div.absolute1{
	top:10px;
	left:300px;
	background:yellow;
	position:fixed;
	height:20%;
	width:20%;
	text-align:center;
	
}

div.absolute2{
	top:400px;
	left:400px;
	position: absolute;
	
}
</style>
</head>
<body>
<div class ="absolute1">
<p id="demo"></p>
<p id ="demo2"> </p>
</div>
<script type="text/javascript">

var year = parseInt("<?php echo $year ?>");
var mon = parseInt("<?php echo $month ?>");
var month = mon -1;
var day = parseInt("<?php echo $day ?>");

var current_year = new Date().getFullYear();
var current_month = new Date().getMonth();
var current_day = new Date().getDate();


if(year<current_year){
	
	alert("Enter Valid Year");
	
}

else if(year==current_year && month < current_month){
	
	alert("Enter Valid Month");
}
else if(year==current_year && month == current_month && day <= current_day){
	alert("Enter Valid Day");	
}
else{


var countDownDate = new Date('2018,1,30,17:55:05').getTime();

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
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
		result = "Sorry!";
		document.getElementById("demo2").innerHTML = result;
		
    }
	else{
	    
             var text = "Click here for Participation";
            var result = text.link('user_gallary.php');    /// only for checking  linked;
	   document.getElementById("demo2").innerHTML = result;
	}
}
var x = setInterval(count, 1000);

}

</script>


</body>

<div class= "absolute2">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

<input type = "Number" name ="year">
<input type = "Number" name ="month">
<input type = "Number" name ="day">

<input type = "submit" value = "submit">

</form>
</div>
</html>
