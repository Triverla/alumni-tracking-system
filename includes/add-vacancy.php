<?php
session_start();
include 'includes/db.php';
if(!$_SESSION['matno']){
    header("location:login.php");
}
$creator = $_SESSION['matno'];
//PHP code to add job vacancy
                if(isset($_POST["submit"]))
                {
        //php code to upload images in image formats
                     if ($_FILES["my_file"]["type"] == "image/jpg" || $_FILES["my_file"]["type"] == "image/png" || $_FILES["my_file"]["type"] == "image/jpeg")
                    {   
                        if (move_uploaded_file($_FILES["my_file"]["tmp_name"], "passports/jobs/".$_FILES["my_file"]["name"]))
                        {
                            $cname = $_POST["cname"];
                            $cname = mysqli_real_escape_string($dbcon, $cname);
                            
                            $cdesc = $_POST["cdesc"];
                            $cdesc = mysqli_real_escape_string($dbcon, $cdesc);
                            
                            $doc = $_FILES["my_file"]["name"];
                            $doc = mysqli_real_escape_string($dbcon, $doc);
                            
                            $role = $_POST["role"];
                            $role = mysqli_real_escape_string($dbcon, $role);
                            
                            $roledesc = $_POST["roledesc"];
                            $roledesc = mysqli_real_escape_string($dbcon, $roledesc);
                            
                            $type = $_POST["type"];
                            $type = mysqli_real_escape_string($dbcon, $type);
                            
                            $location = $_POST["location"];
                            $location = mysqli_real_escape_string($dbcon, $location);

                            $deadline = $_POST["deadline"];
                            $deadline = mysqli_real_escape_string($dbcon, $deadline);

                            $requirements = $_POST["requirements"];
                            $requirements = mysqli_real_escape_string($dbcon, $requirements);

                            $link = $_POST["link"];
                            $link = mysqli_real_escape_string($dbcon, $link);
                            //php code to generate Job ID
                            $id = 'BSU-AL-JB-'.rand(100,999);
                            //SQL statement to insert data into the assignment table
                            $sqldoc = "INSERT INTO job  VALUES ('$id','$cname', '$cdesc', '$role', '$roledesc', '$type', '$location', '$requirements',now(),'$deadline','$doc','$creator','$link')";

                           $result= mysqli_query($dbcon, $sqldoc);

                           if($result){
                            $msg="Job created successfully";
                            echo '<script>alert("'.$msg.'")</script>';
                           }else{
                               $msg = mysqli_error($dbcon);
                               echo '<script>alert("'.$msg.'")</script>';
                           }
                        }
                        else
                        {
                            echo "<h3>Error uploading assignment.</h3>";
                        }
                    }
                    else
                    {
                        echo "<h3>Error uploading assignment.</h3>";
                    }
                }
            ?>