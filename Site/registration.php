<?php
	header('Content-Type: text/html; charset=utf-8'); 
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
<?php
	$connect = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('auto');
	
	if (isset ($_POST['submit']))
	{
		$name = mysql_escape_string($_POST['name']);
		$surname = mysql_escape_string($_POST['surname']);
		$middlename = mysql_escape_string($_POST['middlename']);
		$login = mysql_escape_string($_POST['login']);
		$country = mysql_escape_string($_POST['country']);
		$city = mysql_escape_string($_POST['city']);
		$email = mysql_escape_string($_POST['email']);
		$phone = mysql_escape_string($_POST['phone']);
		$password = mysql_escape_string($_POST['password']);
		$r_password = mysql_escape_string($_POST['r_password']);
		if ($password == $r_password)
		{
			$password = md5($password);
			$query = mysql_query("INSERT INTO users VALUES ('','$name','$surname','$middlename','$login','$country','$city','$email','$phone','$password')");
			echo '<center><label><FONT size="4" color=black face="times new roman">Вітаємо, Ви успішно зареєстровані!</label></font><center>';
		}
		else
		{
			echo '<center><label><FONT size="4" color=black face="times new roman">Паролі не співпадають!</label></font><center>';
		}
	}
	else 
	{
		echo'<div id="content" class="float_r">
	    <h1>Реєстрація</h1>
		<form method="POST" action="registration.php">
		<font color=black><table width="50%" cellspacing="0" cellpadding="5">
		<tr> 
		<td align="right" width="100">Ім*я</td>
		<td><input type="text" name="name" placeholder="Введіть ім*я" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Прізвище</td>
		<td><input type="text" name="surname" placeholder="Введіть прізвище" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">По-батькові</td>
		<td><input type="text" name="middlename" placeholder="Введіть по-батькові" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Логін</td>
		<td><input type="text" name="login" placeholder="Введіть логін" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Країна</td>
		<td><select name="country" required>
		<option disabled>Оберіть країну</option>
		<option value="Ukraine">Україна</option>
		<option value="USA">США</option>
		<option value="GB">Великобританія</option>
		<option value="Russia">Росія</option>
		</td>
		</tr>
		<tr> 
		<td align="right" width="100">Місто</td>
		<td><input type="text" name="city" placeholder="Введіть місто" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">E-mail</td>
		<td><input type="text" name="email" placeholder="Введіть email" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Телефон</td>
		<td><input type="text" name="phone" placeholder="зразок: 0972535451" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Пароль</td>
		<td><input type="password" name="password" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Повторіть пароль</td>
		<td><input type="password" name="r_password" maxlength="50" size="20" required></td>
		</tr>
		</table>
		<div>
			<label for="message">Отримувати повідомлення з сайту про нові акції:</label>
			<input type="checkbox" name="lan1" value="yes"
			                                   checked>Так
			<input type="checkbox" name="lan2" value="no"
			                                   checked>Ні
		</div>		
		<div>
			<label for="delivery">Пріоритетний тип доставки:</label>
			<input type="radio" name="mail" value="courier service"
			                                   >Кур*єрська служба 
			<input type="radio" name="mail" value="postage"
			                                   >Поштова пересилка
		</div></font>
		<div>
			<input type="submit" name="submit" value="Зареєструватися" />
		</div>
		</form>
		</div>';
	}
?>
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>