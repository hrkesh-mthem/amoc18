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

//mysqli_select_db($conn,"admin_db");

/*$sql = "SELECT id, firstname, lastname FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}*/

$conn->close();	
	
?>

<form method="post" action="del.php">

SELECT CATEGORY<select name="cate" ><option value="1">Category 1</option><option value="2">Category 2</option><option value="3">Category 3</option><option value="4">Category 4</option></select><br><br>
<input type="Submit" name = "Submit" value="Submit">

</form>

</html>