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
    <h2><a href="#">FILTER PAINTINGS BY KEYWORD</a></h2>
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
    <h3 class="h3">Sub Category Paintings </h3>
    <div class="row" id="mydiv">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
					<span class="product-new-label cart-label">Add to cart</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                      
                    </a>
                    <ul class="social">
	                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
					<span class="product-new-label cart-label">Add to cart</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <div class="price">
                        $43.50
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                      
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
					<span class="product-new-label cart-label">Add to cart</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg">
                      
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
					<span class="product-new-label cart-label">Add to cart</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
</section>
<?php 
include('include/footer.php');
ob_end_flush();
?>
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