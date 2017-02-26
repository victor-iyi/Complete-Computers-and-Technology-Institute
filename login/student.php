<?php
session_start();
include('../php/config.php');
include('../php/connect.php');
include('../php/functions.php');

if(isset($_POST['studentlogin'])){
	if(!empty($_POST['matric-no'])){
		$matric_no = ucwords($_POST['matric-no']);
		if(validate_matricno($matric_no)){
			$mat_query = "SELECT `matricno`, `id`, `surname` FROM `student` WHERE `matricno`='".$matric_no."' LIMIT 1";
			if($mat_run = mysql_query($mat_query)){
				if(mysql_num_rows($mat_run) == 1){
					while ($row = mysql_fetch_assoc($mat_run)) {
						$id = $row['id'];
						$matric_no = $row['matricno'];
						$surname = $row['surname'];
					}

					$_SESSION['matricno'] = $matric_no;
					$_SESSION['surname'] = $surname;

					header('Location: ../student/profile.php');
					die();
				}else{
					header('Location: ../login.php?error_code=2');
				}
			}
		}else{
			header('Location: ../login.php?error_code=1');
		}
	}
}

?>