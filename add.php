<?php
// echo '<pre>';
if(isset($_POST['submit'])){
    if(isset($_POST['name'])&&(isset($_POST['disk'])&&(isset($_POST['date'])))){
      $newfile = 'allinfo.txt';
    if (file_exists($newfile)) {
      $data = file_get_contents($newfile);
      $allinfo = json_decode($data,true);
      $newinfo['name']=$_POST['name'];
      $newinfo['disk']=$_POST['disk'];
      $newinfo['date']=$_POST['date'];
      $allinfo[] = $newinfo;
      $data = json_encode($allinfo);
      // $data = serialize($data);
     file_put_contents($newfile, $data);
} else {
    fopen($newfile, 'wb');
      $newinfo['name']=$_POST['name'];
      $newinfo['disk']=$_POST['disk'];
      $newinfo['date']=$_POST['date'];
      $allinfo[] = $newinfo;
      $data = json_encode($allinfo);
      // $data = serialize($data);
     file_put_contents($newfile, $data);
}
 }
}
header("Location: /",true, 301);
?>