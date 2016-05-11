<?php 

$meno = "Patrik";
$heslo = "rybyakone";

if($meno == $_POST["meno"] && $heslo == $_POST["heslo"]){
		session_start();
		$_SESSION['name']="Patrik";
		header("Location: ../upload_form.php"); 
		exit();
	}else{
		header("Location: ../wrong.html"); 
		exit();
	}
?>