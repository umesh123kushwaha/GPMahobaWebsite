<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gallary</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'gallarylist';?>">Gallary</a></li>
              <li class="breadcrumb-item active">Add New Images</li>
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
                  		Add New Gallary Image
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="gallaryform" id="gallaryform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admin/addGallaryImage';?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                 			<label>Title</label>
                 			<input type="text" name="title" value="<?php echo set_value('title'); ?>" id="title" class="form-control <?php echo (form_error('title') != "")?'is-invalid':'';?>" placeholder="Enter Title">
                      <?php echo form_error('title');?>
                 		</div>
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                 		</div>
                   
                      
                 	
                 </div>
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'admin/category/index';?>">Back</a>
                   
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