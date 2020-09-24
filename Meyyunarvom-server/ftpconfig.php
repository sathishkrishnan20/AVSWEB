<?php
// connect and login to FTP server


$ftp_server = "ftp.byethost10.com";
$ftp_username = "b10_19338450";
$ftp_userpass = "cskcsk8833";

$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

echo "connected";

// close connection
ftp_close($ftp_conn); 
?>