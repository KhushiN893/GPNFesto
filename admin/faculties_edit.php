<?php
include("security.php");
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Faculty Profile </h6>
        </div>
        <div class="card-body">
        <?php
        $connection=mysqli_connect('localhost','root','','admin');
        if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
               $query = "SELECT * FROM faculty WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                ?>
             <form action="code.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="edit_id" value="<?php echo $id ?>">


<div class="form-group">
    <label> Name</label>
    <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
        placeholder="Enter Username">
</div>
<div class="form-group">
    <label>Designation</label>
    <input type="text" name="edit_design" value="<?php echo $row['design'] ?>" class="form-control"
        placeholder="Enter Email">
</div>
<div class="form-group">
    <label>Description</label>
    <input type="text" name="edit_descript" value="<?php echo $row['descript'] ?>"
        class="form-control" placeholder="Enter Password">
</div>

<div class="form-group">
    <label>Image</label>
        <input type="file" name="edit_image"  class=form-control value="<?php echo $row['images'] ?>"/>   
</div>
      

<a href="faculties.php" class="btn btn-danger"> CANCEL </a>
<form action=faculties.php >
<button type="submit" name="update-btn" class="btn btn-primary"> Update </button>
</form>

</form>
                <?php
                } 
            }
        ?>
        </div>
    </div>
</div>
</div>
