<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Principal Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Principal Data list</li>
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
                  		<a href="<?php echo base_url().'admin/addprincipal' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Principal </a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<table class="table">
                 		<tr>
                 			<th width="50">#</th>
                      		<th width="50">Image</th>
                 			<th>Name</th>
                      <th>Gender</th>
                 			
                      <th>Messages</th>
                      <th>joining date</th>
                 			<th>leaving date</th>
                 			<th width="100">Status</th>
                 			<th width="160" class="text-center">Action </th>
                 		</tr>
                   <!--  -->
                   <?php if(!empty($principal)){ ?>

                      <?php 
                     
                      foreach ($principal as $principalRow) {
                       ?>
                 		<tr>
                 			<td><?php echo $principalRow['id']?></td>

                      <td>
                      	<?php 
                      	$path='./assests/uploads/principal/'.$principalRow['principal_pic'];
                      	if (!empty($principalRow['principal_pic'])&& file_exists($path)) {
                      		# code...?>
                      		<img src="<?php echo base_url().'assests/uploads/principal/'.$principalRow['principal_pic']?>" class="img rounded-circle" width="50" height="50">
                      		<?php
                      	}else{


                      	?>
                      	<img src="<?php echo base_url().'assests/uploads/category/download.png';?>" class="img rounded-circle" width="50" height="50"><?php }  ?>

                      	</td>
                 			<td class="text-justify"><?php echo $principalRow['principal_name']?></td>
                      <td class="text-justify"><?php echo $principalRow['gender']?></td>
                      <td class="text-justify"><?php echo  word_limiter(strip_tags($principalRow['principal_messages']),40)?></td>
                 			<td><?php echo $principalRow['joining_date']?></td>
                 			<td><?php echo $principalRow['leave_date']?></td>
                      <?php if($principalRow['status']=='1'){?>
                 			<td><span class="badge badge-success">Active</span></td>
                    <?php }else{ ?>
                      <td><span class="badge badge-danger">Block</span></td>
                    <?php }?>
                 			<td class=" text-center">
                 				<a href="<?php echo base_url().'admin/article/edit/'.$principalRow['id']?>" class="btn btn-primary btn-sm "> <i class="fa fa-edit"></i> Edit</a>
                 				<a href="javascript:void(0)" onclick="deleteArticle(<?php echo $principalRow['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
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
    function deleteArticle(id){
      alert(id);
      if (confirm("Are you Sure ?? want to delete this category")) {
        window.location.href='<?php echo base_url().'admin/article/delete/'?>'+id;
        //alert('<?php echo base_url().'admin/category/delte/'?>'+id);
      }
    }
  </script>


<?php $this->load->view('admin/footer')?>