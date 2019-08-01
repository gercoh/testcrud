<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Категории</title>
</head>
<body>
	<br>
	<a href="index.php">Страница администратора</a>
<br/>
 <table border="1">
	<?php
$newfile = 'allinfo.txt';
$data = file_get_contents($newfile);
$allinfo = json_decode($data,true);
foreach ($allinfo as $key => $value) {
	$time=strtotime($value['date']);
	$month=date("F",$time);
	if($month === date("F")){
		echo "\n<tr>";
		echo"<td>" .$value['name']."</td>";
		echo"<td>" .$value['disk']."</td>";
		echo"<td>" .$value['date']."</td>";
		echo "</tr>";
				}
			}
	?>
</table> 
</body>
</html>

