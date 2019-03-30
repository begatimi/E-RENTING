<?php







session_start();
include_once 'Common.php';
?>
<!DOCTYPE HTML>
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="Design-Lib.Com - Basic Web Page Layouts Creator 1.0">
<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="stylesheet" type="text/css" href="RegisterLoginsheet.css">
</head>
<body>

	<header>
		<a href=RegisterLogin.php?lang=al><img src="Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=RegisterLogin.php?lang=en><img src="Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		
		
	
		<img src="Images/rent.jpg" alt="E-renting" style="width:315px;height:130px">
		
				<div style=" float: right; margin-top:75px; margin-right:-50px;width:350px; height:45px; ">
			<?php 
			if(isset($_SESSION['lName']))
			echo "<p style='font-size:15px; clear:both; float:right; margin-right:10px;'>Welcome <a href = 'ASettings.php'>".$_SESSION['lName']."</a><a href='logout.php' style = 'margin-left:10px;font-size:10px;'>(Log Out)</a></p>";
			
			?>
			
			</div>
	</header>
	<nav  id="navg" >
		<ul>
			<li class="navlist"><a href="Projekti.php"><?php echo $lang['MENU_HOME']; ?></a></li>
			<?php if(!isset($_SESSION['lName']))
			echo '<li class="navlist"><a href="RegisterLogin.php">'.$lang['MENU_REGISTER_LOGIN'].'</a></li>';
			  ?>
			<li class="navlist"><a href="forum/index.php"><?php echo $lang['MENU_FORUM']; ?></a></li>
			<li class="navlist"><a href="Contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
			<?php if (isset($_SESSION['Type']))
	          if($_SESSION['Type']==1) {echo '<li class="navlist"><a href="Orders.php">'.$lang['MENU_ORDERS'].'</a></li>'; }
    		  ?>
		</ul>
	</nav>

	<div id="Register">
	<h3 style = "margin-left:10px"><?php echo $lang['RegisterLogin_New_Customer']; ?></h3>
	   <h2 style ="margin-left:10px" > <a href="Register.php"><?php echo $lang['RegisterLogin_Register_Account']; ?> </a>	</h2>	
	   
	   
	   					<div id="Login">
	<h2 style ="margin-left:10px" > <?php echo $lang['RegisterLogin_Login_Account']; ?>	</h2>
	<div id="left" style = "width:40%; float:left;" >
	
	<p style="margin-left:10px">
<?php echo $lang['RegisterLogin_Paragraph']; ?><form method = "POST" action = "logindone.php">
		</div>
			<div id ="right" style = "width:49%; float:right; ">
			<div id = "Email">* Email:<input type="text" name="Email" style="margin-left:82px; border-radius:3px;background-color:#F5F5F0;"></input></div>
			<div id ="Password2">* Password:<input type="password" name="Password" style = "margin-left:51px; border-radius:3px;background-color:#F5F5F0;"></input></div>
			<div id="LoginButton"> <input type ="submit" name="login" value="Login" style="margin-left: 273px; margin-top:30px;border-radius:3px;"></input></div>
			
			
			</div>
		</form>
		
	</div>
			
</div>
	

					
	<footer>
		<p id="copy" style = "padding-top:15px; margin-left:45%;">
	© 2015 E-Renting
	</p>
	</footer>
</body>
</html>


