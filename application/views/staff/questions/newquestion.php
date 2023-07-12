<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'staff/category/index';?>">Questions</a></li>
              <li class="breadcrumb-item active">Add New Question</li>
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
                  		Add New Question
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="examform" id="examform" method="post" enctype="multipart/form-data"action="<?php echo base_url().'staff/questions/add_new_question';?>" >
                 <div class="card-body">
                 
                 		
                    
                 		<div class="form-group">
                 			<label>Question</label>
                 			 <textarea  placeholder="Enter Question" class=" textarea form-control <?php echo (form_error('question') != "")?'is-invalid':'';?>" name="question" id="question"><?php echo set_value('question'); ?>
                 			 	
                 			 </textarea>
                 			  <?php echo form_error('question');?>
                 		</div>
                    <hr>
                    <div class="form-group">
                      <label>Option A</label>
                       <textarea  placeholder="Enter Opation 1" class=" textarea form-control <?php echo (form_error('option_a') != "")?'is-invalid':'';?>" name="option_a" id="option_a"><?php echo set_value('option_a'); ?>
                        
                       </textarea>
                        <?php echo form_error('option_a');?>
                    </div>
                    

                    <div class="form-group">
                      <label>Option B</label>
                       <textarea  class=" textarea form-control <?php echo (form_error('option_b') != "")?'is-invalid':'';?>" name="option_b" id="option_b"  placeholder="Enter Opation 2"><?php echo set_value('option_b'); ?>
                        
                       </textarea>
                        <?php echo form_error('option_a');?>
                    </div>

                     <div class="form-group">
                      <label>Option C</label>
                       <textarea  class=" textarea form-control <?php echo (form_error('option_c') != "")?'is-invalid':'';?>" name="option_c" id="option_c"  placeholder="Enter Opation 3"><?php echo set_value('option_c'); ?>
                        
                       </textarea>
                        <?php echo form_error('option_c');?>
                    </div>

                     <div class="form-group <?php echo (form_error('option_d') != "")?'is-invalid':'';?>">
                      <label>Option D</label>
                       <textarea  class=" textarea form-control " name="option_d" id="option_d"  placeholder="Enter Opation 4"><?php echo set_value('option_d'); ?>
                        
                       </textarea>
                        <?php echo form_error('option_d');?>
                    </div>

                   
                      <label>Currect Answer</label>
                       <div class="form-group <?php echo (form_error('answer') != "")?'is-invalid':'';?>">
                          <div class="custom-control custom-radio float-left">
                             
                              <input class="custom-control-input <?php echo (form_error('answer') != "")?'is-invalid':'';?>" value="A" type="radio" id="option1" name="answer" >
                              <label for="option1" class="custom-control-label">A</label>
                          </div>
                          <div class="custom-control custom-radio float-left ml-3">
                             
                              <input class="custom-control-input <?php echo (form_error('answer') != "")?'is-invalid':'';?>" value="B" type="radio" id="option2" name="answer" >
                              <label for="option2" class="custom-control-label">B</label>
                          </div>

                           <div class="custom-control custom-radio float-left ml-3">
                             
                              <input class="custom-control-input <?php echo (form_error('answer') != "")?'is-invalid':'';?>" value="C" type="radio" id="option3" name="answer">
                              <label for="option3" class="custom-control-label">C</label>
                          </div>
                          <div class="custom-control custom-radio float-left ml-3">
                             
                              <input class="custom-control-input <?php echo (form_error('answer') != "")?'is-invalid':'';?>" value="D" type="radio" id="option4" name="answer" >
                              <label for="option4" class="custom-control-label">D</label>
                          </div>

                           <?php echo form_error('answer');?>

                           




                        </div>
                        

                     <div class="form-group"><br>

                      <label>Answer Description</label>
                       <textarea  class=" textarea form-control <?php echo (form_error('ans_description') != "")?'is-invalid':'';?>" name="ans_description" id="ans_description"  placeholder="Enter Opation 2"><?php echo set_value('ans_description'); ?>
                        
                       </textarea>
                        <?php echo form_error('ans_description');?>
                    </div>

                    
                 		
                   
                      
                 	
                 </div>
                 <input type="hidden" name="quiz_id" value="<?php echo $quiz_id ?>">
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'staff/questions';?>">Back</a>
                   
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

        height: "100px",
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
              url: "<?php echo site_url('staff/questions/upload_image')?>",
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
              url: "<?php echo site_url('staff/questions/delete_image')?>",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }

    });
    
  </script>