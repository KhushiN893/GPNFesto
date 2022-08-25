<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar2.php'); 
?>

<div class="card-body">
    <?php
    if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
    {
      echo "<h4 class='bg-primary text-white'>".$_SESSION['success']."</h4>";
      unset($_SESSION['success']);
    }
    if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
    {
      echo "<h4 class='bg-danger text-white'>".$_SESSION['status']."</h4>";
      unset($_SESSION['status']);
    }
    ?>

    <div class="table-responsive">

    <?php
    $connection=mysqli_connect('localhost','root','','adminmanager');
    $query="SELECT * FROM register";
    $query_run=mysqli_query($connection,$query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> IMAGE </th>
            <th> NAME </th>
            <th> USERNAME/EMAIL </th>
            <th>USERTYPE</th>            
          </tr>
        </thead>
        <tbody>
     <?php
     if(mysqli_num_rows($query_run)>0)
     {
       while($row=mysqli_fetch_assoc($query_run))
       {     
         ?>
          <tr>            
            <td> <?php echo "<img src='./upload/".$row['PHOTO']."' class='my-3' style='width:100px; height:100px'>";?></td>
            <td>  <?php echo $row['NAME'] ;?></td>
            <td>  <?php echo $row['EMAIL'];?></td>
            <td>  <?php echo $row['USERTYPE'];?></td>
          </tr>

         <?php  
       }
     }
     else{
       echo "not found";
     }
     ?>        
        </tbody>
      </table>
   </div>
  </div>
</div>
</div>
<?php 
 $query="SELECT EMAIL FROM register WHERE USERTYPE='TY_CR'";
 $query_run=mysqli_query($connection,$query);
 $i=0;
while($row=mysqli_fetch_assoc($query_run))
{
 $cr_mail[$i]= $row['EMAIL'];
 $i++;
}
$cr_mail2=implode(',',$cr_mail);
 $query="SELECT * FROM hod ORDER BY ID DESC";

 $query_run=mysqli_query($connection,$query);
 if(mysqli_num_rows($query_run)>0)
 {
  
   while($row=mysqli_fetch_assoc($query_run))
  {
   
  
    $day_of_event  = $row['ACTUAL_DATE']; 
    $ename  = $row['EVENT_NAME']; 
    $msg1=explode(' ',$ename);
    $msg2=implode(',',$msg1);
    shell_exec("python mail_cr.py '$cr_mail2' '$msg2' '$day_of_event'");
    break;
 }

  }


?>
<?php
include('includes/scripts.php');
?>