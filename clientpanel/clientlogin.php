
<?php include '../lib/database.php'; 

?>

 

<?php 
session_start ();
$clientemailErr = $passwordErr = "";


if(isset($_REQUEST["submit"]))

{
$clientemail = $_REQUEST ["clientemail"];
$password = $_REQUEST ["password"];

$sql = "SELECT * FROM user_registration WHERE clientemail = '$clientemail' && password = '$password'";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if($rowcount == true) {

    $_SESSION ["clientemail"]=$clientemail;
    header ("location:inbox.php");

} else {
    $clientemailErr = "Your email is wrong";
    $passwordErr = "Your Password is wrong";
    
} 


   



}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workhouse</title>
 <link rel="stylesheet" href="../fontawesome-free-5.10.1-web/css/all.min.css">
<style> 
*{margin: 0; padding: 0;}
.clear{clear: both;}
header {border-bottom: 0.1px solid lightgray; top: 0; margin-bottom: 10px; position: sticky; width: 100%; height: 80px;}
.header-grid-container { margin: auto; max-width: 90%; display: grid; grid-template-columns: 30% auto;}  
.header-grid-item-nav ul { text-decoration: none; text-align: right;}
.header-grid-item-nav ul li { margin-top:20px; display: inline-block; }
.header-grid-item-nav ul li a {text-decoration: none;}
.sign-up {margin-right: 10px;}
.nav-bar {grid-column-start: 1; grid-column-end: 3;  grid-column-end: 3; text-align: center;}
.nav-bar ul li { text-decoration: none; display: inline-block; margin-right: 10px; }
.nav-bar ul li a {text-decoration: none;}
.nav-bar ul li a:hover {color: red;}

.section { margin: 50px auto auto auto; max-width: 800px; height: auto; border: 1px solid;}
.registration-form { text-align: center; display: block; max-width: 100%; height: 80px; background-color: darkblue;}
.registration-form h2 {margin: 20px 40px 0 0;   display: inline-block; color: white; }
.form-tag { margin: 4%; max-width: 100%;}

.input-field {border:none; border-bottom: 0.1px solid; outline: none; width: 86%;}
.form-tag-input {width: 50%; float: left; margin-bottom: 20px; }


.from-icon { margin-right: 10px; background-color: darkblue; color: white; padding: 4px; text-align: center;}
.button {float: right; width: 100px; height:  40px; margin-left: 20px;}
.input-field-chk {margin-left: 20px; margin-top: 20px;}

footer {overflow: hidden; bottom: 0; position: absolute; background-color: lightgray; width: 100%; height: 60px;}


.error {color: red;}
</style>
</head>
<body>
    <header>
    <div class="header-grid-container"> 
        <div class="header-grid-item-logo"> 
        <a href="../index.php"> <img style="margin-top:15px;" src="../images/whlogo.png" height="40px" > </a>   
        </div> 
        <div class="header-grid-item-nav"> 
        <ul> 
            <li class="sign-up"> <a href=""> Already I have an account</a></li>
            
        
    
        </ul>    
        </div> 

        
    </div>
    </header> 

    <div class="section">
        <div class="registration-form"> <h2>LOG IN</h2></div>
    <form method="post" class="form-tag">


        <div class="form-tag-input" > 
        <span class = "error"><?php echo $clientemailErr;?></span>  </br>
        
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="clientemail" type="text" placeholder="Enter email address"> 
        </div>  

        <div class="form-tag-input" > 
        <span class = "error"><?php echo $passwordErr;?></span>      </br>   
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="password" type="text" placeholder="Enter password"> 
        </div>


        

       


        <div class="clear"> </div> 
    
    
<div>
<input class="input-field-chk" type="checkbox" name="agree" value="yes"> 
        I forget password
 
        <input class="button" name="submit" type="Submit" value="Submit"> 
        <input class="button" name="submit" type="Reset" value="Reset"> 
</div>
     


    
    </form>
    
    </div>
<div class="clear"> </div> 
    
    <footer>



    </footer>

    
</body>
</html>