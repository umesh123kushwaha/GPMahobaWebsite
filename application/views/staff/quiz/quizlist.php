<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quizes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quizes</li>
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
                  		<a href="<?php echo base_url().'staff/quiz/new_quiz' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Add New Quiz</a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<table class="table table-responsive">
                 		<tr>
                 			<th width="50">#</th>
                      		<th width="50">Image</th>
                 			<th>Branch</th>
                      		<th>Semester</th>
                      		<th>Subject</th>
                      		<th>Topic</th>
                      		<th>title</th>
                      		<th>Description</th>
                 			
                 			<th>Created At</th>
                 			<th>status</th>
                 			
                 			<th width="160" class="text-center">Action </th>
                 		</tr>
                   <!--  -->
                   <?php if(!empty($quiz_data)){ ?>

                      <?php 
                     
                      foreach ($quiz_data as $quiz) {
                       ?>
                       
                     
                       			<tr class=" border">
		                 		   <td rowspan="2" class="align-items-center pt-5 text-center align-content-center  justify-content-center border"><?php echo $quiz['id']?></td>

			                      <td>
			                      	<?php 

			                      	$path='./assests/uploads/quiz/'.$quiz['image'];
			                      	if (!empty($quiz['image'])&& file_exists($path)) {
			                      		# code...?>
			                      		<img src="<?php echo base_url().'assests/uploads/quiz/'.$quiz['image']?>" class="img rounded-circle" width="50" height="50">
			                      		<?php
			                      	}else{


			                      	?>
			                      	<img src="<?php echo base_url().'assests/uploads/no-image.png';?>" class="img rounded-circle" width="50" height="50"><?php }  ?>

			                      	</td>
		                 			<td class="text-justify"><?php echo $quiz['branch_name']?></td>
		                 			<td class="text-justify"><?php echo $quiz['semester']?></td>
		                 			<td class="text-justify"><?php echo $quiz['subject']?></td>
		                 			<td class="text-justify"><?php echo $quiz['topic']?></td>
		                 			<td class="text-justify"><?php echo $quiz['title']?></td>
		                     		<td class="text-justify"><?php echo  word_limiter(strip_tags($quiz['description']),40)?></td>
		                 			
		                 			<td class=" text-nowrap"><?php echo  date('d-m-Y',strtotime($quiz['created_at']))?></td>
		                     		 <?php if($quiz['status']=='1'){?>
			                 			<td><span class="badge badge-success">Active</span></td>
					                    <?php }else{ ?>
					                      <td><span class="badge badge-danger">Block</span></td>
					                    <?php }?>
		                 			<td class=" text-center">
		                 				<a href="<?php echo base_url().'staff/quiz/edit_quiz/'.$quiz['id']?>" class="btn btn-primary btn-sm "> <i class="fa fa-edit"></i> Edit</a>
		                 				<a href="javascript:void(0)" onclick="delete_quiz(<?php echo $quiz['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
		                 			</td>
		                 			
		                 		</tr>
		                 		<tr  class=" border ">
			                 			<td colspan="6"><a href="<?php echo base_url().'staff/questions/add_new_question?quiz_id='.$quiz['id'] ?>" class="btn btn-info ">Add Question</a></td>
			                 			<td  colspan="5"><a href="<?php echo base_url().'staff/questions/index?quiz_id='.$quiz['id'] ?>" class="btn btn-info ">view  Question</a></td>
			                 		</tr>
                       		
                 		
                      

                 		
                  <?php 
                 
                }?>
                  <?php } else{ ?>

                 
                    <tr>
                 			<td colspan="4">Record Not Found</td>
                 			
                 		</tr>
                     <?php }?>
                    
                    
                 	</table>
                 	<div class="">
                 		<?php echo $pagination_links;?>
                 	</div>
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
    function delete_quiz(id){
      alert(id);
      if (confirm("Are you Sure ?? want to delete this category")) {
        window.location.href='<?php echo base_url().'staff/quiz/delete_quiz/'?>'+id;
        //alert('<?php echo base_url().'admin/category/delte/'?>'+id);
      }
    }
  </script>


<?php $this->load->view('admin/footer')?>