<?php $this->load->view('staff/header'); ?>
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Questions</li>
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
                  	<div class="card-title">
                  		<form action="" method="get" name="tablesearch">
                  			<div class="input-group mb-0">
			                    <input type="text" name="q" value="<?php echo $queryString;?>" class="form-control float-right" placeholder="Search">

			                    <div class="input-group-append">
			                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
			                    </div>
			                  </div>
                  		</form>
                  	</div>
                  	<div class="card-tools">
                  		<a href="<?php echo base_url().'staff/questions/add_new_question?quiz_id='.$quiz_id ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Add New Question</a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<?php if (!empty($questions)) {
                    $qno=1;
                 		foreach ($questions as $question) {
                 			?>


                 			<div class="row p-2 border m-1  ">
                 				
                 				<label class="  w-100  text-justify  "><span>Question: <?php echo  $qno; ?></span>  <span class=" float-right">Subject: <?php echo  $question['subject_name']; ?></span></label>
                 				<div class="col-12">
                 					<div class="row">
                 						
                 						<div class="col-md-12 border text-justify p-2 " style="min-height: 100px;"><?php echo $question['question']; ?></div>
                 					</div> 
                 				</div>
                 				<label>Options</label>
                 				<div class="col-md-12 p-2 text-justify option ">
                 					
                 					<div class="row border  p-2 m-2">
                 						<div class="col-1   d-flex justify-content-center align-items-center"><span  class="optno">A</span></div>
                 						<div class="col-11   pl-3 d-flex justify-content-start align-items-center"><?php echo $question['option_a'] ?></div>
                 						
                 					</div>

                 					<div class="row border  p-2 m-2">
                 						<div class="col-1  d-flex justify-content-center align-items-center"><span  class="optno">B</span></div>
                 						<div class="col-11 pl-3 d-flex justify-content-start align-items-center"><?php echo $question['option_b'] ?></div>
                 						
                 					</div>

                 					<div class="row border  p-2 m-2">
                 						<div class="col-1   d-flex justify-content-center align-items-center"><span class="optno" >C</span></div>
                 						<div class="col-11 pl-3 d-flex justify-content-start align-items-center"><?php echo $question['option_c'] ?></div>
                 						
                 					</div>

                 					<div class="row border  p-2 m-2">
                 						<div class="col-1   d-flex justify-content-center align-items-center"><span class="optno" >D</span></div>
                 						<div class="col-11 d-flex justify-content-start pl-4 align-items-center"><?php echo $question['option_d'] ?></div>
                 						
                 					</div>

                 					

                 					
                 					
                 				</div>
                 				<label>Currect Answer :</label>
                 				<div class="col-12 border p-2 text-justify font-weight-bold"><?php echo $question['correct_ans'] ?></div>
                 				<label>Answer Description</label>
                 				<div class="col-12 border p-2 text-justify"><?php echo  $question['ans_description'] ?></div>
                 				<div class="col-md-12 p-2">
                 					<div class="row">
                 						<div class="col-6"> <a href="<?php echo base_url('staff/questions/edit_question?qid='.$question['id'].'&&quiz_id='.$quiz_id) ?>" class="btn btn-primary col-md-5">Edit</a></div>
                 						<div class="col-6"><a href="javascript:void(0)" onclick="deletequestion(<?php echo $question['id']; ?>)" class="btn btn-danger col-md-5">Delete</a></div>
                 					</div>
                 				</div>
                 			</div>

                 			<?php
                      $qno++;
                 		}
                 		# code...
                 	} ?>
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
    function deletequestion(id){
      
      if (confirm("Are you Sure ?? want to delete this category")) {
        window.location.href='<?php echo base_url().'staff/questions/delete_question?quiz_id='.$quiz_id.'&&qid='?>'+id;
        //alert('<?php echo base_url().'staff/category/delte/'?>'+id);
      }
    }
  </script>
<?php $this->load->view('staff/footer'); ?>