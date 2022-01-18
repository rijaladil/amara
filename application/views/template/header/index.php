<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMC Smart System</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/ico.png" type="image/gif">


 
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>">
        <div class="sidebar-brand-icon"> <img  src="<?php echo base_url(); ?>assets/img/ico.png" width="100em"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Dashboard/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        APP
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- MARKETING -->
      
<?php if ( (in_array($this->session->userdata('level'), array(0,1,2,3,4,5))) ) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Marketing</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?php echo base_url();?>index.php/Prospective_Client/">Clients</a>
          <a class="collapse-item" href="<?php echo base_url();?>index.php/Client_Process/">Clients Process</a>
          <!-- <a class="collapse-item" href="<?php echo base_url();?>index.php/Client/">Clients</a> -->
          <a class="collapse-item" href="<?php echo base_url();?>index.php/tender/">Tender Recapitulation</a>
          <?php if ( (in_array($this->session->userdata('level'), array(0,1,2))) ) { ?>
          <a class="collapse-item" href="<?php echo base_url();?>index.php/Vendor/">Vendor</a>
          <a class="collapse-item" href="<?php echo base_url();?>index.php/price/">Unit Price</a>    
           <?php }?>    
          </div>
          
          

        </div>
      </li>
     
    <!-- ADMINISTRASI -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>Administration</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <a class="collapse-item" href="#">Contract</a> -->
            <a class="collapse-item" href="<?php echo base_url();?>index.php/recapitulation/">Recapitulation Project</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/project/">Project</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/work/">Working Report</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/payment/">Payment</a>
          </div>
        </div>
      </li>


      <!-- TEKNIS -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Teknik</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>index.php/TeknikAmdal">Amdal</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/TeknikPertek">Pertek</a>
          </div>
        </div>
      </li>

      <!-- KEUANGAN -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-university"></i>
          <span>Finance</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>index.php/finance/">Invoice</a>
          </div>
        </div>
      </li>

<?php } ?>
      <!-- Nav Item - Utilities Collapse Menu -->
<?php if ( (in_array($this->session->userdata('level'), array(1))) ) { ?>  
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- LOG PEKERJAAN -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Setting</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom:</h6> -->
            <a class="collapse-item" href="<?php echo base_url();?>index.php/user/">User</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/product/">Product</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/sector/">Sector</a>
          </div>
        </div>
      </li>
<?php } ?>

<?php if ( (in_array($this->session->userdata('level'), array(0,1,2,3,4,5))) ) { ?>  
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- LAMAN CUSTOMER -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiy" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Customer</span>
        </a>
        <div id="collapseSiy" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom:</h6> -->
            <!-- <a class="collapse-item" href="<?php echo base_url();?>index.php/customer/">Info</a> -->
          </div>
        </div>
      </li>
<?php } ?>
    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


      