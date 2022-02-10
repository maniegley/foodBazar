<?php
		include("connection.php");
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$gender = $_POST["gender"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$addr = $_POST["addr"];
		$pin = $_POST["pin"];
		$country = $_POST["country"];
		$pass = $_POST["pwd"];
		$img_dir = "images/";
		$basename= basename($_FILES["img"]["name"]);
		$img_file = $img_dir . basename($_FILES["img"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($img_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["img"]["tmp_name"]);
    	if($check !== false) {
        	$uploadOk = 1;
        }
        else{
        	$uploadOk=0;
        }
 
    // Check if file already exists
		if (file_exists($img_file)) {
    		$uploadOk = 0;
		}
	// Check file size
		if ($_FILES["img"]["size"] > 500000) {
   			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
    		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
		} else {
    	if (move_uploaded_file($_FILES["img"]["tmp_name"], $img_file)) {
        	echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    	} else {
        	echo "Sorry, there was an error uploading your file.";
    	}
		}
		$query = "INSERT INTO friends_info (fname,lname,gender,phone,email,addr,pin,country,pwd,img) VALUES ('$fname','$lname','$gender','$phone','$email','$addr','$pin','$country','$pass','$basename')";
		$con = mysqli_query($conn,$query);
		if($con){
?>
     <h1 id="reg"><span style="color:red">CONGRATULATIONS!</span></h1>
		<h1 id="reg"> <?php  echo $_POST["fname"]." ".$_POST["lname"]; ?></h1>
        <h1 id="reg">Registration is done successfully</h1>
        <h3 id="reg">Please Log in</h3>
  
<?php	
		}
else
	echo "failed";
?>