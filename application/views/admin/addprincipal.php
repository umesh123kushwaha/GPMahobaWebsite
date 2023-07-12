<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Articles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/article/index';?>">Article</a></li>
              <li class="breadcrumb-item active">Create New Article</li>
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
                  		Add Principal
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="principalForm" id="principalForm" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admin/addprincipal';?>" >
                 <div class="card-body">
                 
                 		
                 		<div class="form-group">
                 			<label>Principal Full Name :</label>
                 			<input type="text" name="pfname" placeholder="Enter Principal Name" class="form-control <?php echo (form_error('pfname')!='')?'is-invalid':'' ?>" value="<?php echo set_value('pfname') ?>" >
                 			
                 			<?php echo form_error('pfname');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label>Gender :</label><br>
                      		<div class="custom-control custom-radio float-left">
	                         
	                          <input class="custom-control-input" value="Male" type="radio" id="male" name="gender" checked="" >
	                          <label for="male" class="custom-control-label">Male</label>
	                      	</div>
	                      <div class="custom-control custom-radio float-left ml-3">
	                         
	                          <input class="custom-control-input" value="Female" type="radio" id="Female" name="gender" >
	                          <label for="Female" class="custom-control-label">Female</label>
	                      </div>
	                    </div><br>
	                    <?php echo form_error('gender') ?>
                 		<div class="form-group">
                 			<label>Hieghest Qualification</label>
                 			<input type="text" name="qualification" value="<?php echo set_value('qualification');?>" id="qualification" class="form-control <?php echo (form_error('qualification') != "")?'is-invalid':'';?>">
                 			<?php echo form_error('qualification');?>
                      
                 		</div>
                 		

                 		<div class="form-group">
                 			<label>Principal Message</label>
                 			<textarea name="description" id="description" class="textarea"><?php echo set_value('description');?></textarea>
                      
                 		</div>
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)||form_error('image')!='') ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';
                      echo form_error('image');

                      ?>
                 		</div>
                 		<div class="form-group">
                 			<label>User Name</label>
                 			<input type="text" name="username" value="<?php echo set_value('username');?>" id="username" class="form-control <?php echo (form_error('username') != "")?'is-invalid':'';?>" placeholder="Enter User Name" >
                 			<?php echo form_error('username');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label> Password:</label>
                 			<input type="password" name="pwd" value="<?php echo set_value('pwd');?>" id="pwd" class="form-control <?php echo (form_error('pwd') != "")?'is-invalid':'';?>" placeholder=" Enter Password" >
                 			<?php echo form_error('pwd');?>
                      
                 		</div>

                 		<div class="form-group">
                 			<label> Confirm Password:</label>
                 			<input type="password" name="cpwd" value="<?php echo set_value('cpwd');?>" id="cpwd" class="form-control <?php echo (form_error('cpwd') != "")?'is-invalid':'';?>"placeholder="Confirm Password" >
                 			<?php echo form_error('cpwd');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label>Email:</label>
                 			<input type="email" name="email" value="<?php echo set_value('email');?>" id="email" class="form-control <?php echo (form_error('email') != "")?'is-invalid':'';?>" placeholder="Enter valid Email Id">
                 			<?php echo form_error('email');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label>Mob No:</label>
                 			<input type="text" name="mobno" value="<?php echo set_value('mobno');?>" id="mobno" class="form-control <?php echo (form_error('mobno') != "")?'is-invalid':'';?>" placeholder="Enter 10 digit Mobile No">
                 			<?php echo form_error('mobno');?>
                      
                 		</div>

                 		<div class="form-group">
                 			<label>Joining Date</label>
                 			<input type="date" name="jdate" value="<?php echo set_value('jdate');?>" id="jdate" class="form-control <?php echo (form_error('jdate') != "")?'is-invalid':'';?>" placeholder="Enter 10 digit Mobile No">
                 			<?php echo form_error('jdate');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label> Currently do a job in Government Polytechnic Mahoba?</label>&nbsp;&nbsp;&nbsp;&nbsp;
                 			<input type="radio" name="status" value="1" <?php echo (set_value('status')==1)?'checked':'' ?>> Yes
                 			<input type="radio" name="status" value="0"<?php echo (set_value('status')==0)?'checked':'' ?>> No
                      
                 		</div>
                 		<div class="form-group" >
                 			<label id="ldatelabel"><?php echo (set_value('status')==0)?'Leaveing Date:':''  ?></label>
                 			<input type="<?php echo (set_value('status')==0)?'date':'hidden' ?>" name="leave_date" value="<?php echo set_value('leave_date','present');?>" id="leave_date" class="form-control <?php echo (form_error('leave_date') != "")?'is-invalid':'';?>" >
                 			<?php echo form_error('leave_date');?>
                      
                 		</div>
                 		<script type="text/javascript">

                 			$(document).ready(function() {
                 			 $('input[name=status').change(function(event) {
                 			 	/* Act on the event */
                 			 	var status=$('input[name=status]:checked').val();
                 			 	if (status==0) {
                 			 		$('#ldatelabel').html('Leaving Date:')
                 			 		$('input[name=leave_date').attr({
                 			 			type: 'date'
                 			 			
                 			 		});



                 			 	}
                 			 	else{
                 			 		$('#ldatelabel').html('')
                 			 		$('input[name=leave_date').attr({
                 			 			type: 'hidden',
                 			 			value:'present'
                 			 			
                 			 		});
                 			 	}
                 			 });
                 			});
                 		</script>

                 		
                    
                      
                 	
                 </div>
                 <div class="card-footer">
                 	<input type="hidden" name="usertype" value="1">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'admin/principal';?>">Back</a>
                   
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
              url: "<?php echo base_url() ?>/admin/principal_upload_image",
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
              url: "<?php echo base_url() ?>/admin/principal_delete_image",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }

    });
    
  </script>