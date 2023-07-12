    <!-- /.content -->
    <style>
.col-lg-3.attendance_div_red {
    padding: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    background: #f44336;
    border: 10px solid white;
    text-align: center;
    color: #fff;
    border-radius: 30px;
    box-shadow: 1px 1px 1px grey;
    margin-top: 10px;
    margin-bottom: 10px;
}
.col-lg-3.attendance_div_green {
    padding: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    background: #388e3c;
    border: 10px solid white;
    text-align: center;
    color: #fff;
    border-radius: 30px;
    box-shadow: 1px 1px 1px grey;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>

<?php $this->load->view('students/header'); ?>
       <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                
Attendance Data

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('students/deshboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Attandance</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                    <div class="row">
              <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Attendance</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <div class="row">
                    
                    
                       
                        <div class="col-lg-3 attendance_div_green">
                            <b>Date : Sept. 15, 2020</b>
                            <br>
                            <b>[ Status : Present ]</b>
                        </div>
                        
                    
                       
                        <div class="col-lg-3 attendance_div_green">
                            <b>Date : Sept. 16, 2020</b>
                            <br>
                            <b>[ Status : Present ]</b>
                        </div>
                        
                    
                       
                        <div class="col-lg-3 attendance_div_green">
                            <b>Date : Sept. 24, 2020</b>
                            <br>
                            <b>[ Status : Present ]</b>
                        </div>
                        
                    
                       
                        <div class="col-lg-3 attendance_div_red">
                            <b>Date : Sept. 22, 2020</b>
                            <br>
                            <b>[ Status : Absent ]</b>
                        </div>
                        
                    
                       
                        <div class="col-lg-3 attendance_div_green">
                            <b>Date : Sept. 23, 2020</b>
                            <br>
                            <b>[ Status : Present ]</b>
                        </div>
                        
                    
                       
                        <div class="col-lg-3 attendance_div_green">
                            <b>Date : Sept. 21, 2020</b>
                            <br>
                            <b>[ Status : Present ]</b>
                        </div>
                        
                    
                    
                    </div>
                </div>
            <!-- /.card -->



          </div>
          </div>
      </div>
    </div>
  </section>
    <!-- /.content -->

    <!-- /.content -->
<?php $this->load->view('students/footer'); ?>