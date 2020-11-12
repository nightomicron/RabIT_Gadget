<?php
//Controllers class contains every method that is responsible for getting data from the database
class Controllers {
	//getUsers(parameter) function that is responsible for getting the users data from the users table of the database
	//parameter: database connection
	function getUsers($dbc){
		$results = $dbc->query("SELECT * FROM users"); /*sql query, which gets every column from the users table. The columns are stored in the results variable*/
		return $results; /*returns the results variable*/
	}
	
	//getAds(parameter) function that is responsible for getting the ads data from the advertisements table of the database
	//parameter: database connection
	function getAds($dbc){
		/*sql query, which gets the advertisements.title column from the advertisements table and also the users.name column from the users table, using an inner join.
		The columns are stored in the results variable*/
		$results = $dbc->query("SELECT users.name, advertisements.title FROM advertisements INNER JOIN users ON advertisements.userid = users.id");
		return $results; /*returns the results variable*/
	}
}
?>