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
        	<div id="slider-wrapper">
                <center><div id="slider" class="nivoSlider">
                    <img src="images/slider1/011.jpg" alt="" />
                    <a href="#"><img src="images/slider1/011.jpg" alt="" /></a>
                    <img src="images/slider1/012.jpg" alt="" />
                    <img src="images/slider1/015.jpg" alt=""  />
                </div></center>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	<h1>Нові товари</h1>
            <div class="product_box">
	            <h3>Acer Aspire ES1-520-392H (NX.G2JEU.002) Суперціна!</h3>
            	<a href="productdetail1.php"><img src="images/product1/01.jpg" alt="noyt 1" /></a>
                <p> Акція! Флешка 64 ГБ в подарунок! </p>
              <p class="product_price">6888 грн.</p>
                <a href="Acer Aspire ES1-520-392H (NX.G2JEU.php" class="addtocart"></a>
                <a href="productdetail1.php" class="detail"></a>
            </div>        	
            <div class="product_box">
            	<h3>Ноутбук HP 250 G4 (P5R75ES) Суперціна!!!</h3>
            	<a href="productdetail2.php"><img src="images/product1/02.jpg" alt="noyt 2" /></a>
                <p>Стара ціна: <strike>10499 грн.</strike></p>
            <p class="product_price">9799 грн.</p>
                <a href="HP 250 G4 (P5R75ES).php" class="addtocart"></a>
                <a href="productdetail2.php" class="detail"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Ноутбук Dell Inspiron 3542 (I35C45DIL-46) Black</h3>
            	<a href="productdetail3.php"><img src="images/product1/03.jpg" alt="noyt 3" /></a>
                <p>Бездротова мишка в подарунок!</p>
              <p class="product_price">7853 грн.</p>
                <a href="Dell Inspiron 3542 (I35C45DIL-46) Black.php" class="addtocart"></a>
                <a href="productdetail3.php" class="detail"></a>
            </div>     
            
            <div class="cleaner"></div>
               	
            <div class="product_box">
            	<h3>Asus X540SA (X540SA-XX012D) Chocolate Black</h3>
            	<a href="productdetail4.php"><img src="images/product1/04.jpg" alt="noyt 4" /></a>
                <p>Суперціна!!!</p>
              <p class="product_price">7350 грн.</p>
                <a href="Asus X540SA (X540SA-XX012D) Chocolate Black.php" class="addtocart"></a>
                <a href="productdetail4.php" class="detail"></a>
            </div>        	
            <div class="product_box">
	            <h3>Lenovo IdeaPad 100-14 (80MH001XUA) Суперціна!</h3>
            	<a href="productdetail5.php"><img src="images/product1/05.jpg" alt="noyt 5" /></a>
                <p>Акція! Суперціна на доступні 14-дюймові ноутбуки Lenovo + бездротова мишка в подарунок</p>
            <p class="product_price"> 6199 грн.</p>
                <a href="Lenovo IdeaPad 100-14 (80MH001XUA).php" class="addtocart"></a>
                <a href="productdetail5.php" class="detail"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>HP 15-ac099ur (P3S80EA) White-Silver Суперцена!!!</h3>
            	<a href="productdetail6.php"><img src="images/product1/06.jpg" alt="noyt 6" /></a>
              <p class="product_price">8799 грн.</p>
                <a href="HP 15-ac099ur.php" class="addtocart"></a>
                <a href="productdetail6.php" class="detail"></a>
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