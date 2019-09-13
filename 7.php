<?php
$time = date("G");  
$date = date('d F');

if($time <= 20 && date("l") != "Friday" && date("l") != "Saturday"){
  echo date('d F', strtotime($date. ' + 1 days'));
} elseif ($time >= 20 && date("l") != "Friday"){
  echo date('d F', strtotime($date. ' + 2 days'));
} else {
  echo date('d F', strtotime($date. ' + 3 days'));
}

