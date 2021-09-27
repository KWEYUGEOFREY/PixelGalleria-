<?php 
ob_start();
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
                    <i class="fa fa-key" aria-hidden="true"></i> <span class="login-title">
                    Customer Login
                </span>
                </div>
               

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="customer.php" method="post" id="customer-form">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME OR EMAIL</label>
                                <input type="text" name="uname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                   <div class="text-left">Don't have an account&nbsp;!<a href="cregister.php" class="">&nbsp;Register Now</a></div>
								
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="btn_customer" class="btn btn-outline-primary">LOGIN</button>
                                
								 </div>
                            </div>
                        </form>
                    </div>
                </div>
               <?php 
                         if(isset($_POST['btn_customer']))
                        {
							
                            $uname=trim($_POST['uname']);
                            $pass=md5(trim($_POST['pass']));
							
                            $query_login=mysqli_query($connect, "select * from customer where (uname='$uname' or email='$uname') and pass='$pass'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
										

                                $_SESSION['customer_id']=$row_login['cid'];  
                              $_SESSION['customer_name']=$row_login['fullname'];   
           echo '<div class="col-lg-12 alert alert-success">Customer Login Successfully</div>';
  header("refresh:1;url=customer/cdashboard.php"); 

			                    }
                            }
                             else
                             {
                                 echo '<div class="col-lg-12 alert alert-danger">Username and Password mismatch.</div>';
                             
                            }
						}							
							
                        ?>
	
            </div>
        </div>



</div>
</section>

<script>
  $(document).ready(function($) {
        
				$("#customer-form").validate({
                rules: {
                    uname: "required",                    
                    pass: {
                        required: true,
                        minlength: 8
                    }
                 
                },
                messages: {
                    uname: "Please enter Username",                   
                    pass: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    }
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