<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
<h1>セッションの生成</h1>
<?php
session_start();
$_SESSION["data"] = "TEST中";
echo "セッションID：" . session_id() . "<br>";
echo "状況：{$_SESSION["data"]}<br><br>";
?>
<a href="index8-1.php">別のページへ</a>
</body>

</html>