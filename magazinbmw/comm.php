<?php
 session_start();
error_reporting (E_ALL ^ E_NOTICE);
 
  if (!isset($_SESSION['user']))
  {
  ?>
<?php
error_reporting (E_ALL ^ E_NOTICE);
include 'connect.php';
$name=$_POST['name'];
$comment=$_POST['comment'];
if (isset($_POST['submit'])) 
{
	if ($name && $comment)
	{
			mysql_query("INSERT INTO comment (name,comment) VALUES ('$name','$comment')" );
			header("Location: succes.php");
	}
	else 
	{
		?>		   
			<script type="text/javascript">
				alert("Completati toate campurile!!!");
 		    </script>
		<?php
	}
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Comentarii</title>
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
		<div class="toplinks"><a href="admin.php"> Scurt istoric </a></div>
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
						BMW i3 a fost imbunatatit cu ocazia inceputului de an. Modelul electric 
						poate parca fara sofer si poate chiar sa evite singur obstacolele.
				  </div>
				  <div style="clear:right; height:25px;"><span class="read-more"><a href="i3.php">Citeste tot...</a></span></div>
				</div>
			</div>
<div id="showcase">
<div class="stxt-bg">
<h3>BMW M4 Coupe modficat</h3>
<div class="smaltext"><a href="mpack.php"><img src="images/mpack.jpg" alt="" width="150" height="95" border="0"/></a>
	<div class="clear"></div>G-Power a pregatit un pachet special pentru BMW M4 Coupe. 
	Modelul german vine acum cu un look mult mai agresiv multumita unei caroserii de 
	culoare neagra, dar si datorita jantelor de 20 de inch HURRICANE RS.</div>
<div style="clear:right; height:25px;">
<span class="read-more"><a href="mpack.php">Citeste tot...</a></span></div>
</div>
</div>
</div>
<div id="content2">
<h2>Comentarii &nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp <a href="adm.php">Autentificare Administrator </a>
	&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp <a href="register.php">Inregistrare </a></h2><br />
<div id="main">
 <p>Aceasta este o sectiune destinata comentariilor unde puteti sa discutati despre un anumit model cu ceilalti.<br /><br />
 <span style="font-size:15px;">Atentie !!! Folositi un limbaj civilizat !</span> </p>
 <form action="comm.php" method="POST">
 <table>
	<tr>
		<td colspan="2" >*Nume: </td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="name"></td>
	</tr>
	<tr>
		<td colspan="2">*Comentariu:</td>
	</tr>
	<tr>
		<td colspan="2"><textarea cols="50" rows="6" name="comment" size="100"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td align="left"><input type="submit" name="submit" value="Comenteaza"></td>
		<td align="left"><input type="reset" name="reset" value="Renunta"></td>
	</tr>
 </table>
 </form> 
 <p><b>Nota</b>:campurile marcate cu * sunt obligatorii!!!</p>
 <br/><br/>
 <?php
 $sql='SELECT * FROM comment ORDER BY id DESC';
 $getquery=mysql_query($sql);
 while ($rows=mysql_fetch_assoc($getquery))
 {
	 $id=$rows['id'];
	 $name=$rows['name'];
	 $comment=$rows['comment'];
	 $dellink="<a href=\"delete.php?id=" . $id . "\">Stergere comentariu</a>";
	 echo '<span style="font-size:16px;color:#dbdb2b"><u><b>'.$name.'</b></u></span>' ." a spus:   "  . '<br/>' .
	 '<br/><i>'.' " '. $comment . ' " ' . '</i><br/>' . '<br/>' . '<hr align="left" width="690px" />';
 }
 ?>
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
<?php 
   }
   else
   {
   include 'comm_logat.php';	
   }
     ?>