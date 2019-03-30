<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>PHP-MySQL forum</title>
	<link rel="stylesheet" href="forum.css" type="text/css">
</head>
<body>
<header>	
		<a href=Projekti.php?lang=al><img src="../Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=Projekti.php?lang=en><img src="../Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<img src="../Images/rent.jpg" alt="E-renting" style="width:315px;height:130px;float:left;">
</header>
		<?php
 session_start();?>
	<div id="wrapper">
	<div id="menu">
		<a class="item" href="signout.php">Home</a> -
		<a class="item" href="create_topic.php">Create a topic</a> -
		<?php if(isset($_SESSION['user_level']))
				if($_SESSION['user_level']==1)
		{?>
		<a class="item" href="create_cat.php">Create a category</a>
		<?php }?>
		
		<div id="userbar" style="padding-bottom:100px;">
		<?php
 if(isset($_SESSION['signed_in'])){
   echo 'Welcome, ' . $_SESSION['user_name'] . '. <a href="index.php">Proceed to the forum overview</a>.';
	 echo 'not you?' . ' ' . '<a href="signout.php">sign out</a> ';
	 
	 	}
 	else
 	{
 		echo '<a href="signin.php">Login</a> or <a href="signup.php">Register</a>.';
 	}
?>
</div>
</div>
		<div id="content">
	


