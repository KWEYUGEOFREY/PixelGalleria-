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
<?php 		$query=mysqli_query($connect,"select * from painting_details ORDER BY id desc");
                                      if(mysqli_num_rows($query)>0)
                                      { 
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
												
												<?php if($row['sid']=='admin')
						{
							?>
							<a href="adminpanel/<?php echo $row['pimg']; ?>"><img src="adminpanel/<?php echo $row['pimg']; ?>" alt="" title="<?php echo $row['pname']; ?>"></a>
					<?php 
						}
						else
						{
							?>
							<a href="seller/<?php echo $row['pimg']; ?>"><img src="seller/<?php echo $row['pimg']; ?>" alt="" title="<?php echo $row['pname']; ?>"></a>
							
									  <?php } } }?>
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
