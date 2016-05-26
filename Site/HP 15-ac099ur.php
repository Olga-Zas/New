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
		<h1 align="center">Замовлення</h1>
		<h2 align="center">HP 15-ac099ur (P3S80EA) White-Silver Суперціна!!!</h2>
			<div class="content_half float_l">
				<a  rel="lightbox[portfolio]" href="images/product1/036.jpg"><img src="images/product1/036.jpg" alt="image" /></a>
            </div>
        <?php
		include_once("form_zamovl.php");
		?>
	<script type="text/javascript">
		function btnClick(){
			//отримуємо всі введені значення (без перевірки на їх заповнення)
			color = document.getElementById('laptop-color-black').checked ? 'black' : (document.getElementById('laptop-color-red').checked ? 'red' : 'blue')
			chohol = document.getElementById('laptop-chohol').checked
			number = document.getElementById('laptop-number').value
			first_name = document.getElementById('user-first-name').value
			last_name = document.getElementById('user-last-name').value
			father_name = document.getElementById('user-father-name').value
			user_address = document.getElementById('user-address').value
			delivery_type = document.getElementById('delivery-type').value
			//початкова повна сума
			total = 8799
			// в залежності від кольору, націнка на товар буває різна
			switch(color){
				case 'black': total += 0; break;
				case 'red': total += 150; break;
				case 'blue': total += 200; break;
				case 'gray': total += 250; break;
			}
			// якщо треба чохол - додаємо до вартості
			if(chohol){
				total += 250
			}
			// домножаємо на кількість
			total = total * number
			//та додаємо вартість пересилки в залежності від обраного способу
			switch(delivery_type){
				case 'self': total += 0; break;
				case 'novaposhta': total += 50; break;
				case 'ukrposhta': total += 35; break;
			}
			// формуємо повідомлення 
			msg = 'Шановний, ' + first_name + ' ' + father_name + '!<br>Повна вартість Вашого замовлення складає ' + total + ' грн.<br>Дякуємо, що Ви з нами!'
			// та виводимо його в innerHTML (щоб тег BR інтерпретувався як тег, а не як частина тексту)
			document.getElementById('result').innerHTML = msg
		}
	</script>
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>