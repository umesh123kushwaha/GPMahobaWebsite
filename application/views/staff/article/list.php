<?php $this->load->view('staff/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Articles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
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
                  		<a href="<?php echo base_url().'staff/article/create' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> create </a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<table class="table">
                 		<tr>
                 			<th width="50">#</th>
                      		<th width="50">Image</th>
                 			<th>Title</th>
                      <th>Discription</th>
                 			<th>Author</th>
                 			<th>Created At</th>
                 			<th width="100">Status</th>
                 			<th width="160" class="text-center">Action </th>
                 		</tr>
                   <!--  -->
                   <?php if(!empty($articles)){ ?>

                      <?php 
                     
                      foreach ($articles as $articlesRow) {
                       ?>
                 		<tr>
                 			<td><?php echo $articlesRow['id']?></td>

                      <td>
                      	<?php 
                      	$path='./assests/uploads/articles/thumb_staff/'.$articlesRow['image'];
                      	if (!empty($articlesRow['image'])&& file_exists($path)) {
                      		# code...?>
                      		<img src="<?php echo base_url().'assests/uploads/articles/thumb_admin/'.$articlesRow['image']?>" class="img rounded-circle" width="50" height="50">
                      		<?php
                      	}else{


                      	?>
                      	<img src="<?php echo base_url().'assests/uploads/category/download.png';?>" class="img rounded-circle" width="50" height="50"><?php }  ?>

                      	</td>
                 			<td class="text-justify"><?php echo $articlesRow['title']?></td>
                      <td class="text-justify"><?php echo  word_limiter(strip_tags($articlesRow['description']),40)?></td>
                 			<td><?php echo $articlesRow['author']?></td>
                 			<td><?php echo  date('d-m-Y',strtotime($articlesRow['created_at']))?></td>
                      <?php if($articlesRow['status']=='1'){?>
                 			<td><span class="badge badge-success">Active</span></td>
                    <?php }else{ ?>
                      <td><span class="badge badge-danger">Block</span></td>
                    <?php }?>
                 			<td class=" text-center text-nowrap">
                 				<a href="<?php echo base_url().'staff/article/edit/'.$articlesRow['id']?>" class="btn btn-primary btn-sm "> <i class="fa fa-edit"></i> Edit</a>
                 				<a href="javascript:void(0)" onclick="deleteArticle(<?php echo $articlesRow['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
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
        window.location.href='<?php echo base_url().'staff/article/delete/'?>'+id;
        //alert('<?php echo base_url().'staff/category/delte/'?>'+id);
      }
    }
  </script>


<?php $this->load->view('staff/footer')?>