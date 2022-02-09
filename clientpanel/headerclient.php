<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workhouse</title>
<style> 
*{margin: 0; padding: 0;}
header {top:0;  position: sticky; width: 100%; height: auto; border-bottom: 0.1px solid; z-index: 1; background-color: white;}
.header-grid-container {margin: 20px auto; max-width: 90%; height: auto; display: grid; grid-template-columns: 20% auto 20%; grid-gap:20px;} 


.logo-section {width: 100%; }
.logo{color: green;}



.search-section {width: 100%;  margin: auto; position: relative; }
.search-btn { color: white; text-align: center; width: 10%; height: 50px; background-color: green; z-index: 1; position: absolute; border: none; outline: none; font-size: 25px;}
.src-input { margin-left : 10%; font-size: 18px; width: 89%; padding-left: 10px; height : 50px;  border: none; outline: none;  background:#F1F2F2; }



.login-register {width: 100%; margin: auto;  }
.post-job-form {width: 80%; height: 50px; border: 1px solid; float: left; position: relative; }
.post-job-form a {display: block; text-align: center; position: absolute; top: 25%;}

.prf-pic {width: 50px; height: 50px; border: 1px solid; float: right; }



.navigation {margin: 30px auto 20px auto; max-width: 90%;} 
.nav ul  {text-align: center;  font-size: 20px;  }
.nav ul li {display: inline; width: 10px; margin : auto 20px auto 20px; color: rgb(11, 78, 78);}





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
   
    <div class="src-bar"> 
    
    <input type="submit" class="search-btn" value="search" > 
    
    <input type="text" placeholder="Enter your search text........" class="src-input" >
    

    </div>
    
    
    </div> <!--- header-grid-container end -->



    <div class="login-register"> <!--- login register Start -->
    
    
    <div class="log-reg"> 
        <div class="post-job-form"> <a href="postjob.php"> Post A Job </a> </div>
        
       <div class="prf-pic"> </div>

    </div>
    
    </div> <!--- login register end -->


    </div> <!--- header-grid-container end -->


<div class="navigation"> 
    <div class="nav">
            <ul> 
            <li> Inbox</li>
                <li> My Works</li>
                <li> Massages</li>
                <li> Notification</li>
                <li> Order </li>
                <li> Analytics </li>
                <li> Reports </li>
                <li> More</li>

            
            </ul>
            </div>

</div>

    </header> <!--- Header Section End -->






        
</body>
</html>