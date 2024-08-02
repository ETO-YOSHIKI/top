<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
$a =mt_rand(1, 12);
switch($a) {  
  case $a => 3;
    $judge = '春'; 
    break; 
  case $a => 5;
    $judge = '夏'; 
    break; 
  case $a => 6;
    $judge = '秋'; 
    break; 
  case $a => 8;
    $judge = '冬'; 
    break; 
    // default,$judge = $a.'の季節です。';
}
?>

<p>「<?= $a;?>月は<?= $judge;?>の季節です。」</p>