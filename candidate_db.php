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


mysqli_select_db($conn,"admin_db");
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
$category = $_POST['category'];

//---------------------------------------------------

if($category == '1'){
	

$sql = "INSERT INTO category1 (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat')";


if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
           alert("New Record Successfully");
          window.location.href = "Administrative.html";
             </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if($category == '2'){
$sql = "INSERT INTO category2 (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat')";


if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
           alert("New Record Successfully");
          window.location.href = "Administrative.html";
             </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if($category == '3'){
$sql = "INSERT INTO category3 (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat')";


if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
           alert("New Record Successfully");
          window.location.href = "Administrative.html";
             </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if($category == '4'){
$sql = "INSERT INTO category4 (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state)   
         VALUES ('$fname','$midname','$lname','$birth','$gend','$aadhar_no','$mail','$mobno','$add','$cit','$pinno','$stat')";


if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
           alert("New Record Successfully");
          window.location.href = "Administrative.html";
             </script>';
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

/*
$sql = "INSERT INTO myGuests (firstname,middlename, lastname, email)
VALUES ('yash','raj', 'khatru', 'john@yags.com')";

$sql = "INSERT INTO form (firstname, middlename ,lastname,dob,gender,aadhar,email,mobileno,address,city,pincode,state)   
         VALUES ('yash','khatri','raj','09/06/1998','male','123456789102','yash@gmail.com','8460080384','D-32','ank','393001','gujarat')";

*/

  // header("Location:Administrative.html")or
	//	die("Could not select db: " . mysql_error());
?>
<!--<a href="Administrative.html"><center><button class="btn_mid middle_sele"> Click here </button></a> -->




</html>