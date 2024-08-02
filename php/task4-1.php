<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
$a =mt_rand(0,100);
if($a >=80){
  $judge ="$a 大吉";  
} elseif ($a >= 80){
  $judge ="$a 中吉";
} elseif ($a >= 50){
  $judge ="$a 吉";
} elseif ($a >= 20){
  $judge ="$a 凶";
} elseif ($a >= 5){
  $judge ="$a 大凶";
}
?>

<p>今日の運勢は<?= $judge;?></p>