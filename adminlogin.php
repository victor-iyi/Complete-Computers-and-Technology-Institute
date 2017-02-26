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
          	<legend><img src="img/admin-login-logo.png" width="30" />Admin Login</legend>
          	<form action="#" method="POST">
          		<label for="sutdentlogin"><input type="text" name="admin-login" id="adminlogin" placeholder="Administrator"></label>
          		<label for="keep"><input type="checkbox" name="keepme" id="keep" /> Keep me logged in</label>
          		<input type="submit" id="login" value="Login" style="padding-right: 60px;" /><img src='img/studentlogin.png' width="50" style="margin-left: -50px; "/><br/><br/>
          	</form>
          </fieldset>
          <br/>
          <article>
          	This is the admin section
          </article>
      </aside>

    </section>

<br/><br/>
<?php main_footer('login.php'); ?>