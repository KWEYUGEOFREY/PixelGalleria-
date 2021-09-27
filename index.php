<?php 
include('include/header.php');
include('include/connection.php');
?>
<section id="center">
  <div class="clearfix">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			
			<div class="item active">
				<img src="img/2.jpg" alt="Second slide">
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="item">
				<img src="img/1.jpg" alt="Third slide">
				<div class="carousel-caption">
					
				</div>
			</div>
		</div>
	   
	</div>
	<div class="main-text hidden-xs">
		<div class="col-md-12">
		   <div class="col-sm-4">
		     <div class=" center_slide">
				<h1>Welcome to  <br>Online Art Gallery</h1>
				<h4> <a href="cregister.php">GET REGISTER</a></h4>
				<h6><a href="#">Art & Gallery <i class="fa fa-play-circle"></i></a></h6>
			 </div>
		   </div>
		   <div class="col-sm-3"></div>
		   <div class="col-sm-5">
		     
		   </div>
		
		</div>
	</div>
 </div>
 </section>
 
<section id="deals_page">
 <div class="container">
  <div class="row">
   <div class="deals_page clearfix">
   <?php
    $query=mysqli_query($connect,"select * from category ORDER BY id desc");
                                      if(mysqli_num_rows($query)>0)
                                      { $flag=1;
                                           while($row=mysqli_fetch_array($query))
                                           {if($flag==1)
											   {
                                                ?>
												
    <div class="col-sm-6">
	 <div class="deals_page_left bg_1 clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="#"><img src="adminpanel/<?php echo $row['cimg']; ?>" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6></h6>
		  <h3><a href="subcategories.php?cid=<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></a></h3>
		  <p></p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="subcategories.php?cid=<?php echo $row['cid']; ?>">More</a>
		  <a class="tag_2" href="subcategories.php?cid=<?php echo $row['cid']; ?>">Get this Offer <i class="fa fa-arrow-right"></i></a>
		  </div>
		 </div>
	   </div>
	 </div>
	</div>
											   <?php $flag=0;} else
											   {?>												   
   <div class="col-sm-6">
	 <div class="deals_page_left clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="#"><img src="adminpanel/<?php echo $row['cimg']; ?>" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6></h6>
		  <h3><a href="subcategories.php?cid=<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></a></h3>
		  <p></p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="subcategories.php?cid=<?php echo $row['cid']; ?>">More</a>
		  <a class="tag_2" href="subcategories.php?cid=<?php echo $row['cid']; ?>">Get this Offer <i class="fa fa-arrow-right"></i></a>
		  </div>
		 </div>
	   </div>
	 </div>
	</div>	<div class="margin-top:50px; col-sm-12"><br></div>
											   <?php $flag=1; } }}?>  
  </div>
   
   
  </div>
 </div>
</section>
<?php 
include('include/footer.php');
?>