<?php
session_start();
include "db.php";

if(isset($_POST['submit'])){
if(isset($_POST["matno"]))
{
	$admin = $_POST["matno"];
    $admin = stripslashes($admin);
	$admin = mysqli_real_escape_string($dbcon, $admin);
}

if(isset($_POST["password"]))
{
	$password = $_POST["password"];
    $password = stripslashes($password);
	$password = mysqli_real_escape_string($dbcon, $password);
}

$sql = "SELECT * FROM admin WHERE matno = '$admin' AND password = '$password'";

$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result) == 1)
{
	$_SESSION["admin"] = $admin;
	echo $_SESSION['admin'];
	header("Location: ../admin/profile.php");
}
else
{
	header('location: login.php?error=0');
}

}
?>