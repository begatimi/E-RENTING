







<?php
session_start();
$q = intval($_GET['q']);
$db_host = "localhost";
$db_pass="";
$db_username = "root";
$db_name="user_db";

$conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
} 
$UId=$_SESSION['UId'];
mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM tblregister WHERE UId = '".$UId."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Country</th>
<th>City</th>
<th>Telephone</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "<td>" . $row['Country'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['Telephone'] . "</td>";

    echo "</tr>";

}
echo "</table>";
mysqli_close($conn);
?>