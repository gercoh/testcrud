<?php

$id = $_REQUEST['id'];
$newfile = 'allinfo.txt';
$data = file_get_contents($newfile);
$allinfo = json_decode($data,true);
$update_info = $allinfo[$id];

if(isset($_POST['save']))
{
	$update_info['name'] = $_POST['name'];
	$update_info['disk'] = $_POST['disk'];
	$update_info['date']= $_POST['date'];
	$allinfo[$id] = $update_info;
	$data = json_encode($allinfo);
     // $data = serialize($data);
    file_put_contents($newfile, $data);
	header("Location: /",true, 301);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Редактирование</title>
</head>
<body>
<form method="post">
<table>
	<tr>
		<td>Название:</td>
		<td><input type="text" name="name" value="<?php echo $update_info['name']; ?>" size='15' /></td>
		<td><input type="text" name="disk" value="<?php echo $update_info['disk']; ?>" size='15' /></td>
		<td><input type="text" name="date" value="<?php echo $update_info['date']; ?>" size='15' /></td>
		<td><input type="submit" name="save" value="Сохранить" /></td>
	</tr>
</table>
</body>
</html>