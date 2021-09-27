
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
<section id="collection_area">
 <div class="container">
  <div class="row">
   <div class="collection_area clearfix">
    <div class="courses clearfix">
    <h3 class="heading_tag"  style="margin-top:50px;"> OUR CATEGORIES</h3>
   </div>
    <div class="team clearfix" id="mydiv">
    <div class="col-sm-3 space_left">
	 <div class="team_inner">
	  <div class="card-image"><img src="img/7.jpg" width="100%"></div>
	  <h4><a href="#">Painting</a></h4>
	<div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">More</a></div>
		  <p class="para_1"></p>
	 </div>
	</div>
	<div class="col-sm-3 space_left">
	 <div class="team_inner">
	  <div class="card-image"><img src="img/8.jpg" width="100%"></div>
	  <h4><a href="#">Print Making</a></h4>
	  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">More</a></div>
		  <p class="para_1"></p> </div>
	</div>
	<div class="col-sm-3 space_left">
	 <div class="team_inner">
	  <div class="card-image"><img src="img/9.png" width="100%"></div>
	  <h4><a href="#">New Media </a></h4>
	  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">More</a></div>
		  <p class="para_1"></p> </div>
	</div>
	<div class="col-sm-3 space_left">
	 <div class="team_inner">
	  <div class="card-image"><img src="img/10.png" width="100%"></div>
	  <h4><a href="#">Collection</a></h4>
	  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">More</a></div>
		  <p class="para_1"></p> </div>
	</div>
   </div>
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
    $("#mydiv div.space_left").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>