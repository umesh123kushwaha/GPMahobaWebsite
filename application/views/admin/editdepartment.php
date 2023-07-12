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
              <li class="breadcrumb-item active">Edit Department</li>
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
                  		Edit  Department
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="gallaryform" id="gallaryform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admins/department/edit_department/'.$department['id'];?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                 			<label>Department Name</label>
                 			<input type="text" name="department_name" value="<?php echo set_value('department_name',$department['department_name']); ?>" id="department_name" class="form-control <?php echo (form_error('department_name') != "")?'is-invalid':'';?>" placeholder="Enter Department Name">
                      <?php echo form_error('department_name');?>
                 		</div>
                    <div class="form-group">
                      <label>About</label>
                      <textarea name="about" id="about" class="textarea"><?php echo set_value('about',$department['about']);?></textarea>
                      
                    </div>
                     <div class="form-group">
                      <label>Vision</label>
                      <textarea name="vision" id="vision" class="textarea"><?php echo set_value('vison',$department['vision']);?></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      <label>Mission</label>
                      <textarea name="mission" id="mission" class="textarea"><?php echo set_value('mission',$department['mission']);?></textarea>
                      
                    </div>
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                 		</div>
                    <?php if (!empty($department['department_pic'])&& file_exists('./assests/uploads/department/'.$department['department_pic'])): ?>
                      <img src="<?php echo base_url().'assests/uploads/department/'.$department['department_pic'] ?>">
                    <?php endif ?>
                   
                      
                 	
                 </div>
                 <div class="card-footer">
                  <input type="hidden" name="department_id" value="<?php echo $department['id'] ?>">
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