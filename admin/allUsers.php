<?php 
session_start();
include 'scripts/db.php';
$user = $_SESSION["admin"];
if(!$_SESSION['admin']){
    header("location:login.php");
}
$query = "SELECT * FROM members";
$profile = mysqli_query($dbcon,$query);

include_once('scripts/adminheader.php'); ?>
<div id="page-content">
        <div class="container">
          <div class="page-content">

            <div class="agent-title">
              <h1 class="pull-left">Alumni Members</h1>

              <a href="#" class="btn btn-green pull-right"><i class="fa fa-plus"></i>Search</a>
            </div> <!-- end .agent-title  -->


            <div class="agents-details">
              <div class="row">
                  <table class="table table-responsive table-striped table-bordered">
                      <thead>
                      <th>S/N</th>
                          <th>Name</th>
                          <th>Matric NO</th>
                          <th>Email</th>
                          <th>SET</th>
                          <th>Phone</th>
                          <th>Gender</th>
                          <th>Department</th>
                          <th colspan="3">Actions</th>
                          <thead>
                              <tbody>
              <?php
              if (mysqli_num_rows($profile) > 0) {
                // output data of each row
                $i = 1;
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
               <tr>
               <td>'.$i++.'</td>
               <td>'.$name.'</td>
               <td>'.$matno.'</td>
               <td>'.$email.'</td>
               <td>'.$set.'</td>
               <td>'.$phone.'</td>
               <td>'.$gender.'</td>
               <td>'.$department.'</td>
               <td><a href="view-member.php?matno='.$matno.'"><i class="fa fa-eye"></i></a></td>
               <td><a href="update-member.php?user='.$matno.'"><i class="fa fa-pencil"></i></a></td>
               <td><a href=""><i class="fa fa-trash"></i></a></td>
               </tr>
                ';
                }
            }
              ?>
              </body>
            </table>
        </div>
    </div>
    </div>
</div>
                <?php include 'scripts/adminFooter.php';