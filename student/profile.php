<?php
	include('profile.view.php');
	main_header('profile.php');
?>
<div class="row">
	<h4 id="profile-header"><?=$semester ?> Semester <?=$level ?> level</h4>
	<div class="student-page medium-5 small-12 columns">
		<div class="passport"></div>
		<div class="clear-both"></div>
		<p><span class="student-info">Name:</span> <?php echo $surname. ' '. $othernames; ?></p>
		<p><span class="student-info">Matriculation Number:</span> <?php echo $matricno;?></p>
		<p><span class="student-info">College:</span> <?php echo college($college); ?></p>
		<p><span class="student-info">Department:</span> <?php echo $department; ?></p>
		<p><span class="student-info">Course of Study:</span> <?php echo $course; ?></p>
		<p><span class="student-info">Level:</span><?php echo $level; ?></p>
	</div>
	<div class="other-info medium-7 small-12 columns">
		<h5>News for <?php echo $surname.' '.$othernames; ?></h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<div class="row">
			<h5>Activities</h5><br>
			<div class="medium-6 columns">
				<ul>
					<li><a class="general-button" href="course-registration.php?matricno=<?php echo $matricno; ?>">Course Registration</a></li><br/><br/>
					<li><a class="general-button" href="#"><?=$semester ?> Semester Courses</a></li><br/><br/>
				</ul>
			</div>

			<div class="medium-6 columns">
				<ul>
					<li><a class="general-button" href="#">View Result</a></li><br/><br/>
					<li><a class="general-button" href="#">Track Academic Progress</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clear-both"></div>
</div>
<?php main_footer('profile.php'); ?>