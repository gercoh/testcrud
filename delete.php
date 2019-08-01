<?php
$id =$_REQUEST['id'];
$newfile = 'allinfo.txt';
$data = file_get_contents($newfile);
$allinfo = json_decode($data,true);

unset($allinfo[$id]);

$data = json_encode($allinfo);
// $data = serialize($data);
file_put_contents($newfile, $data);
header("Location: /",true, 301);
?>