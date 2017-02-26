<?php
session_start();

function loggedin(){
  return isset($_SESSION['surname']) && isset($_SESSION['matricno']);
}

function studentRecord(){
	return mysql_query("SELECT * FROM `student` WHERE matricno='".$_SESSION['matricno']."'");
}

function validate_matricno($matricno){
	return (strlen($matricno) === 13 || strlen(matricno) === 12);
}