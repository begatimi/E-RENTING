

<?php




		
			if (isset($_POST['Delete']))
{

include_once('databaseconnection.php');

$ItemId=$_POST['ItemId'];





       $sql ="DELETE FROM `tblorder`  WHERE ItemId = '$ItemId'" ;

		

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('E pamundur te fshihen te dhenat: ' . mysqli_connect_error());
}else
{

header ("Location: Orders.php");
mysqli_close($conn);
}
			}



?>