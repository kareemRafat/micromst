<?php

$pagetitle = "Admin";

include "include/header.php";



ob_start();
session_start();

include "function/connect.php";

if(isset($_SESSION['id'])){   ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include "include/sidebar.php";  ?>

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
<?php include "include/navbar.php";  ?>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Admin</h1>

                </div>

                <!-- Content Row -->
<?php

include 'include/count.php';

?>

                <!-- Content Row -->

                <div  style="padding-left: 20px;padding-right: 20px; display: block;" class="row">


                     <?php

        if(!isset($_GET['do'])){ ?>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">

                    <a  href="?do=add" class="btn btn-primary  "> <i class="fas fa-user-plus"></i>      Add Admin </a> <br>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive" style="padding-right: 20px;">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Control</th>
                          </tr>
                        </thead>
                  <tbody>
                    <?php
                    $select_user = "SELECT * FROM admin";
                    $result_user = $connect->query($select_user);
                    foreach ($result_user as $row_user) {
                    ?>
                    <tr>
                      <th scope="row"><?php echo $row_user['id']?></th>
                      <td><?php echo $row_user['username']?></td>
                      <td><?php echo $row_user['email']?></td>
                      <td><?php echo $row_user['phone']?></td>
                      <td >
                        <a href="?do=edit&id=<?php echo $row_user['id'];?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit </a>

                <!--         <a href="?do=delete&id=<?php echo $row_user['id'];?>" class="btn btn-danger"> Delete </a> -->
                        <!-- delete model  -->
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal<?php echo $row_user['username']  ?>">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $row_user['username']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       are you sure you want delete <span style="color:red;"> <?php echo $row_user['username']  ?></span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class='btn btn-danger' href="?do=delete&id=<?php echo $row_user['id']?>">Confirm</a>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end delete model  -->



                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
<?php



              }elseif($_GET['do'] == 'add'){
                  ?>
                  <!-- the table of add page -->



                  <form action="?do=insert" method="post">
                    <br>
                    <div class="col-sm-12">
                      <label>username :</label>
                      <input type="text" name="username" class="form-control" >
                    </div>
                    <br>
                    <div class="col-sm-12">
                      <label>password :</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <br>
                    <div class="col-sm-12">
                      <label>email :</label>
                      <input type="email" name="email" class="form-control" >
                    </div>
                    <br>
                    <div class="col-sm-12">
                      <label>phone :</label>
                      <input type="text" name="phone" class="form-control" >
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-12">
                      <input  class="btn btn-primary" type="submit" name="submit">
                    </div>
                      <br>
                      <br>
                  </form>





<?php
              }elseif($_GET['do'] == "insert"){



                $username = $_POST['username'];
                //to check the password for validate the form
                $password =$_POST['password'];
                //to send the hashed password to database
                $hashpass  =  md5($_POST['password']);
                $email = $_POST['email'];
                $phone = $_POST['phone'];


                  // validate the form
                $formerrors =  array();
              if(empty($username)){
                $formerrors[]= "username can`t be empty ";
              }
              if(empty($password)){
                $formerrors[]= "password can`t be empty ";
              }
              if(empty($email)){
                $formerrors[]= "email can`t be empty ";
              }
              if(empty($phone)){
                $formerrors[]= "phone can`t be empty ";
              }

            foreach ($formerrors as $error) {
              echo "<div  class='alert alert-danger' role='alert'>". $error . '</div>' ;
              header( "refresh:3;url=admin.php" );
          
            }

            if(empty($formerrors)){

          $insert_user = "INSERT INTO admin (username,password,email,phone)
             VALUES
              ('$username','$hashpass','$email','$phone')";
             $connect->query($insert_user);
              header("location:admin.php");
            }

?>
<?php
              }elseif($_GET['do'] == 'edit'){
                $id = $_GET['id'];
                $select_usr = "SELECT * FROM admin WHERE id = $id";
                $result_usr = $connect->query($select_usr);
                $row_usr    = $result_usr->fetch_assoc();
            ?>
                  <!-- the table of edit page -->
                  <form style="padding-left: 20px;padding-right: 20px;"  action="?do=edit_admin" method="post">
                  <label>edit user id #  <STRONG> <span style="color: red;"><?php echo $row_usr['id']?></span></STRONG></label>
                    <br>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row_usr['id']?>" >
                    <br>
                    <label>username :</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $row_usr['username']?>" >
                    <br>
                    <label>password :</label>
                    <input type="password" name="password" class="form-control passinput"  placeholder="Insert Password if You want to Change it">

                    <br>
                    <label>email :</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row_usr['email']?>" >
                    <br>
                    <label>phone :</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $row_usr['phone']?>">
                    <br>


                    </select>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit">
                      <br>
                      <br>
                  </form>

<?php



            }elseif($_GET['do'] == 'edit_admin'){
                $id       = $_POST['id'];
                $username = $_POST['username'];
                //to check the password for validate the form
                $password = $_POST['password'];
                //to send the hashed password to database
                $hashpass  = md5($_POST['password']);
                $email = $_POST['email'];
                $phone = $_POST['phone'];


                  $editerrors =  array();
                if(empty($username)){
                  $editerrors[]= "username can`t be empty ";
                }
                if(empty($email)){
                  $editerrors[]= "email can`t be empty ";
                }
                if(empty($phone)){
                  $editerrors[]= "phone can`t be empty ";
                }

                foreach ($editerrors as $error) {
                echo "<div  class='alert alert-danger' role='alert'>". $error . '</div>' ;
                header( "refresh:3;url=admin.php" );

                }

                if(empty($editerrors)){

                  $update_user = "UPDATE admin SET username = '$username' , email = '$email' , phone = '$phone',  WHERE id = $id ";
                    $connect->query($update_user);
                    header("location:admin.php");
                }

                if(!empty($password)){
                  $update_admin = "UPDATE admin SET password = '$hashpass'  WHERE id = $id ";
                    $connect->query($update_admin);
                    header("location:admin.php");
                }


                }elseif($_GET['do'] == 'delete'){
                $id = $_GET['id'];

                $del_admin = "DELETE FROM admin WHERE id = $id ";
                $connect->query($del_admin);
                header("location:admin.php");



            }
 ?>



                </div>

                <!-- Content Row -->
                <div class="row">


                </div>

              </div>
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php

include "include/footer.php";
?>


          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

<?php

}else{

 header("location:login.php");

}

ob_end_flush();
