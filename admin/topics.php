<?php
include('security.php');
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="cr.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
    $connection=mysqli_connect('localhost','root','','adminmanager');
    $query="SELECT * FROM hod ORDER BY ID DESC ";
    $query_run=mysqli_query($connection,$query);

    ?>
  <div class="container">
    <div class="title">Topic Selection</div>
    <div class="content">
    <?php
     if(mysqli_num_rows($query_run)>0)
     {
      $i=0; 
       while($row=mysqli_fetch_assoc($query_run))
       {
        if($i==1){
          break;
        }
        $msg1=explode(',', $row['COMP_NAMES']);
           
         ?>
      <form action="code.php" method=post >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="Email" name="mail" placeholder="Enter your Email" required>
          </div> 
         
          <!-- <div class="content">
            <form action="#">
              <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div> -->
          </div>
         
          <div class="content">
            <form action="#">
              <div class="user-details">
          <!-- <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div> -->
          
          
          <div class="input-box">
            <span class="details"><?php echo  $msg1[0];?></span>
            <input type="text" name="comp1_1" placeholder="Enter First Topic" required>
          </div>
          <div class="input-box">
            <span class="fake">Fake</span>
            <input type="text" name="comp1_2" placeholder="Enter second Topic" required>
          </div>
        
          
          <div class="input-box">
             <span class="details"><?php echo  $msg1[1];?></span>
            <input type="text" name="comp2_1" placeholder="Enter First Topic" required>
          </div>
          <div class="input-box">
            <span class="fake">Fake</span>
            <input type="text"  name="comp2_2" placeholder="Enter Second Topic" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[2];?></span> 
            <input type="text" name="comp3_1" placeholder="Enter First Topic" required>
          </div>
          <div class="input-box">
            <span class="fake">Fake</span>
            <input type="text" name="comp3_2" placeholder="Enter Second Topic" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[3];?></span>
            <input type="text" name="comp4_1" placeholder="Enter First Topic" required>
          </div>
          <div class="input-box">
            <span class="fake">Fake</span>
            <input type="text" name="comp4_2" placeholder="Enter Second Topic" required>
          </div>
        </div>
        <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div> -->
        </div>
        <div class="button">
          <input type="submit" name="topic" value="Register">
        </div>
      </form>
    </div>
  </div>
  <?php  
              $i++;
       }

     }
     else{
       echo "not found";
     }
     ?>

</body>
</html>
