<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php


function max_number($a, $b) {
  if($a > $b){
    return $a;  
  
} else {
    return $b;
}
}
$a = 9;
$b = 21;

$maxValue = max_number($a, $b);
// echo "最大値は: " . $maxValue;
?>
<p>$a = <?= $a;?></p>
<p>$b = <?= $b;?></p>
<p>$aと$bのうち最大値は<?= $maxValue;?>です。</p>


</body>

</html>