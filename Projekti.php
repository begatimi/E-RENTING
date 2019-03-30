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
	<link rel="stylesheet" type="text/css" href="Homesheet.css">
	<script>
	function closeList(x,y,z){
		setTimeout(function(){
		openList1(x,y,z);
		},500);
	var g = document.getElementsByClassName('Subclass');
	var d = document.getElementById(x);
	for(var i=0;i<10;i++){
		if(g[i]!=d){
			g[i].style.height="0px";
			g[i].style.opacity = "0";
		}
	}
}
	
	
	
	function openList1(x,y,z) {
    var list = document.getElementById(x);
	var housing = document.getElementById(y);

	if(list.style.height == "0px"){
		list.style.height = z;
		list.style.opacity = "1";
	}
	else{
		list.style.height = "0px";
		list.style.opacity = "0";
	}

	//if (list.style.display == "none"){
		//list.style.display = "block";
		//list.style.height = z;
		//list.style.opacity ="1";
    //}
	//else{
		//list.style.display = "none";
		//list.style.height = "0px";
		//housing.style.marginTop = "1px";
		//list.style.opacity = "0";
    //}
}


//setTimeout(function(){ alert("Hello"); }, 3000);

var images = new Array();
      for (var i = 0; i < 4; i++) {
        images.push("Images/img" + i + ".jpg");
      }
      var i = 0;
	  

      function changeImage() {
        document.getElementById('ad').src = images[i];
        document.getElementById('ad').innerHTML = "<h1>" + images[i] + "</h1>";
        if (i < 3) {
          i += 1;
        } else {
          i = 0;
        }
      }
	  
	  function Fader(){
		  if(document.getElementById('Commercial').style.opacity == "0")
			  document.getElementById('Commercial').style.opacity ="1";
		  else
			  document.getElementById('Commercial').style.opacity ="0";  
	  }
	  	  window.onload = function() {
        setInterval(function () {
          Fader();
        }, 1500);
		setInterval(function () {
          changeImage();
        }, 3000);
      }
	 
	  
	  	  function content(a,p,ai,pp){
			  
		
		 document.getElementById(a).src = ai;
		document.getElementById(p).innerHTML = pp;
	 }
	 
	
	 
	 
	 
//search
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
//perfundon search	 
	 

</script>
</head>
<body>
	<header>	


		<a href=Projekti.php?lang=al><img src="Images/shqip.jpg"  style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		<a href=Projekti.php?lang=en><img src="Images/anglisht.jpg" style="margin-right:0.5%; margin-top:10px; height:25px; width:25px; float:right;"/></a>
		
				<div style=" float: right; margin-top:75px; margin-right:-50px;width:350px; height:45px; ">
			<?php 
			if(isset($_SESSION['lName']))
			echo "<p style='font-size:15px; clear:both; float:right; margin-right:10px;'>Welcome <a href = 'ASettings.php'>".$_SESSION['lName']."</a><a href='logout.php' style = 'margin-left:10px;font-size:10px;'>(Log Out)</a></p>";
		//	if($_SESSION['Type']=='0')
			//	echo "kygg";
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
			<li class="navlist"><a href="forum/index.php"><?php echo $lang['MENU_FORUM']; ?></a></li>
			<li class="navlist"><a href="Contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
					<?php if(isset($_SESSION['lName']))
		
			echo  '  <li class="navlist"><a href="Orders.php">'.$lang['MENU_ORDERS'].'</a></li>';
			?>
			
		</ul>

	</nav>
	<div id="Commercial"><img src = "Images/img3.jpg" id = "ad" style="width:100%; height:230px;"></div>
	<div id="Categories">
		<ul id="Categories_l">
		<form method ="POST" action="orderdone1.php"> 
			<li onclick="closeList('sub1','Buildings','270px');" class = "mainclass"><?php echo $lang['CATEGORIES_CLOTHING'];?></li>
								<ul id = "sub1" class="Subclass" style="height:0px;">
								
					<li><a onclick = "content('a1','p1','Images/Evening-Suits.jpg','Cost:20$/day<br>Size:S,M,L,XL<br>Description:Evening Suit!'); content('a2','p2','Images/suits2.jpg','Cost:30$/day<br>Size:M,L,XL <br>Description:Suits for special events.');content('a3','p3','','');"><?php echo $lang['ITEMS_SUITS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/11111.jpg','Cost:5$/day'); content('a2','p2','Images/22222.jpg','Cost:5$/day');content('a3','p3','','');"><?php echo $lang['ITEMS_DRESSES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/4444.jpg','Cost:20$/month'); content('a2','p2','Images/33333.jpg','Cost:20$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_SHOES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/5555.jpg','Cost:200$/night'); content('a2','p2','Images/666.jpg','Cost:350$/night');content('a3','p3','','');"><?php echo $lang['ITEMS_WEDDING']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/888.jpg','Cost:2$/day'); content('a2','p2','Images/7777.jpg','Cost:2$/day');content('a3','p3','','');"><?php echo $lang['ITEMS_DANCING']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/9999.jpg','Cost:20$/day'); content('a2','p2','Images/10000.jpg','Cost:400$/week');content('a3','p3','','');"><?php echo $lang['ITEMS_TRADITIONAL']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/111111111.jpg','Cost:200$/month'); content('a2','p2','Images/12222.jpeg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_ACCESSORIES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/13333.jpg','Cost:200$/month'); content('a2','p2','Images/1444.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_FESTIVAL']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/1555.jpg','Cost:200$/month'); content('a2','p2','Images/1777.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_SPORT']; ?></a></li>
					</form>
				</ul>
			<li onclick = "closeList('sub2','Furniture','180px');" id="Buildings" class = "mainclass"><?php echo $lang['CATEGORIES_BUILDINGS'];?></li>
					<ul id = "sub2" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/shpija1.jpg','Cost:1000$/month<br> Date of issue:01/06/2015<br> Expiration date:01/06/2016<br> Description:8 bedrooms,2 living rooms,3 bathrooms,a dining room,2 kitchens.'); content('a2','p2','Images/house1.jpg','Cost:600$/month<br> Date of issue:15/05/2015 <br> Expiration date:30/09/2017<br> Description:3 bedrooms,kitchen,living room,dining room,bathroom,2 balconies.');content('a3','p3','','')"><?php echo $lang['ITEMS_HOUSES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/house4.jpg','Residential Block'); content('a2','p2','Images/flats2.jpg','Cost:500$/month<br> Date of issue:07/08/2015 <br> Expiration date: 09/09/2016<br>Description:Living room,kitchen,bedroom,bathroom,balcony'); content('a3','p3','Images/flats3.jpg','Cost:650$/month<br> Date of issue:01/07/2015<br>Expiration date:01/07/2016<br> Description: Kitchen,living room,bathroom,2 bedrooms,2 balconies.')"><?php echo $lang['ITEMS_FLATS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/house3.jpg','Cost:30$/night<br>Only with reservations(it depends from the season)<br>Description:bathroom,bedroom,kitchen.'); content('a2','p2','Images/house2.jpg','Cost:25$/night<br>Description:2 bedrooms,kitchen,bathroom,balcony.'); content('a3','p3','','');"><?php echo $lang['ITEMS_PENTHOUSES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/house11.jpg','Cost:450$/month<br>Date of issue:05/05/2015<br>Expiration date:07/08/2018<br>Description:60m², bathroom.'); content('a2','p2','Images/house12.jpg','Cost:600$/month<br>Date of issue:05/05/2015<br>Expiration date:07/08/2018<br>Description:100m², bathroom.');content('a3','p3','','');"><?php echo $lang['ITEMS_SHOPS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/house9.jpg','Cost:8400$/year<br>Date of issue:01/01/2016<br>Expiration date:01/01/2018<br>Description:150m², bathroom.'); content('a2','p2','Images/house10.jpg','Cost:1000$/month<br>Date of issue:04/07/2015<br>Expiration date:01/08/2018<br>Description:200m², bathroom.'); content('a3','p3','','');"><?php echo $lang['ITEMS_RESTAURANTS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/house8.jpg','Cost:2000$/month<br>Date of issue:09/12/2015<br>Expiration date:09/12/2018<br>Description:15 bedrooms,20 bathrooms,kitchen,living room,dining room,pool.'); content('a2','p2','Images/house6.jpg','Cost:3000$/month<br>Date of issue:01/06/2015<br>Expiration date:01/06/2018<br>Description:20 bedrooms,25 bathrooms,kitchen,living room,dining room,pool.'); content('a3','p3','Images/house7.jpg','View of a room');"><?php echo $lang['ITEMS_HOTELS']; ?></a></li>
				</ul>
			<li onclick="closeList('sub3','Books','180px');" id = "Furniture" class = "mainclass"><?php echo $lang['CATEGORIES_FURNITURE'];?></li>
				<ul id = "sub3" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/beds1.jpg','Negotiable Cost'); content('a2','p2','Images/beds2.jpg','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_BEDS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/tables1.jpg','Negotiable Cost'); content('a2','p2','Images/tables2.jpg','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_TABLES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/chairs3.jpg','Negotiable Cost'); content('a2','p2','Images/chairs2.gif','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_CHAIRS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/closets1.jpg','Negotiable Cost'); content('a2','p2','Images/closets2.jpg','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_CLOSETS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/sofa1.jpg','Negotiable Cost'); content('a2','p2','Images/sofa2.jpg','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_SOFA']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/carpets1.jpg','Negotiable Cost'); content('a2','p2','Images/carpets2.jpg','Negotiable cost');content('a3','p3','','');"><?php echo $lang['ITEMS_CARPETS']; ?></a></li>
				</ul>
			<li onclick="closeList('sub5','Camping','220px');" id="Books" class = "mainclass"><?php echo $lang['CATEGORIES_BOOKS'];?></li>
				<ul id = "sub5" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/proffesionalbooks1.jpg','Cost:3$/week<br>Title:Security Engineering'); content('a2','p2','Images/proffessionalbooks2.jpg','Cost:3$/week<br>Title:Clinical Medicine');content('a3','p3','','');"><?php echo $lang['ITEMS_PROFESSIONAL']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/romansbooks1.jpg','Cost:3$/week<br>Title:One day at a time'); content('a2','p2','Images/romansbooks2.jpg','Cost:3$/week<br>Title:The Guardian');content('a3','p3','','');"><?php echo $lang['ITEMS_ROMANS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/kidsbooks1.jpg','Cost:1$/week<br>Title:The trouble with secrets '); content('a2','p2','Images/kidsbooks2.jpg','Cost:1$/week<br>Title:Noisy counting book');content('a3','p3','','');"><?php echo $lang['ITEMS_KIDS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/poetrybooks1.jpg','Cost:3$/week<br>Title:Good Poems'); content('a2','p2','Images/poetrybooks2.jpg','Cost:3$/week<br>Title:Poetry');content('a3','p3','','');"><?php echo $lang['ITEMS_POETRY']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/dramabooks1.jpg','Cost:3$/week<br>Title:The last child'); content('a2','p2','Images/dramabooks3.jpg','Cost:3$/week<br>Title:Who wanted war?');content('a3','p3','','');"><?php echo $lang['ITEMS_DRAMA']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/thrillerbooks1.jpg','Cost:3$/week<br>Title:Red hill'); content('a2','p2','Images/thrillerbooks2.jpg','Cost:3$/week<br>Title:The second bat guano war');content('a3','p3','','');"><?php echo $lang['ITEMS_THRILLER']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/comedybooks1.jpg','Cost:3$/week<br>Title:Beautiful Ruins'); content('a2','p2','Images/comedybooks2.jpg','Cost:3$/week<br>Title:Stand-Up Comedy');content('a3','p3','','');"><?php echo $lang['ITEMS_COMEDY']; ?></a></li>
				</ul>
			<li onclick="closeList('sub6','Instruments','160px');" id="Camping" class = "mainclass"><?php echo $lang['CATEGORIES_CAMPING'];?></li>
				<ul id = "sub6" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/tents1.jpg','Cost:4$/night'); content('a2','p2','Images/tents2.jpg','Cost:10$/night');content('a3','p3','','');"><?php echo $lang['ITEMS_TENTS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/bags1.jpg','Cost:5$/night'); content('a2','p2','Images/bags2.jpg','Cost:5$/night');content('a3','p3','','');"><?php echo $lang['ITEMS_BAGS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/sleepingbags1.jpg','Cost:2$/night'); content('a2','p2','Images/sleepingbags2.jpg','Cost:2$/night');content('a3','p3','','');"><?php echo $lang['ITEMS_SLEEPING_BAGS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/barbecue1.jpg','Cost:5$/day'); content('a2','p2','Images/barbecue2.jpg','Cost:3$/day');content('a3','p3','','');"><?php echo $lang['ITEMS_BARBECUE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/backpacks1.jpg','Cost:3$/night'); content('a2','p2','Images/backpacks2.jpg','Cost:3$/night');content('a3','p3','','');"><?php echo $lang['ITEMS_BACK_PACKS']; ?></a></li>
				</ul>
			<li onclick="closeList('sub7','Lands','180px');" id="Instruments" class = "mainclass"><?php echo $lang['CATEGORIES_INSTRUMENTS'];?></li>
				<ul id = "sub7" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/piano1.png','Cost:200$/month'); content('a2','p2','Images/piano2.jpg','Cost:35$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_PIANO']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/guitar1.jpg','Cost:25$/month<br> Description:Acoustic guitar'); content('a2','p2','Images/guitar2.jpg','Cost:50$/month<br>Description:Bass guitar');content('a3','p3','','');"><?php echo $lang['ITEMS_GUITAR']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/violin1.png','Cost:100$/month'); content('a2','p2','Images/violin3.jpg','Cost:100$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_VIOLIN']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/flute1.jpg','Cost:100$/month'); content('a2','p2','Images/flute2.jpg','Cost:100$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_FLUTE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/drums1.jpg','Cost:100$/month'); content('a2','p2','Images/drums2.jpg','Cost:300$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_DRUMS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/organ1.jpg','Cost:200$/month'); content('a2','p2','Images/organ2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_ORGAN']; ?></a></li>
				</ul>
			<li onclick="closeList('sub8','Autos','130px');" id="Lands" class = "mainclass"><?php echo $lang['CATEGORIES_LANDS'];?></li>
				<ul id = "sub8" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/lands1.jpg','Cost:200$/month'); content('a2','p2','Images/city2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_CITY']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/seashore1.jpg','Cost:200$/month'); content('a2','p2','Images/seashore2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_SEASHORE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/village1.jpg','Cost:200$/month'); content('a2','p2','Images/village2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_VILLAGE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/mountain1.jpg','Cost:200$/month'); content('a2','p2','Images/mountain2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_MOUNTAIN']; ?></a></li>
				</ul>
			<li onclick="closeList('sub9','Electronics','180px');" id="Autos" class = "mainclass"><?php echo $lang['CATEGORIES_AUTOS'];?></li>
				<ul id = "sub9" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/cars1.png','Cost:200$/month'); content('a2','p2','Images/cars2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_CARS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/bikes1.jpg','Cost:200$/month'); content('a2','p2','Images/bikes2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_BIKES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/boats1.jpg','Cost:200$/month'); content('a2','p2','Images/boats2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_BOATS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/roulets1.jpg','Cost:200$/month'); content('a2','p2','Images/roulets2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_ROULETS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/airplanes1.jpg','Cost:200$/month'); content('a2','p2','Images/airplanes2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_AIRPLANES']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/helicopters1.jpg','Cost:200$/month'); content('a2','p2','Images/helicopters2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_HELICOPTERS']; ?></a></li>
				</ul>
			<li onclick="closeList('sub10','Jewelry','10px');" id="Electronics" class = "mainclass"><?php echo $lang['CATEGORIES_ELECTRONICS'];?></li>
				<ul id = "sub10" class="Subclass" style="height:0px;">
					<li><a onclick = "content('a1','p1','Images/tv1.jpg','Cost:200$/month'); content('a2','p2','Images/tv2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_TV']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/laptops1.jpg','Cost:200$/month'); content('a2','p2','Images/laptop2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_LAPTOPS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/pc1.jpg','Cost:200$/month'); content('a2','p2','Images/pc2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_PC']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/tablets1.jpg','Cost:200$/month'); content('a2','p2','Images/tablets2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_TABLETS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/klima1.jpg','Cost:200$/month'); content('a2','p2','Images/klima2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_AIR_CONDITIONERS']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/fridge1.jpg','Cost:200$/month'); content('a2','p2','Images/fridge2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_FRIDGE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/washingmachine1.jpg','Cost:200$/month'); content('a2','p2','Images/washingmachine2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_WASHING_MACHINE']; ?></a></li>
					<li><a onclick = "content('a1','p1','Images/ovens1.jpg','Cost:200$/month'); content('a2','p2','Images/ovens2.jpg','Cost:350$/month');content('a3','p3','','');"><?php echo $lang['ITEMS_OVENS']; ?></a></li>
				</ul>
			<li id="Jewelry" class = "mainclass" style="visibility:hidden; height:0px;"></li>
		</ul>
	</div>
	<div id="Content">
		<form action = "POST" action = "">
		<div class="Content"><img id="a1"></div>
		<div class="Content"><p id="p1"></div>
		<div class="Content"><img id="a2"></div>
		<div class="Content"><p id="p2"></div>
		<div class="Content"><img id="a3"></div>
		<div class="Content"><p id="p3"></div>
		<div class="Content"><img id="a4"></div>
		<div class="Content"><p id="p4"></div>
		</form>
		
	</div>
	<footer>
		<p id="copy" style = "padding-top:15px; margin-left:45%;">
	© 2015 E-Renting
	</p>
	
	</footer>
</body>
</html>