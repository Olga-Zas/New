<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head></head>
<body>
<div id="templatemo_header">
    	<div id="site_title"><h1><a href="index.php">Онлайн-магазин ноутбуків</a></h1></div>
        <div id="header_right">
	<?php	
		if(isset($_SESSION['name']))
		{
		echo '<p>
	         <a href="#">Мій акаунт</a> | <a href="#">Мій лист побажань</a> |</p>';
		echo "Вітаємо ".$_SESSION['name']."!".'<form method="POST" action="index.php">
		<input type="submit" name="logout" value="Вихід" />
		</form>';
	}
	else 
	{
		echo '<p>
	         <a href="#">Мій акаунт</a> | <a href="#">Мій лист побажань</a> | <a href="vhod.php">Вхід</a>| <a href="registration.php">Реєстрація</a></p>';
	}
	?>
		</div>
        <div class="cleaner"></div>
    </div> 
	</body>
</html>