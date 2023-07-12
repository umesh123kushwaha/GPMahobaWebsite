<?php $this->load->view('students/header'); ?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                
Leave Report and Apply for Leave

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('students/deshboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Student Leave</li>
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
                <h3 class="card-title">Apply for Leave</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="<?php echo base_url('students/student_leave/') ?>student_apply_leave_save" method="post">
                <div class="card-body">

                   <div class="form-group">
                    <label>Leave Date </label>
                       
                    <input type="date" name="leave_date" value="<?php echo set_value('leave_date') ?>" class="form-control  <?php echo (form_error('leave_date')!="")?'is-invalid':''; ?>" placeholder="Leave Date">
                     <?php echo form_error('leave_date'); ?>
                  </div>

                  <div class="form-group">
                    <label>Leave Reason</label>
                    <textarea class="form-control <?php echo (form_error('leave_msg')!="")?'is-invalid':''; ?>" rows="6" name="leave_msg"> <?php echo set_value('leave_msg') ?></textarea>
                    <?php echo form_error('leave_msg'); ?>
                  </div>
                   <div class="form-group">
                      
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block" id="fetch_student">Apply for Leave</button>
                </div>
               </form>
               <?php  if ($this->session->flashdata('success')) 
               {?>
                    <div class=" alert alert-success">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                  <?php 
                }

                if (!empty($this->session->flashdata('fail')))
                 { ?>
                   <div class=" alert alert-success">
                          <?php echo $this->session->flashdata('fail'); ?>
                        </div>
                    <?php  # code...
                   } ; ?>
            </div>

            <!-- /.card -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Leave Apply History</h3>
              </div>

               <div class="table">
               <table class="table">
                   <tr>
                       <th>ID</th>
                       <th>Leave Date</th>
                       <th>Leave Message</th>
                       <th>Leave Status</th>
                   </tr>
                   
                        <tr>
                            <td>1</td>
                            <td>2020-09-04</td>
                            <td>This is leave application</td>
                            <td>
                                
                                    <span class="alert alert-success">Approved</span>
                                
                            </td>
                        </tr>
                   
               </table>
               </div>
            </div>



          </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
<?php $this->load->view('students/footer'); ?>