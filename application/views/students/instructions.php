<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mock Test Instructions</title>
	<link rel="stylesheet" href="<?php echo base_url('assests/front/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assesst/front/css/font-awesome.css') ?>">
	<style type="text/css" media="screen">
		body{margin:0px;padding:0px;background-color:#ffffff;font-family: 'Open Sans', sans-serif;font-size:14px;position:fixed;left:0;right:0;height:100%;}
.clear{clear:both;}
		.insheader{
			background:#41a0c4;padding:7px 50px 7px 50px;height:auto;position:absolute;left:0;right:0;overflow:hidden;width:auto;

			
		}
		.instr-footer{
			background:#e8e9e9;
			padding:7px 50px 0px 50px;
			position:absolute;bottom:0px;
			height:auto;
			overflow:hidden;
			left:0;
			right:0;
			width:auto;
			margin-top: 100px;
		}
		.bottam-check{
			float:left;
			color:#F00;
			font-size:12px;
			margin:14px 0 14px 0;
			font-weight:normal;
			vertical-align:top;
			 width:70%;
		}
		.check-align{
			vertical-align: top;
			 margin: 1px 8px 0px 0px;
			 align="top";
		}
		.showdefaultlanglage{
			float:left;
			margin:10px 25px 0 25px;
		}
		.submit1 {
			float:right;
		}
		span.submit-button1 { 
			background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
			border: 1px solid #ccc;
			border-radius: 4px; 
			display: inline-block;
			font-size: 16px; 
			letter-spacing: 1px; 
			margin: 5px 0 0; 
			padding: 2px 14px;
		}
		a.submit-button1 { 
			background: #41a0c4;  
			border: 1px solid #1fb1bd;
			color:#fff; 
			border-radius: 4px; 
			display: inline-block; 
			font-size: 16px; 
			letter-spacing: 1px; 
			margin: 5px 0 0; 
			padding: 2px 14px; 
			text-decoration:none;
		}
		.submit_active, .submit_active .submit-button {  
			background-color: #3173b4 !important; 
			color: #fff !important;
		}
		.submit{
			border:1px solid #bdbdbd;
			border-radius:4px;
			color:#000000;
			display:block;
			float:right;
			margin:0 10px 0 0;
			text-decoration: none;
		}
		.submit-button {
			background: rgba(0, 0, 0, 0) none repeat scroll 0 0; 
			border: medium none; 
			cursor: pointer;  
			margin: 0; 
			padding:7px 19px; 
			font-size:17px; 
			letter-spacing:1px; 
		}
		.instraction{
			line-height:30px;
			padding:0 10px 0 10px;
			position:absolute;
			top:81px;
			bottom:95px;
			left:0;
			right:0;
			text-align:justify;
			overflow:auto;
		}
		.header .btn {
			background:none; 
			border: #fff solid 1px;
			border-radius: 50%;
			width: 30px;height: 30px;
			line-height: 28px;
			font-size: 20px;
			padding: 0;
			font-weight: 700;
			margin-left: 9px;
			cursor: pointer;
			}
		.header .btn:hover, .header .btn:focus { 
			color: #fff;
		}
		@media only screen and (max-width:767px){
			body{
				font-size: 12px;
			}

			 .insheader h3{
				font-size: 15px;
			}
			.instr-footer { height:auto; padding:10px 15px;}
			.bottam-check { width:100%; margin:7px 0 0;}

		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-primary text-center p-1 insheader   ">
			<div class="col-1"> 
				<img src="<?php echo base_url('assest/images/logo4.png') ?>" class=" rounded-circle" width="50px" heigth="50px" alt="">
				
			</div>
			<div class="col p-1 float-left"><h3 class="text-white"><?php echo $quiz['title']; ?></h3> </div>
			<div class="col-2 float-left">Welcome Umesh</div>
		</div>
		<div class="row">
			
			<div class=" instraction ">
				
						<table class="table table-bordered mt-1  text-center">
							<tr class="bg-light">
								<th class="">Total Questions</th>
								<th class="">Total Time (min)</th>
								<th class="">Maximum Marks</th>
							</tr>
							<tr class="">
								<td class="">  <?php echo $quiz['total_question'] ?> </td>
								<td class=""><?php echo $quiz['duration'] ?></td>
								<td class=""><?php echo $quiz['total_question'] ?></td>
							</tr>
						</table>
						
						
							<div class="container">
								<h3>Instructions</h3>
								<p>The clock has been set at the server and the countdown timer at the top of your screen will display the time remaining for you to complete the exam. When the clock runs out, the exam ends by default. You are not required to end or submit your exam.</p>
								<p>The question palette at the right of screen shows one of the following statuses of each of the questions numbered:</p>
								<p> <span class="border rounded-circle "> &nbsp;&nbsp;&nbsp;&nbsp;</span> You have not visited the question yet.</p>
								<p><span class="border rounded-circle bg-light "> &nbsp;&nbsp;&nbsp;&nbsp;</span>  You have visited question but have not answered.</p>
								<p><span class="border rounded-circle bg-success "> &nbsp;&nbsp;&nbsp;&nbsp;</span>  You have answered the question.</p>
								<p><span class="border rounded-circle bg-info  "> &nbsp;&nbsp;&nbsp;&nbsp;</span>  You have not answered but have marked the question for review.</p>
								<p><span class="border rounded-circle bg-primary "> &nbsp;&nbsp;&nbsp;&nbsp;</span>  You have answered and also have marked the question for review.</p>
								<p>The Marked for Review status simply acts as a reminder that you have set to look at the question again.<b><i> If an answer is selected for a question that is Marked for Review, the answer will be considered in the final evaluation.</i></b></p>
								<p>You <b>can't reattempt</b> this test. So for best experience do not answer by guessing.</p>
							</div>
						
						
						
					
			</div>
			<div class="instr-footer">
							<form action="<?php echo base_url('students/stdQuiz/startexam') ?>" method="post" accept-charset="utf-8">
								
								<div id="condition" class="bottam-check">
									<label style="cursor:pointer">
									<input name="tnc" id="termcondition" class="check-align" align="top" type="checkbox" value="1" />
									I have read and understood the instructions. I agree that in case of not adhering to the exam instructions, I will be disqualified from giving the exam. </label>
								</div>
								<div class="showdefaultlanglage"> <b>View in :</b>
									<select id="showdefaultlan" name="showdefaultlan">
										<option value="ENGLISH" selected="selected">English</option>
										<option value="HINDI">Hindi</option>
									</select>
								</div>
								<input type="hidden" name="quiz_id" value="<?php echo $quiz['id'] ?>">
								<div class="submit1" id="chaclass">
									<button type="submit" href="javascript:void(0)" id="startTest" class="btn btn-danger" disabled="true">Start Test</button>
								</div>
								<div class="clear"></div>
							</form>
						</div>
		</div>

	</div>
	<script src=" <?php echo base_url('assests/front/js/jquery-1.10.2.min.js') ?>" type="text/javascript" charset="utf-8"></script>

<script >
	
	$(document).ready(function() {
		
		
		$('#termcondition').change(function() {
			if ($('#termcondition').prop('checked')) {
				
				$('#startTest').prop('disabled', false)
			}
			else{
				alert('Please select term and condition')
				$('#startTest').prop('disabled', true)

			}
			/* Act on the event */
			
		});

		
	});
</script>
	
		
		
	
	
</body>
</html>