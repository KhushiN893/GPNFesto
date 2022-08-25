<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                      require 'database/dbconfig.php';
                      $query = "SELECT ID FROM register WHERE USERTYPE='ADMIN' ORDER BY ID";  
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> Total Admin: '.$row.'</h4>';
                    ?>
              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered HOD</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                      require 'database/dbconfig.php';
                      $query = "SELECT ID FROM register WHERE USERTYPE='HOD' ORDER BY ID";  
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> Total HOD: '.$row.'</h4>';
                    ?>

              

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Faculty</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                      require 'database/dbconfig.php';
                      $query = "SELECT ID FROM register WHERE USERTYPE='FACULTY' ORDER BY ID";  
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> Total Faculty: '.$row.'</h4>';
                    ?>

              

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered CR</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                      require 'database/dbconfig.php';
                      $query = "SELECT ID FROM register WHERE USERTYPE='FY_CR' OR USERTYPE='SY_CR' OR USERTYPE='TY_CR' ORDER BY ID";  
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> Total CR: '.$row.'</h4>';
                    ?>
            </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
   
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
