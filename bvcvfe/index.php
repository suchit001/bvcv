<?php
// ini_set('display_errors', '0');
session_start();
$_SESSION["reps"];
$_SESSION["fname"];
$_SESSION["lname"];
$_SESSION["email"];
$_SESSION["resume"];
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!DOCTYPE html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
.custbut{
      margin-bottom: 30px;
      background-color: white;
      border: none;
      color: black;
      text-decoration: none;
}

</style>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">BVCV</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Resume</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">View Resume</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Edit Resume</a></li>
                        </ul>
                    </li>                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
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

                            <a class="nav-link" href="page-loginmok.html"><i class="fa fa-power-off"></i> Logout</a>
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
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="w3images/johndoe.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $_SESSION["fname"]." ".$_SESSION["lname"] ; ?></h2>
            <h2><?php echo "Reps: ".$_SESSION["reps"] ; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["email"] ; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["resume"]["phoneno"] ?></p>
          <hr>

                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#skillmodal" style="margin-left:300px; margin-top:0px; position: absolute;">
                            Add More
                        </button>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Programming Skills</b></p>
          <?php $skill = $_SESSION["resume"]["skill"];
          for($x=0;$x<count($skill);$x+=1){
            $stong = "Strong";
            $medium = "Medium";
            $beginner = "Beginner";
            $val = strcmp($skill[$x]["rating"],$medium);
            if($val>0)
            {
              $width = 90;
              $color = "bg-success";
            }else if($val<0)
            {
              $width = 50;
              $color = "bg-warning";              
            }else
            {
              $width = 70;
              $color = "bg-info";              
            }
           ?>          
          <p><?php echo $skill[$x]["skill"]?></p>
          <div class="progress mb-2">
              <div class="progress-bar <?php echo $color; ?>" role="progressbar" style="width: <?php echo $width ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill[$x]["rating"]; ?></div>
           </div>
          <?php } ?>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#workexmodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>

        <div class="worrk" id="worrk">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
</div>


        <?php $workex = $_SESSION["resume"]["workexp"];
          for($x=0;$x<count($workex);$x+=1){ ?>          
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $workex[$x]["designation"] . " - ". $workex[$x]["orgname"]; ?></b></h5>
          <?php if($workex[$x]["verif"]==0){?>
          <button class="btn w3-tag w3-orange w3-round" name="wrknverbut" id=<?php echo $x;?> data-toggle="modal" data-target="#verifmodal" >Not Verified</button>
          <?php }
          else{?>
          <span class="w3-tag w3-teal w3-round">Verified</span>
          <?php }?>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $workex[$x]["startd"]; ?> - <?php echo $workex[$x]["endd"]; ?></h6>
          <p><?php echo $workex[$x]["description"]; ?></p>
          <hr>
        </div>        
        <?php } ?>

      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#educationmodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>      
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <?php $edu = $_SESSION["resume"]["education"];
          for($x=0;$x<count($edu);$x+=1){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $edu[$x]["insname"]; ?></b></h5>
         <?php if($edu[$x]["verif"]==0){?>
         <button class="btn w3-tag w3-orange w3-round" name="edunverbut" id=<?php echo $x;?> data-toggle="modal" data-target="#verifmodal">Not Verified</button>
          <?php }
          else{?>
          <span class="w3-tag w3-teal w3-round">Verified</span>
          <?php }?>          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $edu[$x]["startd"]; ?> - <?php echo $edu[$x]["endd"]; ?></h6>
          <h6 class="w3-text-teal"><i class="fa fa-graduation-cap"></i>           <?php echo $edu[$x]["degree"]; ?> - <?php echo $edu[$x]["grade"]; ?></h6>
          <hr>
        </div>
        <?php } ?>
      </div>

<div class="mymodals">

                    <div class="modal fade" id="verifmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Verication Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="verifcheck.php" method="POST" >
                                       <div class="card-body card-block">
                                  <h3>Request Details</h3>
                                    <div class="form-group">
                                      <label class=" form-control-label">Verifier's Email</label>
                                      <input type="text" id="verifemail" name="verifemail" placeholder="Verifier's Email" class="form-control">
                                      <label class=" form-control-label">Description</label>
                                      <input type="text" id="verifdes" name="verifdes" placeholder="Description" class="form-control">
                                      <input type="hidden" name="divid" value="meh" id="myid">
                                    </div>
                                    <hr>
                                       </div>
<input type="submit" id="verifsubmit" name="verifsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div>



                    <div class="modal fade" id="skillmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add Skill</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["skill"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="skillsubmit" name="skillsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="modal fade" id="educationmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Education Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["education"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="edusubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="workexmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Work Experience Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["workexp"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                    <?php if($key=="verif"){}else{?>
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <?php }?>
                                      <input type=<?php if($key=="verif"){echo "hidden";}else{echo "text";}?> id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="workexsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div>      

                <div class="modal fade" id="leadromodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Leadership Role</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["responsib"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="leadrosubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="modal fade" id="certifmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">New Certification</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["certification"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="certifsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="modal fade" id="projmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">New Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["project"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="projsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="modal fade" id="adddetmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Additional Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form action="insertphp.php" method="POST" >
                                       <div class="card-body card-block">
                                 <?php $skill = $_SESSION["resume"]["adddet"];
                                  ?>
                                  <?php foreach($skill[0] as $key=>$val){ ?>   
                                    <div class="form-group">
                                      <label class=" form-control-label"><?php echo $key?></label>
                                      <input type="text" id=<?php echo $key?> name="<?php echo $key?>" placeholder=<?php echo $key?> class="form-control">
                                    </div>
                                    <hr>
                                  <?php } ?>
                                       </div>
<input type="submit" id="edusubmit" name="adddetsubmit" class="btn btn-success btn-flat m-b-30 m-t-30"/>                                    </form>
                            </div>
                        </div>
                    </div>
                </div> 
</div>
      <div class="w3-container w3-card w3-white w3-margin-bottom">
                         <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#leadromodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>     
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-users fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Leadership Roles</h2>        
        <?php $por = $_SESSION["resume"]["responsib"];
          for($x=0;$x<count($por);$x+=1){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $por[$x]["title"]?></h5>
          <p><?php echo $por[$x]["description"]; ?></p>
          <hr>
        </div>
        <?php } ?>

      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#certifmodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>      
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Certifications</h2>
        <?php $cert = $_SESSION["resume"]["certification"];
          for($x=0;$x<count($cert);$x+=1){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $cert[$x]["program"] . " - ". $cert[$x]["orgname"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $cert[$x]["startd"]; ?> - <?php echo $cert[$x]["endd"]; ?></h6>
          <p><?php echo $cert[$x]["description"]; ?></p>
          <hr>
        </div>
        <?php } ?>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#projmodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>      
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-keyboard-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
        <?php $proj = $_SESSION["resume"]["project"];
          for($x=0;$x<count($proj);$x+=1){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $proj[$x]["title"] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $proj[$x]["startd"]; ?> - <?php echo $proj[$x]["endd"]; ?></h6>
          <p><?php echo $proj[$x]["description"]; ?></p>
          <p><?php echo $proj[$x]["link"]; ?></p>
          <hr>
        </div>
        <?php } ?>
      </div>


      <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#adddetmodal" style="margin-left:500px; margin-top:20px; position: absolute;">
                            Add More
                        </button>      
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-handshake-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Addition Details</h2>
        <?php $addet = $_SESSION["resume"]["adddet"];
          for($x=0;$x<count($addet);$x+=1){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $addet[$x]["title"]?></h5>
          <p><?php echo $addet[$x]["description"]; ?></p>
          <hr>
        </div>
        <?php } ?>

      </div>     

      </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("[name = 'wrknverbut']").click(function(){
    // $(this).attr('id');
    console.log($(this).attr('id'));
    console.log($("[name = 'divid']").attr('value'));    
    var id = $(this).attr('id');
    $("[name = 'divid']").attr('value',id);
    console.log($("[name = 'divid']").attr('value'));
  });
  
  $("[name = 'edunverbut']").click(function(){
    // $(this).attr('id');
    console.log($(this).attr('id'));
    console.log($("[name = 'divid']").attr('value'));    
    var id = $(this).attr('id');
    $("[name = 'divid']").attr('value',id);
    console.log($("[name = 'divid']").attr('value'));    

  });
});</script>

</body>

</html>

<!-- <script type="text/javascript">
            var form = document.getElementById("eduform");
        function sub(event){
            var arr=[],key,val;
            console.log(form);
                var obj = {};
            
            // for(var i=0;form;i++)
            for(let input of form.elements)
            {
                console.log(input.id);
                key = input.id;
                val = input.value; 
                obj[key] = val;                               
            }
            arr.push(obj);
            console.log(arr);
        }
        form.addEventListener('submit',sub);
</script> -->
