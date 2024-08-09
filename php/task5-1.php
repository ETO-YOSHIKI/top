<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
echo "<h1>九九の計算</h1>";
  for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
      echo "$i × $j = " . ($i * $j) . "";
    }
    echo "<br><br>";

  }
  ?>

