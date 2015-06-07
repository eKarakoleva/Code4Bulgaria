﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="bg">
<head>
<meta charset="UTF-8">
<title>Всички институции на едно място</title>
<html lang="bg" xml:lang="bg" xmlns="http://www.w3.org/1999/xhtml">
<html xml:lang="bg" xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="en">

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />
<link rel="stylesheet" href="./flex-slider/flexslider.css" type="text/css" media="screen" />
<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./flex-slider/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="scripts/jquery.tipsy.js" type="text/javascript"></script>
<script src="scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>

<?php
	function hi($option){
		$csvData = file_get_contents("data.csv");
		$lines = explode(PHP_EOL, $csvData);
		$array = array(4);
		$sort = array(4);
		$i = 0;
		foreach ($lines as $line) {
			$sort = str_getcsv($line);
			$tmp = $option;
			$tmp2 = $sort[2];
			if (strcmp($tmp,$tmp2) == 0){
				$array[$i] = $sort;
				$i++;
			}
		}
		
		for ($j = 0; $j < $i; $j++){
			echo "<div id = \"Element\">";
				echo "<tr>";
					echo "<td><p>".$array[$j][0]."</p></td>";
					if ($array[2] != 0){
						echo "<td><p><a id = \"inside-dude\" href = \"".$array[$j][1]."\" target = \" blank_ \">Линк към сайта!</a></p></td>";
					}
					echo "<td><p>".$array[$j][3]."</p></td>";
				echo "</tr>";
			echo "</div>";
		}
	}
?>
</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar"> 
    <!-- the  sidebar --> 
    <!-- logo --> 
    <a href="#" id="logo"> <img src="./images/logo.png" alt="" /></a> 
    <!-- navigation menu -->
    <ul id="navigation">
		<li><a href="#home" class="active">Home</a></li>
		<li><a href="#MVR">Министерство на вътрешните работи</a></li>
		<li><a href="#MVnR">Министерство на външните работи</a></li>
		<li><a href="#MZ">Министерство на здравеопазването</a></li>
		<li><a href="#MT">Министерство на туризма</a></li>
		<li><a href="#MC">МИнистерство на културата</a></li>
		<li><a href="#MZH">Министерство на земеделието и храните</a></li>
		<li><a href="#MOMN">Министерство на образованието и науката</a></li>
		<li><a href="#MOI">Министерство на икономиката</a></li>
		<li><a href="#MOE">Министерство на енергетиката</a></li>
		<li><a href="#MOSV">Министерство на околната среда и водите</a></li>
		<li><a href="#MO">Министерство на отбраната</a></li>
		<li><a href="#MMS">Министерство на младежта и спорта</a></li>
		<li><a href="#MP">Министерство на правосъдието</a></li>
		<li><a href="#MRR">Министерство на регионалното развитие и благоустройството</a></li>
		<li><a href="#MYTITS">Министерство на транспорта, информационните технологии и съобщенията</a></li>
		<li><a href="#MTSP">Министерство на труда и социалната политика</a></li>
		<li style = "margin-bottom:100px"><a href="#MF">Министерство на финансите</a></li>
    </ul>
  </div>
  <div id="container"> 
    <!-- page container -->
    <div class="page" id="home"> 
      <!-- page home -->
      <div class="page_content">
        <div class="gf-slider"> 
          <!-- slider -->
          <ul class="slides">
            <li> <img src="images/01.jpg" alt="" />
              <p class="flex-caption"></p>
            </li>
            <li> <img src="images/02.png" alt="" />
              <p class="flex-caption"></p>
            </li>
            <li> <img src="images/03.jpg" alt="" />
              <p class="flex-caption"></p>
            </li>
            <li> <img src="images/04.jpg" alt="" />
              <p class="flex-caption"></p>
            </li>
            <li> <img src="images/05.jpg" alt="" />
              <p class="flex-caption"></p>
            </li>
			 <li> <img src="images/06.jpg" alt="" />
              <p class="flex-caption"></p>
            </li>
          </ul>
        </div>
        <div class="clear"> </div>
        <!-- services -->
        <div class="one_half first">
          <div class="column_content">
            <h4> Coded with Love!</h4>
            <img src="images/coded-with-love.png" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
            <p> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at feugiat
              felis. Ut faucibus molestie turpis, sit amet scelerisque ipsum scelerisque quis.
              Quisque suscipit fermentum sodales.</small></p>
          </div>
        </div>
        
        <div class="one_half last" id = "MVR">
          <div class="column_content">
            <h4> jQuery Powered</h4>
            <img src="./images/jquery-code.png" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
            <p> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at feugiat
              felis. Ut faucibus molestie turpis, sit amet scelerisque ipsum scelerisque quis.
              Quisque suscipit fermentum sodales.</small></p>
          </div>
        </div>
      </div>
    </div>
	
	
	
	
	
	
	
	<div class="page" id ="MVR">
		<h3 class = "page_title">Министерство на вътрешните работи</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	
	<div class="page" id ="MVnR">
		<h3 class = "page_title">Министерство на външните работи</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MZ">
		<h3 class = "page_title">Министерство на здравеопазването</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	
	<div class="page" id ="MT">
		<h3 class = "page_title">Министерство на туризма</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	
	<div class="page" id ="MC">
		<h3 class = "page_title">Министерство на културата</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	
	<div class="page" id ="MZH">
		<h3 class = "page_title">Министерство на земеделието и храните</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MOMN">
		<h3 class = "page_title">Министерство на образованието и науката</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MI">
		<h3 class = "page_title">Министерство на икономиката</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="ME">
		<h3 class = "page_title">Министерство на енергетиката</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MOSV">
		<h3 class = "page_title">Министерство на околната среда и водите</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MO">
		<h3 class = "page_title">Министерство на отбраната</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MMS">
		<h3 class = "page_title">Министерство на младежта и спорта</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	
	
	<div class="page" id ="MP">
		<h3 class = "page_title">Министерство на правосъдието</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	
	<div class="page" id ="MRR">
		<h3 class = "page_title">Министерство на регионалното развитие и благоустройството</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	<div class="page" id ="MYTITS">
		<h3 class = "page_title">Министерство на транспорта, информационните технологии и съобщенията</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	
	
	<div class="page" id ="MTSP">
		<h3 class = "page_title">Министерство на труда и социалната политика</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	<div class="page" id ="MF">
		<h3 class = "page_title">Министерство на финансите</h1>
		<?php
			hi("Земеделие");
		?>
	</div>
	<div class="clear"> </div>
	<div class="space"> </div>
	
	
	
	
	
	
	
    <div class="page" id="about"> 
      <!-- page about -->
      <h3 class="page_title"> About Us</h3>
      <div class="page_content">
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
        <h4 class="blue"> Why Choose Us</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
        <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
          <p> <small><b>Sarfraz Shoukat</b> - Owner <a href="#">Greepit.com</a></small></p>
        </blockquote>
        <div class="clear"> </div>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
    <div class="page" id="portfolio"> 
      <!-- page portfolio -->
      <h3 class="page_title"> Portfolio</h3>
      <div class="page_content">
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <ul id="works_filter">
          <li><a href="#" data-filter="*" class="selected">Show All</a></li>
          <li><a href="#" data-filter=".css">CSS</a></li>
          <li><a href="#" data-filter=".html_php">HTML / PHP</a></li>
          <li><a href="#" data-filter=".js">JavaScript</a></li>
        </ul>
        <div class="clear"> </div>
        <div id="works"> 
          <!-- works --> 
          <a rel="prettyPhoto[gallery]" href="images/photos/01.jpg"> <img class="work js" src="images/photos/01.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/03.jpg"> <img class="work css" src="images/photos/03.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/04.jpg"> <img class="work html_php" src="images/photos/04.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/05.jpg"> <img class="work html_php" src="images/photos/05.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/06.jpg"> <img class="work css" src="images/photos/06.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/07.jpg"> <img class="work js" src="images/photos/07.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/08.jpg"> <img class="work html_php" src="./images/photos/08.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/09.jpg"> <img class="work js" src="images/photos/09.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/10.jpg"> <img class="work html_php" src="images/photos/10.jpg" alt="" /> </a> </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="skills"> 
      <!-- page skills -->
      <h3 class="page_title"> Our Skills</h3>
      <div class="page_content"> 
   
        <div class="one_fourth first">
          <div class="column_content">
            <h4 class="blue"> Photoshop</h4>
            <input class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" data-fgcolor="#cfdee7" data-bgcolor="#0d4667" value="65">
          </div>
        </div>
        <div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> HTML5</h4>
            <input class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="45" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> jQuery</h4>
            <input class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="85" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="one_fourth last">
          <div class="column_content">
            <h4 class="blue"> CSS3</h4>
            <input class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="95" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="industries"> 
      <!-- page industries -->
      <h3 class="page_title"> Industries We Serve!</h3>
      <div class="page_content">
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="space"> </div>
        <div class="clear"> </div>
        <ul class="sublist">
          <li><a href="#">Freebies</a></li>
          <li><a href="#">Category Names</a></li>
          <li><a href="#">Graphic Design</a></li>
          <li><a href="#">Akay Akagunduz</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Themeforest</a></li>
          <li><a href="#">Reviews</a></li>
          <li><a href="#">Links</a></li>
          <li><a href="#">Tutorials</a></li>
          <li><a href="#">Others</a></li>
          <li><a href="#">Web Development</a></li>
        </ul>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="myclients"> 
      <!-- page clients -->
      <h3 class="page_title"> Our Clients</h3>
      <div class="page_content">
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="space"> </div>
        <div class="clear"> </div>
        <ul id="clients" class="grid">
          <li class="altoids"><a href="#" rel="altoids"> <img src="images/clients/Altoids.png" alt="Altoids"></a></li>
          <li class="facebook"><a href="#" rel="facebook"> <img src="images/clients/Facebook.png" alt="Facebook"></a></li>
          <li class="ge"><a href="#" rel="general-electric"> <img src="images/clients/GE.png" alt="General Electric"></a></li>
          <li class="orbit"><a href="#" rel="orbit"> <img src="images/clients/orbitlogo.png" alt="Orbit"></a></li>
          <li class="skittles"><a href="#" rel="skittles"> <img src="images/clients/Skittles.png" alt="Skittles"></a></li>
          <li class="jameson"><a href="#" rel="jameson"> <img src="images/clients/Jameson.png" alt="Jameson"></a></li>
          <li class="juicy_fruit"><a href="#" rel="juicy-fruit"> <img src="images/clients/Juicy-Fruit.png" alt="Juicy Fruit"></a></li>
          <li class="microsoft"><a href="#" rel="microsoft"> <img src="images/clients/Microsoft.png" alt="Microsoft"></a></li>
          <li class="a_e"><a href="#" rel="ae"> <img src="images/clients/AE.png" alt="A&amp;E"></a></li>
          <li class="zynga"><a href="#" rel="zynga"> <img src="images/clients/Zynga.png" alt="Zynga"></a></li>
          <li class="smuin"><a href="#" rel="smuin"> <img src="images/clients/Smuin.png" alt="Smuin"></a></li>
          <li class="westfield"><a href="#" rel="westfield"> <img src="images/clients/Westfield.png" alt="Westfield"></a></li>
        </ul>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="contact"> 
      <!-- page contact -->
      <h3 class="page_title"> Let's Get in Touch</h3>
      <div class="page_content">
        <fieldset id="contact_form">
          <div id="msgs"> </div>
          <form id="cform" name="cform" method="post" action="">
            <input type="text" id="name" name="name" value="Full Name*" onfocus="if(this.value == 'Full Name*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Full Name*'" />
            <input type="text" id="email" name="email" value="Email Address*" onfocus="if(this.value == 'Email Address*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Email Address*'" />
            <input type="text" id="subject" name="subject" value="Subject*" onfocus="if(this.value == 'Subject*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Subject*'" />
            <textarea id="msg" name="message" onfocus="if(this.value == 'Your Message*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Your Message*'">Your Message*</textarea>
            <button id="submit" class="button"> Send Message</button>
          </form>
        </fieldset>
        <div class="clear"> </div>
        <ul class="social_icons">
          <li><a href="#" id="fb" original-title="Join My Fan Club"> <img src="images/facebook.png" alt="Facebook" /></a></li>
          <li><a href="#" id="tw" original-title="Follow Me on Twitter"> <img src="images/twitter.png" alt="Twitter" /></a></li>
          <li><a href="#" id="ld" original-title="Find me on LinkedIn"> <img src="images/linkedin.png" alt="LinkedIn" /></a></li>
        </ul>
      </div>
    </div>
    <div class="footer">
      <p> &copy; 2012 <a href="http://eGrappler.com">eGrappler.com</a>. Some Rights Reserved.</p>
      <p> Designed With Love by <a href="http://esarfraz.com">Sarfraz Shoukat</a></p>
    </div>
  </div>
</div>
<a class="gotop" href="#top">Top</a>
</body>
</html>
