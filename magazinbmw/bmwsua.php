<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BMW redevine constructorul premium numarul unu in Statele Unite, depasind Mercedes</title>
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
						BMW a prezentat la CES 2015 coceptul viitorului sau sistem multimedia iDrive. Acesta va fi capabil sa recunoasca gesturi si va avea si functie tactila.</div>
					<div style="clear:right; height:25px;">
					<span class="read-more"><a href="idrive.php">Citeste tot...</a></span></div>
				</div>
			</div>
			<div id="showcase">
				<div class="stxt-bg">
					<h3>BMW i3</h3>
					<div class="smaltext">
						<a href="i3.php"><img src="images/i3.jpg" alt="" width="150" height="95" border="0"/></a><br/>
						BMW i3 a fost imbunatatit cu ocazia inceputului de an. Modelul electric poate parca fara sofer si poate chiar sa evite singur obstacolele.
				  </div>
				  <div style="clear:right; height:25px;"><span class="read-more"><a href="i3.php">Citeste tot...</a></span></div>
				</div>
			</div>
<div id="showcase">
<div class="stxt-bg">
<h3>BMW M4 Coupe modficat</h3>
<div class="smaltext"><a href="mpack.php"><img src="images/mpack.jpg" alt="" width="150" height="95" border="0"/></a>
	<div class="clear"></div>G-Power a pregatit un pachet special pentru BMW M4 Coupe. Modelul german vine acum cu un look mult mai agresiv multumita unei caroserii de culoare neagra, dar si datorita jantelor de 20 de inch HURRICANE RS.</div>
<div style="clear:right; height:25px;">
<span class="read-more"><a href="mpack.php">Citeste tot...</a></span></div>
</div>
</div>
</div>
<div id="content3">
<h2>BMW redevine constructorul premium numarul unu in Statele Unite, depasind Mercedes</h2><br />
<div id="main">
 <img src="images/bmwsua_title.jpg">
 <p> La sfarsitul lui 2013, piata auto din Statele Unite ne oferea prima surpriza in clasamentul celor mai mari constructori auto din lume: Mercedes reusea sa depaseasca BMW in topul producatorilor premium din Statele Unite, dupa o suprematie indelungata a bavarezilor.</p>
<p>La un an dupa, BMW si-a luat revansa. Luna decembrie a adus vanzari cu 11% mai mari pentru constructorul din Munchen si a ajutat la pastrarea unei diferente importante fata de urmaritorul Mercedes. Mai exact, BMW a vandut in decembrie 41.526 de masini pe piata din SUA, fata de numai 34.009 unitati comercializate de Mercedes. Daca BMW s-a bazat in continuare pe Seria 3 si pe Seria 4, Daimler a primit un impuls din partea modelelor C-Klasse si GL.</p>
<p>In aceste conditii, socotelile efectuate la final de an au relevat ca BMW a reusit sa convinga 339.738 de clienti americani, in crestere cu 9.8 procente fata de 2013. Mercedes nu s-a bucurat de acelasi succes, mai ales ca acualul CLA a suferit mult pe seama stocurilor insuficiente la inceput de 2014.Poate de aceea si cresterea Mercedes a fost mai mica, de numai 5.7 procente, vanzarile totale ajngand la 330.391 exemplare. Diferenta nu este mare, insa este suficienta pentru a tine departe Mercedes de prima treapta a podiumului. </p>
<img src="images/bmwsua_1.jpg">
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
