<!doctype html>
<html>
	<head>
		<!--Character coding is utf-8 and the browser will show "RabIT - Ads" in the tab header-->
		<meta charset="utf-8">
		<title>RabIT - Ads</title>
		<link href="general.css" rel="stylesheet" type="text/css" media="all">
	</head>
	
	<body>
		<!--Header menu where the links to other parts of the application are stored-->
		<div id="menu">
			<ul>
				<a href="users.php"><li id="users" class="menuitem">Users</li></a> <!-- Link to the users page. On clicking, it will load the users.php into the browser -->
				<a href="ads.php"><li id="ads" class="menuitem">Advertisements</li></a> <!-- Link to the advertisements page. On clicking, it will load the ads.php into the browser -->
			</ul>
		</div>
		
		<!--Screen is the main part of the page. This is where the desired data will be presented in a table format-->
		<div id="screen">
			<!-- In the ads page, the list of existing advertisements will be presented in the screen, once the php code finished its execution correctly-->
			
				<?php
					require_once("pdo.php"); /*loads pdo.php, which is responsible for establishing the connection between the database and the application*/
					require_once("controllers.php"); /*loads controllers.php, which is responsible for getting the data of existing ads from the database*/
					require_once("viewFunctions.php"); /*loads viewFunctions.php, which is responsible for pasting a table with the data of existing ads*/
					
					$dbc = Connect::connect_db("mysql:host=localhost;dbname=rabit;charset=utf8","root", ""); /*executing connect_rabit(database,user,password) method, which is in the Connect class of pdo.php*/
					
					/*in case of the connection being established correctly*/
					if($dbc){
						$results = Controllers::getAds($dbc); /*Getting the ads data from the Controllers class with the getAds(connection_variable) method, and placing it in the results variable*/
						viewFunctions::pasteAds($results); /*pasting the existing ads data in a table format with the pasteAds(ads_data) method*/
						$dbc = null; /*closing the connection between the database and the application*/
					}else{
						exit; /*in case of failing to establish a connection between the database and the app, the code will stop being executed*/
					}
				?>
				
		</div>
		
	</body>

</html>