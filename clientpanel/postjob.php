
 <?php include 'headerclient.php';
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
 *{margin: 0; padding: 0;}


.post-job-wrap { width: 75%; margin : 160px auto auto 300px; height: 800px; }
.form-container {margin: 20px auto auto auto; border: 1px solid; max-width: 100%; height: auto;} 

.form-details {margin : 20px;}
input {width: 100%; height: 30px;}

.input-box {margin : 20px auto 20px auto;}
.input-box span {font-size: 20px;}
.text-box {width: 100%; }
</style>





<body>


<div class="post-job-wrap"> 

<div class="form-container"> <!--- Form container Start -->

    <div class="form-details"> 

    <form action="#"> 

      <div class="input-box"> 
            <span class="#"> Job Type </span>
            <input type="text" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Job Title </span>
            <input type="text" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Description </span>
            <textarea name="description" class="text-box" cols="30" rows="10"> </textarea>

        </div>

        <div class="input-box"> 
            <span class="#"> Delivery Time </span>
            <input type="text" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Category </span>
            <input type="text" placeholder="Enter your Text..." required>

        </div>
    
        <div class="input-box"> 
            <span class="#"> Select Option </span>
        <select name="" id=""> 
            <option value="bangaldesh">   Bangladesh </option>
            <option value="India">   India </option>
            <option value="Pakistan">   Pakistan </option>


        </select>

        </div>


        <div class="input-box"> 
            <span class="#"> Attachment (optional) </span>
            <input type="file" placeholder="Enter your Text..." required>

        </div>

        



        <button type="submit"> Submit </button>
    <button type="reset"> Reset </button>

    </form>


</div> <!--- form details end-->

</div> <!--- Form container End -->

</div>

</body>
</html>