<?php

$pagetitle = "Messages";

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
                  <h1 class="h3 mb-0 text-gray-800">PCB</h1>

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

                    <h4>pcb</h4>
                  </div>
                      <div class="card-body">


                    <div  class="table-responsive tbrsp" style="padding-right: 20px;">
                      <table  class="table " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr class="ttab">
                            <th>id</th>
                            <th>Full name</th>
                            <th>email</th>
                            <th>mobile</th>
                            <th>date</th>
                            <th>CV</th>
                            <th>View</th>
                            <th>control</th>
                          </tr>
                        </thead>
                  <tbody>
                    <?php
                    $select_pcb = "SELECT * FROM pcb ";
                    $result_pcb = $connect->query($select_pcb);
                    foreach ($result_pcb as $row_pcb) {
                      $cv = $row_pcb['cv'];

                    ?>
                    <tr>
                      <th scope="row"><?php echo $row_pcb['id']?></th>
                      <td><?php echo $row_pcb['full_name']?></td>
                      <td><?php echo $row_pcb['email']?></td>
                      <td><?php echo $row_pcb['mobile']?></td>
                      <td><?php echo $row_pcb['P_date']?></td>
                      <td><a href="files/<?php echo $cv ?>">Download File</a> </td>
                      <td class="see"><?php if($row_pcb['view'] == 0 ){echo 'Unseen';}else{echo 'seen';} ?></td>
                      <td >

              <!-- show message model  -->
              <!-- Button trigger modal -->
                <button data_message="<?php echo $row_pcb['id']?>"  type="button" class="btn btn-primary showpcb " data-toggle="modal" data-target="#examplModal<?php echo $row_pcb['id']  ?>">
                    Show message
                </button>

                <!-- Modal -->
                <div class="modal fade" id="examplModal<?php echo $row_pcb['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Message View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div style="border: none;" class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"> <span style="color: red
                        "> subject : </span> <br>
                        <span style="color: blue;">
                          <?php echo $row_pcb['message']  ?> </span></h6>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end show message model  -->


                        <!-- delete model  -->
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal<?php echo $row_pcb['id']  ?>">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $row_pcb['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       are you sure you want delete <span style="color:red;"> <?php echo $row_pcb['full_name'].'\'s' ?></span>  message
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class='btn btn-danger' href="?do=delete&id=<?php echo $row_pcb['id']?>">Confirm</a>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end delete model  -->



                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </div>

                </table>
<?php

                }elseif($_GET['do'] == 'delete'){
                $id = $_GET['id'];

                $del_messag = "DELETE FROM pcb WHERE id = $id ";
                $connect->query($del_messag);
                header("location:pcb.php");



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
