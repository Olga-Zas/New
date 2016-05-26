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
        	<h1> Товари </h1>
            <div class="product_box">
	            <h3>Ноутбук Samsung P28 (NP-28PRKY04)</h3>
            	<a href="#.php"><img src="images/product1/0012.jpg" alt="noyt 12" /></a>
                <p> Знятий з виробництва</p>
                <a href="#.php" class="addtocart"></a>
                <a href="#.php" class="detail"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Ноутбук Samsung X50 (NP-X50C000)</h3>
            	<a href="#.php"><img src="images/product1/0013.jpg" alt="noyt 13" /></a>
                <p>Знятий з виробництва</p>
                <a href="#.php" class="addtocart"></a>
                <a href="#.php" class="detail"></a>
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