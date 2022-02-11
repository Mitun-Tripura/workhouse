
 <?php include 'headerclient.php';
  include 'sidebar.php';
 
 ?>

 <style> 
 *{margin: 0; padding: 0;}
.job-view-wrap {position: relative; width: 75%; margin : auto auto auto 300px; height: 800px; margin-top: 150px;}



.form-container { width: 75%; height: auto;  bottom: 0; 
    position: fixed;  } 


input {width: 100%; height: 30px;}


.input-box span {font-size: 20px;}
.text-box {width: 100%; height : 100px;  }

.submit-content {width : 100%;  height: 40px;}
.btn {width : 150px; height : 40px;}


</style>

<div class="job-view-wrap"> 


<div class="form-tag-input" > 
       <span class = "error"> Title</span> </br>
       <i class="fa fa-user from-icon"> </i> 
        <input  class="input-field" name="clientname" type="text" placeholder="Enter your user name" >
        
        </div>  


        <div class="form-tag-input" > 
       <span class = "error"> Title</span> </br>
       <i class="fa fa-user from-icon"> </i> 
        <input  class="input-field" name="clientname" type="text" placeholder="Enter your user name" >
        
        </div>


        


        

    

<div class="form-container"> <!--- Form container Start -->

    <div class="form-details"> 

    <form action="#"> 

      

        <div class="input-box"> 
           
            <textarea name="description" class="text-box" cols="30" rows="10"> </textarea>

        </div>

       
    
       


     <div class="submit-content"> 
        <button class="btn" type="submit"> Send </button>
        <button class="btn" type="File"> Attached </button>
         <button class="btn" type="reset"> Reset </button>
           

        

        </div>

        



    

    </form>


</div> <!--- form details end-->

</div> <!--- Form container End -->



</div>

