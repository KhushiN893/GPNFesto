<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="facultymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data"   >

   
      <div class="modal-body">
        <div class="form-group">
            <label for="">Name </label>
            <input type="text" name="faculty_name" class=form-control placeholder="Enter Name : " required>
        </div>
        <div class="form-group">
            <label for="">DESIGNATION </label>
            <input type="text"name="faculty_designation" class=form-control placeholder="Enter Designation : " required>
        </div>
        <div class="form-group">
            <label for="">DESCRIPTION </label>
            <input type="text"name="faculty_description" class=form-control placeholder="Enter Description : " required>
        </div>
        <div class="form-group">
            <label for="">Upload Image </label>
            <input type="file" name="image"  class=form-control required>
        </div>
      </div>
      <div class="modal-footer">

      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" name="save_faculty" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Faculty Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultymodal">
              Add Faculty
            </button>
    </h6>
  </div>

  <div class="card-body">
   
  <?php
    if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
    {
      echo "<h2 class='bg-primary text-white'>".$_SESSION['success']."</h2>";
      unset($_SESSION['success']);
    }
    if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
    {
      echo "<h2 class='bg-danger text-white'>".$_SESSION['status']."</h2>";
      unset($_SESSION['status']);
    }
    ?>
    <div class="table-responsive">
    <?php
    $connection=mysqli_connect('localhost','root','','admin');
    $query="SELECT * FROM faculty";
    $query_run=mysqli_query($connection,$query);
    ?>
    
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th> ID</th>
            <th> NAME</th>
            <th> DESIGNATION</th>
            <th> DESCRIPTION</th>
            <th> IMAGE</th>
            <th>EDIT </th>
            <th>DELETE </th>
        </tr>
          <!-- <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>Usertype</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr> -->
        </thead>
        <tbody>
        <?php
     if(mysqli_num_rows($query_run)>0)
     {
       while($row=mysqli_fetch_assoc($query_run))
       {     
         ?>
            <tr>
            <td> <?php echo $row['id'];?></td>
            <td>  <?php echo $row['name'];?></td>
            <td> <?php echo $row['design'];?></td>
            <td> <?php echo $row['descript'];?></td>
            <td> <?php echo "<img src='./upload/".$row['images']."' class='my-3' style='width:100px; height:100px'>";?></td>
            <td>
            <form action="faculties_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'];?> ">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
            <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                  <button type="submit" name="delete-btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
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
include('includes/scripts.php');
include('includes/footer.php');
?>