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
        	<h1>Все про товар</h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product1/012.jpg"><img src="images/product1/012.jpg" alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <font size="3" color=black face="times new roman"><table>
                    <tr>
                        <td width="160">Ціна:</td>
                        <td>9799 грн.</td>
                    </tr>
                    <tr>
                        <td>Доступність:</td>
                        <td>В наявності</td>
                    </tr>
                    <tr>
                        <td>Модель:</td>
                        <td>250 G4</td>
                    </tr>
                    <tr>
                        <td>Виробник:</td>
                        <td>HP</td>
                    </tr>
                </table></font>
                <div class="cleaner h20"></div>

                <a href="HP 250 G4 (P5R75ES).php" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
            
            <h5>Опис товару</h5>
            <p>Экран 15.6” (1366x768) HD LED, матовый / Intel Core i3-4005U (1.7 ГГц) / 
			RAM 4 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 
			/ веб-камера / DOS / 2.15 кг / черный </p> 
            
         <div class="cleaner h50"></div>  
        <?php
		 include_once("other_products.php");
		 ?>     
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