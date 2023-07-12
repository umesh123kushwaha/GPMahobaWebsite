<?php $this->load->view('front/header'); ?>

	


<style>
input,select,textarea
{
  margin-bottom:20px;
}
</style>
<div class="row p-1" style="min-height:600px; background-color:whitesmoke">
 <div class="col-sm-1"></div>
 <div class="col-sm-6 border shadow" >
   <h3 class="text-center" style="border-bottom:1px solid blue;padding-bottom:15px;">Candidate Registration</h3>
  <?php if (!empty($this->session->flashdata("res"))){ 
   ?>
   <p class="text-white bg-danger text-center"  style="font-size:20px;padding:6px;"><?php echo $this->session->flashdata("res");?></p>
    <?php } echo form_open_multipart("Registration/SaveRegistration");?>
     <div class="row">
       <div class="col-sm-6">
       	<label for="">Name</label>
       	
          <?php echo form_input(array("Name"=>"Name","class"=>"form-control","placeholder"=>"Name"));?>
       </div>
       <div class="col-sm-6">
       		<label for="">Gender</label>
         <span class="form-control">
        
           <?php echo form_radio("Gender","Male",array("checked"=>true));?> Male
           <?php echo form_radio("Gender","Female");?> Female
         </span>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
       		<label for="">DOB</label>
          <?php echo form_input(array("Name"=>"DOB","class"=>"form-control","type"=>"date"));?>
       </div>
       <div class="col-sm-6">
       		<label for="">Highest Qulification</label>
           <?php
             $quali=array(""=>"Select Highest Quealification","BCA"=>"BCA","MCA"=>"MCA","Diploma(CS)"=>"Diploma(CS)","B.Tech(CS)"=>"B.Tech(CS)");
             echo form_dropdown("Qualification",$quali,"",array("class"=>"form-control"));
           ?>
           
       </div>
       
       
       </div>
       <div class="row">
       	<div class="col-sm-6">
	       		<label for="">Branch</label>
	           <?php
	             $quali=array(""=>"Select Branch","356"=>"INFORAMATION TECHNOLOGY","355"=>"COMPUTER SCIENCE AND ENGINEERING","328"=>"ELECTRICAL ENGINEERING","330"=>"ELECTRONIC ENGINEERING","343"=>"MECHANICAL ENGINEERING (PRODUCTION)","378"=>"ELECTRICAL ENGINEERING [LATERAL ENTRY]","380"=>"ELECTRONICS ENGINEERING [LATERAL ENTRY]","386"=>"MECHANICAL ENGINEERING (PRODUCTION) [LATERAL ENTRY]","389"=>"COMPUTER SCIENCE AND ENGINEERING (LATERAL ENTRY)","390"=>"INFORMATION TECHNOLOGY [LATERAL ENTRY]");
	             echo form_dropdown("branch",$quali,"",array("class"=>"form-control"));
	           ?>
	           
	       </div>
	       <div class="col-sm-6">
	       		<label for="">Addminssion Date</label>
	          <?php echo form_input(array("Name"=>"DOA","class"=>"form-control","type"=>"date"));?>
	       </div>
	       
       
       
       </div>
       

     
     <div class="row">
       <div class="col-sm-6">
       		<label for="">Email ID</label>
          <?php echo form_input(array("Name"=>"EmailId","class"=>"form-control","type"=>"email","placeholder"=>"EmailId"));?>
       </div>
       <div class="col-sm-6">
       		<label for="">MOB No</label>
           <?php echo form_input(array("Name"=>"MobNo","class"=>"form-control","type"=>"number","placeholder"=>"Mobile No"));?>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
       		<label for="">City</label>
        <?php
         $ct=array(""=>"Select City","Chitrakoot"=>"Chitrakoot","Jhansi"=>"Jhansi","Gorakhpur"=>"Gorakhpur","jauinpur"=>"jaunpur");
             echo form_dropdown("City",$ct,"",array("class"=>"form-control")); ?>
              <label for="">Picture</label>
             <p class="form-control" style="margin-bottom:20px;padding-top:0px">Upload Photo: <span id="spfile" style="color:blue;font-size:15px;" class="glyphicon glyphicon-paperclip btn"></span>
             <span id="sppicname" class="text-primary"></span>

             <?php echo form_upload(array("Name"=>"UserPic","Id"=>"UserPic","style"=>"display:none"));?>
             </p>
             <label for="">User Name</label>
         
          <?php echo form_input(array("Name"=>"usrname","class"=>"form-control","placeholder"=>"Enter User Name"));?>
       </div>
       <div class="col-sm-6">
       		<label for="">Address</label>
           <?php echo form_textarea(array("Name"=>"Address","placeholder"=>"Address","rows"=>"11","class"=>"form-control"));  ?>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
       		<label for="">Password</label>
          <?php echo form_password(array("Name"=>"Pass","class"=>"form-control","placeholder"=>"Password"));?>
          
       </div>
       <div class="col-sm-6">
       		<label for="">Confirm Password</label>
          <?php echo form_password(array("Name"=>"Conf_Pass","class"=>"form-control","placeholder"=>"Confirm Password"));?>
       </div>
     </div>
     
     <div class="row">
       <div class="col-sm-6">
       		<label for="">Captcha</label>
          <?php echo form_input(array("Name"=>"Captcha","class"=>"form-control","placeholder"=>"Enter Captcha Code"));?>
       </div>
       <div class="col-sm-6" style="margin-bottom:20px;">
         <?php echo $image;?>
         <img id="ImgRefresh" src="<?=base_url();?>assests/front/images/refresh.png" width="35px" height="35px" title="Refresh Code" style="cursor:pointer;margin-left:15px" />
       </div>
       <?php echo form_hidden('usrtype', '4'); ?>
     </div>
     <div class="row">
       <div class="col-sm-6">
          <?php echo form_submit(array("Name"=>"BtnSave","class"=>"btn btn-primary btn-block","value"=>"Register Now","style"=>"margin-bottom:20px"));?>
       </div>
       <div class="col-sm-6">
       <?php echo form_reset(array("Name"=>"BtnClear","class"=>"btn btn-danger btn-block","value"=>"Reset","style"=>"margin-bottom:20px"));?>
       </div>
     </div>
    <?php echo form_close();?>
 </div>
 <div class="col-sm-5">
  <img src="<?=base_url();?>assests/front/images/register.png" style="width:100%;min-height:600px;" />
 </div>
</div>
<?php $this->load->view('front/footer'); ?>
<script>
  $(document).ready(function(){
  
    $("#spfile").click(function(){
      $("#UserPic").trigger("click");
    });
    $("#UserPic").change(function(){
      var x=$(this).val();
      x=x.substring(x.lastIndexOf('\\')+1);
      $("#sppicname").text(x);
    });
    // To get new captcha image
    $("#ImgRefresh").click(function(){
          $.ajax({
            type:"POST",
            url:"<?php echo base_url();?>Registration/GetNewCaptcha",
            success:function(res){
              $("#ImgCaptcha").remove();
              $("#ImgRefresh").before(res);
            }
          });
    });
  });
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#country').change(function() {
			var country_id= $(this).val();
			// alert(country_id)
			/* Act on the event */
			$.ajax({
				url: '<?php echo base_url('home/getStates') ?>',
				type: 'post',
				dataType: ' json',
				data: {country_id: country_id},
			})
			.done(function(response) {
				if (response['states']) {
					$('#state').html(response['states']);

				}
				

			})
			.fail(function() {
				console.log("error");
			})
			// .always(function() {
			// 	console.log("complete");
			// });
			

				$('#city').html("<option  value=\"\">---Select city---</option>")
			
			
		});
		$('#state').change(function() {
			var state_id= $(this).val();
			// alert(state_id);
			$.ajax({
				url: '<?php echo base_url('home/getCities') ?>',
				type: 'post',
				dataType: ' json',
				data: {state_id: state_id},
			})
			.done(function(response) {
				if (response['cities']) {
					$('#city').html(response['cities']);

				}
				

			})
			.fail(function() {
				console.log("error");
			})
			// .always(function() {
			// 	console.log("complete");
			// });
			
		});
		$('#form').submit(function(event) {
			event.preventDefault();
			$.ajax({
				url: '<?php echo base_url('home/saveUser') ?>',
				type: 'post',
				dataType: 'json',
				data: $(this).serializeArray(),
			})
			.done(function(response) {
				console.log("success");
				if (response['status']==0)
				 {
					if (response['fname'])
					{
						$('.fname_error').html(response['fname']);
						$('#fname').addClass('is-invalid');
						$('.fname_error').addClass('invalid-feedback');
						
					}
					if (response['lname'])

					{
						$('.lname_error').html(response['lname']);
						$('input[name="lname"]').addClass('is-invalid')
						$('.lname_error').addClass('invalid-feedback')
						
					}
					if (response['email'])
					{
						$('.email_error').html(response['email']);
						$('input[name="email"]').addClass('is-invalid')
						$('.email_error').addClass('invalid-feedback')
					}
					if (response['password'])
					{
						$('.password_error').html(response['password']);
						$('input[name="password"]').addClass('is-invalid')
						$('.password_error').addClass('invalid-feedback')
					}

					if (response['username'])
					{
						$('.username_error').html(response['username']);
						$('input[name="username"]').addClass('is-invalid')
						$('.username_error').addClass('invalid-feedback')
					}

					
					if (response['country'])
					{
						$('.country_error').html(response['country']);
						$('select[name="country"]').addClass('is-invalid');
						$('.country_error').addClass('invalid-feedback');
					}
					if (response['state'])
					{
						$('.state_error').html(response['state']);
						$('select[name="state"]').addClass('is-invalid');
						$('.state_error').addClass('invalid-feedback');
					}
					if (response['city'])
					{
						$('.city_error').html(response['city']);
						$('select[name="city"]').addClass('is-invalid');
						$('.city_error').addClass('invalid-feedback');
					}
					

				}else
				{
					
					window.location.href="<?php echo base_url('home/index') ?>";

				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			
		});


	});

</script>