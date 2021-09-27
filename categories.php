
<?php 
ob_start();
include('include/header.php');
include('include/connection.php');
?>
<section id="collection">
 <div class="collection_main clearfix">
  <div class="container">
  <div class="row">
   <div class="collection text-center clearfix">
    <h2><a href="#">SEARCH THE CATEGORY</a></h2>
	 <div class="input-group">
		<input type="text" id="myInput" class="form-control" placeholder="Search the Category">
		
	 </div>
	 
   </div>
  </div>
 </div>
 </div>
</section>
<section id="deals_page">
 <div class="container">
  <div class="row">
  <div class="courses clearfix">
    <h3 class="heading_tag"  style="margin-top:50px;margin-bottom:50px;"> OUR CATEGORIES</h3>
   </div>
   <div class="deals_page clearfix" id="catdiv">
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
ob_end_flush();
?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#catdiv div.col-sm-6").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>