<?php

    error_reporting(0);

	include 'backup_function.php';

		$server = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'tpm_database';

		
		backDb($server, $username, $password, $dbname);

		exit();

?>