<?php
if(isset($_POST['Email']))
{
include_once('databaseconnection.php');



	$Email = htmlspecialchars($_POST['Email']);
$Password = sha1($_POST['Password']);
	
	$sql ="Select * FROM tblregister WHERE Email= '" . mysql_real_escape_string($_POST['Email']) . "'AND Password = '" . sha1($_POST['Password']) . "'";
	//$resultid1="SELECT * FROM tblregister WHERE `Type`=1";
	
	$result = mysqli_query($conn, $sql)// or die("mysql error");
	or trigger_error("Sorry there is an account assigned to that userid");
	//$resultid1 = mysqli_query($conn, $sql) or die("mysql error");
           if (mysqli_num_rows($result) > 0) 
		   {
		// output data of each row
		//create session and go to homepage
		 while($row = mysqli_fetch_assoc($result)) {
			 session_start();
			$_SESSION['lName'] = $row['Lastname'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['Telephone'] = $row['Telephone'];
	$_SESSION['City'] = $row['City'];
    $_SESSION['Name'] = $row['Firstname'];
	$_SESSION['Country'] = $row['Country'];
	$_SESSION['Password'] = $row['Password'];
	$_SESSION['ZipCode'] = $row['ZipCode'];
	$_SESSION['Address'] = $row['Address'];
    $_SESSION['Type'] =	$row['Type'];
	$_SESSION['UId'] = $row['UId'];
	
			header('Location: Projekti.php');
		}	
		
}

else {
		echo "Mbush formen!";
		echo "<script>
		setTimeout(function () {
   window.location.href= 'Projekti.php'; 

},5000); // 5 seconds
		</script>";
	}
	

}







?>