<?php $this->load->view('staff/header'); ?>
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">assignment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">upload assignment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row text-center">
           <div class="col-lg-12 text-center">
            <?php if ($this->session->flashdata('success')!=""){?>
              <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div><?php }?> 
              <?php if ($this->session->flashdata('error')!=""){?>
              <div class="alert alert-danger"><?php echo $this->session->flashdata('error');?></div><?php }?>
            <div class="card">
	            
                  <div class="card-header">
                  	<div class="row bg-primary p-1 rounded">
                     <div class="col-md"> <h5>Upload Assigment</h5></div>     
                    </div>
                  	
                	
                 </div>
                 <div class="card-body">
                 <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'staff/assignment/upload_assignment' ?>">
                  
                       <div class="form-group text-left">
                        <label>Title:</label>
                         <input type="text" name="title" value=" <?php echo set_value('title'); ?>" class="form-control <?php echo (form_error('title')!="")? 'is-invalid':'' ?>" placeholder="Enter Title">
                         <?php  echo  form_error('title'); ?>
                       </div>

                       <div class="form-group text-left">
                        <label>Discription:</label>
                        <textarea name="discription" class="form-control" placeholder="Enter Discription"><?php   echo set_value('discription') ?></textarea>
                       </div>
                      
                       <div class="form-group text-left">
                         <label>Branch</label>
                          <select name="branch" id="branch" class="form-control <?php echo (form_error('branch')!="")? 'is-invalid':'' ?>">
                           <option value=""> -------------Select Course-----------</option>
                          <?php 
                              foreach ($branches as $branch ) {
                                    ?>
                                    <option <?php echo   set_select('branch',$branch['id'],false);?> value="<?php echo $branch['id'] ?>" >  <?php   echo $branch['branch_name']; ?></option>
                               <?php
                                }  

                           ?>
                           
                         </select>
                         <?php echo form_error('branch');?>
                       </div>
                       <div class="form-group text-left">
                      <label>Semester</label>
                      <select class="form-control <?php echo (form_error('semester')!="")?'is-invalid':''; ?>" name="semester" id="semester">
                        <option value="">-------Select Semester------------</option>
                        <option <?php echo   set_select('semester','1',false);?>  value="1">First Semester</option>
                        <option <?php echo   set_select('semester','2',false);?>  value="2">Second Semester</option>
                        <option <?php echo   set_select('semester','3',false);?>  value="3">Third Semester</option>
                        <option <?php echo   set_select('semester','4',false);?>  value="4">Fourth Semester</option>
                        <option <?php echo   set_select('semester','5',false);?>  value="5">Five Semester</option>
                        <option <?php echo   set_select('semester','6',false);?>  value="6">Six Semester</option>
                      </select>
                      <?php echo form_error('semester'); ?>
                    </div>
                     <div class="form-group text-left">
                      <label>Select Subjects</label>
                       <select class="form-control <?php echo (form_error('subject') != "")?'is-invalid':'';?>" name="subject" id="subject"  data-placeholder="Select a Subject"
                              style="width: 100%;">
                             
                       
                      </select>
                      <?php echo form_error('subject');?>
                    </div>

                       <div class="form-group text-left">
                         <label> Upload a File: </label> 
                         <input type="file" name="file" value=" <?php echo set_value('file') ?>" class="form-control <?php echo (form_error('file')!="")? 'is-invalid':'' ?>"> 
                         <?php  echo form_error('file'); ?> 
                       </div> 
                       <div class="form-group text-left"> 
                        <input type="submit" name="submit" class="btn btn-danger col-sm-2">
                        <input type="reset" name="reset" class="btn btn-dark col-sm-2">

                       </div> 
                       
                    
                 </form>
                 </div>
                

           <!-- /.card -->
          </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <?php $this->load->view('staff/footer'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#semester').change(function() {
        /* Act on the event */
        var branch= $('#branch').val()
        var semester=$('#semester').val()
        $.ajax({
          url: '<?php echo base_url().'staff/quiz/getsubjects' ?>',
          type: 'POST',
          dataType: 'json',
          data: {branch: branch,
                 semester:semester

        }
        })
        .done(function(response) {
         
          $('#subject').html(response['subjects'])
        })
        .fail(function() {
          console.log("error");
        })
        
        
      });
      
    });
    
  </script>
