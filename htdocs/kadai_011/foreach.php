<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編_kadai7</title>
</head>
<body>

<?php
 $details =["名前"=>"玉ねぎ","値段"=>"200","産地"=>"北海道"];
 foreach($details as $keys => $value ){
  echo "{$keys}:{$value}<br>";
 }

 
 ?>
  
</body>
</html>