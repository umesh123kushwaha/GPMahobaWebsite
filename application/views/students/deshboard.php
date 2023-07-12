<?php $this->load->view('students/header'); ?>
 
 
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid ">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fa fa-home"></i> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('students/deshboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">deshboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header --> 

    <!-- Main content -->

    <div class="content">
       <div class="row ">
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info ">
              <div class="inner">
                <h5>View Attendance</h5>

               
              </div>
              <div class="icon p-3">
                <i class="fas fa-calendar"></i>
              </div>
              <a href="<?php echo base_url('students/attendance') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success ">
              <div class="inner">
               <h5>Apply for Leave</h5>

               
              </div>
              <div class="icon p-3">
                <i class="far fa-newspaper"></i>
              </div>
              <a href="<?php echo base_url('students/student_leave') ?>" class="small-box-footer">
                 Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
               <h5> Feedbacks</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fab fa-feedback"></i>
               
              </div>
              <a href="#" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Grace Card</h5>

               
              </div>
              <div class="icon p-3">
                <i class="fas fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Result</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-desktop"></i>
              </div>
              <a href="<?php echo base_url('students/testseries') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Task</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-desktop"></i>
              </div>
              <a href="<?php echo base_url('students/testseries') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

           <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Assignment</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-desktop"></i>
              </div>
              <a href="<?php echo base_url('students/testseries') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          
           <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-lime">
              <div class="inner">
                <h5>Online Quiz</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-clock"></i>
              </div>
              <a href="#" class="small-box-footer">
               Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      
    </div>
    
    
 
  <?php $this->load->view('students/footer'); ?>

