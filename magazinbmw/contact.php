<?php
error_reporting (E_ALL ^ E_NOTICE);
// Daca este activat butonul de submit
if(isset($_POST['trimite'])){
	
	// Numele utilizatorului
	$nume = $_POST['nume'];
	
	// Subiectul formularului trimis
	$subiect = $_POST['subiect'];
	
	// Mesajul trimis
	$mesaj = $_POST['mesaj'];
	
	// Adresa de email a vizitatorului
	$email = $_POST['email'];	
	
	// Adresa de email a administratorului
	$to ='ajutor@bmw.ro ';
	
	// Trimite mesajul
	//if($_POST['nume'] != "" && $_POST['email'] != "" && $_POST['subiect'] != "" && $_POST['mesaj'] != ""){
		if($nume && $subiect && $mesaj && $email){
		
		$header = "from: $nume <$email>";
		
		$send = mail($to,$subiect,$mesaj,$header);
		
		if($send==1){
			?>
				  
				   <script type="text/javascript">
								   alert("Mesajul tau a fost trimis cu succes!");
 		            </script>
				   <?php	
		} else {
			?>
				   
				   <script type="text/javascript">
								   alert("Va rugam completati toate campurile!!!");
 		            </script>
				   <?php
		}
	}
	else {
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
<title>Contact</title>
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
						BMW a prezentat la CES 2015 coceptul viitorului sau sistem multimedia iDrive. 
						Acesta va fi capabil sa recunoasca gesturi si va avea si functie tactila.</div>
					<div style="clear:right; height:25px;">
					<span class="read-more"><a href="idrive.php">Citeste tot...</a></span></div>
				</div>
			</div>
			<div id="showcase">
				<div class="stxt-bg">
					<h3>BMW i3</h3>
					<div class="smaltext">
						<a href="i3.php"><img src="images/i3.jpg" alt="" width="150" height="95" border="0"/></a><br/>
						BMW i3 a fost imbunatatit cu ocazia inceputului de an. Modelul electric poate p
						arca fara sofer si poate chiar sa evite singur obstacolele.
				  </div>
				  <div style="clear:right; height:25px;"><span class="read-more"><a href="i3.php">Citeste tot...</a></span></div>
				</div>
			</div>
<div id="showcase">
<div class="stxt-bg">
<h3>BMW M4 Coupe modficat</h3>
<div class="smaltext"><a href="mpack.php"><img src="images/mpack.jpg" alt="" width="150" height="95" border="0"/></a>
	<div class="clear"></div>G-Power a pregatit un pachet special pentru BMW M4 Coupe. Modelul german 
	vine acum cu un look mult mai agresiv multumita unei caroserii de culoare neagra, dar si datorita 
	jantelor de 20 de inch HURRICANE RS.</div>
<div style="clear:right; height:25px;">
<span class="read-more"><a href="mpack.php">Citeste tot...</a></span></div>
</div>
</div>
</div>
<div id="content2">
<h2>Contact</h2><br />
<div id="main">
 <p>BMW online, site-ul numarul 1 atunci cand cumperi o masina.<br /><br />

In cazul in care aveti de adresat o intrebare echipei <br />noastre, scrieti-ne la adresa de email
 ajutor@bmw.ro <br />sau utilizati formularul de contact de mai jos.<br /><br />

<table width="400" border="0" cellpadding="2" cellspacing="2">
	<tr>
		<th width="70">&nbsp;</td>
		<th align="center">Contactati-ne<hr/></td>
	</tr>
	<form name="formular" method="post" action="contact.php">
	<tr>
		<td class="label">*Nume:</td>
		<td><input type="text" name="nume"</td>
	</tr>
	<tr>
		<td class="label">*Email:</td>
		<td><input type="text" name="email"</td>
	</tr>
	<tr>
		<td class="label">*Subiect:</td>
		<td><input type="text" name="subiect"</td>
	</tr>
	<tr>
		<td class="label">*Mesaj:</td>
		<td><textarea rows="6" cols="50" name="mesaj"></textarea></td>
	</tr>
	<tr>
		<td class="label"></td>
		<td><input type="submit" name="trimite" value="Trimite" class="buton"></td>
	</tr>
	</form>
</table>
<p>Nota:campurile marcate cu * sunt obligatorii!!! </p>
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
