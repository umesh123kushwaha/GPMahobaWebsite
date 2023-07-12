  <?php $this->load->view('admin/header')?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h5>Manage Principal</h5>

               
              </div>
              <div class="icon p-3">
                <i class="fas fa-calendar"></i>
              </div>
              <a href="<?php echo base_url('admin/principal') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success ">
              <div class="inner">
               <h5>Manage Staff</h5>

               
              </div>
              <div class="icon p-3">
                <i class="far fa-newspaper"></i>
              </div>
              <a href="<?php echo base_url('admin/staffs') ?>" class="small-box-footer">
                 Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
               <h5> Manage HOD</h5>

                
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
                <h5>Manage Notification</h5>

               
              </div>
              <div class="icon p-3">
                 <i class="far fa-bell nav-icon"></i>
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
                <h5>Manage Article</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-desktop"></i>
              </div>
              <a href="<?php echo base_url('admin/articles') ?>" class="small-box-footer">
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
                <h5>Manage Pages</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fas fa-desktop"></i>
              </div>
              <a href="<?php echo base_url('') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
          <div class="small-box bg-warning">
              <div class="inner">
               <h5> Gallary</h5>

                
              </div>
              <div class="icon p-3">
                <i class="fab fa-feedback"></i>
               
              </div>
              <a href="<?php echo base_url('admin/gallary') ?>" class="small-box-footer">
                Go to Section <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            </div>

          
          
          <!-- ./col -->
        </div>
        <!-- /.row -->

      
    </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/footer')?>

 
