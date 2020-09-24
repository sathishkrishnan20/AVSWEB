<?php
$servername = "localhost";
$username = "vairaisathish";
$password = "efa78a63";
$dbname =   "vairaisa_meyyunarvomDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

?>