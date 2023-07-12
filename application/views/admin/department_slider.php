<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Department</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/department';?>">Department</a></li>
              <li class="breadcrumb-item active">Add Department Slider Images</li>
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
                  		Add Department Slider  Images
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="gallaryform" id="gallaryform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admins/department/department_slider';?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                      <label>Department Name</label>
                      <select  name="department_id" id="department_id" class="form-control <?php echo (form_error('department_id') != "")?'is-invalid':'';?>">
                        <option value="">------Select Department-------</option>
                        <?php foreach ($departments as $department): ?>
                          <option value="<?php echo $department['id'] ?>"><?php echo $department['department_name'] ?></option>
                          
                        <?php endforeach ?>
                      </select>
                      <?php echo form_error('department_id');?>
                    </div>
                    <div class="gorm-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control <?php echo (form_error('title')!="")?'is-invalid':'' ?>" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label>description</label>
                      <textarea name="description" id="description" class="textarea"><?php echo set_value('description');?></textarea>
                      
                    </div>
                    
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)||form_error('image')!="") ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                      <?php echo form_error('image') ?>
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
    $(document).ready(function(){
      $('.textarea').summernote({

        height: "300px",
        callbacks: {
              onImageUpload: function(image) {
                 var id= $(this).attr('id');
                  uploadImage(image[0],id);
              },
              onMediaDelete : function(target) {
                  deleteImage(target[0].src);
              }
        }
      });

      function uploadImage(image,id) {
          var data = new FormData();
         
          data.append("image", image);
          $.ajax({
              url: "<?php echo base_url() ?>/admins/department/department_upload_image",
              cache: false,
              contentType: false,
              processData: false,
              data: data,
              type: "POST",
              success: function(url) {
               
            $('#'+id).summernote("insertImage", url);
              },
              error: function(data) {
                  console.log(data);
              }
          });
      }

      function deleteImage(src) {
        
          $.ajax({
              data: {src : src},
              type: "POST",
              url: "<?php echo base_url() ?>/admins/department/department_delete_image",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }

    });
    
  </script>
<script type="text/javascript">
   
    
  </script>