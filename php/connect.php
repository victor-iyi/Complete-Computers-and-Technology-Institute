<?php
include('config.php');

$conn = mysql_connect(HOST, USERNAME, PASSWORD);
if($conn){
	$sel_db = mysql_select_db(DB);
}else{
	die('Could not connect to the database<br/>');
}