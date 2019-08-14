<?php
include 'db.php';

if(isset($_POST["upload"]))
{
    $matno = $_POST["matno"];

    if ($_FILES["img_file"]["type"] == "image/jpg" || $_FILES["img_file"]["type"] == "image/jpeg" || $_FILES["img_file"]["type"] == "image/png")
    {   
        if (move_uploaded_file($_FILES["img_file"]["tmp_name"], "../passports/".$_FILES["img_file"]["name"]))
        {
            $img = $_FILES["img_file"]["name"];
            $img = mysqli_real_escape_string($dbcon, $img);

            $sql = "UPDATE members SET passport = '$img' WHERE matno = '$matno'";

            mysqli_query($dbcon, $sql);
            
            header("Location: ../profile.php");
        }
        else
        {
            echo "Error uploading image";
        }
    }
    else
    {
         echo ("Error description: " . mysqli_error($dbcon));
         header("Location: ../profile.php");
    }
}

?>