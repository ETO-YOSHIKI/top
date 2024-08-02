<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
$a = array('商品','価格','税込価格');
$pen = array('sho' =>'鉛筆','kakaku' =>100,'zei' =>110);
$kesi = array('sho' =>'消しゴム','kakaku' =>200,'zei' =>220);
$jo = array('sho' =>'定規','kakaku' =>300,'zei' =>330);

?>

<table>
  <tr>
    <th><?= $a[0];?></th>
    <th><?= $a[1];?></th>
    <th><?= $a[2];?></th>
  </tr>
  <tr>
    <td><?= $pen[sho];?></td>
    <td><?= $pen[kakaku];?>円</td>
    <td><?= $pen[zei];?>円</td>
  </tr>
  <tr>
    <td><?= $kesi[sho];?></td>
    <td><?= $kesi[kakaku];?>円</td>
    <td><?= $kesi[zei];?>円</td>
  </tr>
  <tr>
    <td><?= $jo[sho];?></td>
    <td><?= $jo[kakaku];?>円</td>
    <td><?= $jo[zei];?>円</td>
  </tr>
</table>


 
 
  
</body>

</html>