<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        <div class="form-group">
            <label for="">Upload Image </label>
            <input type="file" name="image"  class=form-control required>
        </div>
        <div class="form-group">
                <label>Name</label>
                <input type="text" name="namee" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
        </div>   
        <div class="form-group">
            <label>Usertype</label>
                 <select name="usertype"  class="form-control">
                <option value="admin">ADMIN</option>
                <option value="hod">HOD</option>
                <option value="faculty">FACULTY</option>
                <option value="FY_CR">FY_CR</option>
                <option value="SY_CR">SY_CR</option>
                <option value="TY_CR">TY_CR</option>
                </select>
        </div>   
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">PROFILES
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Profile
            </button>
    </h6>
  </div>

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
            <th>PASSWORD </th>
            <th>USERTYPE</th>
            <th>EDIT </th>
            <th>DELETE </th>
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
            <td> <?php echo "<img src='./upload/".$row['PHOTO']."' class='my-3' style='width:100px; height:100px;border-radius:50px;'>";?></td>
            <td>  <?php echo $row['NAME'];?></td>
            <td>  <?php echo $row['EMAIL'];?></td>
            <td>  <?php echo $row['PASSWORD'];?></td>
            <td>  <?php echo $row['USERTYPE'];?></td>
            <td>
                <form action="Register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['ID'];?> ">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['ID'];?>">
                  <button type="submit" name="delete_btn2" class="btn btn-danger"> DELETE</button>
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>