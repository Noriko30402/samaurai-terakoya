<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <?php
  $user_name = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
  print_r($user_name);
  echo '<br>';
  $user_name[1] ='侍花子';
  $user_name[] = '侍吾郎';
  print_r($user_name);

  echo '<br>';
  echo $user_name[2];
  ?>
</body>
</html>