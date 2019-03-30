
<?php

include_once('databaseconnection.php');
if (isset($_POST['order']))
{
	
$Category=$_POST['Category'];
$Item = $_POST['Item'];
$UId = $_SESSION['UId'];
$ItemId = $_POST['ItemId'];




	
	$sql = "INSERT INTO tblorder  (Category, Item, UserId, ItemId)
VALUES ('$Category', '$Item', '$UId', '$ItemId')";

			
			
			$retval = mysqli_query( $conn, $sql );
if(! $retval )
	{
 die('Could not enter data: ' . mysqli_connect_error());
}
else{



header ("Location: Orders.php");
mysqli_close($conn);
}
}

?>