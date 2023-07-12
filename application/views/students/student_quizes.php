<?php $this->load->view('students/header'); ?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                
Student Quiz

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('students/deshboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Student quiz</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
    <!-- Main content -->
    <section class="content">
      <div class="container ">
      	<div class="row bg-primary text-center mx-5 rounded ">
      		<div class=" col-md-12 p-1 "> <h4>	Online Quiz</h4>	</div>	

      	</div>
        <div class="card-body bg-white">
                  <table class="table">
                    <tr>
                      <th width="50">#</th>
                      <th width="50">Image</th>
                      <th>Subject</th>
                      <th>Topic</th>
                      <th>Semester</th>
                      <th>Branch</th>
                      <th width="">Status</th>
                      <th width="160" class="text-center">Action </th>
                    </tr>
                   <!--  -->
                    <?php 

                    if(!empty($quizes)){
                   
                   ?>

                      <?php foreach ($quizes as $quiz) {
                       ?>
                    <tr>
                      <td><?php echo $quiz['id']?></td>
                      <td><img src="<?php echo base_url().'assests/uploads/quiz/'.$quiz['image']?>" class="img rounded-circle" width="50" height="50"></td>
                      <td><?php echo $quiz['subject_name']?></td>
                      <td><?php echo $quiz['topic']?></td>
                      <td><?php echo $quiz['semester']?></td>
                      <td><?php echo $quiz['branch_name']?></td>
                      <?php if($quiz['status']=='1'){?>
                      <td><span class="badge badge-success">Active</span></td>
                    <?php }else{ ?>
                      <td><span class="badge badge-danger">Block</span></td>
                    <?php }?>
                      <td class=" text-center text-nowrap">
                        <a href="<?php echo base_url().'students/stdQuiz/student_quiz_instruction/?quiz='.$quiz['id']?>" class="btn btn-primary btn-sm "> <i class="fa fa-edit"></i> start</a>
                        
                      </td>
                    </tr>
                  <?php }?>
                  <?php } else{ ?>

                 
                    <tr>
                      <td colspan="4">Record Not Found</td>
                      
                    </tr>
                     <?php }?>

                    
                  </table>
                 </div>
      
                
      </div>
    </section>
    <!-- /.content -->
<?php $this->load->view('students/footer'); ?>
