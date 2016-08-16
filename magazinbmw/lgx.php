
<?php
session_start();
  if (isset($_SESSION['user']))
  {
   
   include "comm_logat.php";
  }
  else
  {
    
    include "adm.php";
  }
  
	  ?>
