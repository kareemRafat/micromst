<?php

 include "../admin/function/connect.php";


$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$mobile   = $_POST['mobile'];
$message  = $_POST['message'];
$date     = date("Y-m-d H:m:s");


$select_mes  = "SELECT * FROM contact WHERE message = '$message' && full_name = '$fullname'";
$result_mes  = $connect->query($select_mes);
$count       = $result_mes->num_rows;


if(empty($fullname) || empty($email) || empty($mobile) || empty($message)) {
  echo "2";

  }elseif ($count > 0) {
    echo "4";

}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  // email validation code , filter validate email
    echo "3";

}else{

  $insert_message = "INSERT INTO contact (
                full_name,email,mobile,message,M_date)
          VALUES ('$fullname','$email','$mobile','$message','$date')";
  $connect->query($insert_message);
  echo " 1";


}








 ?>
