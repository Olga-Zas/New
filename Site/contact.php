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
        	<h1>Зв'язатися з нами</h1>
            <div class="content_half float_l">
			    <h2> <font size="6" color="red" face="gabriola">Зверніть увагу</font></h2>
                <h4>Графік опрацювання електронних звернень:</h4>
                   <h5>Пн.-Пт. з 08:30 до 21:00</h5>
                   <h5>Сб. з 09:00 до 17:00</h5>
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        <label for="author">Ім'я:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="phone">Телефон:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner h10"></div>
        
                        <label for="text">Повідомлення:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="відправити" />
                        
                    </form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h5>Головний офіс</h5>
			м. Черкаси, вул.Шевченко, 297 <br />
						
			Телефон: 010-010-6600<br />
			Email: <a href="mailto:info@yourcompany.com">info@noutpark.com</a><br/>
			
            <div class="cleaner h40"></div>
			
            <h5>Сервісний відділ</h5>
			м. Черкаси, вул. Хрещатик, 83<br />
			
			Телефон: 030-030-0220<br />
			Email: <a href="mailto:contact@yourcompany.com">contact@noutpark.com</a><br/>
			<br />
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