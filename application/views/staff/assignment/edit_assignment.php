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
              <li class="breadcrumb-item active">Edit assignment</li>
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
                     <div class="col-md"> <h5>Edit Assigment</h5></div>     
                    </div>
                  	
                	
                 </div>
                 <div class="card-body">
                 <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'staff/assignment/edit_assignment/'.$assignment['id'] ?>">
                  
                       <div class="form-group text-left">
                        <label>Title:</label>
                         <input type="text" name="title" class="form-control <?php echo (form_error('title')!="")? 'is-invalid':'' ?>" value="<?php echo set_value('title',$assignment['title']) ?>" placeholder="Enter Title">
                         <?php  echo  form_error('title'); ?>
                       </div>

                       <div class="form-group text-left">
                        <label>Discription:</label>
                        <textarea name="discription" class="form-control" placeholder="Enter Discription"><?php echo set_value('discription',$assignment['description']) ?></textarea>
                       </div>
                       <div class="form-group text-left">
                        <label>Subject:</label>
                         <input type="text" name="subject" value="<?php echo set_value('subject',$assignment['subject']) ?>"class="form-control <?php echo (form_error('subject')!="")? 'is-invalid':'' ?>" placeholder="Enter Subject Name">
                         <?php  echo form_error('subject') ?>
                       </div>
                       <div class="form-group text-left">
                         <label>Branch</label>
                          <select name="course" class="form-control <?php echo (form_error('course')!="")? 'is-invalid':'' ?>">
                           <option value=""> -------------Select Course-----------</option>
                          <?php 
                              foreach ($branches as $branch ) {
                                $select=($assignment['branch']==$branch['id'])? true: false;
                                    ?>
                                    <option  <?php  echo set_select('course',$branch['id'],$select) ?> value="<?php echo $branch['id'] ?>">  <?php   echo $branch['branch_name']; ?></option>
                               <?php
                                }  

                           ?>
                           
                         </select>
                       </div>
                       <div class="form-group text-left">
                         <label>Semester</label>
                         <select name="semester" class="form-control <?php echo (form_error('semester')!="")? 'is-invalid':'' ?>">
                           <option value=""> -------------Select Semester-----------</option>
                           <option <?php echo set_select('semester','First Semester', ($assignment['semester']=='First Semester'? true: false)) ?> value="First Semester">First Semester  </option>
                           <option <?php echo set_select('semester','Second Semester', ($assignment['semester']=='Second Semester'? true: false)) ?> value="Second Semester">Second Semester  </option>
                           <option <?php echo set_select('semester','Third Semester', ($assignment['semester']=='Third Semester'? true: false)) ?> value="Third Semester">Third Semester  </option>
                           <option <?php echo set_select('semester','Fourth Semester', ($assignment['semester']=='Fourth Semester'? true: false)) ?> value="Forth Semester">Forth Semester  </option>
                           <option <?php echo set_select('semester','Five Semester', ($assignment['semester']=='Five Semester'? true: false)) ?> value="Five Semester">Five Semester  </option>
                           <option <?php echo set_select('semester','Six Semester', ($assignment['semester']=='Six Semester'? true: false)) ?> value="Six Semester">Six Semester  </option>
                           
                         </select>
                         <?php  echo form_error('semester'); ?>
                       </div>
                       <div class="form-group text-left">
                         <label> Upload a File: </label> 
                        <input type="file" name="file" id="file" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                         <?php echo $assignment['file'] ?>
                         <a href="<?php echo base_url('assests/uploads/assignment/').$assignment['file'] ?>"> click hare</a>
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
  <script type="text/javascript">
    
  </script>
<?php $this->load->view('staff/footer'); ?>