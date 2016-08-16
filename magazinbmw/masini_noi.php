<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Masini Noi</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="outer">
	<div id="logo-bg">
		<h1>DRIVING PLEASURE</h1>
		<span class="tag"></span>
	</div>
	<div id="business"></div>
	<div class="clear"></div>
	<div id="bg">
		<div class="toplinks"><a href="index.php">Acasa</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="masini_noi.php">Masini noi</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="masini_sh.php">masini rulate</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="contact.php">Contact</a></div><div class="sap">|</div>
		<?php
		//error_reporting (E_ALL ^ E_NOTICE);
session_start();
if (isset($_SESSION['user']))
    {?>
     <div class="toplinks"><a href="comm_logat.php">Comentarii</a></div><div class="sap">|</div>  
<?php
    }
	else
	{
?>
		<div class="toplinks"><a href="comm.php">Comentarii</a></div><div class="sap">|</div>
<?php
	}
	?>
		<div class="toplinks"><a href="admin.php">Scurt istoric</a></div>
	</div>
	<div class="clear"></div>
	<div id="outer2"><div class="inner_copy"></div>
		<div id="left-nav">
			<h2>Ultimele stiri
			</h2><div id="showcase">
				<div class="stxt-bg">
					<h3>Noul BMW iDrive</h3>
					<div class="smaltext"><a href="idrive.php"><img src="images/idrive.jpg" alt="" width="150" height="95" border="0"/></a>
						<div class="clear"></div>
						BMW a prezentat la CES 2015 coceptul viitorului sau sistem multimedia 
						iDrive. Acesta va fi capabil sa recunoasca gesturi si va avea si functie tactila.</div>
					<div style="clear:right; height:25px;">
					<span class="read-more"><a href="idrive.php">Citeste tot...</a></span></div>
				</div>
			</div>
			<div id="showcase">
				<div class="stxt-bg">
					<h3>BMW i3</h3>
					<div class="smaltext">
						<a href="i3.php"><img src="images/i3.jpg" alt="" width="150" height="95" border="0"/></a><br/>
						BMW i3 a fost imbunatatit cu ocazia inceputului de an. Modelul electric poate 
						parca fara sofer si poate chiar sa evite singur obstacolele.
				  </div>
				  <div style="clear:right; height:25px;"><span class="read-more"><a href="i3.php">Citeste tot...</a></span></div>
				</div>
			</div>
<div id="showcase">
<div class="stxt-bg">
<h3>BMW M4 Coupe modficat</h3>
<div class="smaltext"><a href="mpack.php"><img src="images/mpack.jpg" alt="" width="150" height="95" border="0"/></a>
	<div class="clear"></div>G-Power a pregatit un pachet special pentru BMW M4 Coupe. 
	Modelul german vine acum cu un look mult mai agresiv multumita unei caroserii de culoare 
	neagra, dar si datorita jantelor de 20 de inch HURRICANE RS.</div>
<div style="clear:right; height:25px;">
<span class="read-more"><a href="mpack.php">Citeste tot...</a></span></div>
</div>
</div>
</div>
<div id="content2">
<h2>Masini Noi</h2>
<div id="main">
   <p><h4>1.Compacte</h4>
  <table width="680px" align="left">
    <tr>
    <td align="center">
    <a href="n11.php"><img src="images/n11.jpg" /></a> <br>
    <a href="n11.php"><font align="center" color="white">BMW Seria 1 (3 usi)<br />
    Pret: de la 22.878 Euro <br />
    Anul aparitiei:2012 </font> </a>
    </td>
    <td align="center">
    <a href="n12.php"><img src="images/n12.jpg" /></a><br>
    <a href="n12.php"> <font align="center"color="white">BMW Seria 2 Coupe M235i <br />
    Pret: de la 46.810 Euro <br />
    Anul aparitiei:2013 </font> </a>
    </td>
    <td align="center">
    <a href="n13.php"><img src="images/n13.jpg" /></a> <br>
     <a href="n13.php"><font align="center"color="white">Z4 Roadster facelift<br />
    Pret: de la 47.750 Euro <br />
    Anul aparitiei:2013 </font> </a>
    </td>
   </tr>
  </table></p>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <p><h4>2.SUV/Crossover</h4>
  <table width="680px" align="left">
    <tr>
    <td align="center">
    <a href="n21.php"><img src="images/n21.jpg" /></a> <br>
    <a href="n21.php"><font align="center"color="white">BMW X1 facelift sDrive20i xLine<br />
    Pret: de la 34.654 Euro <br />
    Anul aparitiei:2012 </font> </a>
    </td>
    <td align="center">
    <a href="n22.php"><img src="images/n22.jpg" /></a> <br />
    <a href="n22.php"><font align="center"color="white">BMW X4 xDrive35d 313CP  <br />
    Pret: de la 61.132 Euro <br />
    Anul aparitiei:2014</font>  </a>
    </td>
    <td align="center">
    <a href="n23.php"><img src="images/n23.jpg" /></a> <br>
    <a href="n23.php"><font align="center"color="white">BMW X5 450CP xDrive50i Steptronic<br />
    Pret: de la 86.484 Euro <br />
    Anul aparitiei:2013</font>  </a>
    </td>
   </tr>
  </table></p>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <p><h4>3.Limuzine</h4>
  <table width="680px" align="left">
    <tr>
    <td align="center">
    <a href="n31.php"><img src="images/n31.jpg" /></a> <br>
     <a href="n31.php"><font align="center"color="white">BMW Seria 7 facelift <br />
    Pret: de la 167.799 Euro <br />
    Anul aparitiei:2012 </font> </a>
    </td>
    <td align="center">
    <a href="n32.php"><img src="images/n32.jpg" /></a> <br>
    <a href="n32.php"><font align="center"color="white">BMW 7 ActiveHybrid facelift<br />
    Pret: de la 95.852 Euro <br />
    Anul aparitiei:2012 </font> </a>
    </td>
    <td align="center">
    <a href="n33.php"><img src="images/n33.jpg" /></a> <br>
    <a href="n33.php"><font align="center"color="white">BMW M6 Gran Coupe<br />
    Pret: de la 150.158 Euro <br />
    Anul aparitiei:2013 </font> </a>
    </td>
   </tr>
  </table></p>
</div>
<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="footer"><a href="index.php">Acasa</a></div>
<div class="footer"><a href="masini_noi.php">Masini Noi</a></div>
<div class="footer"><a href="masini_sh.php">masini rulate</a></div>
<div class="footer"><a href="contact.php">Contact</a></div>
<?php
		//error_reporting (E_ALL ^ E_NOTICE);
//session_start();
if (isset($_SESSION['user']))
    {?>
     <div class="footer"><a href="comm_logat.php">Comentarii</a></div> 
<?php
    }
	else
	{
?>
		<div class="footer"><a href="comm.php">Comentarii</a></div>
<?php
	}
	?>
<div class="footer"><a href="admin.php">Scurt istoric</a></div>
<div class="clear"></div>
<div id="footer"><div class="fleft">© 2015 Marius Adam & Cristi Birla.Toate drepturile rezervate.</div>
<div class="fcenter">Design by MA &amp; CB ///coded by MA & CB</div></div>
</div>
</div>
</body>
</html>
