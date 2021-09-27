<?php 
ob_start();
include('include/header.php');
include('include/connection.php');
?>
<link rel="stylesheet" href="cart/assets/css/style.css">

<section id="collection">
 <div class="collection_main clearfix">
  <div class="container">
  <div class="row">
   <div class="collection text-center clearfix">
    <h2><a href="#">FILTER PAINTINGS BY KEYWORD</a></h2>
	 <div class="input-group">
		<input type="text" id="myInput" class="form-control" placeholder="Search the Sub Category">
		
	 </div>
	 
   </div>
  </div>
 </div>
 </div>
</section>
<section id="collection_area">
<div class="container">
    <h3 class="h3">Sub Category Paintings </h3>
    <div class="row" id="mydiv">
	<?php
	if($_GET['cid'])
	{
		$cid=$_GET['cid'];
    $query=mysqli_query($connect,"select * from painting_details where cid='$cid' ORDER BY id desc");
                                      if(mysqli_num_rows($query)>0)
                                      { 
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
				<?php if($row['sid']=='admin')
						{
							?>
                    <a href="#">
                        <img class="pic-1" src="adminpanel/<?php echo $row['pimg']; ?>">
                    </a>
					<?php 
						}
						else
						{
							?>
							<a href="#">
                        <img class="pic-1" src="seller/<?php echo $row['pimg']; ?>">
                    </a>
						<?php }?>
                    <ul class="social">
                        <li><a href="#0" class="btn-buy js-cd-add-to-cart" data-pid="<?php echo $row['pid']; ?>" data-pname="<?php echo $row['pname']; ?>" data-price="<?php echo $row['pprice']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                   <span class="product-new-label cart-label">Add to cart</span>
                </div>
                <div class="product-content">
                    <h2 class="title" style="font-size:18px;"><?php echo $row['pname']; ?></h2>
					<h3 class="title">By:<?php echo $row['sid']; ?> - <?php echo $row['sname']; ?></h3>
					<h3 class="title"><?php echo $row['pdesc']; ?></h3>
                    <div class="price">
                       $<?php echo $row['pprice']; ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
	<?php }}}?>
		 </div>
</div>
<hr>
</section>
<div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<div class="cd-cart__footer">
				<a href="#" data-toggle="modal" data-target="#myModal2" class="cd-cart__checkout">
          <em >Checkout - $<span id="checkp">0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</div>
		</div>
	</div> <!-- .cd-cart__content -->
</div>
<div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="float:left;padding-bottom:20px">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="modal-header1">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i> <span class="login-title">
                    Customer Login
                </span>
                </div>
     
                    <div class="col-lg-12 login-form">
                        <form action="" method="post" id="customer-form">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME OR EMAIL</label>
                                <input type="text" name="uname" class="form-control" required>
                            </div>
							 <input type="hidden" id="paintingid" name="paintingid">
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
				</div>
		  </div>

		</div>
	  </div>

	  <?php 
                         if(isset($_POST['btn_customer']))
                        {
							
							$_SESSION['paintingid']=$_POST['paintingid'];
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
  header("refresh:1;url=customer/checkoutcart.php"); 

			                    }
                            }
                             else
                             {
                                 echo '<div class="col-lg-12 alert alert-danger">Username and Password mismatch.</div>';
                             
                            }
						}							
							
                        ?>
	  
<?php 
include('include/footer.php');
ob_end_flush();
?>
<script src="cart/assets/js/util.js"></script>
<script src="cart/assets/js/main.js"></script> 

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mydiv div.col-md-3").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>