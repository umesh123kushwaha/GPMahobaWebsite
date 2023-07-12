		<?php if (!empty($questions))
		{
			?>
				
			
			<label for="" class="font-weight-bold">Question: <?php echo $questions['question_no'] .' / '.$total_question; ?>  </label>	
									
			<div class="row  p-1 overflow-auto " style="height: 450px;">
				<div class="col-md  border shadow  pb-4 rounded">
					<div class="row p-1 border-bottom" style="min-height: 100px;">
						<div class="col-md form-group  ">

							<div>
								<?php echo $questions['question'] ?>
							</div>
							<input type="hidden" name="qid" id="qid" value="<?php echo $questions['id'] ?>">
							<input type="hidden" name="qno" id="qno" value="<?php echo $questions['question_no'] ?>">
							<input type="hidden" name="quiz_id" id="quiz_id" value="<?php echo $questions['quiz_id'] ?>">
							
							


						</div>
					</div>
					<label class=" w-100  my-1 option <?php echo  (!empty($userans)&&$userans['user_ans']=='A')?' border-primary':''; ?> border rounded ">
						<div class="row " id="">


							<div class="col-2"
								style="display: flex; justify-content: center; align-items: center;">
								<span><input type="radio" name="option" value="A" <?php echo  (!empty($userans)&&$userans['user_ans']=='A')?'checked':''; ?>> (A)
								</span>
							</div>
							<div class="col-10 my-2 d-flex align-items-center"
								style="min-height: 50px;">
								
								<?php echo $questions['option_a'] ?>
								
								 


							</div>
						</div>

					</label>
					<label class=" w-100 option my-1 border rounded <?php  echo(!empty($userans)&&$userans['user_ans']=='B')? ' border-primary':''; ?> ">
						<div class="row " id="{{froloop.counter}}">


							<div class="col-2"
								style="display: flex; justify-content: center; align-items: center;">
								<span><input type="radio" name="option" value="B" <?php echo  (!empty($userans)&&$userans['user_ans']=='B')?'checked':''; ?>> (B)
								</span>
							</div>
							<div class="col-10 my-2 d-flex align-items-center"
								style="min-height: 50px;">
								
								<?php echo $questions['option_b'] ?>
								
								


							</div>
						</div>

					</label>
					<label class=" w-100 option my-1 border rounded  <?php echo  (!empty($userans)&&$userans['user_ans']=='C')?' border-primary':'' ;?>">
						<div class="row " id="{{froloop.counter}}">


							<div class="col-2"
								style="display: flex; justify-content: center; align-items: center;">
								<span><input type="radio" name="option" value="C" <?php echo  (!empty($userans)&&$userans['user_ans']=='C')?'checked':''; ?>> (C)
								</span>
							</div>
							<div class="col-10  my-2 align-items-center"
								style="min-height: 50px;">
								
								<?php echo $questions['option_c'] ?>


							</div>
						</div>

					</label>
					<label class=" w-100 option my-1 border rounded  <?php  echo (!empty($userans)&&$userans['user_ans']=='D')? ' border-primary':''; ?>">
						<div class="row align-items-center"  style="min-height: 50px;" id="{{froloop.counter}}">


							<div class="col-2  text-center" 
								>
								<span><input type="radio" name="option" value="D" <?php echo  (!empty($userans)&&$userans['user_ans']=='D')?'checked':''; ?>> (D)
								</span>
								
							</div>
							<div class="col-10 " 
								>
								<div class="my-2"><?php echo $questions['option_d'] ?>
								</div>
							</div>
							
						</div>

					</label>
				</div>
			</div>

			
			<div class="row">
				<div class="col-md-12 my-3">
					<div class="row">
						<button type="reset" class="btn btn-info col-2 m-1"
							id="reset">clear</button>
					
						<input type="hidden" id="qp" name="qp" value="{{qp.id}}">
						<input type="hidden" id="page" name="page"
							value="{{questions.next_page_number}}">


						<button  id="mark"type="button" class="btn btn-warning col-3 m-1 ">Mark For
							Review</button>
							<?php 
							if ($question_no<$total_question) {?>
								<button id="next"type="button" next="<?php echo $question_no+1;  ?>"  class="btn btn-primary col-3 m-1 ">Next</button>
								<button id="save_and_next" next="<?php echo $question_no+1;  ?>"type="button" class="btn btn-success col-3 m-1 ">Save
									& Next</button>
							<?php 

							} else {?>
								<input type="submit" class="btn btn-danger col-2 m-1 ml-auto float-right" id="finish" >
								<?php 
								
							}
							

							 ?>
						


						<!-- <button page='{{questions.next_page_number}}' qpid="{{qp.id}}" class="btn  btn-primary col-3 mx-auto"
							id='SubmitAnswer'>Next</button> -->


						<!-- <a href="?page={{questions.next_page_number}}&&qpid={{qp.id}}"> <button
												class="btn btn-primary col-3 mx-auto" id='SubmitAnswer'>Next</button> </a> -->
						
						
						
						
						
					</div>
				</div>
			</div>


				<?php
			
		} 
		else 
		{?>
			<div> Record Not Found</div>
			

			<?php
		}
		 ?>
		