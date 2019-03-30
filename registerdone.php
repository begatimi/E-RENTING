
<?php
if (isset($_POST['submit']))
{
include_once('databaseconnection.php');


$Email = $_POST['Email'];
$Password =sha1( $_POST['Password']);
$Name = $_POST['Firstname'];
$lName= $_POST['Lastname'];
$Address = $_POST['Address'];
$ZipCode = $_POST['ZipCode'];
$City = $_POST['City'];
$Country = $_POST['Country'];
$Telephone = $_POST['Telephone'];


function ErrorHand($errorno,$msg,$error_file,$error_line,$error_context)
{
	echo "Value Error [$errorno] <br> File error [$error_file] <br>Line error [$error_line]  <br> [$error_context] Message:$msg";
}

set_error_handler("ErrorHand",E_USER_WARNING);

	
	$sql = "INSERT INTO tblregister  (Firstname, Lastname, Email, Password, Telephone, City,Country,ZipCode,Address)
VALUES ('$Name', '$lName', '$Email', '$Password', '$Telephone', '$City', '$Country','$ZipCode','$Address')";

			if((preg_match("`[A-Za-z]+$`",$Name))&&(preg_match("`[A-Za-z]+$`",$lName))&&(preg_match("`[A-Za-z]+$`",$Country))&&(preg_match("`[0-9]+$`",$Telephone))&&(preg_match("`[A-Za-z0-9]+$`",$Address))&&(preg_match("`[0-9]+$`",$ZipCode))){
				$retval = mysqli_query( $conn, $sql );			
			}
			else{			
				//echo "ERROR!";
				print "<div class=\"error\">".trigger_error("Te dhenat  nuk jane dhënë në formatin e duhur.",E_USER_WARNING)."</div>";
				//header ("refresh:2;url=Register.php" );
			}
if(! $retval )
	{
 die('Could not enter data: ' . mysqli_connect_error());
}
else{

header ("Location: Login.php");
mysqli_close($conn);
}
}

?>