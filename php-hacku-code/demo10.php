<style>
	span {font-weight:bold;}
</style>
<?php
	$link=mysql_connect('localhost', 'root', 'root');
	if (!$link) {
    		die('Not connected : ' . mysql_error());
	}
	$db = mysql_select_db('hack', $link);
	if (!$db) {
    		die ('Can\'t use db : ' . mysql_error());
	}
	
	$query="select * from crew";

	$result = mysql_query($query);
	
	if (!$result) {
		echo "Invalid query";
	}
	while ($row = mysql_fetch_assoc($result)) {
		echo "<ul>";	
		echo "<li> <span>Name:</span>" . $row['firstname'] . "</li>";
    		echo "<li> <span>Speciality:</span>" . $row['speciality']. "</li>";
		echo "<li> <span>Role:</span>" . $row['role']. "</li>";
		echo "</ul>";
	}
	echo "</ul>";
?>
