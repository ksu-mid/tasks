<?php
$str = '145679';
$arr = str_split($str);
$sum1 = $arr[0] + $arr[1] + $arr[2];
$sum2 = $arr[3] + $arr[4] + $arr[5];
if ($sum1 == $sum2){
  echo "Да";
} else {
  echo "Нет";
}
