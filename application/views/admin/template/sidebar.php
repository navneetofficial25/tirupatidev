<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion p-1" id="accordionSidebar"  >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>welcome">
      <div class=" ">
        <img src="admin/assets/images/logo_dark.png">
      </div>
      
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item" >
      <a class="nav-link" href="<?php echo base_url(); ?>welcome" >
        <i class="fas fa-fw fa-tachometer-alt" style="color:white; font-size:1.5rem;"></i>
        <span style="font-size:1.5rem; color:white;">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
  <!--    <hr class="sidebar-divider">

    <! -- Heading -->
    <div class="sidebar-heading" style="font-size:1.5rem; color:white;">
      Home Page
    </div>

    <!-- Nav Item - Charts -->
    
    
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/sitedesc" ><i class="fas fa-fw fa-chart-area" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Site setting</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/brands"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Brands</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/sociallinks"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Social Links</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" style="color:white; font-size:1.3rem;"></i>
        <span style="font-size:1.3rem; color:white;"> Car Insurance</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?php echo base_url(); ?>admin/cardetails" style="font-size:1.3rem; ">Manufacturer</a>
          <a class="collapse-item" href="<?php echo base_url(); ?>admin/cardetails/model" style="font-size:1.3rem; ">Model</a>
          <a class="collapse-item" href="<?php echo base_url(); ?>admin/cardetails/variant" style="font-size:1.3rem;">Varient</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" style="color:white; font-size:1.3rem; hover:red;"></i>
        <span style="font-size:1.3rem; color:white;">Bike Insurance</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a style="font-size:1.3rem; " class="collapse-item" href="<?php echo base_url(); ?>admin/bikedetails">Manufacturer</a>
          <a style="font-size:1.3rem;" class="collapse-item" href="<?php echo base_url(); ?>admin/bikedetails/model">Model</a>
          <a style="font-size:1.3rem; " class="collapse-item" href="<?php echo base_url(); ?>admin/bikedetails/variant">Varient</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading" style="font-size:1.5rem; color:white;">
      User Data
    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/healthdata"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Health Data</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/cardata"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Car Ins Data</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/bikedata"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Bike Ins Data</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Contact Data</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>admin/callbackdata"><i class="fas fa-fw fa-table" style="color:white; font-size:1.3rem;"></i><span style="font-size:1.3rem; color:white;">Callback Data</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    

  </ul>
  <!-- End of Sidebar -->