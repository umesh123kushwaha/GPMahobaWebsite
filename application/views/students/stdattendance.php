<?php $this->load->view('students/header'); ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                
View Attendance Data

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/student_home">Home</a></li>
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
             <form action="<?php echo base_url('students/attendance') ?>/student_view_attendance" method="post">
                <div class="card-body">
                   
                   <div class="form-group">
                    <label>Subject </label>
                    <select class="form-control" name="subject" id="subject">
                        
                          <option value="1">java</option>
                        
                          <option value="2">DBMS</option>
                        
                    </select>
                  </div>
                  <div class="row">
                  <div class="col-lg-6">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control" placeholder="Start Date">
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control" placeholder="End Date">
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                      
                    </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block" id="fetch_student">Fetch Attendance</button>
                </div>

                <div id="student_data" class="card-footer">

                </div>
            </div>
             </form>
            <!-- /.card -->



          </div>
          </div>
      </div>
    </section>

    <!-- /.content -->
<?php $this->load->view('students/footer'); ?>