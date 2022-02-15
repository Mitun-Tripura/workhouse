
 <?php include 'headerclient.php';
  include 'sidebar.php';
  include '../lib/database.php';
 
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


.post-job-wrap { width: 75%; left: 22%; top : 160px; height: 800px; position: relative; }
.form-container {margin: 20px auto auto auto; border: 1px solid; max-width: 100%; height: auto;} 

.form-details {margin : 20px;}
input {width: 100%; height: 30px;}

.input-box {margin : 20px auto 20px auto;}
.input-box span {font-size: 20px;}
.text-box {width: 100%; }
</style>


<?php 

$jobtypeErr = $jobtitleeErr = $descriptionErr = $dltimeErr = $categoryErr = $itemErr = $attachmentErr = "";
$jobtype = $jobtitle = $description = $dltime = $category = $item = $attachment =  "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $jobtype = mysqli_real_escape_string ($_POST['jobtype']);
    $jobtitle = mysqli_real_escape_string ($_POST['jobtitle']);
    $description = mysqli_real_escape_string ($_POST['description']);
    $dltime = mysqli_real_escape_string ($_POST['dltime']);
    $category = mysqli_real_escape_string ($_POST['category']);
    $item = mysqli_real_escape_string ($_POST['item']);
    $attachment = mysqli_real_escape_string ($_POST['attachment']);

    if(empty($jobtype)){

        $jobtypeErr = "Name is required"; 

     }
    if(empty($jobtitle)){

        $jobtitleeErr = "Name is required"; 

    }
    if(empty($description)){

        $descriptionErr = "Name is required"; 

    }
    if(empty($dltime)){

        $dltimeErr = "Name is required"; 

    }
    if(empty($category)){

        $categoryErr = "Name is required"; 

    }

    if(empty($itme)){

        $itemErr = "Name is required"; 

    }
    if(empty($attachment)){

        $attachmentErr = "Name is required"; 

    }else {

        $sql3 = "INSERT INTO client_jobpost (jobtype, jobtitle, description,  dltime, 
        category, item, attachment) 
           VALUES ('$jobtype', '$jobtitle', '$description', '$dltime', '$category', 
           '$item', '$attachment')";
           $result3 = mysqli_query ($conn, $sql3); 

    }


   
      
       

   

}







?>


<body>


<div class="post-job-wrap"> 

<div class="form-container"> <!--- Form container Start -->

    <div class="form-details"> 

    <form method="post"  action="#"> 

      <div class="input-box"> 
            <span class="#"> Job Type </span> <?php echo  $jobtypeErr;?>
            <input type="text" name="jobtype" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Job Title </span> <?php echo  $jobtitleErr;?>
            <input type="text" name="jobtitle" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Description </span> <?php echo  $descriptionErr;?>
            <textarea name= "description" class="text-box" cols="30" rows="10"> </textarea>

        </div>

        <div class="input-box"> 
            <span class="#"> Delivery Time </span> <?php echo  $dltimeErr;?>
            <input type="text" name="dltime" placeholder="Enter your Text..." required>

        </div>

        <div class="input-box"> 
            <span class="#"> Category </span> <?php echo  $categoryErr;?>
            <input type="text" name="category" placeholder="Enter your Text..." required>

        </div>
    
        <div class="input-box"> 
            <span class="#"> Select Option </span> <?php echo  $itemErr;?>
        <select name="item" id=""> 
            <option value="bangaldesh">   Bangladesh </option>
            <option value="India">   India </option>
            <option value="Pakistan">   Pakistan </option>


        </select>

        </div>


        <div class="input-box"> 
            <span class="#"> Attachment (optional) </span> <?php echo  $attachmentErr;?>
            <input type="file" name="attachment" placeholder="Enter your Text..." required>

        </div>

        



        <button type="submit"> Submit </button>
    <button type="reset"> Reset </button>

    </form>


</div> <!--- form details end-->

</div> <!--- Form container End -->

</div>

</body>
</html>