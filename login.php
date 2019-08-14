<?php 
include_once('includes/login-member.php');
include_once('includes/header.php'); 
?>

 <!-- process content -->
 <div class="process-content">
        <div class="container">

          <!-- SIgn Up -->
          <div class="moti-sign">
            <h3>Sign In to BSU-ALUMNI</h3>
            <div class="form-sec">
              <div class="process-num">

                <!-- Account SetUp -->
                <ul>
                  <li class="current">
                    <p><span>1</span>Enter Email</p>
                  </li>
                  <li>
                    <p><span>2</span>Enter Password</p>
                  </li>
                  <li>
                    <p><span>3</span>Click Submit</p>
                  </li>
                  <li>
                    <p><span>4</span>Sign In Complete</p>
                  </li>
                </ul>
              </div>

              <!-- Sign Up Form -->
              <form action="" method="post">
                <ul class="row">
                  <li class="col-md-12">
                    <input type="tex/t" placeholder="Matric Number" name="matno" class="form-control" >
                  </li>
                  <li class="col-md-12">
                    <input type="password" placeholder="Password" name="password" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <p>Not a member? <a href="#.">Sign Up</a></p>
                  </li>
                  <li class="col-md-6"> <input type="submit" name="submit" value="Submit" class="btn-new"/></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include_once('includes/footer.php'); ?>