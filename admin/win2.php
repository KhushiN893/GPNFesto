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
    $query="SELECT * FROM winner";
    $query_run=mysqli_query($connection,$query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Event Name</th>
            <th> COMP1 </th>
            <th> WIN1 </th>
            <th>COMP2 </th>
            <th>WIN2</th>
            <th> COMP3 </th>
            <th> WIN3 </th>
            <th> COMP4 </th>
            <th>WIN4 </th>
            
            
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
             <td>  <?php echo $row['ENAME'] ;?></td>
            <td>  <?php echo $row['COMP1'];?></td>
            <td>  <?php echo $row['WIN1'];?></td>
            <td>  <?php echo $row['COMP2'];?></td>
            <td>  <?php echo $row['WIN2'];?></td>
            <td>  <?php echo $row['COMP3'];?></td>
            <td>  <?php echo $row['WIN3'];?></td>
            <td>  <?php echo $row['COMP4'];?></td>
            <td>  <?php echo $row['WIN4'];?></td>
            
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');

?>