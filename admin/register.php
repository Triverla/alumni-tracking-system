<?php 
include_once('scripts/register-admin.php'); 
include_once('scripts/adminheader.php'); 
?>
<!-- process content -->
<div class="process-content">
        <div class="container">

          <!-- SIgn Up -->
          <div class="moti-sign">
            <h3>Sign Up As your set Admin</h3>
            <div class="form-sec">
              <div class="process-num">

                <!-- Account SetUp -->
                <ul>
                  <li class="current">
                    <p><span>1</span>Account Info</p>
                  </li>
                  <li>
                    <p><span>2</span>Confirm your Email</p>
                  </li>
                  <li>
                    <p><span>3</span>Choose your Plan</p>
                  </li>
                  <li>
                    <p><span>4</span>Account Complete</p>
                  </li>
                </ul>
              </div>

              <!-- Sign Up Form -->
              <form action="" method="post">
                <ul class="row">
                  <li class="col-md-12">
                    <input type="text" placeholder="Set Name" name="setname" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Matric Number" name="matno" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Set eg. 2014/2015" name="aset" class="form-control" >
                  </li>
                  <li class="col-md-12">
                    <input type="email" placeholder="Email" name="email" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="password" placeholder="Password" name="password" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <input type="text" placeholder="Telephone" name="phone" class="form-control" >
                  </li>
                  <li class="col-md-6">
                    <p>Already a member? <a href="#.">Sign In</a></p>
                  </li>
                  <li class="col-md-6"> <input type="submit" name="submit" value="Submit" /> </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php 
include_once('scripts/adminfooter.php'); 
?>