<?php
include('functions.php');

function main_header($filename){
 
  $rootfolder = true;
    switch ($filename) {
      case 'index.php':
        $title = 'Welcome';
        $nav_title = 'CCTI Home';
        $logo = '<img src="img/home-icon.png" width="30" />';
        break;
      case 'programmes.php':
        $title = 'Programmes';
        $nav_title = 'Programmes';
        $logo = '<img src="img/programmes.png" width="30" />';
        $programmes_stylesheet = '<link rel="stylesheet" href="css/programmes.css" />';
        break;
      case 'admission.php':
        $title = 'Admission';
        $nav_title = 'Admission';
        $logo = '<img src="img/admission.png" width="45" />';
        break;
      case 'partners.php':
        $title = 'Partners';
        $nav_title = 'Partners';
        $logo = '<img src="img/partners.png" width="30" />';
        $partners_stylesheet = '<link rel="stylesheet" href="css/partners.css" />';
        break;
      case 'status.php':
        $title = 'Admission Status';
        $nav_title = 'Admission Status';
        $rootfolder = false;
        $logo = '<img src="../img/cct.png" width="30" height="50">';
        break;
      case 'profile.php':
        $title = 'Student Profile';
        $nav_title = $_SESSION['surname'].'\'s Profile';
        $rootfolder = false;
        $logo = '<img src="../img/cct.png" width="30" height="50">';
        $student_stylesheet= '<link rel="stylesheet" href="../css/student.css" />';
        break;
      case 'application.php':
        $title = 'Application';
        $nav_title = 'Application';
        $logo = '<img src="img/cct.png" width="30" height="50" />';
        break;
      case 'login.php':
        $title = 'Login';
        $nav_title = 'Login';
        $logo = '<img src="img/login.png" width="30" height="50" />';
        break;
      case 'course-registration.php':
        $title = 'Course Registration';
        $nav_title = 'Course Registration';
        $rootfolder = false;
        $logo = '<img src="../img/cct.png" width="30" height="50">';
        $course_reg = '<link rel="stylesheet" href="../css/course-reg.css" />';
      break;
      default:
        $title = 'Complete Computers &amp; Technology Institute';
        $nav_title = 'e-portal';
        $logo = '<img src="img/cct.png" width="30" height="50">';
        break;
    }
  ?>

<!doctype html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CCTI | <?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/custom_misc.css" />
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/foundation.css" />
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/foundation.css" />
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/normalize.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.structure.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.theme.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.theme.min.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php if(!$rootfolder) echo '../'; ?>css/main.css">
  <?php if(isset($partners_stylesheet)) echo $partners_stylesheet; ?>
  <?php if(isset($programmes_stylesheet)) echo $programmes_stylesheet; ?>
  <?php if(isset($student_stylesheet)) echo $student_stylesheet; ?>
  <?php if(isset($course_reg)) echo $course_reg; ?>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/vendor/modernizr.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/external/jquery/jquery.js"></script>
 </head>
<body>

  <!-- Top Nav -->
  <nav class="top-bar" data-topbar role="navigation">
   <!-- Logo and current page -->
    <ul class="title-area">
      <li class="name">
        <h1><a href="#"><?php echo $logo; ?><span><?php echo $nav_title; ?></span></a></h1>
      </li>
      <li class="toggle-topbar menu-icon">
        <a href="#"><span></span></a>
      </li>
    </ul>

    <section class="top-bar-section">
      <!-- Left buttons -->
     <ul class="left">
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>index.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/home-icon.png" width="30" />CCTI Home</a></li>
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>programmes.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/programmes.png" width="30" />Programmes</a></li>
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>admission.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/admission.png" width="45" />Admission</a></li>
        <li>
          <a href="<?php if(!$rootfolder) echo '../'; ?>partners.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/partners.png" width="30" />Partners</a>
         <!-- <ul class="dropdown">
            <li><a href="#oracle">ORACLE</a></li>
            <li><a href="#microsoft">MICROSOFT</a></li>
            <li><a href="#comptia">COMPTIA</a></li>
            <li><a href="#cisco">CISCO</a></li>
            <li><a href="#pearson-vue">PEARSON VUE</a></li>
          </ul> -->
        </li>
        <!-- nav search bar -->
      <li class="has-form">
        <div class="row collapse" >
          <div class="medium-8 columns">
            <input type="text" placeholder="Search"  />
          </div>
          <div class="medium-4 columns">
            <a href="#" class="alert button expand">Search</a>
          </div>
        </div>
      </li>
      </ul>
      <!-- Right buttons -->
      <ul class="right">
        <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/about.png" width="30" />About</a></li>
        <!--<li class="has-dropdown">
          <a href="#">Victor</a>
          <ul class="dropdown">
            <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/logout.png" width="30" />Logout</a></li>
          </ul>
        </li> -->
        <?php if(!loggedin()){ ?>
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>login.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/login.png" width="30" />Login</a></li>
        <?php }else{ ?>
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>student/profile.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/check-status.png" width="30" /><?=$_SESSION['surname']; ?></a></li>
        <li><a href="<?php if(!$rootfolder) echo '../'; ?>logout.php"><img src="<?php if(!$rootfolder) echo '../'; ?>img/logout.png" width="20" />Log out</a></li>
        <?php } ?>
      </ul>
    </section>
  </nav>

    <!-- Top Header -->
  <header class="top-header">
    <div class="header-title">
      <h2><img src="<?php if(!$rootfolder) echo '../'; ?>img/cct.png" width="50" />COMPLETE COMPUTERS AND TECHNOLOGY INSTITUTE</h2>
      <marquee><em id="title-marquee">...you have made your dream come true</em></marquee>
    </div>   
  </header>

  <?php
}


function main_footer($filename){
  ?>


<?php
  $rootfolder = true;
    switch ($filename) {
      case 'index.php':
        break;

      case 'programmes.php':
        break;

      case 'admission.php':
        break;

      case 'partners.php':
        break;

      case 'status.php':
        $rootfolder = false;

      case 'profile.php':
        $rootfolder = false;
        break;
      case 'course-registration.php':
        $rootfolder = false;

      default:
        
        break;
    }
  ?>

<footer class="footer">
  <!-- technology partners -->
    <section class="row">

      <div class="medium-12 columns">
        <center><h5>OUR TECHNOLOGY PARTNERS</h5></center>
          <article class="row">
            <div class="small-block-grid-3 medium-block-grid-6">
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/cisco.jpg" width="100" /></a></li>
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/oracle.jpg" width="100" /></a></li>
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/comptia.jpg" width="100" /></a></li>
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/microsoft.jpg" width="100" /></a></li>
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/pearson vue.jpg" width="100" /></a></li>
              <li><a href="#"><img src="<?php if(!$rootfolder) echo '../'; ?>img/prometric.jpg" width="100" /></a></li>
            </div>
          </article>
      </div> 

    </section>
    
  <div class="follow-us medium-4 column">
    <ul>
      <li><img src="<?php if(!$rootfolder) echo '../'; ?>img/twitter-logo.png" width="30" />@ccti</li>
      <li><img src="<?php if(!$rootfolder) echo '../'; ?>img/facebook-logo.png" width="30" />CCTI</li>
      <li><img src="<?php if(!$rootfolder) echo '../'; ?>img/bbm-logo.png" width="30" />52B23CA</li>
      <li><img src="<?php if(!$rootfolder) echo '../'; ?>img/cus.png" width="30">&nbsp;cctilimited@gmail.com</li>
      <li><img src="<?php if(!$rootfolder) echo '../'; ?>img/hotline_Icon.png" width="40" />080-6037991, 070-59449945</li>
    </ul>
  </div>

  <div class="location medium-4 column">
    <li>Sovereign Trust Insurance Plc Building, Alagbaka, Akure, Ondo State.</li>
  </div>

  <div class="newsletter medium-4 column">
    <fieldset>
    <legend>Newsletter</legend>
    <form>
      <input type="email" placeholder="example@domain.com"><label for="updates">
      <input type="checkbox" id="updates" /> &nbsp;<span id="recieve-update">Receive updates</span></label>
      <input type="submit" value="Sign up" /><br/>
    </form>
  </fieldset>
  </div>

<div id="copyright">
  Copyright &copy;2015 Complete Computers &amp; Technology Institute. All rights reserved.
</div>
</footer>

  <script src="<?php if(!$rootfolder) echo '../'; ?>js/external/jquery/jquery.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/jquery.flexslider.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/myslider.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/jquery-ui.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/vendor/jquery.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/foundation.min.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/jquery-2.1.0.min.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/jquery-ui.min.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/partners.js"></script>
  <script src="<?php if(!$rootfolder) echo '../'; ?>js/admissioninput.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>

  <?php
}

?>