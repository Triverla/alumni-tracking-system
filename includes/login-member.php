<?php
session_start();
include "db.php";

if(isset($_POST['submit'])){
if(isset($_POST["matno"]))
{
	$member = $_POST["matno"];
    $member = stripslashes($member);
	$member = mysqli_real_escape_string($dbcon, $member);
}

if(isset($_POST["password"]))
{
	$password = $_POST["password"];
    $password = stripslashes($password);
	$password = mysqli_real_escape_string($dbcon, $password);
}

$sql = "SELECT * FROM members WHERE matno = '$member' AND password = '$password'";

$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result) == 1)
{
	$_SESSION["matno"] = $member;
	echo $_SESSION['matno'];
	header("Location: profile.php?userid=".$member);
}
else
{
	header('location: login.php?error=0');
}

}
?>