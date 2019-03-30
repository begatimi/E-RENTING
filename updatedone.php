

<?php

if (isset($_POST['update']))
{


include_once('databaseconnection.php');

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Name= $_POST['Firstname'];
$lName= $_POST['Lastname'];
$Address = $_POST['Address'];
$ZipCode = $_POST['ZipCode'];
$City = $_POST['City'];
$Country = $_POST['Country'];
$Telephone = $_POST['Telephone'];

//$UId= $_SESSION['UId'];
//$Type = $_SESSION['Type'];

       $sql = "UPDATE tblregister SET Firstname='$Name', Lastname='$lName',Email='$Email',Password='$Password',Telephone='$Telephone',City='$City',Address='$Address',ZipCode='$ZipCode',Country='$Country' WHERE Email = '$Email'" ;

			if(!preg_match("`[A-Za-z]+$`",$Name)){
			echo "Error.Please write first name again!";
			}
			else if(!preg_match("`[A-Za-z]+$`",$lName)){
			echo "Error.Please write last name again!";}
			
			else if(!preg_match("`[A-Za-z]+$`",$Country)){
			echo "Error.Please write country again!";}
			
			else if(!preg_match("`[0-9]+$`",$Telephone)){
			echo "Error.Please write telephone again!";}
			
			else if(!preg_match("`[A-Za-z0-9]+$`",$Address)){
			echo "Error.Please write address again!";}
			
			else if(!preg_match("`[0-9]+$`",$ZipCode)){
			echo "Error.Please write zip code again!";}
			
			//else if(!preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z]+.[a-zA-Z]+/",$Email)){
			//echo "Error.Please write email again!";			
			
	//mysql_query("UPDATE `tblregister` SET `Firstname`='$Name',`Lastname`='$lName',`Email`='asdf',`Password`='$Password',`Telephone`='$Telephone',`City`='$City',`
	//Address`='$Address',`ZipCode`='$ZipCode',`Country`='$Country',`Type`	=$Type WHERE `UId`='$userId'") or die(mysql_error());
			
// select * from TABLE NAME where id = $variable

//order.php 

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('E pamundur te azhurohen te dhenat: ' . mysqli_connect_error());
}else
{
echo "Te dhenat  u azhuruan me sukses \n";
mysqli_close($conn);
}
			}
			if (isset($_POST['delete']))
{

include_once('databaseconnection.php');


$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Name= $_POST['Firstname'];
$lName= $_POST['Lastname'];
$Address = $_POST['Address'];
$ZipCode = $_POST['ZipCode'];
$City = $_POST['City'];
$Country = $_POST['Country'];
$Telephone = $_POST['Telephone'];

//$UId= $_SESSION['UId'];
$Type = $_SESSION['Type'];

       $sql ="DELETE FROM `tblregister`  WHERE Email = '$Email'" ;

		

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('E pamundur te fshihen te dhenat: ' . mysqli_connect_error());
}else
{
echo "Te dhenat u fshine me sukses \n";
mysqli_close($conn);
}
			}


//$r =mysql_affected_rows();




//preg_match("'<p class=\"review\">(.*?)</p>'si", $source, $match);
//if($match) echo "result=".$
?>