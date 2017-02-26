<?php require('./php/templates.php'); ?>

<?php main_header('index.php'); ?>
<!-- Main section -->
<div class="row">
  <div class="slider-container medium-12 columns">
    <!-- Slider and our vision -->
    <section class="row">

      <article class="image-slider medium-8 columns">
        <!-- Slider -->
      <div class="slider">
        <a href="http://www.cisco.com"> <img src="img/slider1.jpg" id="1"> </a>
        <a href="http://www.comptia.com"><img src="img/slider2.jpg" id="2"></a> 
        <a href="http://www.oracle.com"><img src="img/slider3.jpg" id="3"></a>          
        <a href="http://www.adobe.com"><img src="img/slider4.jpg" id="4"></a>
        <a href="http://www.microsoft.com"><img src="img/slider5.jpg" id="5"></a>
        <a href="http://www.prometric.com"><img src="img/slider6.jpg" id="6"></a>    
      </div>
      <div class="slider-nav">
        <a href="#" class="prev" onclick="prev(); return false;">Previous</a>
        <a href="#" class="next" onclick="next(); return false;">Next</a>
      </div>
        <!-- End Slider -->
      </article>

      <aside class="medium-4 columns">
        <div class="row">
          <header class="medium-12 columns">
            <h5>OUR VISION</h5>
            <article id="our-vision">
              <blockquote>"CCT began with the vision to provide a solution to the massive requirement for IT talents in Africa. Our mission is to deliver IT training to a broad spectrum of people - from students seeking a career in computers to IT professionals requiring advanced skills, from managers giving their careers and edge to school children using computers as learning tool."<cite id="cite"><strong>CCTI, Director</strong></cite></blockquote>
            </article>
          </header>
        </div>
      </aside>

    </section>

    <!-- main selection area -->
    <section class="row">

      <article class="medium-8 columns">
        
          <center><h5>COMPLETE COMPUTERS AND TECHNOLOGY INSTITUTE PORTAL</h5></center>
            <p>We want to make it easy for our faculties, students, employers and certifiers to access information as securely
             and accurate as possible. Students can register for their courses, make payments online, track their academic progress
              and many more.</p>
          <div class="row" id="choice">
            <div  class="medium-6 columns">
                <li><fieldset> <legend><h5>Admission Status</h5></legend>
                  <span>Check admission status for 2014/2015 post UTME</span><br>
                  <form action="#" method="GET">
                  <input type="text" name="jamb-reg-no" id="admission-status-input" maxlength="10"/>
                  <input type="button" id="check-status" value="Check Status" /><img src='img/check-status.png' width="50" 
                  id="check-status-img" />
                </form>
              </fieldset>
                </li><br>
                <li><fieldset> <legend><h5>Admission Application</h5></legend>
                  <span>Find out more informaiton on the 2015/2016 admission</span><br/>
                  <a href="admission.php" class="general-button">Apply Now<img src="img/apply_icon.png" width="50"></a>
                </fieldset>
                </li><br>                        
              </div>
              <div class="medium-6 columns">
                <li><fieldset><legend><h5>Payment Instruction</h5></legend>
                  <span>Kindly see instructions for all payments to be made</span><br/>
                  <a href="#" class="general-button">Instructions<img src="img/forward-icon.png" width="50"></a>
                </fieldset>
                </li><br/>
                <li><fieldset><legend><h5>Other Students</h5></legend>
                  <span>New/old students: course registration, academic progress and more</span><br/>
                  <form action="#" method="GET">
                  <input type="text" name="matric-no" id="studentlogin"/>
                  <input type="button" id="login" value="Login" /><img src='img/studentlogin.png' id="login-img" width="50"/>
                </form>
                </fieldset>
                </li><br/>
              </div>                 
        </div>
      </article>

      <aside class="medium-4 columns">
        <h5>ADVANTAGES</h5>
        <ul>
          <li>Certificate Directly Signed by the CEO of these Technological Partners</li>
          <li>State of the Art Facilities</li>
          <li>Up to Date Teching Methodology</li>
          <li>Testing Centres for all Professional Exams</li>
          <li>Latest Courseware Directly from Vendor</li>
          <li>Up to Date Software Available to Students</li>
          <li>Certified Trainers</li>
          <li>Conducive Environment</li>
          <li>Globally Recognized Certificate</li>
        </ul>
      </aside>

    </section>
    <br/><br/>
    <section class="row">
      <div class="medium-8 columns">
        <h5>Recent News</h5>
        <article class="recent-news">
          <ul>
            <li>The world is about to come to an end said the chairman of Nigeria University Commision in his speech last week...<span>&nbsp;<a href="#">Read More...</a></span></li>
            <li>All the University in this country are just a pain in the butt said Buhari in a meeting with all 
              the Vice Chancellors of Nigeria...<span>&nbsp;<a href="#">Read More...</a></span></li>
            <li>The effort to restore the recently closed down private Universities of Nigeria all failed - speech by
               the Deputy Commissioner of Education Ali Olanusi... Like he is the one???<span>&nbsp;<a href="#">Read More...</a></span></li>
          </ul>
        </article>
      </div>
      <aside class="medium-4 columns">
        <a href="#"><img src="img/contact-us.jpg" /></a>
      </aside>
    </section>
    
  </div>
</div>
<?php main_footer('index.php'); ?>