
<?php include '../lib/database.php'; ?>



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
header {border-bottom: 0.1px solid lightgray; background-color: lightgray; top: 0; margin-bottom: 10px; position: sticky; width: 100%; height: 80px;}
.header-grid-container {margin: auto; max-width: 90%; display: grid; grid-template-columns: 30% auto;}  
.header-grid-item-nav ul {text-decoration: none; text-align: right;}
.header-grid-item-nav ul li {margin-top:20px; display: inline-block; }
.header-grid-item-nav ul li a {font-size : 18px; text-decoration: none;}
.sign-up {margin-right: 10px;}
.nav-bar {grid-column-start: 1; grid-column-end: 3;  grid-column-end: 3; text-align: center;}
.nav-bar ul li { text-decoration: none; display: inline-block; margin-right: 10px; }
.nav-bar ul li a {text-decoration: none;}
.nav-bar ul li a:hover {color: red;}

.section {margin: 40px auto auto auto; max-width:800px; height: auto; border: 1px solid;}
.registration-form { text-align:center; display: block; max-width: 100%; height: 60px; background-color: darkblue;}
.registration-form h2 {margin: 20px 40px 0 0;   display: inline-block; color: white; }
.form-tag { margin: 4%; max-width: 100%;}

.input-field {border:none; border-bottom: 0.1px solid; outline: none; width: 86%;}
.form-tag-input {width: 50%; float: left; margin-bottom: 20px; }
.form-tag-input-1 {  width: 70%; float: left; margin-bottom: 20px;}
.form-tag-input-2 { width: 30%; float: left;  margin-bottom: 20px; }
.gender-field {margin-left: 20px;}

.error {color: red;}

.from-icon { margin-right: 10px; background-color: darkblue; color: white; padding: 4px; text-align: center;}
.button {float: right; width: 100px; height:  40px; margin-left: 20px;}
.input-field-chk {margin-left: 20px; margin-top: 20px;}
footer {overflow: hidden; bottom: 0; position: absolute; background-color: lightgray; width: 100%; height: 60px;}
</style>

</head>



<?php 
//define variables and set to empty values 
$nameErr = $emailErr = $passErr = $confirmpassErr = $staddErr = $poscodeErr = $countryErr = $genErr = $chkErr = "";
$clientname = $clientemail = $password = $confirmpass = $stateaddress = $postalcode = $country = $gender = $agree = "";


 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST ['clientname'])) {$nameErr = "Name is required"; 
    } else {$clientname = $_POST['clientname'];
    // check if name only contains letter and whitespace
    if (!preg_match ("/^[a-zA-Z-' ]*$/",$clientname)) {$nameErr = "Only letters and white space allowed";
    }
    }

if (empty($_POST ['clientemail'])) {

    $emailErr = "Email is required";
} else {$clientemail = $_POST['clientemail'];
    //Check if email address well formed
    if(!filter_var($clientemail, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Ivalid email format"; 
    }

}


if (empty($_POST['password'])) {

    $passErr = "Password is Required"; 

    } else {$password = $_POST['password'];

        if ((strlen($password) >= 8) && (strlen($password) <= 20)) {
            $passErr = "Password must be 8-20"; 
    
    
    }

   

    }


if(empty($_POST['confirmpass'])) {
    $confirmpassErr = "Confirm Password Required";

} else {$confirmpass = $_POST['confirmpass'];

    if($password != $confirmpass) {

        $confirmpassErr = "Confirm Password not match";
    }
  

}




if(empty ($_POST['stateaddress'])) {

    $staddErr = "State Address is Required";
} else {$stateaddress = $_POST['stateaddress'];

}

if(empty ($_POST['postalcode'])) {

    $poscodeErr = "Postal Code Address is Required";
} else {$postalcode = $_POST['postalcode'];

}

if(empty ($_POST['country'])) {

    $countryErr  = "Country Code Address is Required";
} else {$country = $_POST['country'];

}


if(empty ($_POST['gender'])) {

    $genErr = "Gender Address is Required";
} else {$gender = $_POST['gender'];

}


if(empty ($_POST['agree'])) {

    $chkErr = "Check mark term & condition";
} else { $agree = $_POST['agree'];


    $sql = "SELECT * FROM user_registration WHERE clientemail = '$clientemail'";
    $result = mysqli_query($conn, $sql);
    
     if (mysqli_num_rows($result) > 0) {
    
        $emailErr = "Email is Allready Taken";
        
     }


     else { $sql2 = "INSERT INTO user_registration (clientname, clientemail, password,  confirmpass, 
     stateaddress, postalcode, country, gender) 
        VALUES ('$clientname', '$clientemail', '$password', '$confirmpass', '$stateaddress', 
        '$postalcode', '$country', '$gender' )";
        $result2 = mysqli_query ($conn, $sql2); 
       
        header ("location: inbox.php");


}



 
    

}






}





?>


<body>
    <header>
    <div class="header-grid-container"> 
        <div class="header-grid-item-logo"> 
        <a href="../index.php"> <img style="margin-top:15px;" src="../images/whlogo.png" height="40px" > </a>    
        </div> 
        <div class="header-grid-item-nav"> 
        <ul> 
            <li class="sign-up"> <a href="clientlogin.php"> Already I have an account</a></li>
            
        
    
        </ul>    
        </div> 

        
    </div>
    </header> 

    <div class="section">
        <div class="registration-form"> <h2>Registration Form</h2></div>
    <form class="form-tag" method = "post" action="">


        <div class="form-tag-input" > 
       <span class = "error"> <?php echo $nameErr;?> </span> </br>
       <i class="fa fa-user from-icon"> </i> 
        <input  class="input-field" name="clientname" type="text" placeholder="Enter your user name" >
        
        </div>  

        <div class="form-tag-input" > 
        <span class = "error"> <?php echo $emailErr;?> </span> </br>    
        <i class="fa fa-user from-icon">  </i> 
            <input class="input-field" name="clientemail" type="text" placeholder="Enter your Email"> 
        </div>


        <div class="form-tag-input" > 
        <span class = "error"> <?php echo $passErr;?> </span> </br>        
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="password" type="text" placeholder="Create a password"> 
        </div>  

        <div class="form-tag-input" > 
        <span class = "error"> <?php echo $confirmpassErr;?> </span> </br>        
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="confirmpass" type="text" placeholder="Confirm password"> 
        </div>
        
        <div class="clear"> </div> 
        

        <div class="form-tag-input-1" > 
        <span class = "error"> <?php echo $staddErr;?> </span> </br>        
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="stateaddress" type="text" placeholder="State address"> 
        </div>  
        
        
        <div class="form-tag-input-2" >
        <span class = "error"> <?php echo $poscodeErr;?> </span> </br>        
        <i class="fa fa-user from-icon"> </i> 
            <input style="width:78%;" class="input-field" name="postalcode" type="text" placeholder="Postal code"> 
        </div>
       

        <div class="clear"> </div> 


        <div class="form-tag-input" > 
        <span class = "error"> <?php echo $countryErr;?> </span> </br>        
        <i class="fa fa-user from-icon"> </i> 
            <input class="input-field" name="country" type="text" placeholder="Country"> 
        </div>  

        <div class="form-tag-input" > 
        <span class = "error"> <?php echo $genErr;?> </span> </br>    
             <i class="fa fa-user from-icon"> 
             
             </i> Gender : 
            <input class="gender-field" name="gender" type="radio" value="Male" <?php if(isset($gender)
		&& $gender = 'male'); ?> > Male
            
            <input  class="gender-field" name="gender" type="radio" value="Female" <?php if(isset($gender)
		&& $gender = 'female'); ?>> Female
            
            <input  class="gender-field" name="gender" type="radio" value="Other" <?php if(isset($gender)
		&& $gender = 'other'); ?>> Other
        </div>  



        <div class="clear"> </div> 
    
    
<div>
<span class = "error"> <?php echo $chkErr;?> </span> </br>    
<input class="input-field-chk" type="checkbox" name="agree" value="yes"> 
        I agree terms & condition
 <input class="input-field-chk" type="checkbox" name="agree" value="yes"> 
        I agree terms & condition
        
        <input class="button" name="submit" type="reset" value="Reset"> 
        <input class="button" name="submit" type="submit" value="Submit"> 
</div>
     


    
    </form>
    
    </div>
<div class="clear"> </div> 
    
    <footer>



    </footer>

    
</body>
</html>