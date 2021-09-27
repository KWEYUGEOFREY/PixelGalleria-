<?php 
include('include/header.php');
include('include/connection.php');
?>
	
			
			<section id="contact_us">	
    <div class="container">
        <div class="row">
		<div class="row">
			<div class="col-sm-12 text-center">
				
			</div>
		</div><br>
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-user" aria-hidden="true"></i> <span class="login-title">
                    Customer Register
                </span>
                </div>
               <?php
if(isset($_POST['btn_submit']))
{ 
$fullname=trim($_POST['fullname']);
    $uname=trim($_POST['uname']);
  
   
    $pass=md5(trim($_POST['pass']));
	 $repass=md5(trim($_POST['cpass']));
	$email=trim($_POST['email']);
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
	
    if($fullname && $uname)
    {
        if($pass==$repass)
        {
			$str="insert into customer(fullname,uname,pass,email,mobile,address) values('$fullname','$uname','$pass','$email','$mobile','$address')";
        
        if(mysqli_query($connect,$str))
        {
			$query2=mysqli_query($connect,"SELECT * FROM customer WHERE uname='$uname' and pass='$pass'");
						$row2=mysqli_fetch_array($query2);
						$path=$row2['cid'];;
            echo '<div class="col-lg-12 alert alert-success">Customer Registration Done Successfully.</div>';
        }
        else
        {
            echo '<div class="col-lg-12 alert alert-danger">Error Occured.' . $str .' <br>' . mysqli_error($connect).'</div>';
        }
        }
        else
        {
            echo '<div class="alert alert-danger">Password and Confirm Password Mismatch</div>';
        }
    }
	 else
                            {
                                echo '<div class="alert alert-danger">All Fields Required.</div>';
                            }
}
?>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="cregister.php" method="post" id="cregister-form">
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" name="uname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input type="password" name="cpass" class="form-control" required>
                            </div>
<div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label class="form-control-label">Mobile</label>
                                <input type="text" name="mobile" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label class="form-control-label">Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                   
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="btn_submit" class="btn btn-outline-primary">Register Now</button>
                                
								 </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>



</div>
</section>
<script>
 $(document).ready(function($) {
        
				$("#cregister-form").validate({
                rules: {
                     fullname: "required",   
					uname: "required",                    
                    pass: {
                        required: true,
                        minlength: 8
                    },
					cpass: {
                        required: true,
                        minlength: 8
                    },
					email: {
      required: true,
      email: true
    },
	mobile: {
		  required: true,
		  number: true,
		  minlength: 9,
		  maxlength: 10
		},
		
          address: "required"       
                },
                messages: {
                    fullname: "Please enter Fullname",
					uname: "Please enter Username",                   
                    pass: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
					cpass: {
                        required: "Please provide a confirm password",
                        minlength: "Your confirm password must be at least 8 characters long"
                    },
					
					email: "Please Provide Email",
     
	mobile: {
		  required: "Please Provide Mobile Number",
		  number: "Only Enter mobile in Numbers",
		  minlength: "Your mobile number must be at least 9 characters long",
		  maxlength: "Your mobile number maximum 10 characters"
		},
		
          address: "Please Provide address" 
					
                },
                 
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
    });
	</script>

<?php 
include('include/footer.php');
?>