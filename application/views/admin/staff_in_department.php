<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Staff In Department</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/department';?>">Department</a></li>
              <li class="breadcrumb-item active">Add Staff In Department</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row ">
           <div class="col-lg-12 ">
            <div class="card card-primary">
	            
                  <div class="card-header">
                  	<div class="card-title">
                  		Add Staff In Department
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="gallaryform" id="gallaryform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admins/department/add_staff_in_department';?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                 			<label>Department Name</label>
                 			<select  name="department_id" id="department_id" class="form-control <?php echo (form_error('department_id') != "")?'is-invalid':'';?>">
                        <option>------Select Department-------</option>
                        <?php foreach ($departments as $department): ?>
                          <option value="<?php echo $department['id'] ?>"><?php echo $department['department_name'] ?></option>
                          
                        <?php endforeach ?>
                      </select>
                      <?php echo form_error('department_id');?>
                 		</div>

                    <div class="form-group">
                      <label>Staff</label>
                      <select  name="staff_id" id="department_name" class="form-control <?php echo (form_error('staff_id') != "")?'is-invalid':'';?>">
                        <option>------Select staff-------</option>
                        <?php foreach ($staffs as $staff): ?>
                          <option value="<?php echo $staff['id'] ?>"><?php echo $staff['staff_name'] ?></option>
                          
                        <?php endforeach ?>
                      </select>
                      <?php echo form_error('staff_id');?>
                    </div>

                    <div class="form-group">
                      <label>Type</label>
                      <select  name="staff_type" id="department_name" class="form-control <?php echo (form_error('staff_type') != "")?'is-invalid':'';?>">
                        <option>------Select Staff type-------</option>
                        <?php foreach ($staff_type as $type): ?>
                          <option value="<?php echo $type['id'] ?>"><?php echo $type['staff_type'] ?></option>
                          
                        <?php endforeach ?>
                      </select>
                      <?php echo form_error('staff_type');?>
                    </div>

                    
                 		
                 	
                   
                      
                 	
                 </div>
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'admins/department';?>">Back</a>
                   
                 </div>

                 </form>

           <!-- /.card -->
          </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>


<?php $this->load->view('admin/footer')?>
<script type="text/javascript">
   
    
  </script>