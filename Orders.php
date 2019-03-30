<?php
session_start();
include 'Common.php';









?>
<!DOCTYPE HTML>
<head>
	<link rel="stylesheet" type="text/css" href="Registersheet.css">
</head>
<body>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","GetUser.php?q="+str,true);
  xmlhttp.send();
}
</script>

	<header>
		<a href=Orders.php?lang=al><img src="Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=Orders.php?lang=en><img src="Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		
		
	
				<div style=" float: right; margin-top:75px; margin-right:-50px;width:350px; height:45px; ">
					
			<?php 
			if(isset($_SESSION['lName']))
			echo "<p style='font-size:15px; clear:both; float:right; margin-right:10px;'>Welcome <a href = 'ASettings.php'>".$_SESSION['lName']."</a><a href='logout.php' style = 'margin-left:10px;font-size:10px;'>(Log Out)</a></p>";
		
			
			?>
			
			</div>
			<img src="Images/rent.jpg" alt="E-renting" style="width:315px;height:130px">
	</header>
	<nav id="navg">
			<ul>
			<li class="navlist"><a href="Projekti.php"><?php echo $lang['MENU_HOME']; ?></a></li>
			<?php if(!isset($_SESSION['lName']))
			
			echo '<li class="navlist"><a href="RegisterLogin.php">'.$lang['MENU_REGISTER_LOGIN'].'</a></li>';
		
			?>
			<li class="navlist"><a href="Forum/index.php"><?php echo $lang['MENU_FORUM']; ?></a></li>
			<li class="navlist"><a href="Contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
					<?php if(isset($_SESSION['lName']))
		
			echo  '  <li class="navlist"><a href="Orders.php">'.$lang['MENU_ORDERS'].'</a></li>';
			?>
			
		</ul>
	</nav>
			
	 <div id="Register">

  
<?php
$cars = array
   (
   array( $lang['MENU_ORDERS'],"",""),
   array("Category","Item","ItemId"),

   );
   
echo "<h2>".$cars[0][0].": ".$cars[0][1]." ".$cars[0][2]."</h2> ";
echo "<h3>".$cars[1][0]." - ".$cars[1][1]." - ".$cars[1][2]."</h3>";

?>
<form method="POST" action="orderitems.php">
<select name="Category">
<option value="Clothing">Clothing</option>
<option value="Buildings">Buildings</option>
<option value="Furniture">Furniture</option>

</select>
<select name="Item">
<option value="Dresses">Dresses</option>
<option value="Houses">Houses</option>
<option value="Beds">Beds</option>

</select>
<select name="ItemId">
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>

</select>
<br><br>
<input type="submit" name="order" value="<?php echo $lang['MENU_ORDERS']; ?>">
</form>
		<form>
	
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Albulena Mushica</option>
  <option value="2">Flutra Halilaj</option>
  <option value="3">Labinot Kajtazi</option>

  </select>
</form>

	<div>
			


	<?php  if (isset($_SESSION['Type']))
	          if($_SESSION['Type']==1)
	{
		echo 'Welcome, '. $_SESSION['Name'] .' '. $_SESSION['lName'] ;
		    include_once('orderpart.php');
	}
	?>
<div id="txtHint"></div><?php

			
?>



 
  
</ul>
</div>
<div>

	
	
	</div>

		
	</div>

	
	<footer>
		<p id="copy" style = "padding-top:15px; margin-left:45%;">
	© 2015 E-Renting
	</p>
	</footer>
</body>
</html>
