<?php $this->load->view('admin/header')?>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Department</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department</li>
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
                  		<a href="<?php echo base_url().'admins/department/create_new_department' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Create New Department </a>
                	</div>
                	
                 </div>
                 <div class="card-body">
                 	<table class="table">
                 		<tr class="text-uppercase">
                 			<th width="50">#</th>
                      <th width="50">Image</th>
                 			<th>Department Name</th>
                      <th width="200">about</th>
                      <th width="200">vision</th>
                      <th width="200">Mission</th>
                 			
                 			<th width="160" class="text-center">Action </th>
                 		</tr>
                   <!--  -->
                    <?php if(!empty($departmentdata)){ ?>
                      <?php foreach ($departmentdata as $department) {
                       ?>
                 		<tr class="text-justify">
                 			<td><?php echo $department['id']?></td>
                      <td><img src="<?php echo base_url().'assests/uploads/department/'.$department['department_pic']?>" class="img rounded-circle" width="50" height="50"></td>
                 			<td><?php echo $department['department_name']?></td>
                      <td><?php echo  word_limiter(strip_tags($department['about']),10)?></td>
                      <td><?php echo  word_limiter(strip_tags($department['vision']),10)?></td>
                      <td><?php echo  word_limiter(strip_tags($department['mission']),10)?></td>
                      
                     
                 			<td class=" text-center text-nowrap">
                 				
                 				<a href="<?php echo base_url('admins/department/edit_department/'.$department['id'])?>" class="btn btn-primary btn-sm  "> <i class="fa fa-edit"></i> edit</a>
                        <a href="javascript:void(0)" onclick="deletedepartment(<?php echo $department['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
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

           <!-- /.card -->
          </div>
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
                      <a href="<?php echo base_url().'admins/department/department_slider' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Slider In Department </a>
                  </div>
                  
                 </div>
                 <div class="card-body">
                  <table class="table">
                    <tr class="text-uppercase">
                      <th width="50">#</th>
                      <th width="200">Slider Image</th>
                      <th width="200">Title</th>
                      <th width="200">description</th>
                      <th>Department Name</th>
                      
                      
                      <th width="160" class="text-center">Action </th>
                    </tr>
                   <!--  -->
                    <?php if(!empty($department_slider)){ ?>
                      <?php foreach ($department_slider as $slider) {
                       ?>
                    <tr>
                      <td><?php echo $slider['id']?></td>
                      <td><a href="<?php echo base_url().'assests/uploads/department/slider/'.$slider['slider_img']?>"><img src="<?php echo base_url().'assests/uploads/department/slider/'.$slider['slider_img']?>" class="img " width="100" height="50"></a></td>
                      <td><?php echo $slider['title']?></td>
                      <td><?php echo $slider['description']?></td>
                      <td><?php echo $slider['department_name']?></td>
                     
                     
                      <td class=" text-center text-nowrap">
                        
                        
                        <a href="javascript:void(0)" onclick="deletedepartmentslider(<?php echo $slider['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
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

           <!-- /.card -->
          </div>
          
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
                      <a href="<?php echo base_url().'admins/department/add_staff_in_department' ?>" class="btn btn-primary"> <i class="fas fa-plus"></i>Add Staff In Department </a>
                  </div>
                  
                 </div>
                 <div class="card-body">
                  <div class="row bg-info text-center p-1"><div class="col-md-12"><h5>Staff In Department</h5></div></div>
                  <table class="table">
                    <tr class="text-uppercase">
                      <th width="50">#</th>
                      <th width="50"> Image</th>
                      <th width="50" class="text-nowrap"> Staff Name</th>
                      <th>Department Name</th>
                      <th>Staff type</th>
                      
                      <th width="160" class="text-center">Action </th>
                    </tr>
                   <!--  -->
                    <?php if(!empty($staff_in_department)){ ?>
                      <?php foreach ($staff_in_department as $staff) {
                       ?>
                    <tr>
                      <td><?php echo $staff['id']?></td>
                       <td><img src="<?php echo base_url().'assests/uploads/staff/'.$staff['staff_pic']?>" class="img rounded-circle" width="50" height="50"></td>
                      
                      <td width="200"><?php echo $staff['staff_name'] ?></td>
                      <td><?php echo $staff['department_name']?></td>
                      <td><?php echo $staff['staff_type']?></td>
                     
                      <td class=" text-center text-nowrap">
                        
                        <a href="<?php echo base_url('admins/department/edit_staff_in_department/'.$staff['id'])?>" class="btn btn-primary btn-sm  "> <i class="fa fa-edit"></i> edit</a>
                        <a href="javascript:void(0)" onclick="deletestaffindepartment(<?php echo $staff['id']?>)" class="btn btn-danger btn-sm  "> <i class="fa fa-trash"></i> delete</a>
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

           <!-- /.card -->
          </div>
          
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    function deletedepartment(id){
      if (confirm("Are you Sure ?? want to delete this Department")) {
        window.location.href='<?php echo base_url().'admins/department/deletedepartment/'?>'+id;
       
      }
    }
     function deletedepartmentslider(id){
      if (confirm("Are you Sure ?? want to delete this Slider Image")) {
        window.location.href='<?php echo base_url().'admins/department/deletedepartmentslider/'?>'+id;
        
      }
    }
    function deletestaffindepartment(id) {
        // body...
        if (confirm("Are you Sure ?? want to delete this Slider Image")) {
        window.location.href='<?php echo base_url().'admins/department/deletestaffindepartment/'?>'+id;
      }
    }

    
  </script>


<?php $this->load->view('admin/footer')?>