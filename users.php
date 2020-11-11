<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RabIT - Users</title>
		<link href="general.css" rel="stylesheet" type="text/css" media="all">
	</head>
	
	<body>
		<!--Header menu where the links to other parts of the application are stored-->
		<div id="menu">
			<ul>
				<a href="users.php"><li id="users" class="menuitem">Users</li></a> <!-- Link to the users page -->
				<a href="ads.php"><li id="ads" class="menuitem">Advertisements</li></a> <!-- Link to the advertisements page -->
			</ul>
		</div>
		
		<!--Screen is the main part of the page. This is where the desired data will be presented in a table format-->
		<div id="screen">
			<!-- insert the content of the page here-->
			<table id="main_table">
				<tr>
					<th id="id_col">User ID</th>
					<th>User name</th>
				</tr>
				
				<?php
					try {
						$dbc = new PDO("mysql:host=localhost;dbname=rabit;charset=utf8", 
						"root", "");
					} catch(PDOException $e) {
						echo "Error: " . $e->getMessage();
					}
					
					if($dbc){
						echo "Sikeres a kapcsolat (PDO)"; //majd torold ki
						
						$results = $dbc->query("SELECT * FROM users");
						
						while($user = $results->fetch()) {
							echo '<tr class="table_row">',
									'<td id="id_col">' . $user['id'] . '</td>',
									'<td>' . $user['name'] . '</td>',
								'</tr>';
						}
						$dbc = null;
					}else{
						exit;
					}
				?>
				
			</table>
			
		</div>
		
	</body>

</html>