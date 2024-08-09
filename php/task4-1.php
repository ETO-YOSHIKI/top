<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $a =mt_rand(1,100);
    if($a >=81){
      $judge ="大吉";  
    } elseif ($a >= 51){
      $judge ="中吉";
    } elseif ($a >= 21){
      $judge ="吉";
    } elseif ($a >= 6){
      $judge ="凶";
    } else {
      $judge ="大凶";
    }
  ?>

<p>今日の運勢は<?= $judge;?>です。</p>