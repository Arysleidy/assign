<?php

function printTable($results) {
	$row = $results->fetchArray();

	print("<table> <tr>");
	foreach ($row as $key => $value) {
		if(!is_int($key))
			print("<th>". $key . "</th>");
	}
	print("</tr><br/>");

	do {
		print("<tr>");
		foreach ($row as $key => $value) {
			if(!is_int($key))
				print("<td>". $value . "</td>");
		}
		print("</tr><br/>");
	} while ($row = $results->fetchArray());
	print("</table>");
}


include('index.html');



$DB_FILE_ABSOLUTE_PATH="/app/2018_ddss_assignment2.db";

$db = new SQLite3($DB_FILE_ABSOLUTE_PATH); 


$users = $db->query('SELECT * FROM users'); 
printTable($users);







?>