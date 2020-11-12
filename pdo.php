<?php
class Connect {
	//function that is responsible to establish connection, with using PDO, between an app and a database.
	//parameters: connect_db(1st, 2nd, 3rd)
	//1st: host, databasename, character coding
	//2nd: user
	//3rd: password
	function connect_db($database, $user, $password){
		try {
			$dbc = new PDO($database, $user, $password); /*establishes a connection between a database and an app. The data of the connection is stored in the dbc variable*/
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage(); /*in case of failing to connect to the database, it gives an error message*/
		}
		return $dbc; /*returns the connection data, stored in the dbc variable*/
	}
}
?>