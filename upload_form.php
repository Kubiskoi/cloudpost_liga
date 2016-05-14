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
	<meta charset="utf-8">
	<title>Upload Form</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<style type="text/css">
		.my_marg{
			margin-top: 100px;
		}
	</style>
</head>
<body>

	<div class="row my_marg">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="scripts/save_file.php" method="post" enctype="multipart/form-data" class="form-horizontal">

				<div class="form-group">
				    <label class="col-sm-4 control-label">File input:</label>
				    <div class="col-sm-8">
				    	<input type="file" accept=".csv" name="fileToUpload" id="fileToUpload">
				    	<p class="help-block">Select *.csv file.</p>
				    </div>
				</div>

				<div class="form-group">
			   	<div class="col-sm-offset-2 col-sm-10">
			 			 <button type="submit" class="btn btn-default">Upload</button>
			 		</div>
				</div>

			    

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	
	<div class="row my_marg">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="get" action="magic_ex.zip">
				<label>Download chrome extension:</label>
				<button class="btn btn-success" type="submit">Download!</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>

</body>
</html>