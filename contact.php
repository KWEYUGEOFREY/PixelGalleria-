<?php 
ob_start();
include('include/header.php');
include('include/connection.php');
?>
<section id="contact_us">
		<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12 text-center" style="margin-top:50px;">
				<h1 class="port">CONTACT</h1>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-6">
				<form name="sentMessage" id="contactForm" action="" method="post">
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" id="name" required="" name="name" data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Phone Number</label>
							<input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required="" data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message</label>
							<textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required="" data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="row">
						<div class="form-group col-xs-12 button_1">
							<button type="submit" class="btn btn-success btn-lg" style="background: linear-gradient(-45deg, #3db3c5, #274685);">Send Message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
			 <div class="cont_n clearfix">
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.933188752394!2d144.9576608147202!3d-37.81503387975207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4ac82f2205%3A0xded043b2b7fbf1b8!2sATMC!5e0!3m2!1sen!2sin!4v1599465417104!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			 </div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</section>
		
		<section id="contact">
 <div class="container">
  <div class="row">
   <div class="contact clearfix">
    <div class="col-sm-4">
	 <div class="contact_inner text-center">
	  <h1><i class="fa fa-map-marker"></i></h1>
	  <h2>Address</h2>
	  <h3>Online Art Gallery</h3>
	  <p>
	   228, Dapibus Road East<br>
Australia, NTU 2H5
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_2 text-center">
	  <h1><i class="fa fa-envelope"></i></h1>
	  <h2>Email</h2>
	  <p>
	   <a href="#"> info@twominds.co.in</a><br>
		
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_3 text-center">
	  <h1><i class="fa fa-phone"></i></h1>
	  <h2>Contact No.</h2>
	  <span class="span_1"><i class="fa fa-phone-square"></i>  +011 4019 6231 </span>
	  </div>
	</div>
   </div>
  </div>
 </div>
</section>

		
<script>
 $(document).ready(function($) {
        
				$("#contactForm").validate({
                rules: {
                    name: "required",   
						email: {
      required: true,
      email: true
    },
                    phone: {
		  required: true,
		  number: true,
		  minlength: 9,
		  maxlength: 10
		},
		message:"required"
                 
                },
                messages: {
                    name: "Please enter your name.", 
						email:"Please enter your email address.",
                    phone: {
		  required: "Please Provide Mobile Number",
		  number: "Only Enter mobile in Numbers",
		  minlength: "Your mobile number must be at least 9 characters long",
		  maxlength: "Your mobile number maximum 10 characters"
		},
		message:"Please enter a message"
					
                },
                 
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
    });
	</script>

<?php 
include('include/footer.php');
ob_end_flush();
?>
