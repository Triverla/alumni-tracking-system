<?php
session_start();
include 'includes/db.php';
$user = $_SESSION["matno"];
if(!$_SESSION['matno']){
    header("location:login.php");
}
include_once('includes/header.php');
?>
<!-- Page Content -->
<div id="page-content" class="page-content pt60">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 page-sidebar">
              <aside>
                <div class="white-container mb0">
                  <div class="widget sidebar-widget jobs-search-widget">
                    <h5 class="widget-title">Search</h5>

                    <div class="widget-content">
                      <span class="search-tex">I'm looking for a ...</span>

                      <select class="form-control mt10 mb10">
                        <option value="0">Job</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                      </select>

                      <span class="search-tex">in</span>

                      <input type="text" class="form-control mt10" placeholder="Location">

                      <input type="text" class="form-control mt15 mb15" placeholder="Industry / Role">

                      <input type="submit" class="btn btn-default" value="Search">
                    </div>
                  </div>
                </div>
              </aside>
            </div> <!-- end .page-sidebar -->

            <div class="col-sm-8 page-content">
              <div id="jobs-page-map" class="white-container"></div>

              <div class="view-sort clearfix mb20">
                <div class="row">

                  <div class="col-sm-5 main-title">
                    <h3 class="client-registration-title">Available jobs</h3>
                  </div>

                  <div class="col-sm-7">
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
<?php
$query = mysqli_query($dbcon, "SELECT * FROM job");
if (mysqli_num_rows($query) > 0) {
    // output data of each row
	while ($row = mysqli_fetch_assoc($query))
	{
    $id = $row['id'];
    $cname = $row['company_name'];
    $cdesc = $row['company_description'];
    $role = $row['role'];
    $roledesc = $row['role_description'];
    $type = $row['type'];
    $location = $row['location'];
    $requirements = explode(',',$row['requirements']);
    $deadline = $row['deadline'];
    $created = $row['created'];
    $link = $row['link'];
    $creator = $row['creator'];
    $avatar = $row['avatar'];
    $id = $row['id']; 
?>
              <div class="candidate-description client-description applicants-content">

                <div class="language-print client-des clearfix">
                  <div class="aplicants-pic pull-left">
                  <?php echo "<img src=passports/jobs/" . $avatar." alt=''>" ?>
                  </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5><?php echo $cname ?></h5>
                      <a href="#"><?php echo $cdesc ?></a>
                    </div>


                  </div>

                  <div class="aplicant-details-show clearfix">

                    <p>
                    Role: <?php echo $role ?>
                      </p>
                  </div>
                  <!-- end .aplicant-details-show -->
                </div> <!-- end .language-print -->

               

                  <div class="toggle-content-client">
                  <div class="candidate-details">
                    <div class="candidate-title">
                      <h5>Job Description</h5>
                    </div>


                    <p><?php echo $roledesc ?>
                    </p>

                    <div class="candidate-title mt40">
                      <h5>Job Information</h5>
                    </div>

                    <div class="candidate-skills">
                      <div class="row mb20">
                      <div class="col-md-12 candidate-general-info">
                          <ul class="list-unstyled">
                          <li><strong>Job Type:</strong><?php echo $type ?></li>
                          <li><strong>Job Location:</strong><?php echo $location ?></li>
                          <li><strong>Application Deadline:</strong><?php echo $deadline?></li>
                          <li><strong>Added on:</strong><?php echo $created?></li>
                          <li><strong>Added By:</strong><?php echo $creator ?></li>
                          <li class="mt20"><strong>Application Link:</strong><a href="<?php echo $link ?>">Apply Here</a></li>
                        </ul>
                        </div>
                        </div> <!-- end .grid layout -->
                      </div> <!-- end .row -->


                      <div class="additional-skills">
                        <div class="candidate-title mt40">
                          <h5>Additional Requirements</h5>
                        </div>

                        <ul class="list-inline">
                        <?php foreach($requirements as $requirement){ ?>
                            <?php echo ' <li><a href="#">'.$requirement.'</a></li>' ?>
                            <?php } ?>
                      </div> <!-- end .addintional-skills -->

                  </div> <!-- end .candidate-skills -->

                    <div class="apply-share clearfix">

                      <ul class="list-inline pull-left job-preview-social-link ">
                        <li class="share">Share:</li>
                        <li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="pinterest-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </div>
                    <!-- end .apply-share -->
                  </div>
                  <!-- end .toggle-content-client -->


                  <div class="toggle-details text-right">
                    <a class="btn btn-toggle" href="#">Info</a>

                  </div>
                  <!-- end .toggle-details -->
                </div> <!-- end .candidate-details -->
              <?php }
                }?>
                </div>
          </div>
        </div>
    </div>
  </div>
  <?php include_once('includes/footer.php');
?>
         
