<?php require('./php/templates.php'); 
main_header('login.php'); ?>

<br/>
    <section class="row">

      <article class="medium-6 columns">
        <!-- Slider -->
        <div class="slider">
          <a href="http://www.cisco.com"> <img src="img/slider1.jpg" id="1"> </a>
          <a href="http://www.comptia.com"><img src="img/slider2.jpg" id="2"></a> 
          <a href="http://www.oracle.com"><img src="img/slider3.jpg" id="3"></a>          
          <a href="http://www.adobe.com"><img src="img/slider4.jpg" id="4"></a>
          <a href="http://www.microsoft.com"><img src="img/slider5.jpg" id="5"></a>
          <a href="http://www.prometric.com"><img src="img/slider6.jpg" id="6"></a>    
        </div>
        <!-- End Slider -->
      </article>

      <aside class="medium-6 columns">
          <fieldset>
          	<legend><img src="img/icon-username.png" />Student Login</legend>
          	<form action="login/student.php" method="POST">
        <?php if(isset($_GET['error_code'])){
                echo '<span class="error">';

                switch ($_GET['error_code']) {
                  case '1':
                    echo 'Incorrect Matriculation Nubmer';
                    break;
                  case '2':
                    echo 'Incorrect Matriculation Nubmer';
                    break;
                  default:
                    echo 'Something went wrong. Please try again later.';
                    break;
                }
              } 

              echo '</span>';?>
          		<label for="sutdentlogin"><input type="text" name="matric-no" disable required="required" id="studentlogin"></label>
          		<label for="keep"><input type="checkbox" name="keepme" id="keep" /> Keep me logged in</label>
          		<input type="submit" id="studentlogin-button" disabled="disabled" name="studentlogin" value="Login" style="padding-right: 60px;" /><img src='img/studentlogin.png' width="50" style="margin-left: -50px; "/><br/><br/>
          		<span>Matriculation no format: <strong>CNAS/2015/001</strong></span>
          	</form>
          </fieldset>
          <br/>
          <article>
          	<a href="adminlogin.php"><img src="img/admin-login-logo.png" width="30" />Administrator Login</a>
          </article>
      </aside>

    </section>

<br/><br/>
<?php main_footer('login.php'); ?>