<?php

$mysqli = new mysqli("mysql-container", $CONFIG['database_user'], $CONFIG['database_password'], $CONFIG['database']);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>