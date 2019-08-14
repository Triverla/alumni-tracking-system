<?php 
session_start();
include 'db.php';
$user = $_SESSION["admin"];
if(!$_SESSION['admin']){
    header("location:login.php");
}
$admin = $_SESSION['admin'];
$user = $_GET['user'];
$query = "SELECT * FROM members WHERE matno = '$user'";
$profile = mysqli_query($dbcon,$query);
if (mysqli_num_rows($profile) > 0) {
    // output data of each row
	while ($row = mysqli_fetch_assoc($profile))
	{
    $id = $row['id'];
    $name = $row['name'];
    $nickname = $row['nickname'];
    $password = $row['password'];
    $department = $row['department'];
    $email = $row['email'];
    $matno = $row['matno'];
    $started = $row['started'];
    $graduated = $row['graduated'];
    $dob = $row['dob'];
    $phone = $row['phone'];
    $course = $row['course'];
    $faculty= $row['faculty'];
    $gender = $row['gender'];
    $set = $row['aset'];
    $occupation = $row['occupation'];
    $address = $row['address'];
    $mstatus = $row['mstatus'];
    $sk = $row['skills'];
    $skills = explode(',',$row['skills']);
    $aboutme = $row['aboutme'];
    $state = $row['state'];
    $pow = $row['pow'];
    $passport = $row['passport'];
    $facebook = $row['facebook'];
    $twitter = $row['twitter'];
    $linkedin = $row['linkedin'];
    $instagram = $row['instagram'];
    }
}
?>