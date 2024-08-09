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
  case  3;
  case  4;
  case  5;
    $judge = '春'; 
    break; 
  case  6;
  case  7;
  case  8;
    $judge = '夏'; 
    break; 
  case  9;
  case  10;
  case  11;
    $judge = '秋'; 
    break; 
  case  12;
  case  1;
  case  2;
    $judge = '冬'; 
    break; 
    // default,$judge = $a.'の季節です。';
}
?>

<p>「<?= $a;?>月は<?= $judge;?>の季節です。」</p>