<?php
//viewFunctions class contains every method that is responsible for presenting the desired data in the pages
class viewFunctions {
	//pasteUsers(parameter) function that is responsible for presenting the users data in a table format
	//parameter: query results
	function pasteUsers($results){
		//writes the table tag and header part on the screen
		echo '<table id="main_table">',
			'<tr>',
				'<th id="id_col">User ID</th>',
				'<th>User name</th>',
			'</tr>';
		/*fetches the user ids and user names row by row. Places the results in an array named "user" then writes the user id and name on the screen.
		Then it repeats it until the results data is depleted*/
		while($user = $results->fetch()) {
			echo '<tr class="table_row">',
				'<td id="id_col">' . $user['id'] . '</td>',
				'<td>' . $user['name'] . '</td>',
			'</tr>';
		}
		echo '</table>'; /*closes the table tag on the screen*/
	}

	//pasteAds(parameter) function that is responsible for presenting the ads data in a table format
	//parameter: query results
	function pasteAds($results){
		//writes the table tag and header part on the screen
		echo '<table id="main_table">',
			'<tr>',
				'<th id="id_col">User name</th>',
				'<th>Advertisement</th>',
			'</tr>';
		/*fetches the user names and ad names row by row. Places the results in an array named "ads" then writes the user name and ad name on the screen.
		Then it repeats it until the results data is depleted*/
		while($ads = $results->fetch()) {
			echo '<tr class="table_row">',
				'<td id="id_col">' . $ads['name'] . '</td>',
				'<td>' . $ads['title'] . '</td>',
			'</tr>';
		}
		echo '</table>'; /*closes the table tag on the screen*/
	}
}
?>