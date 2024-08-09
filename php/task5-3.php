<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php

$a =[
  ["sho" => "鉛筆", "kakaku" => 100, "zei" => 110],
  ["sho" => "消しゴム", "kakaku" => 200, "zei" => 220],
  ["sho" => "定規", "kakaku" => 300, "zei" => 330],
];

echo "<table border='1'>";
echo "<tr><th>商品</th><th>価格</th><th>税込価格</th></tr>";
foreach ($a as $a) {
  echo"<tr>";
  echo"<td>" . $a['sho'] . "</td>";
  echo"<td>" . $a['kakaku'] . "円</td>";
  echo"<td>" . $a['zei'] . "円</td>";
  echo"</tr>";
}
echo"</table>";
?>

</body>

</html>