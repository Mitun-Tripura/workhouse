
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

    

    if (empty($_POST ['jobtype'])) {$jobtypeeErr = "Name is required"; 
    } else {$jobtype = $_POST['jobtype'];}

    if (empty($_POST ['jobtitle'])) {$jobtitleErr = "Email is required";
    } else {$jobtitle = $_POST['jbotitle'];}

    if (empty($_POST ['description'])) {$descriptionErr = "Email is required";
    } else {$description = $_POST['description'];}

    if (empty($_POST ['dltime'])) {$dltimeErr = "Email is required";
    } else {$dltime = $_POST['dltime'];}

    if (empty($_POST ['category'])) {$categoryErr = "Email is required";
    } else {$category = $_POST['category'];}

    if (empty($_POST ['item'])) {$itemErr = "Email is required";
    } else {$item = $_POST['item'];}

    if (empty($_POST ['attachment'])) {$attachmentErr = "Email is required";
    } else {$attachment = $_POST['attachment'];
    
            $sql3 = "INSERT INTO client_jobpost(jobtype, jobtitle, description,  dltime, 
            category, item, attachment) 
           VALUES ('$jobtype', '$jobtitle', '$description', '$dltime', '$category', 
           '$item', '$attachment')";
           $result3 = mysqli_query ($conn, $sql3); 
           header ("location: inbox.php");
    
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