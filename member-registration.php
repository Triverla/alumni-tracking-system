<?php include_once('includes/header.php'); ?>
<div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Alumni Member Registration</h1>

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Member Registration</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="job-registration full-width">
        <div class="container">
          <div class="page-content">
            <div class="table-responsive">

              <form action="includes/register.php" class="default-form" method="post">
                <div class="form-banner-button  mt50 mb20">

                  <div class="css-table">
                    <div class="registration-detail css-table-cell">
                      <div class="pull-left">
                        <p>Student Information</p>
                      </div>
                    </div> <!-- job-details -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .form-banner-button -->

                <!-- start main form content -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Student Name</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="name">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Nickname</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="nickname">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Matric Number</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="matno">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Email</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="email" name="email">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Phone Number</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="phone">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->


                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>School Start-End</label>
                    </div>

                    <div class="registration-detail css-table-cell">

                      <div class="pull-left calender-field">
                        <input type="text" id="datepicker-start" name="started" placeholder="Entry Year">
                        <i class="fa fa-calendar"></i>
                      </div>

                      <div class="pull-left arrow">
                        -
                      </div>

                      <div class="pull-left calender-field">
                        <input type="text" id="datepicker-end" name="graduated" placeholder="Graduation Year">
                        <i class="fa fa-calendar"></i>
                      </div>

                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Gender</label>
                    </div>

                    <div class="registration-detail css-table-cell">

                      <div class="radio-inputs">
                        <span class="radio-input active">
                          <input id="male" type="radio" name="gender" value="Male" checked="checked">
                          <label for="male">Male</label>
                        </span>

                        <span class="radio-input">
                          <input id="female" type="radio" name="gender" value="Female">
                          <label for="female">Female</label>
                        </span>
                      </div> <!-- end .radio-inputs -->

                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Set</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name ="set" placeholder="2014/2015">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Faculty</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="faculty">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Department</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="department">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Course Studied</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="course">
                    </div> <!-- end .registration-detail -->


                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Date of Birth</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="date" name="dob">
                    </div> <!-- end .registration-detail -->


                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>State</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <div class="nationality">
                        <select name="state">
                          <option value="Benue State">Benue State</option>
                          <option value="Nasarawa State">Nasarawa State</option>
                          <option value="Abia State">Abia State</option>
                          <option value="Cross-River State">Cross-River State</option>
                          <option value="Kogi State">Kogi State</option>
                        </select>
                      </div>
                    </div> <!-- end .registration-detail -->
                    
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Occupation</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <div class="work-permit">
                        <select name="occupation">
                          <option value="Student">Student</option>
                          <option value="Civil servant">Civil Servant</option>
                          <option value="Business">Business Man/Woman</option>
                        </select>
                      </div>
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Place of Work/Institution</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="pow">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Residence</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="address">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->


                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Marital Status</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <div class="contract-type">
                        <select name="mstatus">
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                        </select>
                      </div>

                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Skills</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="text" name="skills">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="">
                      <label><span>*</span>About Me</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <div class="textarea-editor">
                        <textarea name="aboutme" id="editor" cols="40"></textarea>

                        <p>Feel free to share detailed information about yourself</p>
                      </div>
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Login Password</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input type="password" name="password">
                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span></span>Social Media Account</label>
                    </div>

                    <div class="registration-detail css-table-cell">

                      <div class="pull-left calender-field">
                        <input type="text" id="facebook" name="facebook" placeholder="Facebook Username">
                        <i class="fa fa-facebook"></i>
                      </div>

                      <div class="pull-left calender-field">
                        <input type="text" id="twitter" name="twitter" placeholder="Twitter Username">
                        <i class="fa fa-twitter"></i>
                      </div>

                      <div class="pull-left calender-field">
                        <input type="text" id="linkedin" name="linkedin" placeholder="Linkedin Username">
                        <i class="fa fa-linkedin"></i>
                      </div>

                      <div class="pull-left calender-field">
                        <input type="text" id="instagram" name="instagram" placeholder="Instgram Username">
                        <i class="fa fa-instagram"></i>
                      </div>


                    </div> <!-- end .registration-detail -->

                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="save-cancel-button">
                <input type="submit" name="submit" class="btn btn-default" value="Submit"/>
                  <a href="#" class="btn btn-black">Cancel</a>
                </div> <!-- end .save-cancel-button -->

              </form>
            </div>
          </div> <!-- end .page-content -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->
<?php include_once('includes/footer.php'); ?>