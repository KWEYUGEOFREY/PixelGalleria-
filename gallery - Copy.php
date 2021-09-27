<?php 
ob_start();
include('include/header.php');
include('include/connection.php');
?>
<style>
a img{
	height:230px !important;
	width:230px !important;
	
}
</style>
<section id="connect" class="gallery_page">
 <div class="container">
  <div class="row">
   <div class="connect clearfix">
    <h2  style="margin-top:50px;">GALLERY</h2>
   </div>
   <div class="connect_1 clearfix">
		<div class="gallery">
			<a href="img/7.jpg"><img src="img/7.jpg" alt="" title="Beautiful Image"></a>
			<a href="img/8.jpg"><img src="img/8.jpg" alt="" title=""></a>
			
			<a href="img/8.jpg"><img src="img/8.jpg" alt="" title=""></a>
			<a href="img/9.png"><img src="img/9.png" alt="" title="Beautiful Image"></a>
			<a href="img/10.png"><img src="img/10.png" alt="" title=""></a>
			<div class="clear"></div>

			</div>
   </div>
  </div>
 </div>
</section>
<?php 
include('include/footer.php');
ob_end_flush();
?>
