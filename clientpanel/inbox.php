 
 
 <?php 
include 'headerclient.php';
include 'sidebar.php';
 
 ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>





<style> 
.clear {clear: both;}
.inbox-wrap {width: 75%; top: 160px; height: 800px; left: 22%; position: relative; }

.inbox-content { width: 100%; background : gray; border-bottom: 0.5px solid; }

.inbox-content ul li {text-decoration: none; display: inline-block; margin: 10px; font-size: 20px;}
.link {text-decoration: none;}

</style>









<body>
<div class="inbox-wrap"> 
    
<a href ="jobview.php" class="link"> <div class="inbox-content"> 

<ul> <li style="width: 25%;"> Logo Design for my company </li>
<li style="width: 50%;"> I want to a brander logo for my company this is .......... </li>
<li style="width: 15%;"> 10 Janurary 2022 </li>



</ul> 


</div> </a>


<a href ="jobview.php" class="link"> <div class="inbox-content"> 

<ul> <li style="width: 25%; background : green; "> Title </li>
<li style="width: 50%; background : green;"> kdshfk kjddhfkd ksdjfhkf dkjdfhkdf .......... </li>
<li style="width: 15%; background : green; text-align: center;"> 10 Janurary 2022 </li>



</ul> 


</div> </a>



</div>




<div class="clear"> </div>

<?php 


if($_SESSION["clientemail"]== true) {

 
    
}else {

   header ('location: ../index.php');
}

?>
</body>
</html>






