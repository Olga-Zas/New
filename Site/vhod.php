<?php
	include_once("perevirka_vhodu.php");
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
		   <h1>Вхід</h1>
    <form method="POST" action="vhod.php">
    <font color=black><table width="100%" cellspacing="0" cellpadding="5">
     <td align="right">Логін</td>
     <td><input type="text" name="e_login" placeholder="Введіть логін" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Пароль</td>
     <td><input type="password" name="e_password" maxlength="50" size="20"></td>
    </tr>
    </table>
	</font>
    <div>
    <input type="submit" name="submit" value="Вхід" />
    </div>
  </form>
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