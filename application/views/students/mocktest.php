<?php $this->load->view('admin/header')?>
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
              <li class="breadcrumb-item "><a href="<?php echo base_url('admin/testseries') ?>">Test Series</a></li>
              <li class="breadcrumb-item active">Mock Test</li>
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
                  	
              </div>

              <div class="card-body">
               <?php if(!empty($mocktests))
                { 
                  foreach ($mocktests as $mocktest)
                  {
                   ?>
                    <div class="row border mb-2  align-items-center ">
                     <div class="col-2  col">
                        <?php 
                          $path='./assest/uploads/testseries/mocktests/'.$mocktest['image'];
                          if (!empty($mocktest['image'])&& file_exists($path)) {
                            # code...?>
                            <img src="<?php echo base_url().'assest/uploads/testseries/mocktests/'.$mocktest['image']?>" class="img  rounded-circle" width="50" height="50">
                            <?php
                          }else{


                          ?>
                          <img src="<?php echo base_url().'assest/uploads/no-image.png';?>" class="img rounded-circle" width="50" height="50"><?php }  ?>

                      </div>
                      <div class="col">
                        <div class="row">
                          <div class="col-md-12 testseriestext">
                             <a href="<?php echo base_url('students/mocktest/mocktest_instructions/?mocktest_id='.$mocktest['id']) ?>">
                                <div class="row  text-justify  align-items-center p-1 ">
                                 <!--  <div class="col"><span style="border: 1px solid gray; border-radius:100%; padding: 5px; " ><?php echo $testseries['id']?></span></div> -->
                               
                                  
                                  <div class="col ">
                                    <h6><?php echo $mocktest['title']?></h6>
                                    
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
                  <div class="row" >
               			<div class="col-md-12">Record Not Found</div>
               		</div >
                  <?php
                 // echo $testseries_id;
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
    


<?php $this->load->view('students/footer')?>