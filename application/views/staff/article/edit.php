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
              <li class="breadcrumb-item"><a href="<?php echo base_url().'staff/article/index';?>">Article</a></li>
              <li class="breadcrumb-item active">Edit Article</li>
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
                  		Edit  Article " <?php echo $article['title'] ?>"
                  		
                  	</div>
                  	
                	
                 </div>
                  <form name="categoryForm" id="categoryForm" method="post" enctype="multipart/form-data"action="<?php echo base_url().'staff/article/edit/'.$article['id'];?>" >
                 <div class="card-body">
                 
                 		
                 		<div class="form-group">
                 			<label>Category</label>
                 			<select name="category_id" class="form-control  <?php echo (form_error('category_id') != "")?'is-invalid':'';?>">
                 				<option value="">Select Category</option>
                 				<?php if (!empty($categories)) 
                 					
                 					 foreach ($categories as $category)
                 					 
                 					 	


                 					  {
                 					  		$select= ($article['category'] == $category['id']) ? true: false;

                 					  	?>
                 					
                 					<option <?php echo set_select('category_id',$category['id'], $select);?> value="<?php echo $category['id'];?>">
                 					<?php echo $category['name'];?></option>
                 				

                 				<?php }?>
                 			</select>
                 			<?php echo form_error('category_id');?>
                      
                 		</div>
                 		<div class="form-group">
                 			<label>Title</label>
                 			<input type="text" name="title" value="<?php echo set_value('title',$article['title']);?>" id="title" class="form-control <?php echo (form_error('title') != "")?'is-invalid':'';?>">
                 			<?php echo form_error('title');?>
                      
                 		</div>
                 		

                 		<div class="form-group">
                 			<label>Discription</label>
                 			<textarea name="description" id="description" class="textarea"><?php echo set_value('description',$article['description']);?></textarea>
                      
                 		</div>
                 		
                 		<div class="form-group">
                 			<label>Image</label>
                 			<input type="file" name="image" id="image" class="form-control  <?php echo (!empty($errorImageUpload)) ? 'is-invalid' :'';?>">
                      <?php echo (!empty($errorImageUpload)) ? $errorImageUpload :'';?>
                 		</div>
                 		<?php 
                 			$path='./assests/uploads/articles/thumb_admin/'.$article['image'];
                 		
                 			if (!empty($article['image'])&& file_exists($path)) {
                 				?>
                 				<img src="<?php echo base_url().'assests/uploads/articles/thumb_admin/'.$article['image'] ?>">
                 				<?php 
                 			}else{
                 		 ?>
                 		 <img src="<?php echo base_url().'assests/uploads/category/download.png' ?>">
                 		<?php } ?>
                 		<div class="form-group">
                 			<label>Author</label>
                 			<input type="text" name="author" value="<?php echo set_value('author',$article['author']);?>" id="author" class="form-control <?php echo (form_error('author') != "")?'is-invalid':'';?> ">
                 			<?php echo form_error('author');?>
                      
                 		</div>
                    <div class="form-group">
                      <div class="custom-control custom-radio float-left">
                         
                          <input class="custom-control-input" value="1" type="radio" id="statusActive" name="status" <?php echo ($article['status']==1 ?'checked': '') ?> >
                          <label for="statusActive" class="custom-control-label">Active</label>
                      </div>
                      <div class="custom-control custom-radio float-left ml-3">
                         
                          <input class="custom-control-input" value="0" type="radio" id="statusBlock" name="status"<?php echo ($article['status']== 0 ?'checked': '') ?> >
                          <label for="statusBlock" class="custom-control-label">Block</label>
                      </div>
                    </div>
                      
                 	
                 </div>
                 <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-secondary" href="<?php echo base_url().'staff/article/index';?>">Back</a>
                   
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

      function uploadImage(image) {
          var data = new FormData();
         
          data.append("image", image);
          $.ajax({
              url: "<?php echo site_url('staff/article/upload_image')?>",
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
              url: "<?php echo site_url('staff/article/delete_image')?>",
              cache: false,
              success: function(response) {
                  console.log(response);
              }
          });
      }

    });
    
  </script>