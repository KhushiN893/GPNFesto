<?php
include("security.php");
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT PHOTOS </h6>
        </div>
        <div class="card-body">
        <?php
            $connection=mysqli_connect('localhost','root','','adminmanager');
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
               $query = "SELECT * FROM gallery WHERE ID='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                ?>
             <form action="code.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="edit_id" value="<?php echo $id ?>">
<div class="form-group">
    <label>Image</label> <input type="file" name="edit_image"  class=form-control 
    value="<?php echo $row['PHOTO'] ?>"/>   
</div>


<a href="gallary.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="updatebutn" class="btn btn-primary"> Update </button>

</form>
                <?php
                } 
            }
        ?>
        </div>
    </div>
</div>
</div>
