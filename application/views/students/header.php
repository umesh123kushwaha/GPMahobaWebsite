
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

  <title>Governmemnt Polytechnic Mahoba ||Student</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assests/admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assests/admin/') ?>dist/css/adminlte.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url('assests/admin/') ?>dist/css/all.min.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <?php 
    $userdata=$this->session->userdata('userdata');
    $utype=$this->session->userdata('utype');
   ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        
      </li>
      
    </ul>

  <div class="font-italic text-gray-dark font-weight-bold"> Governmemnt Polytechnic Mahoba ||Student Pennel</div>
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">
      <!-- Messages Dropdown Menu -->
      <li> <div class=" ml-auto ">
        <h5 >Hi! <?php echo $userdata['name'] ?></h5>
      </div></li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <div class=" info text-center">
       <a href="<?php echo base_url('') ?>" class="brand-link  ">
      <img src="<?php echo base_url('assests/front/images/photo/logo.png') ?>" class="eleivation-2  " width="150px" style=" align-content: center; align-items: center;">
      
     
      
     
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assests/UserPics/'.$userdata['MyFileName']) ?>" class="img-circle elevation-2" alt="User Image" width="100%" height="">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php 
          echo $userdata['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     
          <li class="nav-item">
            <a href="<?php echo base_url('students/deshboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Deshboard
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('students/student_leave') ?>" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
              Apply For Leave
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
             Feedback
               
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Assignment
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('students/stdQuiz') ?>" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
              Quiz
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('students/stdQuiz/student_quiz_result') ?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
              Result
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
              Notification
               
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link">

             <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Log Out 
               
              </p>
            </a>
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div  class="content-wrapper">
