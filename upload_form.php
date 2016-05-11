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

<form action="scripts/save_file.php" method="post" enctype="multipart/form-data">
    <label>Select *.csv file to upload:</label>
    <input type="file" accept=".csv" name="fileToUpload" id="fileToUpload" >
    <input type="submit" value="Upload File" name="submit">
</form>

<br>
<br>
<br>

<form method="get" action="magic_ex.zip">
<label>Download chrome extension:</label>
<button type="submit">Download!</button>
</form>
</body>
</html>