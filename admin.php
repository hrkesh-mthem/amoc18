
<html>
<head>
<style>
div.absolute2{
	top:400px;
	left:400px;
	position: absolute;
	
}
</style>

<script>
 
function validation(){
	var year = document.counter.year.value;
	var mon = document.counter.month.value;
	var day = document.counter.day.value;
	
	if(year==""){
		window.alert("Enter the year");	
        return false;		
	}
	if(mon==""){
		window.alert("Enter the month");	
        return false;		
	}
	if(day==""){
		window.alert("Enter the day");	
        return false;		
	}
var current_year = new Date().getFullYear();
var current_month = new Date().getMonth();
var current_day = new Date().getDate();
var month = mon-1;

if(year<current_year){
	
	window.alert("Enter Valid Year");
	return false;
	
}

else if(year==current_year && month < current_month){
	
	window.alert("Enter Valid Month");
	return false;
}
else if(year==current_year && month == current_month && day <= current_day){
	window.alert("Enter Valid Day");
    return false;	
}

function clearField() {
   if(document.getElementById) {
      document.counter.reset();
   }
}
	
}



function submitForm()
{
  if(validation())
  {
    document.forms["counter"].submit(); 
    document.forms["counter"].reset(); 
  }
}

submitForm();
</script>
</head>

<div class= "absolute2">

<form name = "counter" method="post"  action="Competition.php">

<input type = "Number" name ="year">
<input type = "Number" name ="month">
<input type = "Number" name ="day">
<input type = "text" name ="number">

<input type = "submit" value = "submit">

</form>
</div>
</html>