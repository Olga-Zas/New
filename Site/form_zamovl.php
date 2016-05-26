<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head></head>
<body>
<div id="content" class="float_r">
			<p style="line-height:200%"><FONT size="4" color=black face="times new roman">Колір:</p>
			<ul>
				<li>
					<input type="radio" name="color" value="black" id="laptop-color-black" checked="checked" />
					<label for="laptop-color-black">Чорний</label>
				</li>
				<li>
					<input type="radio" name="color" value="red" id="laptop-color-red" />
					<label for="laptop-color-red">Червоний</label>
				</li>
				<li>
					<input type="radio" name="color" value="blue" id="laptop-color-blue" />
					<label for="laptop-color-blue">Синій</label>
				</li>
				<li>
					<input type="radio" name="color" value="gray" id="laptop-color-gray" />
					<label for="laptop-color-gray">Сірий</label>
				</li>
				</ul></font>
		<div>
			<label for="laptop-chohol"><FONT size="4" color=black face="times new roman">Чохол</label></font>
			<input type="checkbox" id="laptop-chohol">
		</div>
	<label for="laptop-number"><FONT size="4" color=black face="times new roman">Кількість</label></font>
	<input type="number" value="1" min="1" max="100" id="laptop-number"></font> <br>
	<div>
		<p style="line-height:500%"><FONT size="6" color=Purple face="gabriola">Персональна інформація про покупця</p></Font>
		<FONT size="3" color=Purple face="times new roman"><table width="50%" cellspacing="0" cellpadding="5">
			<tr>
				<td for="user-last-name">Прізвище</td>
				<td> <input type="text" id="user-last-name"></td>
			</tr>
			<tr>
				<td for="user-first-name">Імя</td>
				<td><input type="text" id="user-first-name"></td>
			</tr>
			<tr>
				<td for="user-father-name">По-батькові</td>
				<td><input type="text" id="user-father-name"></td>
			</tr>
			<tr>
				<td for="user-address">Адреса доставки</td>
				<td><input type="text" id="user-address"></td>
			</tr>
			<tr>
				<td for="delivery-type">Тип доставки</td>
				<td>
					<select id="delivery-type">
						<option value="self" selected="selected">Самовивіз</option>
						<option value="novaposhta">Нова пошта</option>
						<option value="ukrposhta">Укрпошта</option>
					</select>
				</td>
			</tr>
		</table>
		</div></FONT>
					<font size="5" color="#B22222" face="gabriola"><div id="result"></div>
					<button onclick="btnClick();">Замовити</button></font>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    <font size="3" ><p><a href="products.php">Продовжити покупки</a></p></font>
                    	
                    </div>
			</div>
</body>
</html>