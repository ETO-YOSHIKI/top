<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
// $a ='現在、消費税は10%です。'; 
define('TAX',10);
// $b ='が200円で税込220円です';
$pen ='鉛筆';
$penp =100;
// $c ='が200円で税込220円です';
$kesi ='消しゴム';
$kesip =200;


?>
  <p>現在、消費税は<?= TAX;?>％です。</p>
  <p><?= $pen;?>が<?= $penp;?>円で税込110円です。</p>
  <p><?= $kesi;?>が<?= $kesip;?>円で税込220円です。</p>
  
</body>

</html>