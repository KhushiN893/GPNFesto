<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<!---<title> Responsive Registration Form | CodingLab </title>--->
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background:linear-gradient(135deg, #71b7e6, #fbf3ff);
}
.container{
  max-width: 700px;
  height:100%;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
    flex-wrap: wrap;
  justify-content: space-between;
  margin: 49px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #9a71e6, #9b59b63d);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 100%;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
       </style>
   </head>
<body>
<?php

    $connection=mysqli_connect('localhost','root','','adminmanager');
    $query="SELECT * FROM hod ORDER BY ID DESC ";
    $query_run=mysqli_query($connection,$query);

    ?>
  <div class="container">
    <div class="title">WINNERS </div>
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
      <form action="code.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">EMAIL</span>
            <input name="email" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">NAME</span>
            <input name="name" type="name" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[0];?></span>
            <input name="winner1" type="text" placeholder="Winner 1" required>
          </div>
          <div class="input-box">
            <span class="details">&nbsp;&nbsp;&nbsp;</span>
            <input name="branchyear" type="text" placeholder="Enter Branch AND Year" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[1];?></span>
            <input name="winner2" type="text" placeholder="Winner 1" required>
          </div>
          <div class="input-box">
          <span class="details">&nbsp;&nbsp;&nbsp;</span>
          <input name="branchyear2" type="text" placeholder="Enter Branch AND Year" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[2];?></span>
            <input name="winner3" type="text" placeholder="Winner 1" required>
          </div>
          <div class="input-box">
            <span class="details">&nbsp;&nbsp;&nbsp;</span>
            <input name="branchyear3" type="text" placeholder="Enter Branch AND Year" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo  $msg1[3];?></span>
            <input name="winner4" type="text" placeholder="Winner 1" required>
          </div>
          <div class="input-box">
            <span class="details">&nbsp;&nbsp;&nbsp;</span>
            <input name="branchyear4" type="text" placeholder="Enter Branch AND Year" required>
          </div>
         
          <?php  
              $i++;
       }

     }
     else{
       echo "not found";
     }
     ?>
       
          
        </div>
        <div class="button">
          <input type="submit" name="add_winner" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
include('includes/scripts.php');

?>