<?php
//checkbox data to table

            include_once 'connection.php';
            if(isset($_POST['chk1']))
              { 
                $txt_event_name = $_POST['txt_event_name'];
                $comp1 = $_POST['comp'];

                foreach($comp1 as $item)
                {
                  echo $item;
                }
                $str = implode(" ",$comp1);
          
                $sql="INSERT INTO `competitions` (`event_name_comp`, `competition_names`) VALUES ('$txt_event_name', '$str')";

                   
                  if(mysqli_query($conn,$sql))
                  {
                      echo "\n new record created successfully";
                  }
                  else{
                      echo "Error: " .$sql . " " . mysqli_error($conn);
                  }
                  mysqli_close($conn);
              }
              ?>