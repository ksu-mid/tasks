<?php
//while
$num = 1000;
$i = 0;
while ($num >= 50){
  $num /= 2;
  $i++;
}
echo $num."\n";
echo $i;
//for
$num = 1000;
for($i = 0;$num >= 50; $i++){
  $num /= 2;
}
echo $num."\n";
echo $i;