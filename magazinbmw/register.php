<?php
session_start();
include("connect.php");
 
//  verifica daca exista date transmise
if (isset($_POST['register_btn']))
{
if ($_POST['register_name'] != "" && $_POST['register_username'] != "" && $_POST['register_password'] != '') {
    // preia datele din formular
    $name = $_POST['register_name'];
    $username = $_POST['register_username'];
    $password = md5($_POST['register_password']);
			// formeaza si executa query-ul de inserare in baza de date user,passw,nume
		$query = "INSERT INTO `elevi` (`user`,`passw`,`nume`) VALUES ('".$username."','".$password."','".$name."')";
		$result = mysql_query($query) or die ( "Error : ". mysql_error() );
 
		// afiseaza un mesaj de succes
		if ($result) {
			?>
				   
					<script type="text/javascript">
								   alert("Inregistrarea a fost efectuata cu succes!Veti fi redirectionat la pagina de login.");
 		            </script>
				   <?php
				   include 'adm.php';
		}
		else
		{
			?>
				   
				   <script type="text/javascript">
								   alert("A aparut o eroare.Va rugam incercati ddin nou!!!");
 		            </script>
				   <?php		  
		}
	}
	
else
{
	?>
				   
				   <script type="text/javascript">
								   alert("Va rugam completati toate campurile!!!");
 		            </script>
				   <?php		  
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inregistrare</title>
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
		<div class="toplinks"><a href="comm.php">Comentarii</a></div><div class="sap">|</div>
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
<div id="content2">
<h2>Inregistrare</h2> <br>
<div id="main">
<div id="reg">
 <form name="register_form" action="register.php" method="POST">
    <table width="100%" border="0" cellpadding="0" cellspacing="7">
        <tr>
            <td width="40%">Nume si prenume</td>
            <td><input type="text" name="register_name" id="register_name" /></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="register_username" id="register_username" /></td>
        </tr>
        <tr>
            <td>Parola</td>
            <td><input type="password" name="register_password" id="register_password" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center"><input type="submit" name="register_btn" value="Inregistrare" /></td>
        </tr>
    </table>
</form>
</div>
</div>
<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="footer"><a href="index.php">Acasa</a></div>
<div class="footer"><a href="masini_noi.php">Masini Noi</a></div>
<div class="footer"><a href="masini_sh.php">masini rulate</a></div>
<div class="footer"><a href="contact.php">Contact</a></div>
<div class="footer"><a href="comm.php">Comentarii</a></div>
<div class="footer"><a href="admin.php">Scurt istoric</a></div>
<div class="clear"></div>
<div id="footer"><div class="fleft">© 2015 Marius Adam & Cristi Birla.Toate drepturile rezervate.</div>
<div class="fcenter">Design by MA &amp; CB ///coded by MA & CB</div></div>
</div>
</div>
</body>
</html>
