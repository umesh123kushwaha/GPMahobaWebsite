<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'staff/category/index';?>">Categories</a></li>
              <li class="breadcrumb-item active">Create New Category</li>
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
                  		Create New Category
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="categoryForm" id="categoryForm" method="post" enctype="multipart/form-data"action="<?php echo base_url().'staff/category/create';?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                 			<label>Name</label>
                 			<input type="text" name="name" value="<?php echo set_value('name'); ?>" id="name" class="form-control <?php echo (form_error('name') != "")?'is-invalid':'';?>">
                      <?php echo form_error('name');?>
                 		</div>
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                 		</div>
                    <div class="form-group">
                      <div class="custom-control custom-radio float-left">
                         
                          <input class="custom-control-input" value="1" type="radio" id="statusActive" name="status" checked="" >
                          <label for="statusActive" class="custom-control-label">Active</label>
                      </div>
                      <div class="custom-control custom-radio float-left ml-3">
                         
                          <input class="custom-control-input" value="0" type="radio" id="statusBlock" name="status" >
                          <label for="statusBlock" class="custom-control-label">Block</label>
                      </div>
                    </div>
                      
                 	
                 </div>
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'staff/category/index';?>">Back</a>
                   
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


<?php $this->load->view('staff/footer')?>