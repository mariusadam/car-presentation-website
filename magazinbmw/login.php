<html>
<head>
	
</head>
<body>
  <?php
		//error_reporting (E_ALL ^ E_NOTICE);
       include "connect.php";
          if (isset ($_POST['buton']))
           { 
               // +++ test sa nu fie goale
            session_start();
            $numeutilizator=$_POST['us'];
			$parola=md5($_POST['pas']);
			//echo $numeutilizator." ".$parola;
            $exista=("SELECT user,passw,nume FROM elevi  WHERE user='".$numeutilizator."' 
			and passw='".$parola."' "); 
			if ($q=@mysql_query($exista))
			   {
			     if (mysql_num_rows($q)>0) 
				   {
				     $linie=mysql_fetch_array($q);
                     $_SESSION['user']=$linie[0];
					  include 'lgx.php';				      
				   }
				   else
				   {
				    include 'lgx.php';
				   ?>
				   
				   <script type="text/javascript">
								   alert("User sau parola aiurea!");
 		            </script>
				   <?php		   
				   
				   }
				  
			   
			   }
			    else
				{
				  echo "Autentificare imposibila !";
                  }
            mysql_close($id);
           }
   ?> 




</body>
</html>