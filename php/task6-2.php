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
  return max($a, $b);
}

$a = 9;
$b = 21;

$maxValue = max_number($a, $b);

?>
<p>$a = 9</p>
<p>$b = 21</p>
<p>$aと$bの最大値は<?= $maxValue;?>です。</p>


</body>

</html>