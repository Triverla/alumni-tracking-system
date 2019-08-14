<?php
session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
}
include_once('db.php');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($dbcon, $_POST['setname']);
    $set = mysqli_real_escape_string($dbcon, $_POST['aset']);
    $department = mysqli_real_escape_string($dbcon, $_POST['department']);
    $faculty = mysqli_real_escape_string($dbcon, $_POST['faculty']);
    $admin = $_SESSION['admin'];

    $id = 'BSUM-'.$set.rand(99,999);

    $query = "INSERT INTO alumniset(id,setname,aset,department,faculty,admin) 
    Values('$id','$name','$set','$department','$faculty','$admin')";
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