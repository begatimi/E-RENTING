

<?php

session_start();
$db_host = "localhost";
$db_pass="";
$db_username = "root";
$db_name="user_db";

$conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
if(! $conn )
{
 die('Could not connect: ' . mysqli_connect_error());
}
?>