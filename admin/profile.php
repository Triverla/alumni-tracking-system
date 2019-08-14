<?php 
session_start();
include 'scripts/db.php';
$admin = $_SESSION["admin"];
if(!$_SESSION['admin']){
    header("location:login.php");
}

$query = "SELECT * FROM admin WHERE matno = '$admin'";
$profile = mysqli_query($dbcon,$query);
if (mysqli_num_rows($profile) > 0) {
    // output data of each row
	while ($row = mysqli_fetch_assoc($profile))
	{
    $id = $row['id'];
    $name = $row['setname'];
    $matno = $row['matno'];
    $set = $row['aset'];
    $phone = $row['phone'];
    $email = $row['email'];
    }
}
//Set Details
$query = "SELECT * FROM alumniset WHERE admin = '$admin'";
$profile = mysqli_query($dbcon,$query);
if (mysqli_num_rows($profile) > 0) {
    // output data of each row
	while ($row = mysqli_fetch_assoc($profile))
	{
    $id1 = $row['id'];
    $name1 = $row['setname'];
    $set1 = $row['aset'];
    $department = $row['department'];
    $faculty = $row['faculty'];
    }
}
include_once('scripts/adminheader.php');
?>
<div id="page-content" class="agent-profile">
    <div class="container">
      <div class="page-content mt60">
        <div class="row">
          <div class="col-md-3">
            <div class="motijob-sidebar">
            <div class="candidate-profile-picture">
              <img src="img/content/agent-profile.jpg" alt="">

              <a href="#"><?php echo $name ?></a>
            </div> <!-- end .agent-profile-picture -->

            <div class="agent-details">
              <div class="title clearfix">
                <h6>Admin Detail</h6>
                <a href="#"><i class="fa fa-edit"></i>Edit</a>
              </div> <!-- end .title -->

              <div class="agent-address">
                <p><i class="fa fa-map-marker"></i>SET: <?php echo $set ?></p>
                <p><i class="fa fa-phone"></i><?php echo $phone ?></p>
                <p><i class="fa fa-envelope"></i><?php echo $email ?></p>
                <p><i class="fa fa-user"></i>Administrator</p>
              </div> <!-- end agent-address -->

            </div> <!-- end agent-details -->

            <div class="agent-assigned-jobs">
              <div class="title">
                <h6>Assigned Jobs</h6>

                <p>This agent has a total of <strong>26</strong> assigned roles</p>
              </div>
            </div>

            <div class="delete-agent">
              <button><i class="fa fa-trash-o"></i>Delete Admin</button>
            </div>
          </div>

          </div> <!-- end 3rd grid .page-sidebar layout -->

          <div class="col-md-9">
            <div class="main-content" id="agent-profile">
              <div class="view-sort">
                    <div class="row">

                      <div class="col-sm-6">
                        <div class="add-new-client">
                          <a class="btn btn-green" href="#"><i class="fa fa-plus"></i>Assign new job</a>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="job-sort-by ml20 pull-right" id ="clients-sort-by">

                          <select>
                            <option value="#">Sort by</option>
                            <option value="#">Name</option>
                            <option value="#">Type</option>
                            <option value="#">Date</option>
                          </select>

                        </div> <!-- end .job-sort-by -->



                      </div> <!-- end .end col-sm-5 grid-layout  -->
                    </div> <!-- end .row -->
                  </div> <!-- end .view-sort div -->

                  <div class="table-responsive-small">
              <div class="editing-link">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
                  <li><a href="#"><i class="fa fa-bar-chart"></i>Analytics</a></li>
                  <li><a href="#"><i class="fa fa-trash-o"></i>Delete</a></li>
                </ul>

                <div class="search-content">
                  <input type="text" placeholder="Search">
                  <button><i class="fa fa-search"></i></button>
                </div>
              </div> <!-- end .editing-link -->

              <div class="assigned-job-list">

                <div class="table-heading">
                  <div class="css-table">

                    <div class="table-details css-table-cell">
                      <h5>Set Details</h5>
                    </div>

                    <div class="days-left css-table-cell">
                      <h5>Days Left</h5>
                    </div>

                  </div> <!-- end .css-table -->
                </div> <!-- end .table-heading -->

                <div class="assigned-job-single">
                  <div class="css-table">

                    <div class="checkbox-area css-table-cell">
                      <input type="checkbox">
                    </div> <!-- end .checkbox-area -->

                    <div class="company-logo-area css-table-cell">
                      <img src="img/content/company-logo-1.png" alt="">
                    </div> <!-- end .company-logo-area -->

                    <div class="table-details css-table-cell">
                      <div class="job-description">
                        <h4><a href="#"><?php echo $name ?></a></h4>
                      </div> <!-- end .job-description -->

                      <div class="company-name">
                        <h4><a href="#">Benue State University</a></h4>
                      </div> <!-- end .company-name -->

                      <div class="job-location-stat">
                        <p><a href="#"><i class="fa fa-map-marker"></i><?php echo $department?>, <?php echo $faculty?></a></p>

                        <ul class="list-inline pull-right">
                          <li>View: <strong>2132</strong></li>
                          <li>Members: <strong>50</strong></li>
                        </ul>
                      </div> <!-- end .job-location-stat -->
                    </div> <!-- end .table-details -->

                    <div class="days-left css-table-cell">
                      <h4>25</h4>
                    </div> <!-- end .days-left -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .assigned-job-single -->
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                      <?php 
include_once('scripts/adminfooter.php');
?>