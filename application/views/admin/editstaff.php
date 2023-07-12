<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Staffs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/article/index';?>">Staff</a></li>
              <li class="breadcrumb-item active">Edit Staff</li>
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
                  		Edit Staff
                  		
                  	</div>
                  	
                	
                 </div>
                 <?php if ($this->session->flashdata('success')!=""){?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div><?php }?> 
              <?php if ($this->session->flashdata('error')!=""){?>
              <div class="alert alert-danger"><?php echo $this->session->flashdata('error');?></div><?php }?>
                  <form name="stafflForm" id="staffForm" method="post" enctype="multipart/form-data"action="<?php echo base_url().'admin/edit_staff/'.$staff['id'];?>" >
                 <div class="card-body">
                 
                 		
                 		<div class="form-group">
                 			<label>Staff Full Name :</label>
                 			<input type="text" name="sfname" placeholder="Enter Staff Name" class="form-control <?php echo (form_error('sfname')!='')?'is-invalid':'' ?>" value="<?php echo set_value('sfname',$staff['staff_name']) ?>" >
                 			
                 			<?php echo form_error('sfname');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label>Gender :</label><br>
                      		<div class="custom-control custom-radio float-left">
	                         
	                          <input class="custom-control-input" value="Male" type="radio" id="male" name="gender" <?php echo($staff['gender']=='Male')?'checked':'' ?> >
	                          <label for="male" class="custom-control-label">Male</label>
	                      	</div>
	                      <div class="custom-control custom-radio float-left ml-3">
	                         
	                          <input class="custom-control-input" value="Female" type="radio" id="Female" name="gender"<?php echo($staff['gender']=='Female')?'checked':'' ?> >
	                          <label for="Female" class="custom-control-label">Female</label>
	                      </div>
	                    </div><br>
	                    <?php echo form_error('gender') ?>
                 		<div class="form-group">
                 			<label>Hieghest Qualification</label>
                 			<input type="text" name="qualification" value="<?php echo set_value('qualification',$staff['qualification']);?>" id="qualification" class="form-control <?php echo (form_error('qualification') != "")?'is-invalid':'';?>">
                 			<?php echo form_error('qualification');?>
                      
                 		</div>
                 		

                 		<div class="form-group">
                 			<label>Staff's About</label>
                 			<textarea name="staff_about" id="description" class="textarea"><?php echo set_value('description',$staff['staff_about']);?></textarea>
                      
                 		</div>
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)||form_error('image')!='') ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';
                      echo form_error('image');

                      ?>
                 		</div>
                    <div>
                      <?php 
                        $path='./assests/uploads/staff/'.$staff['staff_pic'];
                       
                        if (!empty($staff['staff_pic'])&& file_exists($path)) {
                          # code...?>
                          <img src="<?php echo base_url().'assests/uploads/staff/'.$staff['staff_pic']?>" class="img rounded-circle" width="50" height="50">
                          <?php
                        }else{


                        ?>
                        <img src="<?php echo base_url().'assests/uploads/category/download.png';?>" class="img rounded-circle" width="50" height="50"><?php }  ?>
                    </div>

                 		
                 		<div class="form-group">
                 			<label>Mob No:</label>
                 			<input type="text" name="mobno" value="<?php echo set_value('mobno',$staff['mobno']);?>" id="mobno" class="form-control <?php echo (form_error('mobno') != "")?'is-invalid':'';?>" placeholder="Enter 10 digit Mobile No">
                 			<?php echo form_error('mobno');?>
                      
                 		</div>

                 		<div class="form-group">
                 			<label>Joining Date</label>
                 			<input type="date" name="jdate" value="<?php echo set_value('jdate',$staff['joining_date']);?>" id="jdate" class="form-control <?php echo (form_error('jdate') != "")?'is-invalid':'';?>" >
                 			<?php echo form_error('jdate');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label> Currently do a job in Government Polytechnic Mahoba?</label>&nbsp;&nbsp;&nbsp;&nbsp;
                 			<input type="radio" name="status" value="1" <?php echo (set_value('status')==1||$staff['leave_date']=='present')?'checked':'' ?>> Yes
                 			<input type="radio" name="status" value="0"<?php echo (set_value('status')==0 && $staff['leave_date']!='present')?'checked':'' ?>> No
                      
                 		</div>
                 		<div class="form-group" >
                 			<label id="ldatelabel"><?php echo (set_value('status')==0&&$staff['leave_date']!='present')?'Leaveing Date:':''  ?></label>
                 			<input type="<?php echo (set_value('status')==0&&$staff['leave_date']!='present')?'date':'hidden' ?>" name="leave_date" value="<?php echo set_value('leave_date',$staff['leave_date']);?>" id="leave_date" class="form-control <?php echo (form_error('leave_date') != "")?'is-invalid':'';?>" >
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
                 	<input type="hidden" name="usertype" value="2">
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