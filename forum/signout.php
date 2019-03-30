<?php
include 'connect.php';
session_start();
unset ($_SESSION['signed_in']);
session_destroy();
echo "you loged out";
header ("refresh:0;url=../Projekti.php" );
mysqli_close($con);
exit ();
?>