<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
  <?php
  $names = ['太郎', '次郎', '三郎', '四郎', '五郎'];
  for ($i = 0; $i < count($names); $i++) {
      echo $names[$i] . '<br>';
  }
  ?>
</body>

</html>