<?php

include_once('db.php');

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
    $password = mysqli_real_escape_string($dbcon, $_POST['password']);
    $facebook = mysqli_real_escape_string($dbcon, $_POST['facebook']);
    $twitter = mysqli_real_escape_string($dbcon, $_POST['twitter']);
    $linkedin = mysqli_real_escape_string($dbcon, $_POST['linkedin']);
    $instagram = mysqli_real_escape_string($dbcon, $_POST['instagram']);


    $query = "INSERT INTO members(name,nickname,matno,email,phone,started,graduated,
    gender,aset,faculty,department,course,dob,state,occupation,pow,address,mstatus,skills,aboutme,password,joined,facebook,twitter,linkedin,instagram) 
    Values('$name','$nickname','$matno','$email','$phone','$started','$graduated','$gender','$set',
    '$faculty','$department','$course','$dob','$state','$occupation','$pow','$address','$mstatus','$skills','$aboutme','$password',now(),'$facebook','$twitter','$linkedin','$instagram')";
    $result = mysqli_query($dbcon,$query);

    if($result)
	{
		header("Location: ../profile.php?userid=".$matno);
	}
	else
	{
		echo mysqli_error($dbcon);
		echo $result;
	}
	
}	

mysqli_close($dbcon);




?>