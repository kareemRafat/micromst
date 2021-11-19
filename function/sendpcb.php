<?php
 include '../include/header.php';
 include "../admin/function/connect.php";
 ?>
   <a style="display:block" class="navbar-brand text-center" href="#">
     <img src="https://svgshare.com/i/EnF.svg" width="200" height="auto" alt="Logo">
     </a><br>
<div style="margin-left: 26%;margin-right: 18px;" class="row text-center truncate ">
  <?php
  $full_name = $_POST['full_name'];
  $email    = $_POST['email'];
  $mobile   = $_POST['mobile'];
  $message  = $_POST['message'];
  $date     = date("Y-m-d H:m:s");
                $addpcb_errors =  array();
               if(empty($full_name)){
                 $addpcb_errors[]= "fullname can`t be empty ";
               }
               if(empty($email)){
                 $addpcb_errors[]= "Email can`t be empty ";
               }
               if(empty($mobile)){
                 $addpcb_errors[]= "mobile can`t be empty ";
               }
               if(empty($message)){
                 $addpcb_errors[]= "Message can`t be empty ";
               }
              $cv        = $_FILES['cv']['name'];
              $cv_temp   = $_FILES['cv']['tmp_name'];
              $fileerror   = $_FILES['cv']['error'];
              $allowed =  array('pdf');
              $ext = pathinfo($cv, PATHINFO_EXTENSION);
              if($fileerror == 0 ){
                if(!in_array($ext,$allowed) ) {
                  $addpcb_errors[]= "File extension Must be PDF ";
                }else {
                  move_uploaded_file($cv_temp , "../admin/files/$cv");
                }
              }else{
                $addpcb_errors[]= "Must upload Your CV";
              }
              foreach ($addpcb_errors as $error) {
                echo "<div  class=' col-lg-8 col-sm-12 alert alert-danger ' role='alert'>". $error . "</div>" ;
                 header("Refresh:3; url=../pcb.php");
              }
          if(empty($addpcb_errors)){
            $insert_product = "INSERT INTO pcb (full_name,email,mobile,message,cv,P_date)
           VALUES
            ('$full_name','$email','$mobile','$message','$cv','$date')";
           $connect->query($insert_product);
           echo "<div  class=' col-lg-8 col-sm-12 alert alert-success ' role='alert'>Thanks For Contact</div>" ;
            header("Refresh:3; url=../pcb.php");
         } ?>
</div>
