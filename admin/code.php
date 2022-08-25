<?php
//insert
include("security.php");
$connection=mysqli_connect('localhost','root','','adminmanager');

if(isset($_POST['registerbtn']))
{
    $file= $_FILES['image']['name'];
    $name = $_POST['namee'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    

    if($password === $cpassword)
        {
            $query = "INSERT INTO register (`PHOTO`,`NAME`,`EMAIL`,`PASSWORD`,`USERTYPE`) VALUES ('$file','$name','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES['image']['tmp_name'],"./upload/$file");
                $_SESSION['success'] = "Profile Added";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Profile not Added";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Does not match";
                header('Location: register.php');
        }
    }
    
    //update
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $file= $_FILES['edit_image']['name'];  
    $name = $_POST['edit_name'];
    $email = $_POST['edit_username'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['Update_usertype'];
    
    $update_query="SELECT * FROM register WHERE ID='$id'";
       

    $update_query_run=mysqli_query($connection,$update_query);
    foreach($update_query_run as $fa_row)
    {
     //    echo $fa_row['images'];
     if( $file==NULL)
     {
         $image_data=$fa_row['PHOTO'];
     }
     else{
         if($img_path="upload/".$fa_row['PHOTO'])
         {
             unlink($img_path);
             $image_data=$file;
         }
         
     }
    }
    $query = "UPDATE register SET PHOTO='$image_data', NAME='$name', EMAIL='$email',PASSWORD='$password'  WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {

        if( $file==NULL)
        {
            $_SESSION['succcess'] = "Your Data is Updated with exsisting image";
            header('Location: register.php');
        }
        else{
            move_uploaded_file($_FILES['edit_image']['tmp_name'],"./upload/$file");
            $_SESSION['succcess'] = "Your Data is Updated";
            header('Location:register.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: register.php'); 
    }
}


//delete
if(isset($_POST['delete_btn2']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['success'] = "Your Data is NOT DELETED"; 
        header('Location: register.php'); 
    }    
}


// login
if(isset($_POST['save']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE EMAIL='$email_login' AND PASSWORD='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['USERTYPE'] == "admin")
    {
        $_SESSION['EMAIL'] = $email_login;
        header('Location: index.php');
    }
    else if($usertypes['USERTYPE'] == "hod")
    {
        $_SESSION['EMAIL'] = $email_login;
        header('Location: index2.php');
    }
    else if($usertypes['USERTYPE'] == "faculty")
    {
        $_SESSION['EMAIL'] = $email_login;
        header('Location: winner_form.php');
    }
    else if($usertypes['USERTYPE'] == "TY_CR")
    {
        $_SESSION['EMAIL'] = $email_login;
        header('Location: topics.php');
    }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
}
// if(isset($_POST['save']))
// {
//     $email_login=$_POST['emaill'];
//     $pass_login=$_POST['passwordd'];
//     $query ="SELECT * FROM register WHERE email='$email_login' AND  password='$pass_login'";
//     $query_run=mysqli_query($connection,$query);
    // $usertypes=mysqli_fetch_array($query_run);
    // if($usertypes=="admin")
    // {
    //     $_SESSION['username']=$email_login;
    //     header('Location: index.php');
    // }
    // else if($usertypes=="user")
    // {
    //     $_SESSION['username']=$email_login;
    //     header('Location: update.php');
    // }
    // else{
    //     $_SESSION['status']='Invalid';
    //     header('Location: login.php'); 
    // }
//     if(mysqli_num_rows($query_run)>0)
//     {
//         while($row=mysqli_fetch_assoc($query_run))
//         {
//             $_SESSION['username']=$email_login;
//         header('Location: index.php');
//         }
        
//     }
//    else
//     {
//         $_SESSION['status']='Invalid';
//         header('Location: login.php');
//     }
// }

//faculty_login insert

if(isset($_POST['save_faculty'])){

    $name=$_POST['faculty_name'];
    $designation=$_POST['faculty_designation'];
    $description=$_POST['faculty_description'];
    $file= $_FILES['image']['name'];
    $query="INSERT INTO faculty(`name`,`design`,`descript`,`images`) VALUES('$name','$designation','$description','$file')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],"./upload/$file");
        $_SESSION['success']="faculty added";
        header('Location:faculties.php');
    }
    else{
        $_SESSION['success']="faculty not added";
        header('Location:faculties.php');
    }
}
//update file
   //update
   if(isset($_POST['update-btn']))
   {
       $id = $_POST['edit_id'];
       $name = $_POST['edit_name'];
       $design = $_POST['edit_design'];
       $descript = $_POST['edit_descript'];
       $file= $_FILES['edit_image']['name'];  
       $faculty_query="SELECT * FROM faculty WHERE id='$id'";
       

       $faculty_query_run=mysqli_query($connection,$faculty_query);
       foreach($faculty_query_run as $fa_row)
       {
        //    echo $fa_row['images'];
        if( $file==NULL)
        {
            $image_data=$fa_row['images'];
        }
        else{
            if($img_path="upload/".$fa_row['images'])
            {
                unlink($img_path);
                $image_data=$file;
            }
            
        }
       }
      

       $query = "UPDATE faculty SET name='$name', design='$design', descript='$descript' ,images='$image_data' WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);
       if($query_run)
       {

        if( $file==NULL)
        {
            $_SESSION['succcess'] = "Your Data is Updated with exsisting image";
            header('Location: faculties.php');
        }
        else{
            move_uploaded_file($_FILES['edit_image']['tmp_name'],"./upload/$file");
            $_SESSION['succcess'] = "Your Data is Updated";
            header('Location: faculties.php');
        }
        
       }
       else
       {
           $_SESSION['status'] = "Your Data is NOT Updated";
           header('Location: faculties.php'); 
       }
   }
   
//delete faculty
if(isset($_POST['delete-btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM faculty WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        header('Location: faculties.php'); 
    }
    else
    {
        $_SESSION['success'] = "Your Data is NOT DELETED"; 
        header('Location:faculties.php'); 
    }    
}


//gallary insert
if(isset($_POST['register_btn']))
{
    $file= $_FILES['image']['name'];
 
    


            $query = "INSERT INTO gallery (`PHOTO`) VALUES ('$file')";
            $query_run = mysqli_query($connection, $query);
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES['image']['tmp_name'],"./upload/$file");
                $_SESSION['success'] = "Photo Added";
                header('Location: gallary.php');
            }
            else 
            {
                $_SESSION['status'] = "Photo not Added";
                header('Location: gallary.php');  
            }
        
       
        }  


         //update gallaery
if(isset($_POST['updatebutn']))
{
    $id = $_POST['edit_id'];
    $file2= $_FILES['edit_image']['name'];  
   
    
    $update_query="SELECT * FROM gallery WHERE ID='$id'";
       

    $update_query_run=mysqli_query($connection,$update_query);
    foreach($update_query_run as $fa_row)
    {
     //    echo $fa_row['images'];
     if( $file2==NULL)
     {
         $image_data2=$fa_row['PHOTO'];
     }
     else{
         if($img_path="upload/".$fa_row['PHOTO'])
         {
             unlink($img_path);
             $image_data2=$file2;
         }
         
     }
    }
    $query = "UPDATE gallery SET PHOTO='$image_data2' WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {

        if( $file2==NULL)
        {
            $_SESSION['succcess'] = "Your Data is Updated with exsisting image";
            header('Location: gallary.php');
        }
        else{
            move_uploaded_file($_FILES['edit_image']['tmp_name'],"./upload/$file");
            $_SESSION['succcess'] = "Your Data is Updated";
            header('Location:gallary.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: gallary.php'); 
    }
}

//delete gallery
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM gallery WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        header('Location: gallary.php'); 
    }
    else
    {
        $_SESSION['success'] = "Your Data is NOT DELETED"; 
        header('Location: gallary.php'); 
    }    
}


// WINNER NAME INSERTION
if(isset($_POST['add_winner'])){

    
    $query="SELECT * FROM hod ORDER BY ID DESC ";
    $query_run=mysqli_query($connection,$query);

    if(mysqli_num_rows($query_run)>0)
    {
     $i=0; 
      while($row=mysqli_fetch_assoc($query_run))
      {
       if($i==1){
         break;
       }
       $msg=explode(',', $row['COMP_NAMES']);
          

    $name=$_POST['name'];
    $comp1=$msg[0];
    $win1=$_POST['winner1']."(".$_POST['branchyear'].")";
    $comp2=$msg[1];
    $win2=$_POST['winner2']."(".$_POST['branchyear2'].")";
    $comp3=$msg[2];
    $win3=$_POST['winner3']."(".$_POST['branchyear3'].")";
    $comp4=$msg[3];
    $win4=$_POST['winner4']."(".$_POST['branchyear4'].")";
    
    $query="INSERT INTO winner(`ENAME`, `COMP1`, `WIN1`, `COMP2`, `WIN2`, `COMP3`, `WIN3`, `COMP4`, `WIN4`) VALUES('yoga','$comp1','$win1','$comp2','$win2','$comp3','$win3','$comp4','$win4')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
     
        $_SESSION['success']=" Winners added";
        header('Location: ../src/index.php');
    }
    else{
        // $_SESSION['success']="faculty not added";
        // header('Location:faculties.php');
    }


              $i++;
       }

     }
     else{
       echo "not found";
     }
    
}

// insert comp
if(isset($_POST['topic'])){

    $name=$_POST['name'];
    $email=$_POST['mail'];
    $comp1=$_POST['comp1_1'].",".$_POST['comp1_2'];
    $comp2=$_POST['comp2_1'].",".$_POST['comp2_2'];
    $comp3=$_POST['comp3_1'].",".$_POST['comp3_2'];
    $comp4=$_POST['comp4_1'].",".$_POST['comp4_2'];
   
    $query="INSERT INTO cr(`NAME`,`EMAIL`,`COMP1`,`COMP2`,`COMP3`,`COMP4`) VALUES('$name','$email','$comp1','$comp2','$comp3','$comp4')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        header('Location: Volunteer.php');
    }
    else{
        header('Location:../src/Index.php');
    }
}
//volunteer insert
if(isset($_POST['Volunteer'])){

    $email3=$_POST['mail'];
    $vol1=$_POST['vol1'];
    $vol2=$_POST['vol2'];  
    $branch_year=$_POST['Branch']."(".$_POST['Year'].")";  
    $query="UPDATE cr SET VOLUNTEER1='$vol1', VOLUNTEER2='$vol2', Bry='$branch_year' WHERE EMAIL='$email3' ";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        header('Location: popmsg.php');
    }
    else{
        header('Location:../src/index.php');
    }
}

// insert event
if(isset($_POST['event_btn'])){

    $name=$_POST['event_name'];
    $edate=$_POST['event_date'];
    $odate=$_POST['organized_date'];
    $time=$_POST['time'];
    $venue=$_POST['venue'];
    $acomp=$_POST['allowed_comp'];
   
    $query="INSERT INTO hod(`EVENT_NAME`,`ACTUAL_DATE`,`ORGANIZED_DATE`,`NO_OF_COMP`,`VENUE`,`TIME`) VALUES('$name','$edate','$odate','$acomp','$venue','$time')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        header('Location: ./hod_form_ds/hod_form.php');
    }
    else{
        header('Location:../src/Index.php');
    }
}


//insert
if(isset($_POST['chk1']))
{ 
  $txt_event_name = $_POST['ename'];
  $comp1 = $_POST['chk'];
  foreach($comp1 as $item)
  {
    echo $item;
  }
  $str = implode(",",$comp1);
  $query="UPDATE hod SET COMP_NAMES='$str' WHERE EVENT_NAME='$txt_event_name' ";
     
  $query_run=mysqli_query($connection,$query);
  if($query_run)
  {
    
    // shell_exec("mail_cr.py");
    header('Location:./hod.php');
  }
  else{
      header('Location:../src/Index.php');
  }
}
?>