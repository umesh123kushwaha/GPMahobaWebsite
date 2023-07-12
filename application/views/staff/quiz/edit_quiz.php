<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quiz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'staff/category/index';?>">quiz</a></li>
              <li class="breadcrumb-item active">Edit quiz</li>
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
                  	Edit quiz
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="examform" id="examform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'staff/quiz/edit_quiz/'.$quiz_data['id'];?>" >
                 
                 <div class="card-body">
                    <div class="form-group">
                      <label>Select Branch</label>
                       <select class="form-control <?php echo (form_error('branch') != "")?'is-invalid':'';?>" name="branch" id=""  data-placeholder="Select a Branch"
                              style="width: 100%;">
                              <option value="">-------Select Branch -----------------</option>
                        <?php   if (!empty($branches))
                         {
                          
                          foreach ($branches as $branch)
                           {
                            $select=($branch['id']==$quiz_data['branch'])? true:false;
                            ?>
                             <option <?php echo   set_select('branch',$branch['id'],$select);?> value="<?php echo $branch['id'] ?>"><?php echo $branch['branch_name'] ?></option>




                            <?php                           
                          }
                        } ?>
                       
                      </select>
                      <?php echo form_error('branch');?>
                    </div>
                    <div class="form-group">
                      <label>Semester</label>
                      <select class="form-control <?php echo (form_error('semester')!="")?'is-invalid':''; ?>" name="semester">
                        <option value="">-------Select Semester------------</option>
                        <option <?php echo   set_select('semester','First Semester',($quiz_data['semester']=='First Semester')? true:false);?>  value="First Semester">First Semester</option>
                        <option <?php echo   set_select('semester','Second Semester',($quiz_data['semester']=='Second Semester')? true:false);?>  value="Second Semester">Second Semester</option>
                        <option <?php echo   set_select('semester','Third Semester',($quiz_data['semester']=='Third Semester')? true:false);?>  value="Third Semester">Third Semester</option>
                        <option <?php echo   set_select('semester','Fourth Semester',($quiz_data['semester']=='Fourth Semester')? true:false);?>  value="Fourth Semester">Fourth Semester</option>
                        <option <?php echo   set_select('semester','Five Semester',($quiz_data['semester']=='Five Semester')? true:false);?>  value="Five Semester">Five Semester</option>
                        <option <?php echo   set_select('semester','Six Semester',($quiz_data['semester']=='Six Semester')? true:false);?>  value="Six Semester">Six Semester</option>
                      </select>
                      <?php echo form_error('semester'); ?>
                    </div>

                    <div class="form-group">
                      <label>Subjects</label>
                      <input type="text" name="subject" value="<?php echo set_value('subject',$quiz_data['subject']); ?>" class=" form-control <?php echo (form_error('subject')!="")? 'is-invalid':''; ?>" id="subject" placeholder="Enter Subject Name.">
                      <?php echo form_error('subject');?>
                    </div>
                      <div class="form-group">
                      <label>Topic</label>
                      <input type="text" name="topic" value="<?php echo set_value('topic',$quiz_data['topic']); ?>" class=" form-control <?php echo (form_error('topic')!="")? 'is-invalid':''; ?>" id="topic" placeholder="Enter Topic.">
                      <?php echo form_error('topic');?>
                    </div>
                    
                 		<div class="form-group">
                 			<label>Title</label>
                 			<input type="text" name="title" value="<?php echo set_value('title',$quiz_data['title']); ?>" id="title" class="form-control <?php echo (form_error('title') != "")?'is-invalid':'';?>" placeholder="Enter Quiz Title">
                      <?php echo form_error('title');?>
                 		</div>
                 		<div class="form-group">
                 			<label>Description</label>
                 			 <textarea  placeholder="Enter Description" class=" textarea form-control <?php echo (form_error('description') != "")?'is-invalid':'';?>" name="description" id="description"><?php echo set_value('descripton',$quiz_data['description']); ?>
                 			 	
                 			 </textarea>
                 			  <?php echo form_error('description');?>
                 		</div>
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                 		</div>
                   
                  
                <!-- /.form-group -->
                <div class="form-group">
                      <label>Total Question</label>
                      <input type="text" name="total_question" value="<?php echo set_value('total_question',$quiz_data['total_question']); ?>" id="total_question" class="form-control <?php echo (form_error('total_question') != "")?'is-invalid':'';?>" placeholder="Enter Test Series Title">
                      <?php echo form_error('total_question');?>
                    </div>


                    <div class="form-group">
                      <label>Duration</label>
                      <input type="number" name="duration" value="<?php echo set_value('duration',$quiz_data['duration']); ?>" id="duration" class="form-control <?php echo (form_error('duration') != "")?'is-invalid':'';?>" placeholder="Enter Time Duration of Test">
                      <?php echo form_error('duration');?>
                    </div>
                     <div class="form-group">
                      <label> Status: </label>    <br>  
                      <div class="custom-control custom-radio float-left">
                         
                          <input class="custom-control-input" value="1" type="radio" id="statusActive" name="status" <?php echo ($quiz_data['status']==1 ?'checked': '') ?> >
                          <label for="statusActive" class="custom-control-label">Active</label>
                      </div>
                      <div class="custom-control custom-radio float-left ml-3">
                         
                          <input class="custom-control-input" value="0" type="radio" id="statusBlock" name="status"<?php echo ($quiz_data['status']== 0 ?'checked': '') ?> >
                          <label for="statusBlock" class="custom-control-label">Block</label>
                      </div>
                    </div>


                   
                      
                 	
                 </div>
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'staff/quiz/index';?>">Back</a>
                   
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
      $('#branch').change(function() {
        /* Act on the event */
        var branch= $('#branch').val()
        var semester=$('#semester').val()
        alert(branch)
      });

      function uploadImage(image) {
          var data = new FormData();
         
          data.append("image", image);
          $.ajax({
              url: "<?php echo site_url('staff/quiz/upload_image')?>",
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
              url: "<?php echo site_url('staff/quiz/delete_image')?>",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }
      function getsubjects(branch,semester) {
        // body...
        $.ajax({
          url: '<?php echo base_url().'staff/quiz/getsubject' ?>',
          type: 'POST',
          dataType: 'json',
          data: {branch: branch,
                semester:semester
          },
        })
        .done(function() {
          console.log("success");


          alert('welcome')
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      }

    


    });
    
  </script>