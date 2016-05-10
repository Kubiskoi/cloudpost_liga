<?php 
$meno = "Patrik";
$heslo = "rybyakone";

if($meno == $_POST["meno"] && $heslo == $_POST["heslo"]){
	//redirect pouzit
	echo "si lognuty";
}else{
	header("Location: ../wrong.html"); 
	exit();
}
?>