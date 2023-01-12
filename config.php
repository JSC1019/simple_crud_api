<!--
	using mysqli_connect for database connection
	-->
	<?php
	$databasehost='localhost';
	$databasename = 'crud_db';
	$databaseusername='root';
	$databasepassword='';

	$mysqli = mysqli_connect($databasehost,$databaseusername,$databasepassword,$databasename);
	?>
