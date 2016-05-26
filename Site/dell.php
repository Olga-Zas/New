<?php 
include_once("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once("head.php");
?>
</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
<?php
include_once("header.php");
include_once("menu_bar.php");
?>
    <div id="templatemo_main">
    	<?php
		include_once("sidebar.php");
		?>
        <div id="content" class="float_r">
        	<h1> Dell </h1>
            <div class="product_box">
            	<h3>Ноутбук Dell Inspiron 3551 (I35C25NIW-22) Black</h3>
            	<a href="productdetail7.php"><img src="images/product1/007.jpg" alt="noyt 7" /></a>
				<p class="product_price">7399 грн.</p>
                <a href="Dell Inspiron 3551 (I35C25NIW-22) Black.php" class="addtocart"></a>
                <a href="productdetail7.php" class="detail"></a>
            </div>
            <div class="product_box no_margin_right">
            	<h3>Ноутбук Dell Inspiron 3542 (I35C45DIL-46) Black</h3>
            	<a href="productdetail3.php"><img src="images/product1/03.jpg" alt="noyt 3" /></a>
                <p>Бездротова мишка в подарунок!</p>
              <p class="product_price">7853 грн.</p>
                <a href="Dell Inspiron 3542 (I35C45DIL-46) Black.php" class="addtocart"></a>
                <a href="productdetail3.php" class="detail"></a>
            </div>            	 
        </div> 
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>