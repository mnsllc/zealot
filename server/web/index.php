<?php
$configDbPass = trim(file_get_contents("/etc/zealot/sql"));
$mysqli = new mysqli("localhost", "zealot", $configDbPass, "zealot");

if($mysqli->connect_error) {
    echo "Something's gone wrong, we can't access the database.";
    exit;
}

echo "Zealot is running.";
$mysqli->close();
?>
