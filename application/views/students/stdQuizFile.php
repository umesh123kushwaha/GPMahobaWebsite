<?php $this->load->view('students/header'); ?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                
Student Quiz

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('students/deshboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Student quiz</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
    <!-- Main content -->
    <section class="content">
      <div class="container ">
      	<div class="row bg-primary text-center mx-5 rounded ">
      		<div class=" col-md-12 p-1 "> <h4>	Online Quiz</h4>	</div>	

      	</div>
      	<div class="row bg-white border mx-5">
      		<div class=" col-md-12 p-5">
      			<form action="<?php echo base_url('students/stdQuiz/student_quizes')  ?>" method="post">
      				<div class="form-group">
      					<label>Select a Subject</label>
      					
      					<select class=" form-control "id="subject" name="subject">
      						<option>------select a Subject----------</option>
      						<?php 
      						foreach ($Subjects as $subject	) {?>
      							<option value="<?php echo $subject['id'] ?>">	<?php 	echo $subject['subject_name'] ?></option>
      								# code...
      								<?php 	
      							}	


      						 ?>
      					</select>
      				</div>
      				<div class="form-group">
      					<label>Select a Topic</label>
      					<select class=" form-control " id="topic" name="topic">
      						<option>------select a topic-------</option>
      					</select>
      				</div>
      				<div class=" form-group">
      					<input type="submit" class=" btn btn-danger align-items-center" name="submit">
      					<input type="reset" class=" btn btn-dark align-items-center" name="reset">
      				</div>
      			</form>
      			
      		</div>
      		
      	</div>	
                
      </div>
    </section>
    <!-- /.content -->
<?php $this->load->view('students/footer'); ?>
<script>
	$(document).ready(function () {
		$('#subject').change(function () {

			var subject_id = $('#subject').val()

			$.ajax({
				url: '<?php echo base_url('students/stdQuiz/student_get_topic') ?>',
				type: 'POST',
				dataType: ' json',
				data: { subject: subject_id }
			})
				.done(function (response) {
					
					$('#topic').html(response['topics'])
					
				})
				.fail(function () {
					console.log("failed");
				})
		});

	});


</script>