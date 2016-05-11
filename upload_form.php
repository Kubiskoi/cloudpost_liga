<?php 
	session_start();
	if($_SESSION['name'] != "Patrik"){
		header("Location: ../admin.html"); 
	exit();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
<p>all good</p>

</body>
</html>