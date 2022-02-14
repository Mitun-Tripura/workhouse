<?php 

 session_start (); 
 if($_SESSION["clientname"]== true) {

   echo "welcome"."".$_SESSION ["clientname"];
     
 }else {

    header ('location: clientlogin.php');
 }

 ?>