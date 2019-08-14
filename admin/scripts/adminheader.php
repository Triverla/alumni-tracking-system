
<!doctype html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BSU-ALUMNI</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="../assets/text/css" href="assets/css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="../assets/text/css" href="assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->

          <div class="header-notification-bar" style="display:none;">
            <div class="register-user">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="index-2.html"><img src="assets/img/logo-bu.png" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                    <div class="search-form">
                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Search..." class="topbar-search-input">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>

                    </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li class="user-profile-pic"><a href="#"><img src="assets/img/content/agent-img-1.jpg" alt=""></a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .register-user -->
          </div> <!-- end. header-notification-bar  -->

          <!--
          END HEADER NOTIFICATION TOP BAR
          -->

          <!--
          HEADER TOP BAR FOR NON REGISTER USER
          -->

          <div class="header-notification-bar">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a style="color: red;" href="../index.php"><img src="../assets/img/logo.png" alt="" width="40" height="40"><b>BSUM-ALUMNI</b></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                    <div class="search-form">

                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Search..." class="topbar-search-input">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>

                    </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
                      <li><a href="#"><?php if(isset($_SESSION['admin'])){
                         echo $_SESSION['admin'];
                        }else{
                          echo '<a href="login.php">Login</a>'; }?></a></li>
                        <li><a href="#"><?php if(isset($_SESSION['admin'])){
                         echo '<a href="scripts/logout.php">Logout</a>';
                        }else{
                          echo '<a href="register.php">Register</a>'; }?></a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->


          <!--
          END HEADER TOP BAR FOR WITHOUT LOGIN USER
          -->

          <!-- Navigation -->
          <div class="main-navbar">

            <nav class="navbar navbar-default">
              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index-2.html"><img src="../assets/img/logo.png" alt="" width="30" height="30"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li class="active"><a href="profile.php">Profile</a></li>
                    <li><a href="professionals.html">Fund Raising</a></li>
                    <li class="active"><a href="index-2.html">Reunions</a></li>
                    <li class="active"><a href="allUsers.php">Users</a></li>
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </div> <!-- main-navbar -->
          <!-- end .header-top-bar -->
        </div>


      </header>
      <!-- end #header -->

      <!-- header Search bar -->



      <!-- end .header-banner -->