<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  define('TITLE','現在、消費税は10％です。');
  $b ='鉛筆が100円で税込110円です。'; 
  $c ='消しゴムが200円で税込220円です';
?>
  <p><?= TITLE;?></p>
  <p><?php echo TITLE;?></p>
  <p><?= $b;?></p>
  <p><?= $c;?></p>
  
</body>

</html>