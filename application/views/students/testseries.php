<?php $this->load->view('students/header')?>
<style type="text/css">
.testseriestext a{
  text-decoration: none;
  color: black;

}
  @media only screen and (max-width:767px ){
     .testseriestext  h6{
    font-size: 13px;
    font-weight: bold;
   
  }
  
}
</style>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Test Series</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Test Series</li>
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
	            <?php if ($this->session->flashdata('success')!="")
	            {?>
		            <div class="alert alert-success"><?php echo $this->session->flashdata('success');?>
		            </div>
	          		<?php 
	          	}?> 
	            <?php if ($this->session->flashdata('error')!="")
	            {?>
	                <div class="alert alert-danger"><?php echo $this->session->flashdata('error');?></div><?php
	            }?>
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
	                  		<a href="<?php echo base_url().'admin/testseries/new_testseries' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Purchase Other Test Series</a>
	                	</div>
	                	
	                </div>
	                <!-- /.card-header -->
	                <div class="card-body">
	                   <?php if(!empty($testserieses))
	                   { 
	                      foreach ($testserieses as $testseries)
	                       {?>
	                        <div class="row border mb-2  align-items-center ">
		                        <div class="col-2  col">
		                            <?php 
		                              $path='./assest/uploads/testseries/'.$testseries['image'];
		                              if (!empty($testseries['image'])&& file_exists($path))
		                               {
		                                # code...?>
			                                <img src="<?php echo base_url().'assest/uploads/testseries/'.$testseries['image']?>" class="img  rounded-circle" width="50" height="50">
		                                <?php
		                              }
		                              else
		                              {?>
			                              <img src="<?php echo base_url().'assest/uploads/no-image.png';?>" class="img rounded-circle" width="50" height="50">
		                          <?php }  ?>
		                        </div>
		                        <div class="col">
		                            <div class="row">
		                              <div class="col-md-12 testseriestext">
		                                 <a href="<?php echo base_url('students/testseries/mocktest/?testseries_id='.$testseries['id']) ?>">
		                                    <div class="row  text-justify  align-items-center p-1 ">
		                                     <!--  <div class="col"><span style="border: 1px solid gray; border-radius:100%; padding: 5px; " ><?php echo $testseries['id']?></span></div> -->
		                                   
		                                      
		                                      <div class="col ">
		                                        <h6><?php echo $testseries['title']?></h6>
		                                        
		                                      </div>

		                                    </div>

		                                 </a>
		                              </div>
		                            </div>
		                        </div>
	                        </div>
	                        <?php
			               }
			           }
			           else
			           { ?>
			           	<div class="row">
		             		<div class="col-md-12"  >Record Not Found</div >	
		             	</div>
		                <?php 
			           }?>
	                </div>
	                
	                <!-- /.card-body -->
	            </div>
	            <!-- /.card -->
	          </div>
	          <!-- /.col-lg-12 -->
	        </div>
	        
	        <!-- /.row -->
	    </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  <script type="text/javascript">
   
  </script>


<?php $this->load->view('students/footer')?>