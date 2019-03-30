

<?php
include_once('databaseconnection.php');
include_once 'Common.php';
        
	$UId =$_SESSION['UId'];
			
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
		echo '<table border="1">
			  <tr>
				<th>Category</th>
				<th>Last topic</th>
			  </tr>';	
			
			
		while($row = mysqli_fetch_array($result))
		
		{				
			echo "<tr>";
				echo "<td class='leftpart'>";
					//echo "<p id=$row[UId]'>" . $row["Firstname"] . "</p>" ;
				//echo "</td>";
				//echo "<td class='leftpart'>";
				//	echo "<p id=$row[UId]'>" . $row["Lastname"] . "</p>" ;
				//echo "</td>";
				echo "wdwjkds";
				echo "wdwjkds";
				echo "</td>";
			
							
			$topicsql = "SELECT
									tblorder.OrderId,
									tblorder.Category, 
									tblorder.Item, 
									tblorder.ItemId 
								FROM
									tblorder
								WHERE
									UserId = '" . $UId . "'
								
					
								LIMIT
									1";
									
									

			
								
					$topicsresult = mysqli_query($conn, $topicsql);
				
					if(!$topicsresult)
					{
						echo 'Last topic could not be displayed.';
					}
					else
					{
						if(mysqli_num_rows($topicsresult) == 0)
						{
							echo 'no topics';
						}
						else
						{
							while($topicrow = mysqli_fetch_assoc($topicsresult))
						//	echo '<p id=' . $topicrow['OrderId'] . '">' . $topicrow['Category'] . '</p>';
					echo 'shit';
					echo "</td>";
			echo "</tr>";
						}
					}
				echo '</td>';
			echo '</tr>';
		}
	echo '</table>';
	}
}
?>





















