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
    if ($a >= 3 and $a <= 5) {
      $season = "春";
  } elseif ($a >= 6 and $a <= 8) {
      $season = "夏";
  } elseif ($a >= 9 and $a <= 11) {
      $season = "秋";
  } else {
      $season = "冬";
  }
?>

<p>「<?= $a;?>月は<?= $season;?>の季節です。」</p>