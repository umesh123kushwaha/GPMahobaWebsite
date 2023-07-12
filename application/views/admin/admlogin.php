
<?php $this->load->view('front/header'); ?>
<style type="text/css" media="screen">
	

</style>
	<div class="container-fluid "id="login">
		<h2 class="text-center">Welcome to Government Polytechnic Mahoba</h2>
		<div class="row p-2">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4  border shadow"id="loginbox" >
				<h3  class="text-center">Admin Login</h3>
				<?php if (!empty($this->session->flashdata('msg'))) {?>
					<p class="alert p-1 alert-danger">
						<?php echo $this->session->flashdata('msg');; ?>
					</p>

					<?php
					# code...
				} ?>
				<div >
					<form method="post" action=" <?php echo base_url('admlogin/adm_athenticate') ?>" >
						<div class="form-group" >
						<label for="">User Id:</label>
						<input type="text" name="userid" class=" form-control <?php echo (form_error('userid')!='')?'is-invalid':' ' ?>" placeholder="Enter User Id">
						<?php echo form_error('userid');?>
						<label for="">Password:</label>
						<input type="password" name="pwd" class="form-control <?php echo (form_error('pwd')!='')?'is-invalid':' ' ?>" placeholder="Enter Password">
						<?php echo form_error('pwd');?>

					</div>
					<div class="form-group">
						 <div class="row">
					       <div class="col-sm-6">
					       	<input type="hidden" name="usrtype" value="5">
					          <?php echo form_submit(array("Name"=>"Btnlogin","class"=>"btn btn-primary btn-block","value"=>"Login","style"=>"margin-bottom:20px"));?>

					       </div>
					       <div class="col-sm-6">
					       <?php echo form_reset(array("Name"=>"BtnClear","class"=>"btn btn-danger btn-block","value"=>"Reset","style"=>"margin-bottom:20px"));?>
					       </div>
					     </div>

						
					</div>


					</form>
					
						
					</div>

					
					
					
				</div>
				
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
<?php $this->load->view('front/footer'); ?>


