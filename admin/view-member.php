<?php 
session_start();
include 'scripts/db.php';
if(!$_SESSION['admin']){
    header("location:login.php");
}
$user = $_GET['matno'];
$query = "SELECT * FROM members WHERE matno = '$user'";
$profile = mysqli_query($dbcon,$query);
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
    $facebook = $row['facebook'];
    $twitter = $row['twitter'];
    $linkedin = $row['linkedin'];
    $instagram = $row['instagram'];
    }
}
include_once('scripts/adminheader.php'); 
?>

<div class="header-page-title clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1><?php echo $name ?> - <?php echo $occupation ?></h1>

          <div class="pagination-content clearfix">
            <nav>

              <ul class="list-inline">
                <li class="active"><a class="number first" href="#">Back to Home</a></li>
                <li><a class="number" href="#">Previous</a></li>
                <li><a class="number" href="#">Next</a></li>
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
                      <?php echo "<img src=../passports/" . $passport." alt=''>" ?>
                        <a href="#"><?php echo $name ?>&nbsp;(<i><?php echo $nickname ?></i>)</a>
                        </div>
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
                          <li class="active"><a href="#">En</a></li>
                          <li><a href="#">Fr</a></li>
                          <li><a href="#">It</a></li>
                          <li class="border-right"><a href="#">De</a></li>
                          <li class="print"><a href="#"><i class="fa fa-print"></i></a></li>
                          <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
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

      <?php include_once('scripts/adminfooter.php'); ?>
     
