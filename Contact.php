<?php
session_start();
include_once 'Common.php';



class Contact

{

public function Add()

{

echo "Pallati i Rinisë nr. 91, 10000 Prishtinë";

}

protected function Nr()

{

echo " +386(0)49 657 657, +377(0)44 644448";

}

public function Email()

{

echo "rent@gmail.com";

}

}










?>
<!DOCTYPE HTML>
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="Design-Lib.Com - Basic Web Page Layouts Creator 1.0">
<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="stylesheet" type="text/css" href="Contactsheet.css">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script src="js/jquery-func.js" type="text/javascript"></script>
        <script src="js/js-func.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
		
		
		    var xmlhttp;

            function createRequest()
            {
                try
                {
                    // IE7+, Chrome, FF
                    xmlhttp = new XMLHttpRequest();
                }
                catch(ex)
                {
                    try
                    {
                        // IE5 ose IE6
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch(e)
                    {
                        xmlhttp = null;
                    }
                }

                return xmlhttp;
            }

            function displayResult()
            {
                if (xmlhttp.readyState == 4)
                   {
                       if (xmlhttp.status == 200)
                           {
                               document.getElementById('qrid').innerHTML = xmlhttp.responseText;
                           }
                   }
            }

            function QrId()
            {
                xmlhttp = createRequest();

                if (xmlhttp == null)
                {
                    alert("Nuk mund te krijohet kerkesa!");
                    return;
                }

                // Shfaq gif-in perderisa rss feeds jane duke u shkarkuar (LOADING)
                document.getElementById('qrid').innerHTML = "<div style=\"margin:10px; text-align: center;\"><img src='Images/QrCode.jpg'/></div>";

                var url = "http://www.e-renting.com";

                xmlhttp.open("POST", url, true);
                xmlhttp.send(null);

                xmlhttp.onreadystatechange = displayResult;
            }

       
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		function initialize() {
                var latlng = new google.maps.LatLng(42.648115, 21.166546);
                var myOptions = {
                    zoom: 15,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map"),
                myOptions);

                var markerOptions = { map: map, position: latlng };
                var marker = new google.maps.Marker(markerOptions);
            }
        </script>
</head>
<body onload="initialize(); QrId();">
        <div id="page" class="shell">
            <div id="top">

        

	<header>
		<a href=Contact.php?lang=al><img src="Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=Contact.php?lang=en><img src="Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		

		<img src="Images/rent.jpg" alt="E-renting" style="width:315px;height:130px">
		
		<div style=" float: right; margin-top:50px; margin-right:-158px;width:350px; height:45px; ">
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
			<li class="navlist"><a href="forum/index.php"><?php echo $lang['MENU_FORUM']; ?></a></li>
			<li class="navlist"><a href="Contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
					<?php if(isset($_SESSION['lName']))
		
			echo  '  <li class="navlist"><a href="Orders.php">'.$lang['MENU_ORDERS'].'</a></li>';
			?>
			
		</ul>
	
	</nav>
	<div id="Contact" >
	<?php
	
	define("Kontakti", $lang['MENU_CONTACT']);?>
	<h2 style = "margin-left:5%;">
		<?php echo Kontakti; ?> </h2>
		<?php
	
	
	
	
class Address extends Contact

{






function __construct()

{

$this->Add();

print "<br/> <br/>";

$this->Nr();

print "<br/> <br/>";

$this->Email();

print "<br/> <br/>";

}
function __destruct()
{
	//$this->Email();
}
}
 $b= new Address;
 

//print '<div id = "Address">' .$b = new Address'.<div>';


// case-sensitive constant name



	
	?>
		
		
		<form method="REQUEST" action="SendMail.php">
           <p><?php echo $lang['Contact_Name'];?><input type="text" name="subject" style="margin-left:100px; border-radius:3px;background-color:#F5F5F0;"></input></p></br>
		   <p><?php echo $lang['Contact_Email'];?><input type="mail" name="email"  style="margin-left:93px; border-radius:3px;background-color:#F5F5F0;"></input></p></br>
		   <p><?php echo $lang['Contact_Comment'];?><input type="text" name="comment"  style="margin-left:70px; width:400px; height:150px; border-radius:3px;background-color:#F5F5F0;"></input></p></br>
		   <p><input type="Submit" value = "<?php echo $lang['Contact_Send'];?>" style="margin-left:150px; border-radius:3px;background-color:#F5F5F0;"></input></p>
		</form>
		
			<div id="map"></div>
				<div id="qrid"  ></div>
	</div>	

	<footer>
		<p id="copy" style = "padding-top:15px; margin-left:45%;">
	© 2015 E-Renting
	</p>
	</footer>
</body>
</html>