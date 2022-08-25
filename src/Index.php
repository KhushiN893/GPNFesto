<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>GPN-FESTO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="../src/favicon.png" />
  <link rel="stylesheet" href="./Mycss.scss" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <header>
    <video autoplay loop id="backvid" muted plays-inline>
      <source src="../assets/backvideo.mp4" type="video/mp4">
    </video>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg sticky-top" >
    <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i><b>GPN-FESTO</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <div id=sec>
                <a class="nav-link" href="">HOME
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec1">ABOUT US</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#win">GALLERY
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec3">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec4">SERVICES </a>
            </li>
            <li>
              <button type="submit" class="login-btn">
                <a href="../admin/login.php"> LOGIN </a>
              </button>
            </li>
          </ul>
          <img src="../assets/SUN.jpg" id="icon">

        </div>
</nav>


<!-- 
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i><b>GPN-FESTO</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <div id=sec>
                <a class="nav-link" href="">HOME
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec1">ABOUT US</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#win">GALLERY
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec3">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec4">SERVICES </a>
            </li>
            <li>
              <button type="submit" class="login-btn">
                <a href="../admin/login.php"> LOGIN </a>
              </button>
            </li>
          </ul>
          <img src="../assets/SUN.jpg" id="icon">

        </div>
      </nav> -->
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">

          <h2>FUNCTION FACILITATOR</h2>
          <p>
            Making a list and checking it twice...<br>
            you've got to have an FUNCTION FACILITATOR in your life...
          </p>
          <button class="btn btn-light px-5 py-2 primary-btn" onclick="eventcalendar();">
            CHECK CALENDAR
          </button>
        </div>
        <!-- <div class="col-md-5 col-sm-12  h-25">
          <img src="../assets/header-img.png" alt="Book" />
        </div> -->
      </div>
    </div>
  </header>
  <main>
    <section id=sec1 class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="../assets/Aboutus.jpg" alt="Pray" class="aboutuscls" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>ABOUT US</h1>
              <p class="pt-4">
                "GPN FESTO" gives key event arranging and innovative conveyance of gathering, and functions for the ease
                of Students and Organiziong bodies."GPN FESTO" is focused on manageable practices and provider for
                various college-level events like National Science Day, World Athletics Day, National Technology Day,
                etc.
              </p>
              <p>
                We are giving complete gathering and event coordinations and inventive generations to the executives,
                where everyone'll get information about the upcoming events, programs held at Government Polytechnic,
                Nashik.
                Regardless of whether a gathering or hackathon, fantastic opening,acknowledgment event or item dispatch,
                you can confide in our expert organizers to make your extraordinary event an important accomplishments
                through our uncommon event arranging administrations.
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
<!-- //for mailing on particular event -->
<?php
 $connection=mysqli_connect('localhost','root','','adminmanager');
 $query="SELECT EMAIL FROM register WHERE USERTYPE='hod'";
 $query_run=mysqli_query($connection,$query);
 $i=0;
while($row=mysqli_fetch_assoc($query_run))
{
 $hod_mail[$i]= $row['EMAIL'];
 $i++;
}
$hod_mail2=implode(',',$hod_mail);
 $query="SELECT * FROM event ";
 $query_run=mysqli_query($connection,$query);

 if(mysqli_num_rows($query_run)>0)
 {
   while($row=mysqli_fetch_assoc($query_run))
   {

    $cdate = date("Y-m-d");
    $days10_date  = $row['DATE_10'];
    $ename  = $row['EVENT_NAME'];
    $edate = $row['ACTUAL_DATE']; 
    $msg1=explode(' ',$ename);
    $msg2=implode(',',$msg1);
    if(($cdate)==($days10_date))
    {  
      shell_exec("python hod_mail.py '$hod_mail2' '$msg2' '$edate'");
      echo(shell_exec("python excel.py"));
    }        
    }
    }
    ?>
<?php
 $connection=mysqli_connect('localhost','root','','adminmanager');
 $query="SELECT EMAIL FROM register WHERE USERTYPE='faculty'";
 $query_run=mysqli_query($connection,$query);
 $i=0;
while($row=mysqli_fetch_assoc($query_run))
{
 $fac_mail[$i]= $row['EMAIL'];
 $i++;
}
$fac_mail2=implode(',',$fac_mail);
 $query="SELECT * FROM hod";
 $query_run=mysqli_query($connection,$query);
 if(mysqli_num_rows($query_run)>0)
 {
   while($row=mysqli_fetch_assoc($query_run))
   {
    $cdate = date("Y-m-d");
    $day_of_event  = $row['ORGANIZED_DATE']; 
    $winner_date = date('Y-m-d',strtotime($day_of_event .'+ 1 days'));   
    $ename  = $row['EVENT_NAME']; 
    $msg1=explode(' ',$ename);
    $msg2=implode(',',$msg1);
        if(($cdate)==($winner_date))
        {
        shell_exec("python faculty_mail.py '$fac_mail2' '$msg2' '$day_of_event'");              
        }        
      }
    }
    ?>
    <!-- mail for excel -->
<?php

 $connection=mysqli_connect('localhost','root','','adminmanager');

 $query="SELECT EMAIL FROM register WHERE USERTYPE='faculty'";
 $query_run=mysqli_query($connection,$query);
 $i=0;
while($row=mysqli_fetch_assoc($query_run))
{
 $fac_mail[$i]= $row['EMAIL'];
 $i++;
}
$fac_mail2=implode(',',$fac_mail);
 $query="SELECT * FROM hod";
 $query_run=mysqli_query($connection,$query);
 if(mysqli_num_rows($query_run)>0)
 {
   while($row=mysqli_fetch_assoc($query_run))
   {

    $cdate = date("Y-m-d");
      $day_of_event  = $row['ORGANIZED_DATE']; 
      $winner_date = date('Y-m-d',strtotime($day_of_event .'- 1 days')); 
  
    $ename  = $row['EVENT_NAME']; 
    $msg1=explode(' ',$ename);
    $msg2=implode(',',$msg1);
        if($cdate==$winner_date)
        {
          shell_exec("python faculty_excel_mail.py '$fac_mail2' '$msg2' '$day_of_event'");
       echo("hello");
                  }
        
      }

    }
    ?>
    <section id=win class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1> Recent Competitions Winners </h1>
          <p>

          </p>
        </div>
      </div>
      <?php
    $connection=mysqli_connect('localhost','root','','adminmanager');
    $query="SELECT * FROM winner ORDER BY ID DESC ";
    $query_run=mysqli_query($connection,$query);
    ?>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">

          <?php
     if(mysqli_num_rows($query_run)>0)
     {
      $i=0; 
       while($row=mysqli_fetch_assoc($query_run))
       {
        if($i==1){
          break;
        }
           
         ?>
          <div class="rect">

            <?php  
           echo "<h1>". $row['COMP1']."</h1>";?>
            <?php  echo "<p>". $row['WIN1']."</p>";?>
          </div>
          <div class="rect">

            <?php  
           echo "<h1>". $row['COMP2']."</h1>";?>
            <?php  echo "<p>". $row['WIN2']."</p>";?>
          </div>
          <div class="rect">

            <?php  
           echo "<h1>". $row['COMP3']."</h1>";?>
            <?php  echo "<p>". $row['WIN3']."</p>";?>
          </div>
          <div class="rect">

            <?php  
           echo "<h1>". $row['COMP4']."</h1>";?>
            <?php  echo "<p>". $row['WIN4']."</p>";?>
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
      </div>

      <?php
    $connection=mysqli_connect('localhost','root','','adminmanager');
    $query="SELECT * FROM gallery ORDER BY ID DESC";
    $query_run=mysqli_query($connection,$query);
    ?>

      <div id=sec2 class="purchase text-center">
        <h1>GALLERY</h1>
        <input class="gallery__select" type="radio" name="gallery-select" id="0" checked="checked" />
        <input class="gallery__select" type="radio" name="gallery-select" id="1" />
        <input class="gallery__select" type="radio" name="gallery-select" id="2" />
        <input class="gallery__select" type="radio" name="gallery-select" id="3" />
        <input class="gallery__select" type="radio" name="gallery-select" id="4" />
        <input class="gallery__select" type="radio" name="gallery-select" id="5" />
        <input class="gallery__select" type="radio" name="gallery-select" id="6" />
        <input class="gallery__select" type="radio" name="gallery-select" id="7" />
        <input class="gallery__select" type="radio" name="gallery-select" id="8" />
        <input class="gallery__select" type="radio" name="gallery-select" id="9" />
        <input class="gallery__select" type="radio" name="gallery-select" id="10" />
        <input class="gallery__select" type="radio" name="gallery-select" id="11" />
        <input class="gallery__select" type="radio" name="gallery-select" id="12" />
        <div class="gallery">
          <div class="gallery__filler"></div>
          <div class="gallery__filler"></div>
          <?php
     if(mysqli_num_rows($query_run)>0)
     {
      $i=0; 
       while($row=mysqli_fetch_assoc($query_run))
       {
        if($i==13){
          break;
        }
           
         ?>


          <label class="gallery__item"
            <?php    echo  "for=".$i."> <img src='../admin/upload/". $row['PHOTO']."' class='imgcls'>";?> </label> <!--
            <label class="gallery__item" for="1"> <img class="imgcls" src="../assets/img1 (2).jpg" /> </label>
          <label class="gallery__item" for="2"> <img class="imgcls" src="../assets/img1 (3).jpg" /> </label>
          <label class="gallery__item" for="3"> <img class="imgcls" src="../assets/img1 (4).jpg" /> </label>
          <label class="gallery__item" for="4"> <img class="imgcls" src="../assets/img1 (5).jpg" /> </label>
          <label class="gallery__item" for="5"> <img class="imgcls" src="../assets/img1 (6).jpg" /> </label>
          <label class="gallery__item" for="6"> <img class="imgcls" src="../assets/img1 (7).jpg" /> </label>
          <label class="gallery__item" for="7"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label>
          <label class="gallery__item" for="8"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label>
          <label class="gallery__item" for="9"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label>
          <label class="gallery__item" for="10"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label>
          <label class="gallery__item" for="11"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label>
          <label class="gallery__item" for="12"> <img class="imgcls" src="../assets/img1 (8).jpg" /> </label> -->

          <?php  
              $i++;
       }

     }
     else{
       echo "not found";
     }
     ?>

        </div>

    </section>

    <div id=sec3 class="container1">
      <!-- <span class="big-circle"></span> -->
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">How can we help?</h3>
          <p class="text">
            Email us with any questions or enquires. We would happy to answer your questions.
          </p>

          <div class="info">
            <div class="information">
              <img src="../assets/address.jpg" class="icon" alt="" />
              <p>G. P. Nashik - 422001</p>
            </div>
            <div class="information">
              <img src="../assets/email2.jpg" class="icon" alt="" />
              <p>GPN-festo_we4@gmail.com</p>
            </div>
            <div class="information">
              <img src="../assets/calling.jpg" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form class=contact-form-css action="index.php" method=post autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" value="Your message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn2" />
          </form>
        </div>
      </div>
    </div>
    <?php
      
      
      if(empty($_POST['message'])){
        echo " ";
      }
      else{
        $msg=$_POST['message'];
      $msg1=explode(' ',$msg);
      $msg2=implode(',',$msg1);
      $cmd=escapeshellcmd("python msg.py '$msg2'");
      $output=exec($cmd);
      echo $output;
      echo '<script>alert("Mail Sent!")</script>';
      
      }
           ?>


    <!-- Section 4 -->
    <section id=sec4 class="section-4">
      <div class="container text-center">
        <h1>Our Services</h1>
      </div>
      <div class="container2">
        <div class="card">
          <div class="face face1">
            <div class="content">
              <span class="stars"></span>
              <img class="serviceimg" src="../assets/event.jpg">
              <h4 class="function">Function Facilitation</h4>
              <p style="font-weight:bold;" class="function"> "GPN FESTO" is one of the best event management websites to
                organize and plan programs that are arranged at Government Polytechnic, Nashik</p>
            </div>
          </div>
          <div class="face face2">
            <h2>Facilitation</h2>
          </div>
        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <span class="stars"></span>
              <img class="serviceimg" src="../assets/sid.png">
              <h4 class="photo">Photography & Videos</h4>
              <p style="font-weight:bold;" class="photo"> At GPN FESTO, we understand the art as well as science of
                photography and films. We try to capture the best moments at every event..</p>
            </div>
          </div>
          <div class="face face2">
            <h2> Photography</h2>
          </div>
        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <span class="stars"></span>
              <img class="serviceimg" src="../assets/img1 (3).jpg">
              <h4 class="value">Value Additions</h4>
              <p style="font-weight:bold;" class="value"> "GPN FESTO", offers value added services to its clients, like
                Planning & informing students about events, Participants management,etc</p>
            </div>
          </div>
          <div class="face face2">
            <h2>Value Additions</h2>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
        <!-- ANIMATED FOOTER -->
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    </div>
    <ul class="social_icon">
      <li><a href="">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#sec1">About Us</a></li>
      <li><a href="#sec4">Services</a></li>
      <li><a href="#win">Gallery</a></li>
      <li><a href="#sec3">Contact Us</a></li>
      <li><a href="../src/help.php">Help</a></li>

    </ul>
    <p>&copy; 2022 GPN-FESTO The Fuction Facilitator | All Rights Reserved </p>



  </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="./main.js"></script>
  <script>
    var icon = document.getElementById("icon");

    icon.onclick = function () {
      document.body.classList.toggle("dark_theme");
      if (document.body.classList.contains("dark_theme")) {
        icon.src = "../assets/moon.jpg";
      } else {
        icon.src = "../assets/SUN.jpg";
      }
      if (document.body.classList.contains("dark_theme")) {
        backvid.src = "../assets/backvideo02.mp4";
      } else {
        backvid.src = "../assets/backvideo.mp4";
      }
    }
  </script>
</body>
</html>