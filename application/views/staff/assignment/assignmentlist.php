<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Assignments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assignments</li>
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
                  		<a href="<?php echo base_url().'staff/assignment/upload_assignment' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Upload Assignment </a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<table class="table">
                 		<tr>
                 			<th width="50">#</th>
                      	
                 			<th>Title</th>
                      <th>Discription</th>
                      <th>branch</th>
                      <th>Semester</th>
                      <th>subject</th>
                 			<th>Uploaded By</th>
                 			<th>Created At</th>
                 			<th width="100">Total Submited</th>
                 			<th width="160" class="text-center">Action </th>
                 		</tr>
                   <!--  -->
                   <?php if(!empty($assignments)){ ?>

                      <?php 
                     
                      foreach ($assignments as $assignment) {
                       ?>
                 		<tr>
                 			<td><?php echo $assignment['id']?></td>

                      
                 			<td class="text-justify"><?php echo $assignment['title']?></td>
                      <td class="text-justify"><?php echo  word_limiter(strip_tags($assignment['description']),40)?></td>
                      <td class="text-justify"><?php echo  $assignment['branch_name']; ?></td>
                      <td class="text-justify"><?php echo  $assignment['semester']; ?></td>
                      <td class="text-justify"><?php echo  $assignment['subject']; ?></td>
                      
                 			<td><?php echo $assignment['uploaded_by']?></td>
                 			<td class="text-nowrap"><?php echo  date('d-m-Y',strtotime($assignment['created_at']))?></td>
                      <td class="text-justify"><?php echo  $assignment['id']; ?></td>
                 			<td class=" text-center">
                 				<a href="<?php echo base_url().'staff/assignment/edit_assignment/'.$assignment['id']?>" class="btn btn-primary btn-sm "> <i class="fa fa-edit"></i> Edit</a>
                 				<a href="javascript:void(0)" onclick="delete_assignment(<?php echo $assignment['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
                 			</td>
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
    function delete_assignment(id){
     alert(id)
      if (confirm("Are you Sure ?? want to delete this Assignments")) {
        window.location.href='<?php echo base_url().'staff/assignment/delete_assignment?assignment_id='?>'+id;
        //alert('<?php echo base_url().'staff/category/delte/'?>'+id);
      }
    }
  </script>


<?php $this->load->view('staff/footer')?>