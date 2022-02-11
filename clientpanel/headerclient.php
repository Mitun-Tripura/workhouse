



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workhouse</title>
<style> 
*{margin: 0; padding: 0;}
header {top:0;  position: fixed; width: 100%; height: auto; border-bottom: 0.1px solid; 
    z-index: 1; background-color: white;}
.header-grid-container {margin: 20px auto; max-width: 90%; height: auto; 
    display: grid; grid-template-columns: 20% auto 20%; grid-gap:20px;} 


.logo-section {width: 100%; }
.logo{color: green;}

.clear {clear: both;}

.search-section {width: 100%;  margin: auto; position: relative; }
.search-btn {color: white; text-align: center; width: 100px; height: 50px; background-color: green; z-index: 1; position: absolute; border: none; outline: none; font-size: 25px;}
.src-input { margin-left : 100px; font-size: 18px; width: 600px; padding-left: 10px; height : 50px;  border: none; outline: none;  background:#F1F2F2; }



.login-register {width: 100%; margin: auto;  }
.post-job-form {width: 180px; height: 50px; border: 1px solid; float: left; position: relative; }
.post-job-form a {display: block; text-align: center; position: absolute; top: 25%;}

.prf-pic {width: 50px; height: 50px; border: 1px solid; float: left; }


.box {width: 20%; float: right; }

#profile-pic { box-shadow: 0 0 3px -1px; margin-top: 10px; width: 50px;
height: 50px; border-radius: 50px; background-image: url(images/image1.jpg); }

#box1 {background-color:transparent; position:fixed;  top:0; left:0;  right:0;
    bottom:0; display:block;}



.profile-box { display: none; box-shadow: 0 0 3px -1px; 
width : 250px;  height:200px; background : #FFFFFF;  margin-top: 70px;
position: absolute;}
        
        
.profile-box:before { content: ''; width: 20px; height: 20px; background:#FFFFFF; position: absolute;
transform: translatey(-40%) rotate(45deg); margin-left: 150px; 
box-shadow: -2px -2px 3px -2px; }
.profile-box ul {padding-top: 20px; padding-left: 20px; list-style-type: none;}

.profile-nav li {margin-bottom : 30px;}
.porfile-icon {margin-right: 20px;}
.profile-nav ul li i span {margin-bottom : 30px;}









.navigation {margin: 30px auto 20px auto; max-width: 90%;} 
.nav ul  {text-align: center;  font-size: 20px;  }
.nav ul li {display: inline; width: 10px; margin : auto 20px auto 20px; color: rgb(11, 78, 78);}





</style>    


<?php 
include '../lib/database.php';
 session_start (); 
 if($_SESSION["clientname"]== true) {
     
 }else {

    header ("location: ../index.php");
 }

 ?>






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
        
      

       
       <div class="box"> 
							<div id="box1"> </div>     
       <div id="profile-pic" > </div>
							</div>
  
					<div id="profile-box" class="profile-box">
						
                
            <ul class="profile-nav">
												
													
<li> <i class="fa fa-user porfile-icon"> </i> <?php echo $_SESSION ["clientname"];?> </li>

<li> <i class="fa fa-cog porfile-icon"> </i>  Seetings </li>
<li> <i class="fa fa-sign-out-alt porfile-icon"> </i>
                
                <a href="clientlogout.php"> Logout </a> </li>
                             
            </ul>
												
     </div>
  
    





 
<div class="clear"> </div>





                




       </div>

 <script>
window.onload = function(){
	var popup = document.getElementById('profile-box');
    var overlay = document.getElementById('box1');
    var openButton = document.getElementById('profile-pic');
    document.onclick = function(e){
        if(e.target.id == 'box1'){
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }
        if(e.target === openButton){
         	popup.style.display = 'block';
            overlay.style.display = 'block';
        }
    };
};

</script>



    </div>


    
    </div> <!--- login register end -->


    </div> <!--- header-grid-container end -->


<div class="navigation"> 
    <div class="nav">
            <ul> 
            <li> <a href="inbox.php">  Inbox </a></li>
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