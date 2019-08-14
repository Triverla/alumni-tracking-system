<?php

include_once('db.php');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($dbcon, $_POST['setname']);
    $matno = mysqli_real_escape_string($dbcon, $_POST['matno']);
    $email = mysqli_real_escape_string($dbcon, $_POST['email']);
    $phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
    $set = mysqli_real_escape_string($dbcon, $_POST['aset']);
    $password = mysqli_real_escape_string($dbcon, $_POST['password']);

    $query = "INSERT INTO admin(setname,matno,aset,email,phone,password) 
    Values('$name','$matno','$email','$phone','$set','$password')";
    $result = mysqli_query($dbcon,$query);

    if($result)
	{
		header("Location: ../profile.php");
	}
	else
	{
		echo mysqli_error($dbcon);
		echo $result;
	}
	
}	

mysqli_close($dbcon);




?>