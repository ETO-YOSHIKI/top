<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
  <?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
// foreach ($numbers as $number) {
    // $sum += $number;
// }
function jun($a){
$sum1 = 0;
  foreach ($a as $b) {
    $sum1 =$sum1+ $b;
  }
  return $sum1;
}
$sum=jun($numbers);
// echo '合計: ' . $sum;
echo '合計: ' . $sum;
  ?>
</body>