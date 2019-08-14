<?php 
include_once('includes/profile-script.php');
include_once('includes/header.php'); 
?>

<div class="header-page-title clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1><?php echo $name ?> - <?php echo $occupation ?> (<?php echo $pow ?>)</h1>

          <div class="pagination-content clearfix">
            <nav>

              <ul class="list-inline">
                <li class="active"><a class="number first" href="#">Back to Home</a></li>
              </ul>

            </nav>
          </div> <!-- end .pagination -->
        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">
              <div class="tab-pane active" id="candidate-profile">
                <div class="row">
                  <div class="col-md-4">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                      <?php echo "<img src=passports/" . $passport." alt=''>" ?>
                        <a href="#"><?php echo $name ?>&nbsp;(<i><?php echo $nickname ?></i>)</a><br>
                        <a class="btn btn-default" href="#myModal" data-toggle="modal">Upload a Picture</a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title">
                          <h6>General Information</h6>
                        </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Birthday:</strong><?php echo $dob ?></li>
                          <li><strong>Address:</strong><?php echo $address ?></li>
                          <li><strong>Phone:</strong><?php echo $phone ?></li>
                          <li><strong>Email:</strong><?php echo $email ?></li>
                          <li><strong>State:</strong><?php echo $state ?></li>
                          <li><strong>Marital Status:</strong><?php echo $mstatus ?></li>
                        </ul>

                        <!-- social link -->

                        <div class="title mt20">
                          <h6>Socialize</h6>
                        </div> <!-- end .title -->

                        <ul class="list-inline social-link mt10">
                          <li class="envelop-color"><a href="#"><i class="fa fa-envelope"></i></a></li>
                          <li class="facebook-color"><a href="https://www.facebook.com/<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                          <li class="twitt-color"><a href="https://www.twitter.com/<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a></li>
                          <li class="linked-color"><a href="https://www.linkedin.com/<?php echo $linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                          <li class="envelop-color"><a href="https://www.instagram.com/<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a></li>
                        </ul>


                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div class="col-md-8">
                    <div class="candidate-description">

                      <div class="language-print text-right">
                        <ul class="list-inline">
                          <li><a href="update-profile.php" class="btn btn-new"><i class="fa fa-uer"></i>Update Profile</a></li>
                        </ul>
                      </div> <!-- end .language-print -->

                      <div class="candidate-details">
                        <div class="candidate-title">
                          <h5>Hello, my name is <?php echo $name ?></h5>
                        </div>


                        <p><?php echo $aboutme ?>
                        </p>

                        <div class="candidate-title mt40">
                          <h5>Other Information</h5>
                        </div>

                        <div class="candidate-skills">
                          <div class="row mb20">
                          <div class="col-md-12 candidate-general-info">
                          <ul class="list-unstyled">
                          <li><strong>Matric Number:</strong><?php echo $matno ?></li>
                          <li><strong>Academic Set:</strong><?php echo $set ?></li>
                          <li><strong>Duration:</strong><?php echo $started ?> - <?php echo $graduated?></li>
                          <li><strong>Course:</strong><?php echo $course ?></li>
                          <li><strong>Department:</strong><?php echo $department ?></li>
                          <li><strong>Faculty:</strong><?php echo $faculty ?></li>
                          <li class="mt20"><strong>Current Occpation:</strong><?php echo $occupation ?></li>
                          <li><strong>Place of Work/Institution:</strong><?php echo $pow ?></li>
                          <li><strong>Country:</strong>NIGERIA</li>
                        </ul>
                        </div>
                          </div> <!-- end .row -->

                          <div class="additional-skills">
                            <div class="candidate-title mt40">
                              <h5>Skills</h5>
                            </div>
                            <ul class="list-inline">
                            <?php foreach($skills as $skill){ ?>
                            <?php echo ' <li><a href="#">'.$skill.'</a></li>' ?>
                            <?php } ?>
                            </ul>
                          </div> <!-- end .addintional-skills -->

                        </div> <!-- end .candidate-skills -->

                      </div> <!-- end .candidate-details -->

                    </div> <!-- end .candidate-description -->
                  </div> <!-- end .9col grid layout -->

                </div> <!-- end .row -->
              </div> <!-- end .tabe pane -->



            </div> <!-- end .responsive-tabs.dashboard-tabs -->

          </div> <!-- end .page-content -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <?php include_once('includes/footer.php'); ?>
      <div id="myModal" class="modal" role="dialog">
                            <div class="modal-dialog">
                                            <!-- Modal content-->
                              <div class="modal-content">
                                  <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Upload Profile Image</h4>
                                  </div>
                                  <div class="modal-body">

                                    <form action="includes/upload-member-img.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="matno" value="<?php echo $_SESSION["matno"]; ?>">
                                        </div>
                                        <img src="../profileimg/avatar.png" class="img-circle" alt="user" width="120px" height="120px">
                                      <div class="form-group">
                                          <input type="file" name="img_file" id="fileToUpload" class="btn btn-new">
                                          <input type="submit" value="Upload Image" name="upload" class="update-button btn btn-primary">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
