<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php


function showString($num, $str) {
    for ($i = 0; $i < $num; $i++) {
        echo $str . "<br>\n";
    }
}

showString(3, "気合いだ!");

?>

</body>

</html>