<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
  <?php
   $list = [11, 22, 33, 44, 55, 66];
   $li = [00,11, 22, 33, 44, 55, 66];
   for($i =0; $i< count($list); $i++) {
      echo $list[$i].'<br>';
   }
   function jundas($a){
    for($i =0; $i< count($a); $i++) {
      echo $a[$i].'<br>';
   }
   
  }
  jundas($list);
  jundas($li);
  
  ?>
</body>

</html>