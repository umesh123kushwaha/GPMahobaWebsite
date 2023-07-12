<?php $this->load->view('students/header'); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Result</li>
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
					            <input type="text" name="q" value="" class="form-control float-right" placeholder="Search">

					            <div class="input-group-append">
					              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
					            </div>
					          </div>
							</form>
						</div>
						

					</div>
					<div class="container">
						<div class="row">
							<div class="col-md">
								<div class="row text-center bg-warning text-white p-1">
									<div class="col-md"><h5>Student Result </h5></div>
								</div>
								<div class="row">
									<div class="col-md table-responsive bg-white">
										<table class=" table table-hover">
											<thead class=" text-center text-nowrap">
												<tr>
													<th>S.No</th>
													<th>title</th>
													
													<th>Branch</th>
													<th>Semester</th>
													<th>Subject</th>
													<th>Topic</th>
													<th>Date</th>
													<th>Total Marks</th>
													<th>Obtain_marks</th>
													<th>View</th>
												</tr>
											</thead>
											<tbody class="text-center">
												<?php 	if (!empty($student_results)) {
													// code...
													$sn=1;
													foreach ($student_results as $resultdata) {?>

														<tr>
															<td><?php 	echo $sn ?></td>
															<td><?php 	echo $resultdata['quiz_title'] ?></td>
															<td><?php 	echo $resultdata['branch_name'] ?></td>
															<td><?php 	echo $resultdata['semester_name'] ?></td>
															<td><?php 	echo $resultdata['subject_name'] ?></td>
															<td><?php 	echo $resultdata['topic_name'] ?></td>
															
															<td><?php 	echo $resultdata['created_at'] ?></td>
															<td><?php 	echo $resultdata['total_marks'] ?></td>
															<td><?php 	echo $resultdata['obtain_marks'] ?></td>
															<td><a href="<?php echo base_url ?>"></a></td>
														</tr>
														<?php 
													}
												} ?>
												

												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<?php $this->load->view('students/footer'); ?>