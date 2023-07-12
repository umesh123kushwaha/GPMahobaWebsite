<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta  htpp-equiv="Pragma" content="no-cache"> <meta http-equiv="Expires" content="-1" >


  <title>Government Polytechnic Mahoba || Admin Penel</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/dist/css/adminlte.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assests/admin/dist/css/custom1.css">
  <script src="<?php echo base_url()?>assests/admin/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
     <div class="nam-item">
       <a class="nav-link btn" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars float-left"></i></a>
     </div>

    <!-- SEARCH FORM -->
    
    <div class="font-italic text-gray-dark font-weight-bold"> Governmemnt Polytechnic Mahoba ||Admin Penel</div>
    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Welcome Admin  <i class="fas fa-cog"></i>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url().'admin/logout';?>" class="dropdown-item">
           <i class="fas fa-power-off"></i> &nbsp;&nbsp; Logout
          </a>
          
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class=" info text-center">
       <a href="<?php echo base_url() ?>" class="brand-link  ">
      <img src="<?php echo base_url('assests/front/images/photo/logo.png') ?>" class="eleivation-2  " width="150px" style=" align-content: center; align-items: center;">
      
     
      
     
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php //echo base_url('assests/UserPics/'.$userdata['MyFileName']) ?>" class="img-circle elevation-2" alt="User Image" width="100%" height="">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>


   
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/';?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
             
          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='exams') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
               Principal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/addprincipal';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addprincipal') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Principal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/principal';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='principals') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Principal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='exams') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
               Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/addstaff';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addstaff') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/staffs';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewstaff') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Staff</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='subjects') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
               HOD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/subjects/add_subject';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addCategory') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Hod</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/subjects';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewCategory') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Hod</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview   <?php echo (!empty($main_Module) && $main_Module =='notification') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-bell nav-icon"></i>
              <p>
               Notification
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview px-2">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/add_notification';?>" class="nav-link  <?php echo (!empty($sub_Module) && $sub_Module =='addnotification') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Notification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/notifications';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='mnage_notification') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Manage Notification</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview   <?php echo (!empty($main_Module) && $main_Module =='gallary') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Gallry
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview px-2">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/addGallaryImage';?>" class="nav-link  <?php echo (!empty($sub_Module) && $sub_Module =='addgallary') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/gallary';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='gallary') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Gallary Images</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview   <?php echo (!empty($main_Module) && $main_Module =='department') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Department
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview px-2">
              <li class="nav-item">
                <a href="<?php echo base_url().'admins/department/create_new_department';?>" class="nav-link  <?php echo (!empty($sub_Module) && $sub_Module =='create_new_department') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admins/department/index';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='gallary') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Manage Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admins/department/add_staff_in_department';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='add_staff_in_department') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff In Department</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admins/department/department_slider';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='department_slider') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider In Department</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          
          
          



          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='category') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/category/create';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addCategory') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/category';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewCategory') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>About us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/category';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewCategory') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>About us</p>
                </a>
              </li>
              
            </ul>
          </li>
          



          <li class="nav-item has-treeview  <?php echo (!empty($mainModule) && $mainModule=='article')? 'menu-open':'' ?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Article
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/article/create';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addArticle') ? 'active':'' ;?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Article</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?php echo base_url().'admin/article';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewArticle') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Article</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">