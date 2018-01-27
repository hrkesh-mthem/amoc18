<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "photograph";
session_start();

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['file']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$user_name = $_SESSION["USERNAME"];

echo $user_name;



if(isset($_FILES['file']['name']))
{
	if(!empty($_FILES['file']['name']))
	{
		$name = $_FILES['file']['name'];
		$image_name = addslashes($_FILES['file']['name']);
		$size = $_FILES['file']['size'];
		$max_size = 2097152;
		
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';
		
		
		$offset = 0;
		while($strpos = strpos($name, '.', $offset))
		{
			$offset = $strpos + 1;
			$extension = strtolower(substr($name, $offset));
		}
		echo $extension;
		echo $imageFileType;
		if(($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg'  )&&($imageFileType=='jpeg'|| $imageFileType=='jpg' || $imageFileType=='png' )&& ($size<=$max_size))
		{
			$yas = move_uploaded_file($tmp_name, 'uploads/'.$name);
			if($yas)
			{
				echo 'Uploaded.';
				$file_to_saved = "uploads/".$name;
				
                       // $sql = mysqli_query($conn,"select profile from profile where name ='$user_name' ");
                        $sql =   mysqli_query($conn,"select profile from profile where name ='$user_name' ");
                            

                             if (!$sql) {
                              printf("Error: %s\n", mysqli_error($conn));
                                  exit();
                                   }

                                 $row = mysqli_fetch_array($sql);
                        if ($sql) {
                          
						     //$delet = mysqli_query($conn," DELETE FROM profile WHERE id = 'user_name' ");
						
							
							$update_img = mysqli_query($conn,"UPDATE profile SET profile = '".$file_to_saved."', pname = '$image_name' WHERE name ='$user_name' ");
							if($update_img){
								echo "Image update Successfully ";
							}
							else{
								echo "There is something wrong with in updating code. Eff!";
								
							}
							
							
						}				
				    else{
				    $insert_img = mysqli_query($conn,"INSERT INTO profile (name,profile,pname) values  ('$user_name','".$file_to_saved."','$image_name')");
                      if ($insert_img) {
    
                         echo "Img inserted successfully";
						// header("refresh:0;url=user_page.php");
                                       }
                       else{
                              echo "There is something wrong with this code. Eff!";
                              }
					}

				
				
				
				
				
			}
			else
			{
				echo 'There was an error.';
			}
		}
		else
		{
			echo 'File must be jpg/jpeg and must be 2MB or less.';
		}
	}
	else
	{
		echo 'Please choose a file.';
	}
}
?>



<html>

 <img src="<?=$row[0]?>" width="175" height="175" alt ="Set Profile Pic">

</html>