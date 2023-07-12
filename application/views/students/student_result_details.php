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
              <div class="alert alert-danger"><?php echo $this->session->flashdata('error');?>
              	
              </div><?php }?>
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
										<div class="col-md"><h5>Student  Answers </h5></div>
									</div>
									<?php
									if (!empty($student_ans)) {
										foreach ($student_ans as $student) {?>
											// code...
										

									 ?>

									<div class="row  p-1  my-2 " >
											<div class="col-md-12  border shadow  pb-4 rounded">
												<div class="row p-1 border-bottom" style="min-height: 100px;">
													<div class="col-md-12 ">Question:<?php echo $student['question_no'];if ($student['correct_ans']==$student['user_ans']) {?>
														
														<span class="text-success float-right">Currect Answer </span>{% elif i.userans and i.userans is not i.currectans  %}<span class="text-danger float-right">Wrong Answer </span> {% else %}<span class="text-warning float-right">Not attempt Question </span>{% endif %}
													} ?>  
													 
													</div>
													<div class="col-md form-group  ">
														
														<div>{{i.qid.question}}</div>
														<input type="hidden" id="qid" name="qid" value="{{i.id}}">
														{% if i.qid.question_img %}
														<img src="{{i.qid.question_img}}" class="img-fluid rounded" alt="">
														{% endif %}


													</div>
												</div>
												<label class=" w-100  my-1 option  border rounded {% if 'A' in i.userans and 'A' in i.currectans %} border-success {% elif  'A' in i.userans%} border-danger {% elif 'A' in i.currectans %} border-success{% endif %} ">
													
													<div class="row " id="{{froloop.counter}}">
														{% if 'A' in i.userans and 'A' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Your Answer</span> {% elif  'A' in i.userans%} <span class="text-danger   text-right  w-100 float-right mr-2">Your Answer</span> {% elif 'A' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Currect Answer</span>{% endif %}

														<div class="col-2" style="display: flex; justify-content: center; align-items: center;">
															<span> (A)
															</span>
														</div>
														<div class="col-10  d-flex align-items-center" style="min-height: 50px;">
															
															<div class="row  w-100 p-1">
																
																<div class="col-md-12 p-1 ">{{i.qid.option_a}}</div>
															{% if i.qid.option_a_img %}
															<div class=" col-md-12 p-1 h-100"><img src="{{i.qid.option_a_img}}" class=" img-fluid  rounded" alt="">
															</div>
															{% endif %}
															</div>


														</div>
													</div>

												</label>
												<label class=" w-100 option my-1 border rounded  {% if 'B' in i.userans and 'B' in i.currectans %} border-success {% elif  'B' in i.userans%} border-danger {% elif 'B' in i.currectans %} border-success{% endif %}">
													
													<div class="row  " id="{{froloop.counter}}">
														{% if 'B' in i.userans and 'B' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Your Answer</span> {% elif  'B' in i.userans%} <span class="text-danger  text-right  w-100 float-right mr-2">Your Answer</span> {% elif 'B' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Currect Answer</span>{% endif %}

														<div class="col-2" style="display: flex; justify-content: center; align-items: center;">
															<span> (B)
															</span>
														</div>
														<div class="col-10  d-flex align-items-center" style="min-height: 50px;">
															<div class="row m-1 w-100">
																
																<div class="col-md-12">{{i.qid.option_b}}</div>
															{% if i.qid.option_b_img %}
															<div class=" col-md-12 p-1 h-100"><img src="{{i.qid.option_b_img}}" class=" img-fluid  rounded" alt="">
															</div>
															{% endif %}
															</div>


														</div>
													</div>

												</label>
												<label class=" w-100 option my-1 border rounded {% if 'C' in i.userans and 'C' in i.currectans %} border-success {% elif  'C' in i.userans%} border-danger {% elif 'C' in i.currectans %} border-success{% endif %} ">
													
													<div class="row " id="{{froloop.counter}}">
														{% if 'C' in i.userans and 'C' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Your Answer</span> {% elif  'C' in i.userans%} <span class="text-danger  text-right  w-100 float-right mr-2">Your Answer</span> {% elif 'C' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Currect Answer</span>{% endif %}

														<div class="col-2" style="display: flex; justify-content: center; align-items: center;">
															<span> (C)
															</span>
														</div>
														<div class="col-10  d-flex align-items-center" style="min-height: 50px;">
															<div class="row p-1 w-100">
																
																<div class="col-md-12">{{i.qid.option_c}}</div>
															{% if i.qid.option_c_img %}
															<div class=" col-md-12 p-1 h-100"><img src="{{i.qid.option_c_img}}" class=" img-fluid  rounded" alt="">
															</div>
															{% endif %}
															</div>


														</div>
													</div>

												</label>
												<label class=" w-100 option my-1 border rounded {% if 'D' in i.userans and 'D' in i.currectans %} border-success {% elif  'D' in i.userans%} border-danger {% elif 'D' in i.currectans %} border-success{% endif %}">
													
													<div class="row " id="{{froloop.counter}}">
														{% if 'D' in i.userans and 'D' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Your Answer</span> {% elif  'D' in i.userans%} <span class="text-danger  text-right  w-100 float-right mr-2">Your Answer</span> {% elif 'D' in i.currectans %} <span class="text-success  text-right  w-100 float-right mr-2">Currect Answer</span>{% endif %}

														<div class="col-2" style="display: flex; justify-content: center; align-items: center;">
															<span> (D)
															</span>
														</div>
														<div class="col-10  d-flex align-items-center" style="min-height: 50px;">
															<div class="row p-1 w-100">
																
													

																<div class="col-md-12">{{i.qid.option_d}}</div>
															{% if i.qid.option_d_img %}
															<div class=" col-md-12 p-1 "><img src="{{i.qid.option_d_img}}" class=" img-fluid  rounded" alt="">
															</div>
															{% endif %}
															</div>


														</div>
													</div>

												</label>
												<label> Answer Discription </label>
												<div class="row p-1 border-bottom" style="min-height: 100px;">
													<div class="col-md form-group  ">

														<div>{{i.qid.discription}}</div>
														<input type="hidden" id="qid" name="qid" value="{{i.id}}">
														{% if i.qid.discription_img %}
														<img src="{{i.qid.discription_img}}" class="img-fluid rounded" alt="">
														{% endif %}


													</div>
												</div>
											</div>

										</div>
										<?php 
										}
									}

										 ?>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<?php $this->load->view('students/footer'); ?>