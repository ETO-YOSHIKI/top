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
if($a >=1){
  $judge ="春";  
} elseif ($a >= 5){
  $judge =" 夏";
} elseif ($a >= 8){
  $judge =" 秋";
} elseif ($a >= 10){
  $judge ="冬";
}
?>

<p>「<?= $a;?>月は<?= $judge;?>の季節です。」</p>