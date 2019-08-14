<?php 
include_once('includes/add-vacancy.php');
include_once('includes/header.php'); 
?>
<!-- process content -->
<div class="process-content">
        <div class="container">

          <!-- SIgn Up -->
          <div class="moti-sign">
            <h3>Add JOB Vacancy</h3>
            <div class="form-sec">
              <div class="process-num">

                <!-- Account SetUp -->
                <p class="text-center">
                 Please ensure this inform is genuine
                </p>
              </div>

              <!-- Sign Up Form -->
              <form action="" method="post" enctype="multipart/form-data">
                <ul class="row">
                  <li class="col-md-12">
                    <input type="text" placeholder="Company Name" name="cname" class="form-control" >
                  </li>
                  <li class="col-md-12">
                    <input type="text" placeholder="Company Description" name="cdesc" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Job Role" name="role" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Role Description" name="roledesc" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <select name="type" class="form-control">
                    <option>--Select Job Type--</option>
                    <option value="Remote">Remote</option>
                    <option value="On-Site">On-Site</option>
                    </select>
                  </li>
                  
                  <li class="col-md-6">
                    <input type="file" name="my_file" class="form-control" >
                  </li>
                  <li class="col-md-12">
                    <input type="text" placeholder="Job Requirements" name="requirements" class="form-control" >
                  </li>
                  <li class="col-md-12">
                    <input type="text" placeholder="Job Link" name="link" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Job Location" name="location" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="date" placeholder="Application deadline" name="deadline" class="form-control" >
                  </li>
                  <li class="col-md-6">
                   
                  </li>
                  <li class="col-md-6">
                   
                  </li>
                  <li class="col-md-6"> <input type="submit" name="submit" value="Submit" class="btn-new" /> </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php 
include_once('includes/footer.php'); 
?>