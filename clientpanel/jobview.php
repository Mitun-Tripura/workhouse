
 <?php include 'headerclient.php';
  include 'sidebar.php';
 
 ?>

 <style> 
.job-view-wrap {position: relative; width: 75%; background : gray; margin : auto auto auto 300px; height: 800px; margin-top: 150px;}


*{margin: 0; padding: 0;}
.form-container {margin: 20px auto auto auto; border: 1px solid; max-width: 100%; height: auto;  bottom: 0; 
    position: fixed; } 

.form-details {margin : 20px;}
input {width: 100%; height: 30px;}

.input-box {margin : 20px auto 20px auto;}
.input-box span {font-size: 20px;}
.text-box {width: 100%; }


</style>

<div class="job-view-wrap"> 
    

<div class="form-container"> <!--- Form container Start -->

    <div class="form-details"> 

    <form action="#"> 

      

        <div class="input-box"> 
            <span class="#"> Description </span>
            <textarea name="description" class="text-box" cols="30" rows="10"> </textarea>

        </div>

       
    
       


        <div class="input-box"> 
            <span class="#"> Attachment (optional) </span>
            <input type="file" placeholder="Enter your Text..." required>

            <button type="submit"> Submit </button>
    <button type="reset"> Reset </button>

        </div>

        



    

    </form>


</div> <!--- form details end-->

</div> <!--- Form container End -->



</div>

