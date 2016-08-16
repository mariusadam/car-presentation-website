<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BMW ///M</title>
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
<div id="content">
<h2>Bine ati venit!</h2>
<div id="main">
	<p>BMW, acronimul pentru Bayerische Motoren Werke AG (in romana Uzina Bavareza de Motoare SA), 
	este un producator german de automobile, motociclete si motoare. BMW este o companie germana 
	organizata ca societate pe actiuni, inregistrata in DAX la Bursa din Frankfurt.</p>
    <p>Sigla alb-albastra folosita pana in prezent, utilizeaza aceleasi culori ca ale steagului 
	Bavariei, sugerind simultan o elice alba care se roteste avind ca fundal un albastru similar
	cu cel al cerului. Grila frontala caracteristica, de forma "rinichi dublu", a fost prima data 
	folosita la modelul BMW 303, la inceputul anilor 1930.</p>
    <p>Sloganul german original al firmei este "Freude am Fahren", ceea ce se traduce liber prin:
	Placere la condus, Placere la volan, in engleza: "The Ultimate Driving Machine", ceea ce se 
	traduce aproximativ prin: Cea mai sofisticata / Ultima masina de condus.</p>
	<h4>BMW Seria 7 2016, surprins fara camuflaj</h4>
	<a href="m7.php"><img src="images/m7.jpg" alt="" width="150" height="95" border="0"/></a>Urmatoarea generatie 
	a lui BMW Seria 7, cu numele de cod G11, a fost surprinsa de curand fara vreun camuflaj. Versiunea lunga a lui 
	Seria 7 va purta incepand cu acest an numele de cod G12. <span class="read-more"><a href="m7.php">Citeste tot...</a></span></p>
	<div class="clear"></div>
	<h4>BMW i8 - supercarul viitorului</h4>
	<a href="i8.php"><img src="images/i8.jpg" alt="" width="150" height="95" border="0"/></a>BMW demonstreaza 
	ca ecologia nu inseamna abandonarea valorilor specifice marcii bavareze. Lucru demonstrat de noul concept 
	car i8 care este in linii mari identic cu versiunea de serie care urmeaza a fi 
	lansata in viitorul apropiat. <span class="read-more"><a href="i8.php">Citeste tot...</a></span></p>
	<div class="clear"></div>
	<h4>BMW redevine constructorul premium numarul unu in Statele Unite, depasind Mercedes</h4>
	<a href="bmwsua.php"><img src="images/bmwvsmrc.jpg" alt="" width="150" height="95" border="0"/></a>BMW
	s-a razbunat in 2014 pe rivalul sau din Stuttgart, reusind sa revina pe prima treapta a podiumului 
	celor mai mari producatori premium din Statele Unite. <span class="read-more"><a href="bmwsua.php">Citeste tot...</a></span></p>
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
