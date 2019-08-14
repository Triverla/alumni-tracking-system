<?php

include_once('db.php');
$id = $_POST['id'];

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($dbcon, $_POST['name']);
    $nickname = mysqli_real_escape_string($dbcon, $_POST['nickname']);
    $matno = mysqli_real_escape_string($dbcon, $_POST['matno']);
    $email = mysqli_real_escape_string($dbcon, $_POST['email']);
    $phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
    $started = mysqli_real_escape_string($dbcon, $_POST['started']);
    $graduated = mysqli_real_escape_string($dbcon, $_POST['graduated']);
    $gender = mysqli_real_escape_string($dbcon, $_POST['gender']);
    $set = mysqli_real_escape_string($dbcon, $_POST['set']);
    $faculty = mysqli_real_escape_string($dbcon, $_POST['faculty']);
    $department = mysqli_real_escape_string($dbcon, $_POST['department']);
    $course = mysqli_real_escape_string($dbcon, $_POST['course']);
    $dob = mysqli_real_escape_string($dbcon, $_POST['dob']);
    $state = mysqli_real_escape_string($dbcon, $_POST['state']);
    $occupation = mysqli_real_escape_string($dbcon, $_POST['occupation']);
    $pow = mysqli_real_escape_string($dbcon, $_POST['pow']);
    $address = mysqli_real_escape_string($dbcon, $_POST['address']);
    $mstatus = mysqli_real_escape_string($dbcon, $_POST['mstatus']);
    $skills = mysqli_real_escape_string($dbcon, $_POST['skills']);
    $aboutme = mysqli_real_escape_string($dbcon, $_POST['aboutme']);
    $facebook = mysqli_real_escape_string($dbcon, $_POST['facebook']);
    $twitter = mysqli_real_escape_string($dbcon, $_POST['twitter']);
    $linkedin = mysqli_real_escape_string($dbcon, $_POST['linkedin']);
    $instagram = mysqli_real_escape_string($dbcon, $_POST['instagram']);

    $query = "UPDATE members SET name = '$name',nickname = '$nickname',matno='$matno',email='$email',phone='$phone',started ='$started',graduated='$graduated',
    gender='$gender',aset='$set',faculty='$faculty',department='$department',course='$course',dob='$dob',state='$state',occupation='$occupation',pow='$pow',address='$address',
    mstatus='$mstatus',skills='$skills',aboutme='$aboutme',facebook='$facebook',twitter='$twitter',linkedin='$linkedin',instagram='$instagram' WHERE id = $id"; 
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