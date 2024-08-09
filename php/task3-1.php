<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
// $a = array('商品','価格','税込価格','１Dzの価格');
$pen = array('sho' =>'鉛筆','kakaku' =>100);
$kesi = array('sho' =>'消しゴム','kakaku' =>200);
define('TAX',1.1);
// $d =12;
// $zei =1.1;
?>

<table>
  <tr>
    <th>商品</th>
    <th>価格</th>
    <th>税込価格</th>
    <th>1Dzの価格</th>
  </tr>
  <tr>
    <td><?= $pen[sho];?></td>
    <td><?= $pen[kakaku];?>円</td>
    <td><?= $pen[kakaku]*TAX;?>円</td>
    <td><?= $pen[kakaku]*12*TAX;?>円</td>
  </tr>
  <tr>
    <td><?= $kesi[sho];?></td>
    <td><?= $kesi[kakaku];?>円</td>
    <td><?= $kesi[kakaku]*TAX;?>円</td>
    <td><?= $kesi[kakaku]*12*TAX;?>円</td>
  </tr>
</table>
<br>消費税は10%です。


 
 
  
</body>

</html>