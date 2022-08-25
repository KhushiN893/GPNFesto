<?php
include('security.php');
?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Share Modal </title>
  <link rel="stylesheet" href="popcss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>
<body>
  <button class="view-modal">Get Link</button>
  <div class="popup">
    <header>
      <span>Registration Link </span>
      <div class="close"><i class="uil uil-times"></i></div>
    </header>
    <div class="content">
      <p>Share this link via</p>
      <ul class="icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/?lang=en-in"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
        <a href="https://telegram.org/"><i class="fab fa-telegram-plane"></i></a>
      </ul>
      <p>Or copy link</p>
      <form action=../src/index.php method=post>
      <div class="field">
        <i class="url-icon uil uil-link"></i>
        <?php 

 $query="SELECT * FROM hod ORDER BY ID DESC";

 $query_run=mysqli_query($connection,$query);
 if(mysqli_num_rows($query_run)>0)
 {
  $i=0; 
   while($row=mysqli_fetch_assoc($query_run))
   {
    if($i==1){
      break;
    }
    $mvar=nl2br("Hello friends! there is  Event  ". $row['EVENT_NAME'] ." on Date : " .$row['ORGANIZED_DATE']. " Competitions for events are " .$row['COMP_NAMES'] ." interested students can register using following link  https://docs.google.com/forms/d/e/1FAIpQLSfG6EsWzxe_NL1l6A8xUCm2pu4Ogk0iEDAiSy5r7q4rwHoVVQ/viewform?usp=sf_link  Thank You!");
    ?>
   
  




        <input type="text" readonly value="<?php echo $mvar?>" >
        <button>Copy</button>
       
<?php
$i++;
   }
  }
?>

      </div>
      <input type=submit value="BACK TO WEBSITE" class=view-modal2>
      </form>
    </div>
  </div>
  <script>
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");
    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }
    copy.onclick = ()=>{
      input.select(); //select input value
      if(document.execCommand("copy")){ //if the selected text copy
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); //remove selection from document
          field.classList.remove("active");
          copy.innerText = "Copy";
        }, 3000);
      }
    }
  </script>
</body>
</html>