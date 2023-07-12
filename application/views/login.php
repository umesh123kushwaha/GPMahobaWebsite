
<?php $this->load->view('front/header'); ?>
<style type="text/css" media="screen">
#login{
	background-image: url(<?php echo base_url('assests/front/images/register2.jpg') ?>);
	background-repeat: no-repeat;
	background-size:cover;

}
	

</style>
	<div class="container-fluid "id="login">
		<h2 class="text-center">Welcome to Government Polytechnic Mahoba</h2>
		<div class="row p-2">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4  bg-white border shadow"id="loginbox" >
				<h3  class="text-center">Login</h3>
				<?php if (!empty($this->session->flashdata('msg'))) {?>
					<p class="alert p-1 alert-danger">
						<?php echo $this->session->flashdata('msg');; ?>
					</p>

					<?php
					# code...
				} ?>
				<div >
					<?php echo form_open('Login/authenticate'); ?>
					<div class="form-group">
						<label for="">User Type</label>
					
						<select name="usrtype" class="form-control">
							<option value="">--Select User----</option>
							<option value="4">Student</option>
							<option value="2">Staff</option>
							<option value="3">HOD</option>
							
						</select>
						<?php echo form_error('usrtype');?>
						
					</div>

					<div class="form-group" >
						<label for="">User Id:</label>
						<input type="text" name="userid" class=" form-control" placeholder="Enter User Id">
						<?php echo form_error('userid');?>
						<label for="">Password:</label>
						<input type="password" name="pwd" class="form-control" placeholder="Enter Password">
						<?php echo form_error('pwd');?>

					</div>
					<div class="form-group">
						 <div class="row">
					       <div class="col-sm-6">
					          <?php echo form_submit(array("Name"=>"Btnlogin","class"=>"btn btn-primary btn-block","value"=>"Login","style"=>"margin-bottom:20px"));?>

					       </div>
					       <div class="col-sm-6">
					       <?php echo form_reset(array("Name"=>"BtnClear","class"=>"btn btn-danger btn-block","value"=>"Reset","style"=>"margin-bottom:20px"));?>
					       </div>
					     </div>

						
					</div>
					<?php echo form_close(); ?>
					
				</div>
				
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
<?php $this->load->view('front/footer'); ?>


