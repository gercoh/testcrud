<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Категории</title>
</head>
<body>
	<br>
	<a href="monthinfo.php">Вебинары текущего месяца</a>
<form method="post" action="add.php">
<table>
	<tr>
		<td>Название:</td>
		<td><input type="text" name="name" placeholder="Название"  size='30' required="" /></td>
		<td><input type="text" name="disk" placeholder="Описание" size='60' required="" /></td>
		<td><input type="text" name="date" placeholder="Дата" size='30'  required="" /></td>
		<td><input type="submit" name="submit" value="Добавить" /></td>
	</tr>
</table>
</form>
<br/>
 <table border="1">
	<?php
	 if (file_exists($newfile)) {
      $data = file_get_contents($newfile);
      $allinfo = json_decode($data);
      foreach ($allinfo as $key => $value) {
		echo "\n<tr>";
		echo"<td>" .$value->name."</td>";
		echo"<td>" .$value->disk."</td>";
		echo"<td>" .$value->date."</td>";
		echo"<td> <a href ='edit.php?id=$key'>Редактировать</a>";
		echo"<td> <a href ='delete.php?id=$key'>Удалить</a>";
		echo "</tr>";
      }
  }
	?>
	<?php
	echo $_SESSION['USER_LANGUAGE'].'<br>';
	echo L1.'<br>'.L2; ?>
</table> 
<a href="/?lang=ru" name="ru">РУСО</a>
<a href="/?lang=en" name="en">Англ</a>
</body>
</html>