<?php
session_start();
include_once 'Common.php';
?>
<!DOCTYPE HTML>
<head>
	<link rel="stylesheet" type="text/css" href="Registersheet.css">
</head>
<body>

	<header>

		<a href=ASettings.php?lang=al><img src="Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=ASettings.php?lang=en><img src="Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		
		<img src="Images/rent.jpg" alt="E-renting" style="width:315px;height:130px">
		
	
				<div style=" float: right; margin-top:75px; margin-right:-50px;width:350px; height:45px; ">
			<?php 
			if(isset($_SESSION['lName']))
			echo "<p style='font-size:15px; clear:both; float:right; margin-right:10px;'>Welcome <a href = 'ASettings.php'>".$_SESSION['lName']."</a><a href='logout.php' style = 'margin-left:10px;font-size:10px;'>(Log Out)</a></p>";
		
			
			?>
			
			</div>
	</header>
	<nav id="navg">
			<ul>
			<li class="navlist"><a href="Projekti.php"><?php echo $lang['MENU_HOME']; ?></a></li>
			<?php if(!isset($_SESSION['lName']))
			echo '<li class="navlist"><a href="RegisterLogin.php">'.$lang['MENU_REGISTER_LOGIN'].'</a></li>';
			  ?>
			<li class="navlist"><a href="Forum/index.php"><?php echo $lang['MENU_FORUM']; ?></a></li>
			<li class="navlist"><a href="Contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
			<?php if (isset($_SESSION['Type']))
	          if($_SESSION['Type']==1) {echo '<li class="navlist"><a href="Orders.php">'.$lang['MENU_ORDERS'].'</a></li>'; }
    		  ?>
		</ul>
	</nav>
	<div id="Register">
	<h2 style ="margin-left:10px" ><?php echo $lang['ASettings_Settings']; ?>  </h2>		
		<form method="post" action="updatedone.php">
		<div id="left" style = "width:49%; float:left;">
			<p><span style="color:red;">*</span><?php echo $lang['Register_Firstname']; ?><input class = "registerfields" type="text" name="Firstname" ></input></p></br>
			<p><span style="color:red;">*</span> <?php echo $lang['Register_Lastname']; ?><input class = "registerfields" type="text" name="Lastname" ></input></p></br>
			<p><span style="color:red;">*</span> <?php echo $lang['Register_Email']; ?><input class = "registerfields" type="email" name="Email" ></input></p></br>
			<p><span style="color:red;">*</span> <?php echo $lang['Register_Password']; ?><input class = "registerfields" type="password" name="Password" ></input></p></br>
			<p><span style="color:red;">*</span><?php echo $lang['Register_Telephone']; ?><input class = "registerfields" type="text" name="Telephone"></input></p></br>
			</div>
			<div id ="right" style = "width:49%; float:left;">
			<p><span style="color:red;">*</span> <?php echo $lang['Register_Country']; ?><input class = "registerfields" type="text" name="Country"></input></p></br>
			
			<p><span style="color:red;">*</span> <?php echo $lang['Register_City']; ?><input class = "registerfields" type="text" name="City"></input></p></br>
			<p><span style="color:red;">*</span><?php echo $lang['Register_Address']; ?><input class = "registerfields" type="text" name="Address"></input></p></br>
			<p><span style="color:red;">*</span> <?php echo $lang['Register_ZipCode']; ?><input class = "registerfields" type="text" name="ZipCode"></input></p></br>
			<input type ="submit" value="<?php echo $lang['Register_Register']; ?>" name = "submit"  style="margin-left: 47%; margin-top:20px;border-radius:3px;"></input>
			</div>
		</form>
		
	</div>

	
	<footer>
		<p id="copy" style = "padding-top:15px; margin-left:45%;">
	© 2015 E-Renting
	</p>
	</footer>
</body>
</html>
