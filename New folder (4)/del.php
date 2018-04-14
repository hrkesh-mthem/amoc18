<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";
session_start();
if(isset($_POST['cate']) && !empty($_POST['cate']))
{
$_SESSION["display"]=$_POST['cate'];}
if(isset($_SESSION["display"]) && !empty($_SESSION["display"]))
{
	$cand = $_SESSION["display"] ;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//
//
//$name = $_POST['candi_n'];
if(isset($cand) && !empty($cand))
{
	//$cand = $_POST['cate'];
	$_SESSION["del"]=$cand;//$del= $cand;
if($cand == 1)
{
	$sql = "SELECT id, firstname, lastname FROM category1";
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
}
}
else if ($cand == 2)
{
	$sql = "SELECT id, firstname, lastname FROM category2";
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
}
}
else if ($cand == 3)
{
	$sql = "SELECT id, firstname, lastname FROM category3";
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
}
}
else if ($cand == 4)
{
	$sql = "SELECT id, firstname, lastname FROM category4";
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
}
}
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

Enter ID Of candidate: <input type="text" name="candi_n"> <br><br>
<input type="Submit" name = "Submit" value="Submit">

</form>
<form action="delet_candidate.php">


<input type="Submit"  value="Exit">

</form>
<?php
if(isset($_POST['candi_n']) && !empty($_POST['candi_n']))
{
	$name= $_POST['candi_n'];
	$del=$_SESSION["del"];
if($del == 1)
{
	$sq = "DELETE FROM category1 WHERE id= '$name'";

}
else if ($del == 2)
{
	$sq = "DELETE FROM category2 WHERE id= '$name'";

}
else if ($del == 3)
{
	$sq = "DELETE FROM category3 WHERE id= '$name'";

}
else if ($del == 4)
{
	$sq = "DELETE FROM category4 WHERE id= '$name'";

}

if ($conn->query($sq) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>






</html>