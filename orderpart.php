

<?php

class order

{

 var $emri, $mbiemri, $kategoria, $artikulli ,$fshij;
 function mbiemri(){
	echo $mbiemri;
}
function __get($name)

{

return $this->name;

}

function __set($name,$value)

{

$this -> name = $value;

}

}

$orderi = new order();

$orderi->emri = "Firstname";
$orderi->mbiemri="Lastname";
$orderi->kategoria="Category";
$orderi->artikulli="Item";
$orderi->artikulliId="ItemId";
$orderi->fshij="Delete";


$db_host = "localhost";
$db_pass="";
$db_username = "root";
$db_name="user_db";

$conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

if(! $conn )
{
 die('Could not connect: ' . mysqli_connect_error());
}
include_once 'Common.php';
        
//	$UId =$_SESSION['UId'];
			
		$sql="SELECT tblorder.OrderId, tblregister.Firstname,tblregister.Lastname,tblorder.Category, tblorder.Item, tblorder.ItemId FROM tblorder INNER JOIN tblregister ON tblorder.UserId=tblregister.UId";
			
		
			
			
$result = mysqli_query($conn, $sql);

if(!$result)
{
	echo 'The categories could not be displayed, please try again later.';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo 'No categories defined yet.';
	}
	else
	{
		//prepare the table
				//prepare the table
	
		echo '<table border="1">';
				echo "<tr>";
					echo "<th>";
				     echo $orderi->emri; 
					echo "</th>";
				    echo "<th>";
					 echo $orderi->mbiemri; 
		             echo "</th>";
				     echo "<th>";
				      echo $orderi->kategoria; 
				     echo "</th>";
				     echo "<th>";
				      echo $orderi->artikulli; 
					echo "</th>";
					echo "<th>";
			            echo $orderi->arikulliId; 
					echo "</th>";
					echo "<th>";
			         echo $orderi->fshij; 
			    	echo "</th>";
		
				echo "</tr>";
			
		while($row = mysqli_fetch_array($result))
		
		{		

			echo "<tr>";
				echo "<td >";
					echo $row["Firstname"]  ;
				echo "</td>";
				echo "<td >";
				      echo $row["Lastname"];
				echo "</td>";
			    echo "<td>";
					  echo $row['Category'];
			    echo "</td >";
				echo "<td >";
					  echo $row['Item'];
				echo "</td >";
			    echo "<td >";
				      echo $row['ItemId'];
			    echo "</td >";
				    echo "<td >";
				echo  "<form method='POST' action='deleteitems.php'>";
					 echo '<input type="hidden" name="ItemId" value="'.$row['ItemId'].'">';
				echo    "<input type='submit' name='Delete' value='Delete'></input></form>"; 
			    echo "</td >";
			
					echo "</tr>";
					
		
	}

	
}
	echo '</table>';
}
?>





















