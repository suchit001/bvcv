<?php
session_start();
$_SESSION["reps"];
$_SESSION["fname"];
$_SESSION["lname"];
$_SESSION["email"];
$_SESSION["school"];
$_SESSION["jr_college"];
$_SESSION["undergrad"];
$_SESSION["job1"];
$_SESSION["job2"];
$_SESSION["job3"];
echo $_SESSION["fname"];
?>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
<link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>

<body class="w3-light-grey">
  <header id="header" class="header">

      <div class="header-menu">

          <div class="col-sm-7">
              <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
              <div class="header-left">
                  <button class="search-trigger"><i class="fa fa-search"></i></button>
                  <div class="form-inline">
                      <form class="search-form">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                          <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                      </form>
                  </div>

                  <div class="dropdown for-notification">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-bell"></i>
                          <span class="count bg-danger">5</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="notification">
                          <p class="red">You have 3 Notification</p>
                          <a class="dropdown-item media bg-flat-color-1" href="#">
                          <i class="fa fa-check"></i>
                          <p>Server #1 overloaded.</p>
                      </a>
                          <a class="dropdown-item media bg-flat-color-4" href="#">
                          <i class="fa fa-info"></i>
                          <p>Server #2 overloaded.</p>
                      </a>
                          <a class="dropdown-item media bg-flat-color-5" href="#">
                          <i class="fa fa-warning"></i>
                          <p>Server #3 overloaded.</p>
                      </a>
                      </div>
                  </div>

                  <div class="dropdown for-message">
                      <button class="btn btn-secondary dropdown-toggle" type="button"
                          id="message"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti-email"></i>
                          <span class="count bg-primary">9</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="message">
                          <p class="red">You have 4 Mails</p>
                          <a class="dropdown-item media bg-flat-color-1" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                          <span class="message media-body">
                              <span class="name float-left">Jonathan Smith</span>
                              <span class="time float-right">Just now</span>
                                  <p>Hello, this is an example msg</p>
                          </span>
                      </a>
                          <a class="dropdown-item media bg-flat-color-4" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                          <span class="message media-body">
                              <span class="name float-left">Jack Sanders</span>
                              <span class="time float-right">5 minutes ago</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                          </span>
                      </a>
                          <a class="dropdown-item media bg-flat-color-5" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                          <span class="message media-body">
                              <span class="name float-left">Cheryl Wheeler</span>
                              <span class="time float-right">10 minutes ago</span>
                                  <p>Hello, this is an example msg</p>
                          </span>
                      </a>
                          <a class="dropdown-item media bg-flat-color-3" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                          <span class="message media-body">
                              <span class="name float-left">Rachel Santos</span>
                              <span class="time float-right">15 minutes ago</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                          </span>
                      </a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-sm-5">
              <div class="user-area dropdown float-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                  </a>

                  <div class="user-menu dropdown-menu">
                      <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                      <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                      <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                      <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>
              </div>

              <div class="language-select dropdown" id="language-select">
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                      <i class="flag-icon flag-icon-us"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="language">
                      <div class="dropdown-item">
                          <span class="flag-icon flag-icon-fr"></span>
                      </div>
                      <div class="dropdown-item">
                          <i class="flag-icon flag-icon-es"></i>
                      </div>
                      <div class="dropdown-item">
                          <i class="flag-icon flag-icon-us"></i>
                      </div>
                      <div class="dropdown-item">
                          <i class="flag-icon flag-icon-it"></i>
                      </div>
                  </div>
              </div>
      </div>

  </header><!-- /header -->
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
          <h2><?php echo $_SESSION["fname"]." ".$_SESSION["lname"] ; ?></h2>
          <h2><?php echo "Reps: ".$_SESSION["reps"] ; ?></h2>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["email"] ; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["job1"] ; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["job2"] ; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["job3"] ; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["school"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["jr_college"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION["undergrad"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>
