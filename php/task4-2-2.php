<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $a =mt_rand(1,12);
    if($a and 3 and 4 and 5){
      $judge ="春";  
    } elseif ($a and 6 and 7 and 8){
      $judge =" 夏";
    } elseif ($a and 9 and 10 and 11){
      $judge =" 秋";
    } elseif ($a and 12 and 1 and 2){
      $judge ="冬";
    }
?>

<p>「<?= $a;?>月は<?= $judge;?>の季節です。」</p>