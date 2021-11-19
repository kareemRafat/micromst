<?php
include "../admin/function/connect.php";

$certificate_code = $_POST['certificate'];

$select_cert = "SELECT * FROM certificate WHERE certificate_code = '$certificate_code'";
$result_cert = $connect->query($select_cert);
$row_cert    = $result_cert->fetch_assoc();
$counter     = $result_cert->num_rows;

if($counter > 0 ){ ?>

<div style="box-shadow: 7px 3px 7px #d4d4d4;" class="row">
  <div style="
  border: 1px solid black;
  display: block;
  padding: 14px;
  background-color: #e47559;
  color: white;
  font-size: 21px;
  text-align: left;" class="valid_cert col-lg-12">
    <img style="width: 121px;" src="img/certification-complete.png" alt="Certificate-Verified" class="img-fluid">Valid certificate
  </div>
  <br><br><br>
  <div style="border: 1px solid black;
        display: block;
        padding: 44px;
        font-size: 21px;
        text-align: left;
        height: 123px;" class="returninfo col-lg-12">
     <span style="color:red"><?php echo $row_cert['full_name'] ?></span>  succeeded in completing the basics of <span style="color:#28a745"><?php echo $row_cert['track_name']; ?></span> Track on <?php echo $row_cert['CE_date'];  ?>
  </div>

<?php }elseif (empty($certificate_code)) {?>

  <div style="box-shadow: 7px 3px 7px #d4d4d4;
  border: 1px solid black;
  display: block;
  padding: 14px;
  background-color: #e47559;
  color: white;
  font-size: 21px;
  text-align: left;" class="valid_cert col-lg-12">
    <img style="width: 121px;" src="img/certification-complete.png" alt="Certificate-Verified" class="img-fluid">Insert certificate Code
  </div>

<?php
}else{
   ?>
  <div style="box-shadow: 7px 3px 7px #d4d4d4;
  border: 1px solid black;
  display: block;
  padding: 14px;
  background-color: #e47559;
  color: white;
  font-size: 21px;
  text-align: left;" class="valid_cert col-lg-12">
    <img style="width: 121px;" src="img/certification-complete.png" alt="Certificate-Verified" class="img-fluid">Invalid certificate
  </div>
</div>
  <?php
} ?>
