<?php 
session_start();
include 'includes/db.php';
$user = $_SESSION["matno"];
if(!$_SESSION['matno']){
    header("location:login.php");
}
$query = "SELECT * FROM members";
$profile = mysqli_query($dbcon,$query);

include_once('includes/header.php'); ?>
<div id="page-content">
        <div class="container">
          <div class="page-content">

            <div class="agent-title">
              <h1 class="pull-left">Alumni Members</h1>

              <a href="#" class="btn btn-green pull-right"><i class="fa fa-plus"></i>Search</a>
            </div> <!-- end .agent-title  -->


            <div class="agents-details">
              <div class="row">
              <?php
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
                $skills = explode(',',$row['skills']);
                $aboutme = $row['aboutme'];
                $state = $row['state'];
                $pow = $row['pow'];
                $passport = $row['passport'];

                //Display
                echo '
                <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="agent-single">
                  <img src=passports/'.$passport.' alt="" width="50px" height="50px">

                  <ul>
                    <li><span class="title">Name:</span><span class="title-des text-capitalize">'.$name.'</span></li>
                    <li><span class="title">Tel:</span><span class="title-des">'.$phone.'</span></li>
                    <li><span class="title">Email:</span><span class="title-des">'.$email.'</span></li>
                    <li><span class="title">Set:</span><span class="title-des">'.$set.'</span></li>
                  </ul>

                  <div class="view-profile">
                    <a href="member-profile.php?matno='.$matno.'" class="btn btn-default">View Member Profile</a>
                  </div>
                </div> <!-- end .agent-single  -->
              </div> <!-- end grid layout  -->
                
                ';
                }
            }
              ?>
                </div>
                </div>
                </div>
                </div>