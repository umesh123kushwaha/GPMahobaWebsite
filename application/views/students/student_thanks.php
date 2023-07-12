<?php $this->load->view('students/header'); ?>
<div class="container">
		<div class="row ">
			<div class="col-md-12 text-center">
				<h1>Government Polytechnic Mahoba </h1>

				<div class="col-md-12">
					<h4>Your Score is <?php echo $score."/".$total_no; ?></h4>
				</div>
				<div class="col-md-12">
					<img src="<?php echo base_url().'assests/uploads/thanks.gif' ?>" class="img-fluid" alt="">
				</div>
				<div class=" text-warning">
					<h2>Thanks for Participating in Online Examination Quiz </h2>
				</div>
				<div class="">Give Feedback regards this Quiz <a href="#">Click Hare</a></div>
			</div>
		</div>

	</div>
	<?php $this->load->view('students/footer'); ?>