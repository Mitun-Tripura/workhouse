
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workhouse</title>
<style> 
*{margin: 0; padding: 0;}
header {top:0;  position: sticky; width: 100%; height: auto; border-bottom: 0.1px solid;}
.header-grid-container {margin: 20px auto; max-width: 90%; height: auto;
    display: grid; grid-template-columns: 20% 60% 20%; grid-gap:20px;} 


.logo-section {width: 100%; margin: auto;  }
.logo{color: green;}



.search-section {width: 100%;  margin: auto;   }
.search-contant {width:90%; position: relative; margin: auto; }
.search-btn { color: white; text-align: center; width: 10%; height: 50px; background-color: green; z-index: 1; position: absolute; border: none; outline: none; font-size: 20px;}
.src-input { margin-left : 18%; font-size: 14px; width: 80%; padding-left: 10px; height : 50px;  border: none; outline: none;  background: #F1F2F2; }



.login-register {width: 100%; margin: auto; }

.log-reg {right: 0; }
.log-reg-btn {width :120px; height : 50px; background-color: green; display: inline-block; text-align: center; line-height: 50px; font-size: 20px;  align: right; }

.log-reg-btn:hover {background-color: red; cursor: pointer;}

.log-reg-btn a {text-decoration : none; color: white;}


.navigation {margin: 30px auto 20px auto; max-width: 90%;} 
.nav ul  {text-align: center;  font-size: 20px;  }
.nav ul li {display: inline; width: 10px; margin : auto 20px auto 20px; padding}
</style>    
</head>
<body>
    <header>
    <div class="header-grid-container"> <!--- header-grid-container Start -->
    
    <div class="logo-section"> <!--- logo section Start -->
    
    <div class="logo"> 
            <h1> workhouse.com</h1>
    
    </div>
    
    
    </div> <!--- logo section end -->


    <div class="search-section"> <!--- search section Start -->
    <div class=".search-contant">
   
    
    
    <input type="submit" class="search-btn" value="search" > 
    
    <input type="text" placeholder="Enter your search text........" class="src-input" >
    

    
    
    </div>
    </div> <!--- header-grid-container end -->



    <div class="login-register"> <!--- login register Start -->
    
    
    <div class="log-reg"> 
           
        <div class= "log-reg-btn"> <a href="clientpanel/clientlogin.php">  Log In </a> </div>
        <div class= "log-reg-btn"> <a href="clientpanel/clientregister.php">  Register </a> </div>



    </div>
    
    </div> <!--- login register end -->


    </div> <!--- header-grid-container end -->


<div class="navigation"> 
    <div class="nav">
            <ul> 
                <li> Graphics Design</li>
                <li> Photoshop work</li>
                <li> Web design & development</li>
                
                <li> Wordpress </li>
                <li> Digital Marketing </li>
                <li> Video </li>
                <li> Animation</li>
                
               

            
            </ul>
            </div>

</div>






    </header> 
</body>
</html>