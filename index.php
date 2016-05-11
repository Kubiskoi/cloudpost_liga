<?php 
	header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<?php 
	include "scripts/myphp.php";
 ?>
<head>
	<title>Cloudpost Liga</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<img src="imgs/logo.png">
	<div id="cont">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Level</th>
					<th>Score</th>
					<th>Sum</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ($i=0; $i < count($arr_of_players); $i++) { 
						echo '<tr><td>'.$arr_of_players[$i]->get_name().'</td><td>'.$arr_of_players[$i]->get_lvl().'</td><td>'.$arr_of_players[$i]->get_score_records().'</td><td>'.$arr_of_players[$i]->get_sum().'</td></tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>
<footer>This website includes copyrighted material from Magic: The Gathering&#174;, a product of Wizards of the Coast Inc. (WotC). Some graphics included here are copyright of <a href="https://company.wizards.com/" target="_blank">Wizards of the Coast.</a><a href="admin.html" class="admin">Admin</a></footer>
</body>
</html>