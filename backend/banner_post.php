<?php
	SESSION_START();
    require '../database.php';
?>

<?php
    $name     = $_POST['name'];
    $descrip  = $_POST['descrip'];
    $btn_text = $_POST['btn_text'];
    $btn_url  = $_POST['btn_url'];


    if(empty($name)){
		$_SESSION['name_empty'] = 'Name Field is Blank';
		$_SESSION['name_value'] = $name;
		header('location:banner.php');
	}else if(empty($descrip)){
		$_SESSION['descrip_empty'] = 'descrip Field is Blank';
		header('location:banner.php');
	}else{
		$insert = "INSERT INTO tbl_banner (name, descrip, btn, btn_url) VALUES ('$name', '$descrip', '$btn_text', '$btn_url')";

		$reqult = mysqli_query($db_connection, $insert);
		header('location:banner.php');
	}
?>