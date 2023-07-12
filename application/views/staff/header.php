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


  <title>Government Polytechnic Mahoba || Staff Pennal </title>

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
     <div class="font-italic text-gray-dark font-weight-bold"> Governmemnt Polytechnic Mahoba ||Staff Penel</div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Welcome Admin  <i class="fas fa-sun"></i>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url().'login/logout';?>" class="dropdown-item">
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
       <a href="<?php echo base_url('admin/home') ?>" class="brand-link  ">
      <img src="<?php echo base_url('assests/front/images/photo/logo.png') ?>" class="eleivation-2  " width="150px" style=" align-content: center; align-items: center;">
      
    </a>
    </div>
      <?php $userdata= $this->session->userdata('staff'); ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assests/uploads/staff/'.$userdata['staff_pic']) ?>" class="img-circle elevation-2" alt="User Image" width="100%" height="">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $userdata['staff_name'] ?></a>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url().'staff/home';?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
             
     
          <li class="nav-item has-treeview   <?php echo (!empty($main_Module) && $main_Module =='testseries') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Quiz
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview px-2">
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/quiz/new_quiz';?>" class="nav-link  <?php echo (!empty($sub_Module) && $sub_Module =='new_quiz') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Quiz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/quiz';?>" class="nav-link <?php echo (!empty($sub_Module) && $sub_Module =='view_testseries') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Quiz</p>
                </a>
              </li>
              <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='test_series') ? 'menu-open':'' ;?>">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Questions
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview px-2">
                  <li class="nav-item">
                    <a href="<?php echo base_url().'staff/Questions/create_new_question';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='newquestion') ? 'active':'' ;?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create New Question</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url().'staff/questions';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewCategory') ? 'active':'' ;?>">
                     <i class="far fa-circle nav-icon"></i>
                      <p>View Questions</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          



          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='category') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Assignment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/assignment/upload_assignment';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='upload_assignment') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/assignment';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='checkassignment') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Check Assignment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview   <?php echo (!empty($mainModule) && $mainModule =='category') ? 'menu-open':'' ;?>">
            <a href="#" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/category/create';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addCategory') ? 'active':'' ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'staff/category';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewCategory') ? 'active':'' ;?>">
                 <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
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
                <a href="<?php echo base_url().'staff/article/create';?>" class="nav-link  <?php echo (!empty($subModule) && $subModule =='addArticle') ? 'active':'' ;?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Article</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?php echo base_url().'staff/article';?>" class="nav-link <?php echo (!empty($subModule) && $subModule =='viewArticle') ? 'active':'' ;?>">
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