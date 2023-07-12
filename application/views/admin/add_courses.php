<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/category/index';?>">Exams</a></li>
              <li class="breadcrumb-item active">Add New Exam Course</li>
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
                  		Add New Exam Course
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="examform" id="examform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admin/exam/add_exams';?>" >
                 <div class="card-body">
                 
                 		<div class="form-group">
                 			<label>Exam Name</label>
                 			<input type="text" name="exam_name" value="<?php echo set_value('exam_name'); ?>" id="exam_name" class="form-control <?php echo (form_error('exam_name') != "")?'is-invalid':'';?>" placeholder="Enter Exam Name">
                      <?php echo form_error('exam_name');?>
                 		</div>
                 		<div class="form-group">
                 			<label>Description</label>
                 			 <textarea  placeholder="Enter Description" class=" textarea form-control <?php echo (form_error('description') != "")?'is-invalid':'';?>" name="description" id="description"><?php echo set_value('descripton'); ?>
                 			 	
                 			 </textarea>
                 			  <?php echo form_error('description');?>
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
    $(document).ready(function(){
      $('.textarea').summernote({
        height: "300px",
        callbacks: {
              onImageUpload: function(image) {
                  uploadImage(image[0]);
              },
              onMediaDelete : function(target) {
                  deleteImage(target[0].src);
              }
        }
      });

      function uploadImage(image) {
          var data = new FormData();
         
          data.append("image", image);
          $.ajax({
              url: "<?php echo site_url('admin/article/upload_image')?>",
              cache: false,
              contentType: false,
              processData: false,
              data: data,
              type: "POST",
              success: function(url) {
                alert(url);
            $('.textarea').summernote("insertImage", url);
              },
              error: function(data) {
                  console.log(data);
              }
          });
      }

      function deleteImage(src) {
        alert(src)
          $.ajax({
              data: {src : src},
              type: "POST",
              url: "<?php echo site_url('admin/article/delete_image')?>",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }

    });
    
  </script>