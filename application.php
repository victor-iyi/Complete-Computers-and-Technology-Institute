<?php require('./php/templates.php'); ?>

<?php main_header('application.php'); ?>
   
  <section class="row">

    <div class="medium-12 column">
      <h5>Post UTME/DE 2016</h5>
      <form action="#" method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="medium-6 column">
              <label for="lastname">Last Name: <input id="lastname" type="text" placeholder="Last Name" /></label>
              <label for="dob">Date of Birth: <input id="dob" type="text" placeholder="Date of Birth" /></label>
              <label for="nationality">Nationality: 
                <select name="nationality" id="nationality">
                  <option name="nig">Nigeria</option>
                </select>
              </label>
            </div>
            <div class="medium-6 column">
              <label for="othernames">Other Names: <input id="othernames" type="text" placeholder="Other Names"/></label>
              <label for="sex"> Sex:<br/>
                <label id="male"><input type="radio" name="sex" value="male" id="male" />&nbsp;Male&nbsp;</label>
                <label id="female"><input type="radio" name="sex" value="female" id="female" />&nbsp;Female&nbsp;</label>
              </label>
              <label for="state"> State of Origin: 
                <select name="state" id="state">
                  <option name="ab">Abia</option>
                </select>
              </label>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Contact Information</legend>
          <div class="row">
            <div class="medium-6 column">
              <label for="address">
                Contact Address:
                <textarea id="address" placeholder="Contact Address" rows="5"></textarea>
              </label>
              
            </div>
            <div class="medium-6 column">
              <label for="phonenumber">Phone Number: <input id="phonenumber" type="text" placeholder="Phone Number"/></label>
              <label for="email">Phone Number: <input id="email" type="email" placeholder="example@domain.com"/></label>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>PUTME / DE Information</legend>
          <div class="row">
            <div class="medium-6 column">
              <label for="jambreg">JAMB Reg. No.: <input id="jambreg" type="text" placeholder="JAMB Reg. No." /></label>
              <label for="college">College: 
                <select name="college" id="college">
                  <option name="cnas">College of Natural &amp; Applied Science</option>
                </select>
              </label>
              <label for="course"> Course: 
                <select name="course" id="course">
                  <option name="computer">Computer Science</option>
                </select>
              </label>
              <label for="score">Subject 1: <input type="text" id="score" placeholder="Score 1" /> </label>
              <label for="score">Subject 2: <input type="text" id="score" placeholder="Score 2" /> </label>
              <label for="score">Subject 3: <input type="text" id="score" placeholder="Score 3" /> </label>
              <label for="score">Subject 4: <input type="text" id="score" placeholder="Score 4" /> </label>
            </div>
            <div class="medium-6 column">
              <label for="modeofentry"> Mode of Entry:<br/>
                <label id="utme"><input type="radio" name="modeofentry" value="utme" id="utme" />&nbsp;UTME&nbsp;</label>
                <label id="de"><input type="radio" name="modeofentry" value="de" id="de" />&nbsp;DE&nbsp;</label>
              </label>
              <label for="sub1">Subject 1: 
                <select name="sub1" id="sub1">
                  <option name="eng">Use Of English</option>
                </select>
              </label>
              <label for="sub2">Subject 2: 
                <select name="sub2" id="sub2">
                  <option name="eng">Use Of English</option>
                </select>
              </label>
              <label for="sub3">Subject 3: 
                <select name="sub3" id="sub3">
                  <option name="eng">Use Of English</option>
                </select>
              </label>
              <label for="sub4">Subject 4: 
                <select name="sub4" id="sub4">
                  <option name="eng">Use Of English</option>
                </select>
              </label>
            </div>
          </div>
        </fieldset>
        <br/>
        <label for="preview"><input type="checkbox" id="preview" /> <span>Preview before Submit</span></label>
        <input type="submit" value="Submit" />   <input type="reset" value="Reset" />
      </form>
    </div>

  </section>

<?php main_footer('application.php'); ?>