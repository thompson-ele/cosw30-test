<?php
// Create environment variables
// You will need to add your environment variable names to connect
// to your personal database
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('');
$password   = getenv('');
$dbname     = getenv('');

// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>