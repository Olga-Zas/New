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
        	<a  rel="lightbox[portfolio]" href="images/product1/011.jpg"><img src="images/product1/011.jpg" alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <font size="3" color=black face="times new roman"><table>
                    <tr>
                        <td width="160">Ціна:</td>
                        <td>6888 грн.</td>
                    </tr>
                    <tr>
                        <td>Доступність:</td>
                        <td>В наявності</td>
                    </tr>
                    <tr>
                        <td>Модель:</td>
                        <td>ES1-520-392H</td>
                    </tr>
                    <tr>
                        <td>Виробник:</td>
                        <td>Acer</td>
                    </tr>
                </table></font>
                <div class="cleaner h20"></div>

                <a href="Acer Aspire ES1-520-392H (NX.G2JEU.php" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
            
            <h5>Опис товару</h5>
            <p>Экран 15.6'' (1366x768) HD LED, матовый / AMD E1-2500 (1.4 ГГц) 
			/ RAM 4 ГБ / HDD 500 ГБ / Radeon HD 8240 / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера 
			/ Linpus / 2.4 кг / черный </p> 
            
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