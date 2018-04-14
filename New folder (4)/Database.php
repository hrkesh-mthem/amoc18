<html>

<?php

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


mysqli_select_db($conn,"reg_db");
// Form Variable

$fname = $_POST['fname'];
$midname =$_POST['mname'];
$lname = $_POST['lname'];
$birth = $_POST['dob'];
$gend =  $_POST['gender'];
$aadhar_no =  $_POST['adhaar'];
$mail = $_POST['mail'];
$mobno =  $_POST['phone'];
$add =  $_POST['add'];
$cit =  $_POST['city'];
$pinno = $_POST['pin'];
$stat =  $_POST['state'];
$pass = $_POST['pwd'];
$use = $_POST['user'];

//---------------------------------------------------



//$flag=0;
 if($use!=NULL)
 {  
   // $check = "SELECT userid FROM reg WHERE userid='$use')";
    $result=mysqli_query($conn,"SELECT * FROM reg WHERE userid='$use'");
	if($result){
    if(mysqli_num_rows($result))
    {
		//echo "Username already taken!!!";
	
		echo '<script type="text/javascript">alert("Username already taken!!!")</script>';
		//$flag=1;
		//$_SESSION["USERNAME"] = $username;
		//header("Location:after_login.php");
		//die("Could not select db: " . mysql_error());
    }
    else {
      //echo '<script type="text/javascript">alert("Invalid Username or Password!!!")</script>';
	$sql = "INSERT INTO reg (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state,userid,password)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat','$use','$pass')";
	   if ($conn->query($sql) === TRUE) {
	echo "Login ID : " .$use;}}
 }
 }




?>

</html>