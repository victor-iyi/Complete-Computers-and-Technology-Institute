<?php 
include('../php/templates.php');
include('../php/config.php');
include('../php/connect.php');


//semester
$semester = 'First';

//get all students' record
$student = studentRecord();
while($row = mysql_fetch_assoc($student)){
	$id = $row['id'];
	$matricno = $row['matricno'];
	$surname = $row['surname'];
	$othernames = $row['othernames'];
	$college = $row['college'];
	$department = $row['department'];
	$course = $row['courseofstudy'];
	$level = $row['level'];
	$pic = $row['pic'];

}

function college($college){
	switch ($college) {
		case 'CNAS':
			return 'College of Natural and Applied Sciences';
			break;
		case 'CSMS':
			return 'College of Social and Management Sciences';
			break;
		case 'CEDM':
			return 'College of Evironmental Design and Management';
			break;
		case 'CFST':
			return 'College of Food Science and Technology';
			break;
		default:
			return '';
	}
}