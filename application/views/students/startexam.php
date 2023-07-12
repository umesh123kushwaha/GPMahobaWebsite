<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assests/front/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assests/front/css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assests/front/css/startexam.css') ?>">
	<script type="text/javascript">
			//code for count down autosubmit.....
			function auto_submit() {
				var question_no = $("#qno").val()
				var qid = $("#qid").val()
				var quiz_id = $("#quiz_id").val;
		

				var userAns = $("input:radio[name=option]:checked").val()
				userAns_save(question_no-1, qid, userAns,quiz_id)


				


			
				window.setTimeout("document.myQp.submit()", 1002);
				window.setTimeout(function () {
					alert("Ooops! Time up..... ");
					

					
				}, 1002);
			}
			// set minutes
			var mins = 10//parseInt(qp.duration);

				// calculate the seconds (don't change this! unless time progresses at a different speed for you...)
			var secs = mins * 60;
			function countdown() {
				setTimeout('Decrement()', 1000);
			}
			function Decrement() {
				
				if (document.getElementById) {
					minutes = document.getElementById("minutes");
					seconds = document.getElementById("seconds");
					// if less than a minute remaining
					if (seconds < 59) {
						
						seconds.value = secs;
					} else {
						x=getminutes();
						x= x<10?'0'+x : x;
						minutes.value = x;

						y= getseconds();
						y= y<10?'0'+y :y
						seconds.value = y;
					}
					secs--;
					
					if (minutes.value=='00' && seconds.value=='00'){
						auto_submit()
					}
					else{
						setTimeout('Decrement()', 1000);

					}

					
				}
			}
			function getminutes() {
				// minutes is seconds divided by 60, rounded down
				mins = Math.floor(secs / 60);
				return mins;
			}
			function getseconds() {
				// take mins remaining (as seconds) away from total seconds remaining
				return secs - Math.round(mins * 60);
			}
		</script>
		<script>
			countdown();

		</script>

</head>
<body>
	
		<header id="header" class=" bg-primary">
			<div class="container-fluid">
				<div class="row  text-white text-center   align-items-center  ">
					<div class="col-md-2  "><i class="fas fa-clock"></i>
						<span id="timer" style="font-size:15px;">
							<input id="minutes" type="text" class=" bg-primary text-white "
								style=" width: 25px; height:25px; border: none; "><span>:</span> <input
								id="seconds" class=" bg-primary text-white" type="text"
								style="width: 25px; border: none;">
						</span>
					</div>
					<div class="col-md-8 "><h4 class="h4"><?php echo $quiz['title'] ?></h4></div>
					<div class="col-md-2 p-1"> <button type="" class="btn-sm btn-danger "><i class="fas fa-power-off"></i> Finish</button></div>
				</div>
			</div>
			
		</header>
		<!-- /header -->
		<main>
			<div class="container-fluid">
				<div class="row p-1">
					<div class="col-md-8 border">

						<form action="student_save_result" name="myQp" method="POST" id="form">
						

						<?php print_r($questionstrings) ?>
								
							</form>
								
						
						
					</div>
					<div class="col-md-4 border">
							<div class="row border bottom " style="min-height: 300px;">
								<div class="col-md">
									<?php 
									for ($i=1; $i <=$total_question; $i++) { 
										// code...
									

									 ?>

									
								 	<button id="question<?php echo $i  ?>" question_no="<?php echo $i ?>" quiz_id="<?php echo $quiz['id'] ?>"
									class=" questions btn  btn-primary btn-light btn-outline-dark rounded-circle m-1 p-1 col-1 w-100  "><?php echo $i ?></button>

									<?php } ?>
							 	</div>
							</div>
							
						<div class="row p-2">
							<div class="col-md ">
								<div class="row p-1 align-items-lg-center">
									<div class="col-1 bg-primary rounded-circle p-1"> &nbsp; </div>
									<div class="col "> Question Visited but Not Answered</div>
								</div>
								<div class="row p-1 align-items-lg-center">
									<div class="col-1 bg-warning rounded-circle p-1"> &nbsp; </div>
									<div class="col "> Mark For Review Question</div>
								</div>
								<div class="row p-1 align-items-lg-center">
									<div class="col-1 bg-success rounded-circle p-1"> &nbsp; </div>
									<div class="col "> Answer Saved of Question</div>
								</div>
								<div class="row p-1 align-items-lg-center">
									<div class="col-1 bg-light  border border-dark rounded-circle p-1"> &nbsp;
									</div>
									<div class="col "> Question Not Visited</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</main>
		
		<!--  -->
			
		
	
	
	<script type="text/javascript" src="<?php echo base_url('assests/front/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assests/front/js/jquery-3.5.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assests/front/admin/dist/js/all.js') ?>"></script>
	


	<script>
		$(document).ready(function() {
			
			
		

		$('.questions').click(function () {
			var question_no = $(this).attr('question_no');
			var quiz_id = $(this).attr('quiz_id');
			

			$(this).removeClass('btn-light')
			$(this).removeClass('btn-outline-dark')
			$(this).addClass('btn-primary')

			getpage(question_no,quiz_id);

		});
	});
		$(document).on("click",".option",function () {
			$('.option').removeClass('border-primary')
			$(this).addClass('border-primary')

		});
		$(document).on("click","#reset",function () {
			$("input:radio[name=option]:checked").removeAttr('checked')
			$('.option').removeClass('border-primary')

		})
	   $(document).on("click", "#next", function () {
	   

		var next = $("#next").attr('next')
		var question_no=$("#qno").val()
		var quiz_id = $("#quiz_id").val();
		
		// var mocktest_id = $("#next").attr('mocktest_id');
		// var subject_id = $("#next").attr('subject_id');
		var x = parseInt(next)

		var id = "#question" + x
		

		$(id).removeClass('btn-light')
		$(id).removeClass('btn-outline-dark')
		$(id).addClass('btn-primary')
		//var qpid=$(this).atrr('qpid')
		getpage(next,quiz_id);

	})
	   	$(document).on("click", "#save_and_next", function () {

		var question_no = $("#qno").val()
		var qid = $("#qid").val()
		var quiz_id = $("#quiz_id").val();
		var next= $("#save_and_next").attr('next')
		

		var userAns = $("input:radio[name=option]:checked").val()
		

		var x = parseInt(next) - 1
		var y = parseInt(next)

		var id = "#question" + x
		var id1 = "#question" + y
		

		userAns_save(question_no, qid, userAns,quiz_id)
		getpage(next, quiz_id)
		if (userAns) {
			$(id).removeClass('btn-light')
			$(id).removeClass('btn-outline-dark')

			$(id).addClass('btn-success')

		}

		
		$(id1).removeClass('btn-light')
		$(id1).removeClass('btn-outline-dark')
		$(id1).addClass('btn-primary')
		// var qpid=$(this).atrr('qpid')

	})
	   function getpage(question_no,quiz_id) {
	   	
	   	// body...
	   	$.ajax({
	   		url: '<?php echo base_url('students/stdQuiz/getquestions') ?>',
	   		type: 'POST',
	   		dataType: 'json',
	   		data: {
	   			question_no:question_no,quiz_id:quiz_id
	   		},
	   	})
	   	.done(function(response) {
	   		console.log("success");
	   		$('#form').html(response['questions'])
	   	})
	   	.fail(function() {
	   		console.log("error");
	   	})
	   	.always(function() {
	   		console.log("complete");
	   	});
	   	

	   }
	   function userAns_save(qno, qid, userAns, quiz_id) {

		$.ajax({
			url: '<?php echo base_url('students/stdQuiz/userAns_save') ?>',
			type: 'POST',
			data: {
				question_no: qno,
				qid: qid,
				option: userAns,
				quiz_id:quiz_id
			}

		})
			.done(function (response) {


				





			})
			.fail(function () {
				alert('Answer save to fail Please  Either give  an answer of given option or only click next button  do not click on  save & next button ')
			})

	}

	</script>
</body>
</html>