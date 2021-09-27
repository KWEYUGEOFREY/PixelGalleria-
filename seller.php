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
                    Seller Login
                </span>
                </div>
               

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="seller.php" method="post" id="seller-form">
                            <div class="form-group">
                                <label class="form-control-label" for="uname">USERNAME OR EMAIL</label>
                                <input type="text" name="uname" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="pass">PASSWORD</label>
                                <input type="password" name="pass" class="form-control">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                   	
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="btn_customer" class="btn btn-outline-primary">LOGIN</button>
                                
								 </div>
                            </div>
<?php 
                         if(isset($_POST['btn_customer']))
                        {
							
                            $uname=trim($_POST['uname']);
                            $pass=md5(trim($_POST['pass']));
                            $query_login=mysqli_query($connect, "select * from seller where (uname='$uname' or email='$uname') and pass='$pass'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
										

                                $_SESSION['seller_id']=$row_login['sid'];  
                              $_SESSION['seller_name']=$row_login['fullname'];   
                               
echo '<div class="col-lg-12 alert alert-success">Seller Login Successfully</div>';
							    header('Refresh: 1;url=seller/sdashboard.php');
                              
                               
			                    }
                            }
                             else
                             {
                                 echo '<div class="col-lg-12 alert alert-danger">Username and Password mismatch.</div>';
                             
                            }
						}							
?>
	
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
        
				$("#seller-form").validate({
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