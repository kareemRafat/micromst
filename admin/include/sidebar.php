


    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['id'];?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>


<!--           <li class="nav-item active">
        <a class="nav-link" href="product.php">
          <i class="fab fa-product-hunt"></i>
          <span>Products</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="category.php">
          <i class="fa fa-list-alt"></i>
          <span>Categories</span></a>
        </li>
 -->
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Interface
        </div>

        <!-- Nav users - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-user-tie"></i>
            <span>Users</span>
          </a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <!-- <h6 class="collapse-header">Admins and Users:</h6> -->
              <a class="collapse-item" href="admin.php">Admins</a>
              <a class="collapse-item" href="certificate.php">Certificate</a>

            </div>
          </div>
        </li>

        <!-- Nav products - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>PCB & ContactUS</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">PCB & ContactUS:</h6>
              <a class="collapse-item" href="pcb.php">PCB</a>
              <a class="collapse-item" href="message.php">Contact us Messages</a>
            </div>
          </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">



          </ul>
          <!-- End of Sidebar
