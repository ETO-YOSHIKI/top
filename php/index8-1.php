<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
<h1>確認</h1>
<?php
session_start();
echo "セッションID：" . session_id() . "<br>";
echo "状況：{$_SESSION["data"]}<br><br>";
?>
<a href="index8-0.php">元のページへ</a>
</body>

</html>